<?php

/**
 * send_booking.php
 * Urban Garden & Pier24 — Booking Form Mailer
 * ─────────────────────────────────────────────────────────────────
 * Handles POST from contact.js and sends:
 *   1. Confirmation/invoice email → to the customer
 *   2. Booking notification       → to all admin recipients
 *
 * Requires PHPMailer.
 * Download composer manually from https://github.com/PHPMailer/PHPMailer
 * and place in a /PHPMailer/ folder next to this file.
 * ─────────────────────────────────────────────────────────────────
 */

// ── Autoload PHPMailer ──
// Composer (recommended):
// require 'vendor/autoload.php';

// Manual (fallback — uncomment if not using Composer):

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// ── Only accept POST ──
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  http_response_code(405);
  echo json_encode(['success' => false, 'message' => 'Method not allowed']);
  exit;
}

// ═══════════════════════════════════════════════════════════════════
//  CONFIGURATION — update these values
// ═══════════════════════════════════════════════════════════════════

// SMTP credentials (use Gmail App Password — NOT your login password)
// Gmail setup: Google Account → Security → 2-Step Verification ON
//              → App Passwords → generate one for "Mail"
define('SMTP_HOST',     'smtp.gmail.com');
define('SMTP_PORT',     587);
// define('SMTP_USERNAME', '26urbangarden@gmail.com');   // your Gmail address
define('SMTP_USERNAME', 'ogah0869@gmail.com');   // your Gmail address
define('SMTP_PASSWORD', 'yrbdwebmxcsiuppn');    // 16-char app password

// From address shown to recipients
// define('FROM_EMAIL', '26urbangarden@gmail.com'); urban garden mail
define('FROM_EMAIL', 'ogah0869@gmail.com');
define('FROM_NAME',  'Urban Garden & Pier24');

// ── ADMIN RECIPIENTS ──
// Add as many admins as needed.
// Format: ['email' => '...', 'name' => '...', 'type' => 'to|cc|bcc']
// 'to'  → visible in the To: field
// 'cc'  → visible carbon copy
// 'bcc' → silent copy (recommended for staff privacy)

$adminRecipients = [
  ['email' => 'ogahemmanuel048@gmail.com',  'name' => 'Urban Garden Admin',    'type' => 'to'],
  // Add more recipients below:
  ['email' => 'emmyyung245@gmail.com',  'name' => 'Manager',               'type' => 'bcc'],
  ['email' => 'osasmyg@gmail.com',  'name' => 'Editor',               'type' => 'bcc'],
  // ['email' => 'events@urbangarden.ng',   'name' => 'Events Team',            'type' => 'bcc'],
  // ['email' => 'owner@urbangarden.ng',    'name' => 'Owner',                  'type' => 'bcc'],
];

// ═══════════════════════════════════════════════════════════════════
//  SANITISE & COLLECT FORM DATA
// ═══════════════════════════════════════════════════════════════════
function clean($val)
{
  return htmlspecialchars(strip_tags(trim($val ?? '')));
}

$firstName  = clean($_POST['firstName']  ?? '');
$lastName   = clean($_POST['lastName']   ?? '');
$fullName   = $firstName . ' ' . $lastName;
$email      = filter_var(trim($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL);
$phone      = clean($_POST['phone']      ?? 'Not provided');
$eventType  = clean($_POST['eventType']  ?? '');
$eventDate  = clean($_POST['eventDate']  ?? '');
$guests     = (int) ($_POST['guests']    ?? 0);
$venue      = clean($_POST['eventVenue']      ?? '');
// $extras     = clean($_POST['extras']     ?? 'None selected');
$message    = clean($_POST['message']    ?? 'No additional message');
$source     = clean($_POST['source']     ?? 'Not specified');
$dateStatus = 'pending'; // always force server-side — never trust client
$enquiryRef = clean($_POST['enquiryRef'] ?? 'UGP-' . strtoupper(substr(uniqid(), -8)));
$submittedAt = date('l, j F Y \a\t H:i');

// Validate required fields server-side
if (!$firstName || !$lastName || !$email || !$eventType || !$eventDate || !$venue) {
  echo json_encode(['success' => false, 'message' => 'Required fields missing']);
  exit;
}

// Format event date for display
$dateFormatted = '';
try {
  $dateObj = new DateTime($eventDate);
  $dateFormatted = $dateObj->format('l, j F Y');
} catch (Exception $e) {
  $dateFormatted = $eventDate;
}

// ═══════════════════════════════════════════════════════════════════
//  EMAIL HELPER — creates a configured PHPMailer instance
// ═══════════════════════════════════════════════════════════════════
function createMailer(): PHPMailer
{
  $mail = new PHPMailer(true);
  $mail->isSMTP();
  $mail->Host       = SMTP_HOST;
  $mail->SMTPAuth   = true;
  $mail->Username   = SMTP_USERNAME;
  $mail->Password   = SMTP_PASSWORD;
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
  $mail->Port       = SMTP_PORT;
  $mail->CharSet    = 'UTF-8';
  $mail->setFrom(FROM_EMAIL, FROM_NAME);
  return $mail;
}



// ═══════════════════════════════════════════════════════════════════
//  DESIGN TOKENS
// ═══════════════════════════════════════════════════════════════════
//  --gold:         #c9a96e
//  --gold-light:   #e8d5b0
//  --gold-dark:    #9a7a4a
//  --cream:        #faf8f4
//  --charcoal:     #1c1c1a
//  --charcoal-mid: #3a3a38
//  --muted:        #8a8a85
//  --white:        #ffffff
//  --serif:        Georgia (Cormorant Garamond via @import, fallback Georgia)
//  --sans:         Arial (Jost not available in most email clients, Arial fallback)
//  Gold gradient:  linear-gradient(to right, #9a7a4a, #c9a96e, #9a7a4a)

// Reusable inline style fragments
$S_BODY    = 'margin:0;
              padding:0;
              background:#faf8f4;
              font-family:Arial,Helvetica,sans-serif;';

$S_WRAP    = 'background:#faf8f4;
              padding:48px 0;';

$S_CARD    = 'max-width:620px;
              width:100%;
              background:#ffffff;
              border:1px solid rgba(201,169,110,0.25);';

$S_HEADER  = 'background:#1c1c1a;
              padding:32px 40px 28px;
              text-align:center;';

$S_GOLD_HR = 'height:3px;
              background:linear-gradient(to right,#9a7a4a,#c9a96e,#9a7a4a);';

$S_FOOTER  = 'background:#1c1c1a;
              padding:28px 40px;
              text-align:center;';

// ═══════════════════════════════════════════════════════════════════
//  EMAIL 1 — CUSTOMER CONFIRMATION
// ═══════════════════════════════════════════════════════════════════

// Build summary rows
$summaryRows = [
  ['Guest Name',       $fullName],
  ['Email Address',    $email],
  ['Phone Number',     $phone],
  ['Event Type',       $eventType],
  ['Preferred Date',   $dateFormatted],
  ['Number of Guests', number_format($guests)],
  ['Venue',            $venue],
  ['How You Found Us', $source],
];

$summaryRowsHtml = '';
foreach ($summaryRows as $i => $row) {
  $bg  = $i % 2 === 0 ? '#faf8f4' : '#ffffff';
  $summaryRowsHtml .= "
              <tr>
                <td style=\"padding:11px 16px;background:{$bg};font-size:10px;letter-spacing:1.5px;text-transform:uppercase;color:#9a7a4a;width:40%;border-bottom:1px solid #f0ece4;font-family:Arial,sans-serif;\">{$row[0]}</td>

                <td style=\"padding:11px 16px;background:{$bg};font-size:13px;color:#1c1c1a;font-weight:400;border-bottom:1px solid #f0ece4;font-family:Arial,sans-serif;line-height:1.5;\">{$row[1]}</td>
              </tr>";
}

$messageRowHtml = '';
if ($message) {
  $messageRowHtml = "
        <tr>
          <td style=\"padding:0 40px 24px;\">
            <p style=\"margin:0 0 10px;font-size:10px;letter-spacing:2px;text-transform:uppercase;color:#9a7a4a;font-family:Arial,sans-serif;\">Your Message</p>
            <p style=\"margin:0;padding:16px 20px;background:#faf8f4;border-left:3px solid #c9a96e;font-size:13px;color:#3a3a38;font-family:Arial,sans-serif;line-height:1.85;\">{$message}</p>
          </td>
        </tr>";
}


$customerHtml = <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1"/>
<title>Booking Confirmation — Urban Garden & Pier24</title>
<!--[if mso]><noscript><xml><o:OfficeDocumentSettings><o:PixelsPerInch>96</o:PixelsPerInch></o:OfficeDocumentSettings></xml></noscript><![endif]-->
</head>
<body style="{$S_BODY}">

  <!-- Wrapper -->
  <table width="100%" cellpadding="0" cellspacing="0" border="0" style="{$S_WRAP}">
    <tr><td align="center" style="padding:0 16px;">
      <table cellpadding="0" cellspacing="0" border="0" style="{$S_CARD}">

        <!-- Header -->
        <tr>
          <td style="background:#1c1c1a;padding:11px 20px;text-align:center;">
            <p style="margin:0;font-size:11px;letter-spacing:2.5px;text-transform:uppercase;color:#e8d5b0;font-family:Arial,sans-serif;font-weight:400;">Urban Garden &amp; Pier24 · Lagos, Nigeria</p>
          </td>
        </tr>

        <!-- Gold rule -->
        <tr><td style="{$S_GOLD_HR}"></td></tr>

        <!-- ── HEADER / NAV BRAND (mirrors nav-logo) ── -->
        <tr>
          <td style="{$S_HEADER}">
            <p style="margin:0 0 6px;font-family:Georgia,'Times New Roman',serif;font-size:28px;font-weight:300;color:#faf8f4;letter-spacing:1px;line-height:1.2;">Urban Garden</p>
            <p style="margin:0 0 20px;font-size:10px;letter-spacing:4px;text-transform:uppercase;color:#c9a96e;font-family:Arial,sans-serif;font-weight:300;">&amp; Pier24</p>
            <p style="margin:0;font-size:9px;letter-spacing:3px;text-transform:uppercase;color:rgba(201,169,110,0.5);font-family:Arial,sans-serif;">Luxury Event Venues</p>
          </td>
        </tr>

        <!-- ── GOLD RULE ── -->
        <tr><td style="{$S_GOLD_HR}"></td></tr>

        <!-- Greeting -->
        <tr>
        <tr>
          <td style="padding:40px 40px 0;">
            <p style="margin:0 0 8px;font-size:9px;letter-spacing:4px;text-transform:uppercase;color:#c9a96e;font-family:Arial,sans-serif;">Enquiry Confirmation</p>
            <h1 style="margin:0 0 18px;font-family:Georgia,'Times New Roman',serif;font-size:32px;font-weight:300;color:#1c1c1a;line-height:1.1;">Dear <em style="font-style:italic;color:#9a7a4a;">{$firstName}</em>,</h1>
            <p style="margin:0;font-size:14px;color:#8a8a85;line-height:1.9;font-family:Arial,sans-serif;font-weight:400;">Thank you for reaching out to Urban Garden &amp; Pier24. We have received your event enquiry and are excited about the prospect of hosting your occasion. Our events team will be in touch within <strong style="color:#1c1c1a;font-weight:600;">24 hours</strong> to discuss your vision and confirm availability.</p>
          </td>
        </tr>

        <!-- Reference box -->
        <tr>
          <td style="padding:28px 40px;">
            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background:#faf8f4;border:1px solid #e8d5b0;border-left:4px solid #c9a96e;">
              <tr>
                <td style="padding:20px 24px;">
                  <p style="margin:0 0 6px;font-size:9px;letter-spacing:3px;text-transform:uppercase;color:#9a7a4a;font-family:Arial,sans-serif;">Enquiry Reference Number</p>
                  <p style="margin:0 0 6px;font-family:Georgia,'Times New Roman',serif;font-size:24px;font-weight:400;color:#1c1c1a;letter-spacing:2px;">{$enquiryRef}</p>
                  <p style="margin:0;font-size:11px;color:#8a8a85;font-family:Arial,sans-serif;">Submitted on {$submittedAt}</p>
                </td>
              </tr>
            </table>
          </td>
        </tr>

        <!-- ── DIVIDER (mirrors .gold-divider) ── -->
        <tr><td style="padding:0 40px;"><div style="height:1px;background:linear-gradient(to right,transparent,#c9a96e,transparent);"></div></td></tr>

        <!-- Booking summary -->
        <tr>
          <td style="padding:32px 40px 8px;">
            <p style="margin:0 0 18px;font-size:9px;letter-spacing:4px;text-transform:uppercase;color:#c9a96e;font-family:Arial,sans-serif;">Enquiry Summary</p>
            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border:1px solid #f0ece4;">
              {$summaryRowsHtml}
            </table>
          </td>
        </tr>

        <!-- ── CUSTOMER MESSAGE (if provided) ── -->
        {$messageRowHtml}

        <!-- ── DIVIDER ── -->
        <tr><td style="padding:8px 40px 0;"><div style="height:1px;background:linear-gradient(to right,transparent,#c9a96e,transparent);"></div></td></tr>

         <!-- ── STATUS NOTICE ── -->
        <tr>
          <td style="padding:28px 40px;">
            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background:#faf8f4;border:1px solid #e8d5b0;">
              <tr>
                <td style="padding:20px 24px;">
                  <p style="margin:0 0 8px;font-size:9px;letter-spacing:2.5px;text-transform:uppercase;color:#c9a96e;font-family:Arial,sans-serif;">⏳ &nbsp;Booking Status: Pending</p>
                  <p style="margin:0;font-size:13px;color:#8a8a85;line-height:1.85;font-family:Arial,sans-serif;">Your preferred date of <strong style="color:#1c1c1a;">{$dateFormatted}</strong> is currently pending review. No payment is required at this stage — our team will confirm availability and send you full details within 24 hours.</p>
                </td>
              </tr>
            </table>
          </td>
        </tr>

         <!-- ── NEXT STEPS ── -->
        <tr>
          <td style="padding:0 40px 32px;">
            <p style="margin:0 0 18px;font-size:9px;letter-spacing:4px;text-transform:uppercase;color:#c9a96e;font-family:Arial,sans-serif;">What Happens Next</p>
            <table width="100%" cellpadding="0" cellspacing="0" border="0">
              <tr>
                <td width="32" valign="top" style="padding-bottom:14px;">
                  <div style="width:24px;height:24px;background:#1c1c1a;text-align:center;line-height:24px;font-size:9px;font-weight:400;color:#c9a96e;font-family:Arial,sans-serif;">01</div>
                </td>
                <td valign="top" style="padding:0 0 14px 12px;">
                  <p style="margin:0;font-size:13px;color:#3a3a38;line-height:1.8;font-family:Arial,sans-serif;">Our events team reviews your enquiry and checks availability for <strong style="color:#1c1c1a;">{$dateFormatted}</strong>.</p>
                </td>
              </tr>
              <tr>
                <td width="32" valign="top" style="padding-bottom:14px;">
                  <div style="width:24px;height:24px;background:#1c1c1a;text-align:center;line-height:24px;font-size:9px;color:#c9a96e;font-family:Arial,sans-serif;">02</div>
                </td>
                <td valign="top" style="padding:0 0 14px 12px;">
                  <p style="margin:0;font-size:13px;color:#3a3a38;line-height:1.8;font-family:Arial,sans-serif;">We contact you within 24 hours at <strong style="color:#1c1c1a;">{$email}</strong> or <strong style="color:#1c1c1a;">{$phone}</strong> to confirm and discuss your event in detail.</p>
                </td>
              </tr>
              <tr>
                <td width="32" valign="top">
                  <div style="width:24px;height:24px;background:#1c1c1a;text-align:center;line-height:24px;font-size:9px;color:#c9a96e;font-family:Arial,sans-serif;">03</div>
                </td>
                <td valign="top" style="padding-left:12px;">
                  <p style="margin:0;font-size:13px;color:#3a3a38;line-height:1.8;font-family:Arial,sans-serif;">Once confirmed, a 75–80% deposit secures your date. Full payment details will be provided at confirmation.</p>
                </td>
              </tr>
            </table>
          </td>
        </tr>

         <!-- ── DIVIDER ── -->
        <tr><td style="padding:0 40px;"><div style="height:1px;background:linear-gradient(to right,transparent,#c9a96e,transparent);"></div></td></tr>

        <!-- ── CONTACT DETAILS (mirrors info-block in contact.php) ── -->
        <tr>
          <td style="padding:28px 40px 32px;">
            <p style="margin:0 0 16px;font-size:9px;letter-spacing:4px;text-transform:uppercase;color:#c9a96e;font-family:Arial,sans-serif;">Need to Reach Us Sooner?</p>
            <table cellpadding="0" cellspacing="0" border="0">
              <tr>
                <td style="padding:0 0 8px;">
                  <p style="margin:0;font-size:13px;color:#3a3a38;font-family:Arial,sans-serif;line-height:1.7;">
                    <span style="color:#c9a96e;font-size:12px;">📍</span>&nbsp; 24 Alexander Ave, Ikoyi, Lagos, Nigeria
                  </p>
                </td>
              </tr>
              <tr>
                <td style="padding:0 0 8px;">
                  <p style="margin:0;font-size:13px;color:#3a3a38;font-family:Arial,sans-serif;line-height:1.7;">
                    <span style="color:#c9a96e;font-size:12px;">📞</span>&nbsp; <a href="tel:+2349126334061" style="color:#9a7a4a;text-decoration:none;">+234 912 633 4061</a>
                  </p>
                </td>
              </tr>
              <tr>
                <td>
                  <p style="margin:0;font-size:13px;color:#3a3a38;font-family:Arial,sans-serif;line-height:1.7;">
                    <span style="color:#c9a96e;font-size:12px;">✉️</span>&nbsp; <a href="mailto:26urbangarden@gmail.com" style="color:#9a7a4a;text-decoration:none;">26urbangarden@gmail.com</a>
                  </p>
                </td>
              </tr>
            </table>
          </td>
        </tr>

        <!-- ── GOLD RULE ── -->
        <tr><td style="{$S_GOLD_HR}"></td></tr>
 
        <!-- ── FOOTER (mirrors site footer) ── -->
        <tr>
          <td style="{$S_FOOTER}">
            <p style="margin:0 0 4px;font-family:Georgia,'Times New Roman',serif;font-size:18px;font-weight:300;color:#faf8f4;letter-spacing:1px;">Urban Garden &amp; Pier24</p>
            <p style="margin:0 0 16px;font-size:9px;letter-spacing:4px;text-transform:uppercase;color:#c9a96e;font-family:Arial,sans-serif;font-weight:300;">Luxury Event Venues &nbsp;·&nbsp; Lagos, Nigeria</p>
            <div style="height:1px;background:rgba(201,169,110,0.15);margin:0 0 16px;"></div>
            <p style="margin:0;font-size:10px;color:rgba(201,169,110,0.35);font-family:Arial,sans-serif;line-height:1.7;">This is an automated confirmation email. Please do not reply directly.<br/>For enquiries contact us at <a href="mailto:26urbangarden@gmail.com" style="color:#9a7a4a;text-decoration:none;">26urbangarden@gmail.com</a></p>
          </td>
        </tr>

        <!-- ── GOLD RULE ── -->
        <tr><td style="{$S_GOLD_HR}"></td></tr>
 
        <!-- ── BOTTOM BAR (mirrors footer-bottom) ── -->
        <tr>
          <td style="background:#111110;padding:14px 40px;text-align:center;">
            <p style="margin:0;font-size:10px;color:rgba(201,169,110,0.3);font-family:Arial,sans-serif;">© Urban Garden &amp; Pier24 2024–2025. All Rights Reserved. &nbsp;·&nbsp; <a href="https://yungtechco.gt.tc/" target="_blank">YungTech Co. Designed </a></p>
          </td>
        </tr>
 
      </table>
    </td></tr>
  </table>
 
</body>
</html>
HTML;



// ═══════════════════════════════════════════════════════════════════
//  EMAIL 2 — ADMIN NOTIFICATION
// ═══════════════════════════════════════════════════════════════════

$adminRows = [
  ['Reference',      $enquiryRef],
  ['Submitted',      $submittedAt],
  ['Customer Name',  $fullName],
  ['Email',          $email],
  ['Phone',          $phone],
  ['Event Type',     $eventType],
  ['Preferred Date', $dateFormatted],
  ['Guests',         number_format($guests)],
  ['Venue',          $venue],
  ['Source',         $source],
  ['Date Status',    strtoupper($dateStatus)],
];

$adminRowsHtml = '';
foreach ($adminRows as $i => $row) {
  $bg    = $i % 2 === 0 ? '#faf8f4' : '#ffffff';
  $label = $row[0];
  $value = $row[1];
  // Highlight the status cell
  $valueStyle = ($label === 'Date Status')
    ? "font-size:11px;color:#c9a96e;letter-spacing:2px;font-weight:600;font-family:Arial,sans-serif;"
    : "font-size:13px;color:#1c1c1a;font-weight:400;font-family:Arial,sans-serif;line-height:1.5;";
  $adminRowsHtml .= "
              <tr>
                <td style=\"padding:10px 14px;background:{$bg};font-size:10px;letter-spacing:1.5px;text-transform:uppercase;color:#9a7a4a;width:35%;border-bottom:1px solid #f0ece4;font-family:Arial,sans-serif;\">{$label}</td>
                <td style=\"padding:10px 14px;background:{$bg};border-bottom:1px solid #f0ece4;{$valueStyle}\">{$value}</td>
              </tr>";
}

$adminMsgHtml = '';
if ($message) {
  $adminMsgHtml = "
        <tr>
          <td style=\"padding:0 40px 24px;\">
            <p style=\"margin:0 0 10px;font-size:9px;letter-spacing:3px;text-transform:uppercase;color:#c9a96e;font-family:Arial,sans-serif;\">Customer Message</p>
            <p style=\"margin:0;padding:16px 20px;background:#faf8f4;border-left:4px solid #c9a96e;font-size:13px;color:#3a3a38;font-family:Arial,sans-serif;line-height:1.85;\">{$message}</p>
          </td>
        </tr>";
}

$adminHtml = <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width,initial-scale=1"/>
  <title>New Booking — {$enquiryRef}</title>
</head>
<body style="{$S_BODY}">
 
  <table width="100%" cellpadding="0" cellspacing="0" border="0" style="{$S_WRAP}">
    <tr><td align="center" style="padding:0 16px;">
      <table cellpadding="0" cellspacing="0" border="0" style="{$S_CARD}">
 
        <!-- ── ANNOUNCEMENT BANNER ── -->
        <tr>
          <td style="background:#1c1c1a;padding:11px 20px;text-align:center;">
            <p style="margin:0;font-size:11px;letter-spacing:2.5px;text-transform:uppercase;color:#e8d5b0;font-family:Arial,sans-serif;">Urban Garden &amp; Pier24 · Admin Notification</p>
          </td>
        </tr>
        <tr><td style="{$S_GOLD_HR}"></td></tr>
 
        <!-- ── HEADER ── -->
        <tr>
          <td style="{$S_HEADER}">
            <p style="margin:0 0 6px;font-family:Georgia,'Times New Roman',serif;font-size:28px;font-weight:300;color:#faf8f4;letter-spacing:1px;">Urban Garden</p>
            <p style="margin:0 0 20px;font-size:10px;letter-spacing:4px;text-transform:uppercase;color:#c9a96e;font-family:Arial,sans-serif;font-weight:300;">&amp; Pier24</p>
            <table cellpadding="0" cellspacing="0" border="0" style="margin:0 auto;">
              <tr>
                <td style="background:rgba(201,169,110,0.12);border:1px solid rgba(201,169,110,0.3);padding:8px 20px;">
                  <p style="margin:0;font-size:10px;letter-spacing:2px;text-transform:uppercase;color:#c9a96e;font-family:Arial,sans-serif;">🔔 &nbsp;New Booking Enquiry</p>
                </td>
              </tr>
            </table>
          </td>
        </tr>
        <tr><td style="{$S_GOLD_HR}"></td></tr>
 
        <!-- ── ALERT BANNER ── -->
        <tr>
          <td style="padding:20px 40px;background:#faf8f4;border-bottom:1px solid #e8d5b0;">
            <p style="margin:0;font-size:13px;color:#8a8a85;font-family:Arial,sans-serif;line-height:1.7;">
              A new event enquiry was submitted via the website.&nbsp;
              Reference: <strong style="color:#1c1c1a;">{$enquiryRef}</strong>
              &nbsp;·&nbsp;
              <span style="color:#c9a96e;font-weight:600;letter-spacing:1px;">STATUS: PENDING</span>
            </p>
          </td>
        </tr>
 
        <!-- ── BOOKING DETAILS ── -->
        <tr>
          <td style="padding:28px 40px 8px;">
            <p style="margin:0 0 16px;font-size:9px;letter-spacing:4px;text-transform:uppercase;color:#c9a96e;font-family:Arial,sans-serif;">Booking Details</p>
            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border:1px solid #f0ece4;">
              {$adminRowsHtml}
            </table>
          </td>
        </tr>
 
        <!-- ── CUSTOMER MESSAGE ── -->
        {$adminMsgHtml}
 
        <!-- ── DIVIDER ── -->
        <tr><td style="padding:0 40px 8px;"><div style="height:1px;background:linear-gradient(to right,transparent,#c9a96e,transparent);"></div></td></tr>
 
        <!-- ── ACTION REQUIRED ── -->
        <tr>
          <td style="padding:20px 40px 32px;">
            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background:#faf8f4;border:1px solid #e8d5b0;border-left:4px solid #c9a96e;">
              <tr>
                <td style="padding:20px 24px;">
                  <p style="margin:0 0 8px;font-size:9px;letter-spacing:2.5px;text-transform:uppercase;color:#c9a96e;font-family:Arial,sans-serif;">⚡ &nbsp;Action Required</p>
                  <p style="margin:0;font-size:13px;color:#8a8a85;font-family:Arial,sans-serif;line-height:1.85;">
                    Reply to <a href="mailto:{$email}" style="color:#9a7a4a;text-decoration:none;font-weight:600;">{$email}</a> within 24 hours.<br/>
                    To approve this date, update the booking status to <strong style="color:#1c1c1a;">APPROVED</strong> in the admin panel — this will automatically lock the date in the booking calendar.
                  </p>
                </td>
              </tr>
            </table>
          </td>
        </tr>
 
        <!-- ── GOLD RULE ── -->
        <tr><td style="{$S_GOLD_HR}"></td></tr>
 
        <!-- ── FOOTER ── -->
        <tr>
          <td style="{$S_FOOTER}">
            <p style="margin:0 0 4px;font-family:Georgia,'Times New Roman',serif;font-size:18px;font-weight:300;color:#faf8f4;letter-spacing:1px;">Urban Garden &amp; Pier24</p>
            <p style="margin:0 0 16px;font-size:9px;letter-spacing:4px;text-transform:uppercase;color:#c9a96e;font-family:Arial,sans-serif;font-weight:300;">Luxury Event Venues &nbsp;·&nbsp; Lagos, Nigeria</p>
            <div style="height:1px;background:rgba(201,169,110,0.15);margin:0 0 16px;"></div>
            <p style="margin:0;font-size:10px;color:rgba(201,169,110,0.35);font-family:Arial,sans-serif;">Admin notification for ref: {$enquiryRef}</p>
          </td>
        </tr>
        <tr><td style="{$S_GOLD_HR}"></td></tr>
        <tr>
          <td style="background:#111110;padding:14px 40px;text-align:center;">
            <p style="margin:0;font-size:10px;color:rgba(201,169,110,0.3);font-family:Arial,sans-serif;">© Urban Garden &amp; Pier24 2024–2025. All Rights Reserved. &nbsp;·&nbsp; <a href="https://yungtechco.gt.tc/" target="_blank">YungTech Co. Designed</a></p>
          </td>
        </tr>
 
      </table>
    </td></tr>
  </table>
 
</body>
</html>
HTML;

// ═══════════════════════════════════════════════════════════════════
//  SEND EMAILS
// ═══════════════════════════════════════════════════════════════════
try {

  // ── Customer email ──
  $customerMail = createMailer();
  $customerMail->addAddress($email, $fullName);
  $customerMail->Subject = "Booking Confirmation — {$enquiryRef} | Urban Garden & Pier24";
  $customerMail->isHTML(true);
  $customerMail->Body    = $customerHtml;
  $customerMail->AltBody = "Dear {$firstName},\n\nThank you for your enquiry (Ref: {$enquiryRef}).\n\nEvent: {$eventType}\nDate: {$dateFormatted}\nGuests: {$guests}\nVenue: {$venue}\n\nOur team will contact you within 24 hours.\n\nUrban Garden & Pier24\n26urbangarden@gmail.com\n+234 912 633 4061\n24 Alexander Ave, Ikoyi, Lagos.";
  $customerMail->send();

  // ── Admin email ──
  $adminMail = createMailer();
  foreach ($adminRecipients as $admin) {
    match ($admin['type']) {
      'cc'    => $adminMail->addCC($admin['email'], $admin['name']),
      'bcc'   => $adminMail->addBCC($admin['email'], $admin['name']),
      default => $adminMail->addAddress($admin['email'], $admin['name']),
    };
  }
  $adminMail->addReplyTo($email, $fullName); // reply goes straight to customer
  $adminMail->Subject = "🔔 New Booking — {$enquiryRef} ({$eventType}, {$dateFormatted})";
  $adminMail->isHTML(true);
  $adminMail->Body    = $adminHtml;
  $adminMail->AltBody = "NEW BOOKING\nRef: {$enquiryRef}\nName: {$fullName}\nEmail: {$email}\nPhone: {$phone}\nEvent: {$eventType}\nDate: {$dateFormatted}\nGuests: {$guests}\nVenue: {$venue}\nMessage: {$message}";
  $adminMail->send();

  echo json_encode(['success' => true, 'ref' => $enquiryRef, 'message' => 'Emails sent']);
} catch (Exception $e) {
  error_log("send_booking.php error: " . $e->getMessage());
  http_response_code(500);
  echo json_encode(['success' => false, 'message' => 'Mail error: ' . $e->getMessage()]);
}

# Urban Garden & Pier24 — Luxury Event Venue Website

> A premium, multi-page event venue website for **Urban Garden & Pier24**, a Lagos-based luxury event company with two distinct spaces — **Pier24 (The Deck)**, a waterfront venue, and the **Outdoor Turf**. Designed and developed to match the aesthetic of world-class hospitality brands like Four Seasons.

---

## 🌐 Live Preview

> [www.pier24garden.gt.tc/](https://pier24garden.gt.tc) 

---

## 📸 Screenshots

<img width="1905" height="903" alt="image" src="https://github.com/user-attachments/assets/cb7872ee-2f46-4a44-9e00-716bc2ba233b" />
<img width="1896" height="903" alt="image" src="https://github.com/user-attachments/assets/7241f71e-da36-4c3f-950b-a46e0ec9080a" />
<img width="1904" height="912" alt="image" src="https://github.com/user-attachments/assets/6b4cf9c8-b694-48d5-8ece-196a7801e009" />
<img width="1905" height="909" alt="image" src="https://github.com/user-attachments/assets/6a7d34f9-dd2c-4197-88a5-fa538db40469" />
<img width="1902" height="903" alt="image" src="https://github.com/user-attachments/assets/2cad6151-d93a-4d8b-a47d-78ce3b2d4983" />
<img width="1902" height="903" alt="image" src="https://github.com/user-attachments/assets/8dae1add-e6ed-499d-a014-cb0a4612219c" />
<img width="1897" height="904" alt="image" src="https://github.com/user-attachments/assets/13c74afe-2a92-4c8f-9625-4cf89ff30b40" />
<img width="1897" height="793" alt="image" src="https://github.com/user-attachments/assets/5636ec61-7201-4a6a-9488-b72930c3804d" />







---

## 📁 Project Structure

```
urban-garden-pier24/
│
├── index.html / index.php          # Homepage
├── pier24deck.html                 # Pier24 — The Deck venue page
├── outdoorturf.html                # Outdoor Turf venue page
├── gallery.html                    # Photo gallery with lightbox
├── aboutus.html                    # About Us page
├── contact.php                     # Contact & booking form
│
├── send_booking.php                # PHPMailer email handler
├── get_booked_dates.php            # Returns approved dates (Flatpickr integration)
│
├── styles/
│   ├── index.css                   # Homepage styles
│   ├── contact.css                 # Contact page + Flatpickr theme
│   └── gallery.css                 # Gallery page styles
│
├── scripts/
│   ├── index.js                    # Homepage scripts (carousel, tabs, drawer)
│   ├── contact.js                  # Contact form logic + POST to send_booking.php
│   └── gallery.js                  # Lightbox, filter tabs, scroll reveal
│
├── images/                         # 📸 Image assets (see slot guide below)
│   ├── hero-bg.jpg
│   ├── deck-cinematic.jpg
│   ├── turf-cinematic.jpg
│   ├── story-poster.jpg
│   └── events/
│       ├── valentines.jpg
│       ├── birthday.jpg
│       ├── sip-and-paint.jpg
│       ├── corporate.jpg
│       ├── garden-party.jpg
│       └── cocktail.jpg
│
├── videos/                         # 📹 Video assets
│   ├── hero-video.mp4
│   └── story.mp4
│
└── vendor/                         # PHPMailer (installed via Composer)
```

---

## ✨ Features

### Frontend
- **Full-screen hero** — autoplay video (desktop) / image slideshow (mobile) with animated overlay
- **Sticky navigation** — scroll-triggered shadow, gold underline active state
- **Mobile hamburger drawer** — smooth slide-in with `visibility` + `transform` (no `display:none` flicker)
- **Venue discover tabs** — switchable Pier24 / Outdoor Turf panels with event-type filter dropdowns
- **Center-focus events carousel** — active card larger + elevated, dimmed flanking cards, infinite loop, `1/5` counter; viewport-relative sizing on mobile via `requestAnimationFrame` DOM measurement
- **Cinematic full-bleed sections** — parallax-style venue panels with CTA overlays
- **Brand story section** — split layout with video/image placeholder and play button
- **Flatpickr date picker** — gold-themed calendar, past dates blocked, admin-approved dates auto-locked
- **Guest stepper, extras checkboxes, venue selector tabs** — full booking form
- **Gallery lightbox** — keyboard navigable (← →  Esc), scroll reveal on image grid
- **FAQ accordion** — smooth max-height animation
- **Testimonials carousel** — auto-rotating with dot navigation
- **Scroll reveal animations** — `IntersectionObserver` on all major sections
- **Fully responsive** — tested on mobile (380px), tablet, and desktop

### Backend
- **PHPMailer SMTP** — Gmail App Password auth, `ENCRYPTION_STARTTLS`
- **Customer confirmation email** — branded HTML template matching site design tokens (charcoal/gold/cream), enquiry reference number (`UGP-YYMMDD-XXXX`), booking summary table, next steps, contact details
- **Multi-admin notification email** — same design system, full booking details, Reply-To set to customer email, action required block
- **Multi-recipient support** — `to` / `cc` / `bcc` per admin via configurable `$adminRecipients` array
- **Server-side sanitisation** — `htmlspecialchars`, `strip_tags`, `FILTER_VALIDATE_EMAIL`, forced `dateStatus = 'pending'`
- **Booked dates API** — `get_booked_dates.php` returns JSON array of admin-approved dates; Flatpickr disables them in the calendar with a red dot indicator

---

## 🎨 Design System

| Token | Value | Usage |
|---|---|---|
| `--gold` | `#C9A96E` | Accents, eyebrows, borders, CTAs |
| `--gold-light` | `#E8D5B0` | Hero text, announcement bar |
| `--gold-dark` | `#9A7A4A` | Links, hover states |
| `--cream` | `#FAF8F4` | Page background, light sections |
| `--charcoal` | `#1C1C1A` | Dark sections, nav, footer |
| `--charcoal-mid` | `#3A3A38` | Body text |
| `--muted` | `#8A8A85` | Descriptions, captions |
| `--serif` | `Cormorant Garamond` | Headlines, italic pull quotes |
| `--sans` | `Jost` | Navigation, body, labels |

**Gold gradient divider:**
```css
background: linear-gradient(to right, transparent, #C9A96E, transparent);
```

---

## 🚀 Getting Started

### Prerequisites
- PHP `>= 8.0`
- Composer
- A web server (Apache / Nginx) or local server (XAMPP / Laragon)
- Gmail account with 2-Step Verification enabled

### Installation

**1. Clone the repository**
```bash
git clone https://github.com/your-username/urban-garden-pier24.git
cd urban-garden-pier24
```

**2. Install PHPMailer**
```bash
composer require phpmailer/phpmailer
```

**3. Configure email credentials**

Open `send_booking.php` and update:
```php
define('SMTP_USERNAME', '26urbangarden@gmail.com');   // your Gmail
define('SMTP_PASSWORD', 'YOUR_GMAIL_APP_PASSWORD');    // 16-char app password
```

> **Getting a Gmail App Password:**
> Google Account → Security → 2-Step Verification → App Passwords → Generate

**4. Configure admin recipients**
```php
$adminRecipients = [
    ['email' => 'admin@yourdomain.com',   'name' => 'Main Admin',  'type' => 'to'],
    ['email' => 'manager@yourdomain.com', 'name' => 'Manager',     'type' => 'bcc'],
    ['email' => 'events@yourdomain.com',  'name' => 'Events Team', 'type' => 'bcc'],
];
```

**5. Add your assets**

Drop real photos and videos into `images/` and `videos/`. Every placeholder in the HTML and CSS is marked with a `📸` or `📹` comment — just replace the gradient with:
```css
background-image: url('../images/your-photo.jpg');
background-size: cover;
background-position: center;
```

**6. Set up the database** *(for booked date locking)*

```sql
CREATE TABLE bookings (
    id          INT AUTO_INCREMENT PRIMARY KEY,
    first_name  VARCHAR(100),
    last_name   VARCHAR(100),
    email       VARCHAR(255),
    phone       VARCHAR(50),
    event_type  VARCHAR(100),
    event_date  DATE NOT NULL,
    date_status ENUM('pending','approved','declined') DEFAULT 'pending',
    guests      INT,
    venue       VARCHAR(100),
    extras      TEXT,
    message     TEXT,
    budget      VARCHAR(100),
    source      VARCHAR(100),
    enquiry_ref VARCHAR(30),
    created_at  TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

Then update `get_booked_dates.php` with your database credentials:
```php
define('DB_HOST', 'localhost');
define('DB_NAME', 'your_database');
define('DB_USER', 'your_username');
define('DB_PASS', 'your_password');
```

---

## 📸 Image Slot Reference

| Slot | File | Recommended Size | Section |
|---|---|---|---|
| Hero background | `images/hero-bg.jpg` | 1920×1080px | Homepage hero |
| Hero video | `videos/hero-video.mp4` | 1080p, < 10MB | Homepage hero |
| Outdoor Turf cinematic | `images/turf-cinematic.jpg` | 1920×1080px | Homepage section |
| The Deck cinematic | `images/deck-cinematic.jpg` | 1920×1080px | Homepage section |
| Brand story | `images/story-poster.jpg` | 1000×800px | Homepage story |
| Valentine's event card | `images/events/valentines.jpg` | 800×600px | Carousel |
| Birthday event card | `images/events/birthday.jpg` | 800×600px | Carousel |
| Sip & Paint card | `images/events/sip-and-paint.jpg` | 800×600px | Carousel |
| Corporate card | `images/events/corporate.jpg` | 800×600px | Carousel |
| Garden Party card | `images/events/garden-party.jpg` | 800×600px | Carousel |
| Cocktail Night card | `images/events/cocktail.jpg` | 800×600px | Carousel |

---

## 📬 Email System

Two emails are sent on every successful booking submission:

### Customer Confirmation
- Branded HTML email matching the site's design system
- Unique enquiry reference (`UGP-YYMMDD-XXXX`)
- Full booking summary table
- Pending status notice with next steps
- Contact details and address

### Admin Notification
- Full booking details with alternating row design
- Customer message block (if provided)
- Action required box with direct Reply-To set to customer
- Date status highlighted in gold
- Sent to all configured admin recipients simultaneously

---

## 🗓️ Booking Date System

| Status | Behaviour |
|---|---|
| `pending` | Default on submission. Date remains selectable by others. |
| `approved` | Admin sets via admin panel. Date is locked in Flatpickr calendar — shown with red strikethrough dot, tooltip "Already booked". |
| `declined` | Date remains available for rebooking. |

---

## 📄 Pages Overview

| Page | File | Description |
|---|---|---|
| Homepage | `index.html` | Hero, venue tabs, carousel, brand story |
| The Deck | `pier24deck.html` | Waterfront venue — capacity, events, amenities, testimonials |
| Outdoor Turf | `outdoorturf.html` | Open-air venue — capacity, events, amenities, testimonials |
| Gallery | `gallery.html` | Masonry image grid, lightbox, filter tabs |
| Contact | `contact.php` | Booking form, Flatpickr date picker, FAQ |
| About Us | `aboutus.html` | Story, philosophy, team, timeline, testimonials |

---

## 🛠️ Tech Stack

| Layer | Technology |
|---|---|
| Markup | HTML5 (semantic) |
| Styling | CSS3 — custom properties, grid, flexbox, animations |
| Scripting | Vanilla JavaScript (ES6+) |
| Date picker | [Flatpickr](https://flatpickr.js.org/) |
| Icons | [Bootstrap Icons](https://icons.getbootstrap.com/) |
| Fonts | [Google Fonts](https://fonts.google.com/) — Cormorant Garamond, Jost |
| Email | [PHPMailer](https://github.com/PHPMailer/PHPMailer) via Gmail SMTP |
| Backend | PHP 8+ |

---

## 🔒 Security Notes

- All form inputs sanitised server-side with `htmlspecialchars` + `strip_tags`
- Email validated with `FILTER_VALIDATE_EMAIL`
- `dateStatus` is always forced to `pending` server-side — client value is ignored
- SMTP uses `ENCRYPTION_STARTTLS` (port 587)
- `get_booked_dates.php` uses PDO prepared queries to prevent SQL injection
- Consider restricting `Access-Control-Allow-Origin` in `get_booked_dates.php` to your domain in production

---

## 🗺️ Roadmap

- [ ] Admin panel — approve/decline bookings, update date statuses
- [ ] Database integration for `get_booked_dates.php`
- [ ] Real photography and video assets
- [ ] WhatsApp click-to-chat integration
- [ ] Online payment / deposit gateway
- [ ] CMS integration for gallery and events management
- [ ] Google Analytics / Meta Pixel tracking

---

## 👤 Author

**YungTech Co.**
Designed & developed for Urban Garden & Pier24, Lagos.

---

## 📝 License

This project is proprietary. All rights reserved by Urban Garden & Pier24.
Unauthorised copying, distribution, or modification is strictly prohibited.

---

<p align="center">
  <strong>Urban Garden & Pier24</strong><br/>
  <em>Luxury Event Venues · Lagos, Nigeria</em><br/>
  <a href="mailto:26urbangarden@gmail.com">26urbangarden@gmail.com</a> &nbsp;·&nbsp; +234 912 633 4061
</p>

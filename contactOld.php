<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Us | Urban Garden & Pier24</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link
    href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&family=Jost:wght@200;300;400;500&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <!-- Bootstrap Icons -->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" />

  <!-- manual css -->
  <link rel="stylesheet" href="styles/contact.css" />
</head>

<body>
  <!-- ANNOUNCEMENT BANNER -->
  <div class="announcement">
    Experience Lagos's finest event venues &mdash;
    <a href="https://urbangardeninsta.gt.tc/">Check our latest events &rarr;</a>
  </div>

  <!-- NAVIGATION -->
  <nav id="mainNav">
    <a href="index.php" class="nav-logo">Urban Garden<span>& Pier24</span></a>
    <ul class="nav-links">
      <li><a href="index.php">Home</a></li>
      <li><a href="pier24deck.php">Pier24</a></li>
      <li><a href="outdoorturf.php">Outdoor Turf</a></li>
      <li><a href="gallery.php">Gallery</a></li>
      <li><a href="contact.php" class="active">Contact</a></li>
      <li><a href="aboutus.php">About Us</a></li>
    </ul>
    <a href="#enquiry" class="btn-book">Book Now</a>
    <button class="nav-hamburger" id="hamburgerBtn" aria-label="Open menu">
      <span></span><span></span><span></span>
    </button>
  </nav>

  <!-- DRAWER OVERLAY -->
  <div
    class="drawer-overlay"
    id="drawerOverlay"
    onclick="closeDrawer()"></div>

  <!-- MOBILE DRAWER -->
  <div class="mobile-drawer" id="mobileDrawer">
    <div class="drawer-header">
      <a href="index.php" class="drawer-logo">Urban Garden<span>& Pier24</span></a>
      <button class="drawer-close" onclick="closeDrawer()">&times;</button>
    </div>
    <ul class="drawer-links">
      <li><a href="index.php" onclick="closeDrawer()">Home</a></li>
      <li>
        <a href="pier24deck.php" onclick="closeDrawer()">Pier24</a>
      </li>
      <li>
        <a href="outdoorturf.php" onclick="closeDrawer()">Outdoor Turf</a>
      </li>
      <li><a href="gallery.php" onclick="closeDrawer()">Gallery</a></li>
      <li>
        <a href="contact.php" class="active" onclick="closeDrawer()">Contact</a>
      </li>
      <li>
        <a href="aboutus.php" onclick="closeDrawer()">About Us</a>
      </li>
    </ul>
    <a href="#contactForm" class="drawer-book" onclick="closeDrawer()">Book Now</a>
  </div>

  <!-- PAGE HERO -->
  <div class="page-hero">
    <div class="page-hero-pattern"></div>
    <div class="page-hero-line"></div>
    <div class="page-hero-content">
      <p class="page-hero-eyebrow">Lagos · Nigeria</p>
      <h1 class="page-hero-title">Get in <em>Touch</em></h1>
      <p class="page-hero-sub">We'd love to hear about your next event</p>
    </div>
  </div>

  <!-- BREADCRUMB -->
  <div class="breadcrumb">
    <a href="index.php">Home</a>
    <span>&rsaquo;</span>
    <span class="current">Contact Us</span>
  </div>

  <div class="gold-divider"></div>

  <!-- MAIN CONTACT LAYOUT -->
  <div class="contact-layout" id="enquiry">
    <!-- LEFT: INFO PANEL -->
    <div class="contact-info">
      <p class="info-eyebrow">Reach Us</p>
      <h2 class="info-title">
        Let's Plan<br /><em>Something</em><br />Extraordinary
      </h2>
      <p class="info-body">
        Whether it's an intimate dinner for two on The Deck or a grand outdoor
        celebration on our Turf — our team is ready to make it unforgettable.
        Reach out and we'll be in touch within 24 hours.
      </p>

      <div class="info-divider"></div>

      <div class="info-block">
        <p class="info-block-label">Venue Address</p>
        <p class="info-block-value">
          Urban Garden & Pier24<br />24 Alexander Ave, Ikoyi Lagos<br />Nigeria.
        </p>
      </div>

      <div class="info-block">
        <p class="info-block-label">Phone</p>
        <p class="info-block-value">
          <a href="tel:+2349126334061">+234 912 633 4061</a><br />
         <!-- < a href="tel:+2348000000001">+234 XXX XXX XXXX</a> -->
        </p>
      </div>

      <div class="info-block">
        <p class="info-block-label">Email</p>
        <p class="info-block-value">
          <a href="mailto:hello@urbangarden.ng">26urbangarden@gmail.com</a><br />
          <!-- <a href="#">events@pier24.ng</a> -->
        </p>
      </div>

      <div class="info-divider"></div>

      <div class="info-block">
        <p class="info-block-label">Opening Hours</p>
      </div>
      <div class="info-hours">
        <div class="hours-row">
          <span class="hours-day">Opening Hours</span><span class="hours-time">Sunday - Saturday</span>
        </div>
        <div class="hours-row">
          <span class="hours-day">Guest Chalet</span><span class="hours-time">Available</span>
        </div>
      </div>

      <div class="info-socials">
        <a href="#" class="info-social" aria-label="Instagram">
          <i style="color: #9a7a4a" class="bi bi-instagram"></i>
        </a>
        <a href="#" class="info-social" aria-label="Facebook">
          <i style="color: #9a7a4a" class="bi bi-facebook"></i>
        </a>
        <a
          href="https://wa.me/2349126334061"
          class="info-social"
          aria-label="WhatsApp">
          <i style="color: #9a7a4a" class="bi bi-whatsapp"></i>
        </a>
        <a href="#" class="info-social" aria-label="TikTok">
          <i style="color: #9a7a4a" class="bi bi-tiktok"></i>
        </a>
      </div>
    </div>

    <!-- RIGHT: FORM PANEL -->
    <div class="contact-form-wrap">
      <p class="form-eyebrow">Enquiry Form</p>
      <h2 class="form-title">Plan Your <em>Event</em></h2>
      <p class="form-subtitle">
        Fill in the details below and our events team will reach out to you
        within 24 hours to discuss your vision.
      </p>

      <!-- Venue Tabs -->
      <!-- <div class="venue-selector">
          <button
            class="venue-tab active"
            onclick="selectVenue(this, 'The Deck — Pier24')"
          >
            The Deck
          </button>
          <button class="venue-tab" onclick="selectVenue(this, 'Outdoor Turf')">
            Outdoor Turf
          </button>
          <button class="venue-tab" onclick="selectVenue(this, 'Both Venues')">
            Both Venues
          </button>
        </div> -->

      <div id="contactForm">
        <input type="hidden" id="selectedVenue" value="The Deck — Pier24" />

        <!-- Name row -->
        <div class="form-row">
          <div class="form-group">
            <label class="form-label">First Name <span class="req">*</span></label>
            <input
              type="text"
              class="form-input"
              id="firstName"
              placeholder="Amara"
              required />
          </div>
          <div class="form-group">
            <label class="form-label">Last Name <span class="req">*</span></label>
            <input
              type="text"
              class="form-input"
              id="lastName"
              placeholder="Okonkwo"
              required />
          </div>
        </div>

        <!-- Contact row -->
        <div class="form-row">
          <div class="form-group">
            <label class="form-label">Email Address <span class="req">*</span></label>
            <input
              type="email"
              class="form-input"
              id="email"
              placeholder="amara@example.com"
              required />
          </div>
          <div class="form-group">
            <label class="form-label">Phone Number</label>
            <input
              type="tel"
              class="form-input"
              id="phone"
              placeholder="+234 800 000 0000" />
          </div>
        </div>

        <!-- Event type & date -->
        <div class="form-row">
          <div class="form-group">
            <label class="form-label">Event Type <span class="req">*</span></label>
            <select class="form-select" id="eventType">
              <option value="" disabled selected>Select occasion</option>
              <option>Valentine's Dinner</option>
              <option>Photoshoots</option>
              <option>Classy Reception</option>
              <option>Birthday Celebration</option>
              <option>Yoga/Pilates</option>
              <option>Sip & Paint</option>
              <option>Cocktail Night</option>
              <option>Corporate Event</option>
              <option>Outdoor Wedding</option>
              <option>Garden Party</option>
              <option>Team Building</option>
              <option>Picnic Experience</option>
              <option>Proposal Setup</option>
              <option>Private Dining</option>
              <option>Other</option>
            </select>
          </div>
          <div class="form-group">
            <label class="form-label">Preferred Date <span class="req">*</span></label>
            <input type="date" class="form-input" id="eventDate" />
          </div>
        </div>

        <!-- Guest count -->
        <div class="form-group">
          <label class="form-label">Number of Guests <span class="req">*</span></label>
          <div class="guest-stepper">
            <button
              type="button"
              class="stepper-btn"
              onclick="adjustGuests(-10)">
              −
            </button>
            <div class="stepper-divider"></div>
            <span class="stepper-val" id="guestCount">20</span>
            <div class="stepper-divider"></div>
            <button
              type="button"
              class="stepper-btn"
              onclick="adjustGuests(10)">
              +
            </button>
          </div>
        </div>

        <!-- Extras -->
        <!-- <div class="form-group">
          <label class="form-label">Add-ons & Extras</label>
          <div class="extras-grid">
            <label class="extra-item"><input type="checkbox" value="Catering" /><span
                class="extra-label">Catering & Bar</span></label>
            <label class="extra-item"><input type="checkbox" value="Décor" /><span
                class="extra-label">Custom Décor</span></label>
            <label class="extra-item"><input type="checkbox" value="Photography" /><span
                class="extra-label">Photography</span></label>
            <label class="extra-item"><input type="checkbox" value="Live Music" /><span
                class="extra-label">Live Music / DJ</span></label>
            <label class="extra-item"><input type="checkbox" value="Florals" /><span
                class="extra-label">Floral Arrangements</span></label>
            <label class="extra-item"><input type="checkbox" value="AV" /><span class="extra-label">AV & Lighting</span></label>
          </div>
        </div> -->

        <!-- Message -->
        <div class="form-group">
          <label class="form-label">Tell Us About Your Vision</label>
          <textarea
            class="form-textarea"
            id="message"
            placeholder="Share any special requests, themes, dietary requirements, or ideas you have for your event..."></textarea>
        </div>

        <!-- Budget range -->
        <!-- <div class="form-group">
          <label class="form-label">Approximate Budget</label>
          <select class="form-select" id="budget">
            <option value="" disabled selected>Select budget range</option>
            <option>₦1,000,000 – ₦2,500,000</option>
            <option>₦2,500,000 – ₦5,000,000</option>
            <option>₦5,000,000 – ₦10,000,000</option>
            <option>₦10,000,000+</option>
            <option>Prefer not to say</option>
          </select>
        </div> -->

        <!-- How did you hear -->
        <div class="form-group">
          <label class="form-label">How Did You Hear About Us?</label>
          <select class="form-select" id="source">
            <option value="" disabled selected>Select one</option>
            <option>Instagram</option>
            <option>Facebook</option>
            <option>Google Search</option>
            <option>Word of Mouth</option>
            <option>I've visited before</option>
            <option>Event listing / blog</option>
            <option>Other</option>
          </select>
        </div>

        <button type="button" class="form-submit" onclick="submitForm()">
          Send Enquiry &rarr;
        </button>
      </div>

      <!-- Success Message -->
      <div class="form-success" id="formSuccess">
        <div class="success-icon">
          <svg viewBox="0 0 24 24">
            <polyline points="20 6 9 17 4 12"></polyline>
          </svg>
        </div>
        <h3 class="success-title">
          Thank
          <em style="font-style: italic; color: var(--gold-dark)">You</em>
        </h3>
        <p class="success-body">
          Your enquiry has been received. Our events team will reach out
          within 24 hours to discuss your vision and check availability.
        </p>
        <a href="contact.php" class="success-back" onclick="resetForm()">Send Another Enquiry</a>
      </div>
    </div>
  </div>

  <!-- MAP STRIP -->
  <div class="map-strip">
    <div class="map-bg"></div>
    <div class="map-grid"></div>
    <div class="map-content">
      <div class="map-pin">
        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
        </svg>
      </div>
      <p class="map-address"><em>Urban Garden</em> & Pier24</p>
      <p class="map-sub">24 Alexander Ave, Ikoyi, Lagos, Nigeria</p>
      <a
        href="https://maps.app.goo.gl/644uhWfuecRsZKsd7"
        target="_blank"
        rel="noopener"
        class="map-cta">Open in Google Maps &rarr;</a>
    </div>
  </div>

  <!-- FAQ SECTION -->
  <div class="faq-section">
    <div class="faq-inner">
      <p class="faq-eyebrow">Common Questions</p>
      <h2 class="faq-title">Frequently <em>Asked</em></h2>

      <div class="faq-item" onclick="toggleFaq(this)">
        <div class="faq-q">
          <span class="faq-q-text">How far in advance should I book a venue?</span>
          <div class="faq-icon">
            <svg viewBox="0 0 24 24">
              <line x1="12" y1="5" x2="12" y2="19"></line>
              <line x1="5" y1="12" x2="19" y2="12"></line>
            </svg>
          </div>
        </div>
        <div class="faq-a">
          <p class="faq-a-inner">
            We recommend booking at least 4–6 weeks in advance for weekday
            events and 8–12 weeks for weekends and public holidays. For large
            events (150+ guests) or peak season dates, earlier is always
            better. Reach out as soon as you have a date in mind and we'll
            check availability for you.
          </p>
        </div>
      </div>

      <div class="faq-item" onclick="toggleFaq(this)">
        <div class="faq-q">
          <span class="faq-q-text">What is the minimum and maximum guest capacity?</span>
          <div class="faq-icon">
            <svg viewBox="0 0 24 24">
              <line x1="12" y1="5" x2="12" y2="19"></line>
              <line x1="5" y1="12" x2="19" y2="12"></line>
            </svg>
          </div>
        </div>
        <div class="faq-a">
          <p class="faq-a-inner">
            Pier24 — The Pier24 can accommodate 100+ guests for
            an intimate, elevated experience. The Outdoor Turf can host up to
            300+ guests. For smaller gatherings or private dining (under 20),
            please enquire and we'll see what we can arrange.
          </p>
        </div>
      </div>

      <div class="faq-item" onclick="toggleFaq(this)">
        <div class="faq-q">
          <span class="faq-q-text">Do you offer in-house catering and bar service?</span>
          <div class="faq-icon">
            <svg viewBox="0 0 24 24">
              <line x1="12" y1="5" x2="12" y2="19"></line>
              <line x1="5" y1="12" x2="19" y2="12"></line>
            </svg>
          </div>
        </div>
        <div class="faq-a">
          <p class="faq-a-inner">
            Yes — we have an in-house team of chefs and mixologists who craft
            bespoke menus tailored to your event. We accommodate dietary
            requirements including vegan, halal, and gluten-free options.
            You're also welcome to bring in approved external caterers with
            prior agreement.
          </p>
        </div>
      </div>

      <div class="faq-item" onclick="toggleFaq(this)">
        <div class="faq-q">
          <span class="faq-q-text">Is a deposit required to confirm a booking?</span>
          <div class="faq-icon">
            <svg viewBox="0 0 24 24">
              <line x1="12" y1="5" x2="12" y2="19"></line>
              <line x1="5" y1="12" x2="19" y2="12"></line>
            </svg>
          </div>
        </div>
        <div class="faq-a">
          <p class="faq-a-inner">
            Yes, a 75–80% deposit is required to confirm your booking and
            secure your date. The remaining balance is due 7 days before the
            event. We accept bank transfers, cards, and mobile payment. Our
            team will walk you through the payment process after your enquiry
            is confirmed.
          </p>
        </div>
      </div>

      <div class="faq-item" onclick="toggleFaq(this)">
        <div class="faq-q">
          <span class="faq-q-text">Can I visit the venue before making a booking?</span>
          <div class="faq-icon">
            <svg viewBox="0 0 24 24">
              <line x1="12" y1="5" x2="12" y2="19"></line>
              <line x1="5" y1="12" x2="19" y2="12"></line>
            </svg>
          </div>
        </div>
        <div class="faq-a">
          <p class="faq-a-inner">
            Absolutely — we encourage site visits! Please reach out via this
            form or call us directly to schedule a walkthrough with one of our
            events coordinators. We'd love to show you around both The Pier24
            and the Outdoor Turf in person.
          </p>
        </div>
      </div>

      <div class="faq-item" onclick="toggleFaq(this)">
        <div class="faq-q">
          <span class="faq-q-text">What happens if I need to cancel or reschedule?</span>
          <div class="faq-icon">
            <svg viewBox="0 0 24 24">
              <line x1="12" y1="5" x2="12" y2="19"></line>
              <line x1="5" y1="12" x2="19" y2="12"></line>
            </svg>
          </div>
        </div>
        <div class="faq-a">
          <p class="faq-a-inner">
            We understand plans change. Cancellations made more than 14 days
            before the event date will receive a partial deposit refund.
            Rescheduling is allowed once at no extra charge, subject to
            availability. Full details are included in the booking agreement
            provided upon confirmation.
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="gold-divider"></div>

<div>
    <span>
      <a href="https://wa.me/2349126334061"
        target="_blank"
        rel="noopener noreferrer"
        class="whatsapp-float"
        title="Chat with us on WhatsApp">
        <i class="fab fa-whatsapp"></i>
      </a>
    </span>
  </div>
  
  
  <!-- FOOTER -->
  <footer>
    <span class="footer-logo">Urban Garden &amp; Pier24</span>
    <span class="footer-logo-sub">Luxury Event Venues · Lagos, Nigeria</span>

    <div class="footer-grid">
      <div>
        <p class="footer-col-title">About</p>
        <ul class="footer-links">
          <li><a href="aboutus.php">About Us</a></li>
          <li>
            <a
              href="https://maps.app.goo.gl/644uhWfuecRsZKsd7"
              target="_blank"
              rel="noopener">Location</a>
          </li>
          <li><a href="contact.php">Contact Us</a></li>
        </ul>
        <div class="footer-socials">
          <a href="#" class="info-social" aria-label="Instagram">
            <i style="color: #9a7a4a" class="bi bi-instagram"></i>
          </a>
          <a href="#" class="info-social" aria-label="Facebook">
            <i style="color: #9a7a4a" class="bi bi-facebook"></i>
          </a>
          <a href="https://wa.me/2349126334061" class="info-social" aria-label="WhatsApp">
            <i style="color: #9a7a4a" class="bi bi-whatsapp"></i>
          </a>
          <a href="#" class="info-social" aria-label="TikTok">
            <i style="color: #9a7a4a" class="bi bi-tiktok"></i>
          </a>
        </div>
      </div>
      <div>
        <p class="footer-col-title">Reservations</p>
        <ul class="footer-links">
          <li><a href="contact.php#contactForm">Book The Pier24</a></li>
          <li><a href="contact.php#contactForm">Book Outdoor Turf</a></li>
          <li><a href="contact.php#contactForm">Check Availability</a></li>
        </ul>
      </div>
      <div>
        <p class="footer-col-title">Gallery</p>
        <ul class="footer-links">
          <li><a href="gallery.php">Photo Gallery</a></li>
          <li>
            <a href="https://urbangardeninsta.gt.tc/">Event Highlights</a>
          </li>
          <!-- <li><a href="">Client Stories</a></li> -->
        </ul>
      </div>
      <div>
        <p class="footer-col-title">More</p>
        <ul class="footer-links">
          <li><a href="pier24deck.php">Pier24</a></li>
          <li><a href="outdoor-turf.php">Outdoor Turf</a></li>
        </ul>
      </div>
    </div>

    <div class="footer-bottom">
      <span>&copy; Urban Garden &amp; Pier24 2024–2025. All Rights
        Reserved.</span>
      <div class="footer-bottom-links">
        <a href="#">YungTech Co. Designed</a>
      </div>
    </div>
  </footer>

  <!-- manual js -->
  <script src="scripts/contact.js"></script>
</body>

</html>
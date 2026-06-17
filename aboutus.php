<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Us | Urban Garden & Pier24</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link
    href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&family=Jost:wght@200;300;400;500&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" />
  <link rel="stylesheet" href="styles/about.css" />
</head>

<body>
  <!-- ANNOUNCEMENT BANNER -->
  <div class="announcement">
    Experience Lagos's finest event venues &mdash;
    <a
      href="https://urbangardeninsta.gt.tc/"
      target="_blank"
      class="announcement-link">Check our latest events &rarr;</a>
  </div>

  <!-- NAVIGATION -->
  <nav id="mainNav">
    <a href="index.php" class="nav-logo">Urban Garden<span>& Pier24</span></a>
    <ul class="nav-links">
      <li><a href="index.php">Home</a></li>
      <li><a href="pier24deck.php">Pier24</a></li>
      <li><a href="outdoorturf.php">Outdoor Turf</a></li>
      <li><a href="gallery.php">Gallery</a></li>
      <li><a href="contact.php">Contact</a></li>
      <li><a href="aboutus.php" class="active">About Us</a></li>
    </ul>
    <a href="contact.php#contactForm" class="btn-book">Book Now</a>
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
      <li><a href="contact.php" onclick="closeDrawer()">Contact</a></li>
      <li>
        <a href="aboutus.php" class="active" onclick="closeDrawer()">About Us</a>
      </li>
    </ul>
    <a
      href="contact.php#contactForm"
      class="drawer-book"
      onclick="closeDrawer()">Book Now</a>
  </div>

  <!-- ══ HERO ══ -->
  <div class="hero">
    <div class="hero-bg"></div>
    <div class="hero-shimmer"></div>
    <div class="hero-line-v"></div>
    <div class="hero-content">
      <p class="hero-eyebrow">Our Story · Our People · Our Promise</p>
      <h1 class="hero-title">About <em>Us</em></h1>
      <p class="hero-sub">
        Born in Lagos. Built on passion. Driven by extraordinary moments.
      </p>
      <div class="hero-ctas">
        <a href="#story" class="cta-gold">Our Story</a>
        <a href="contact.php" class="cta-outline">Book an Event</a>
      </div>
    </div>
    <div class="scroll-hint">
      <div class="scroll-line"></div>
      Discover more
    </div>
  </div>

  <!-- STATS STRIP -->
  <div class="stats-strip">
    <div class="stat-item">
      <div class="stat-num">50+</div>
      <div class="stat-label">Events Hosted</div>
    </div>
    <div class="stat-item">
      <div class="stat-num">3+</div>
      <div class="stat-label">Years of Excellence</div>
    </div>
    <div class="stat-item">
      <div class="stat-num">2</div>
      <div class="stat-label">Iconic Venues</div>
    </div>
    <div class="stat-item">
      <div class="stat-num">5★</div>
      <div class="stat-label">Guest Rating</div>
    </div>
  </div>

  <!-- BREADCRUMB -->
  <div class="breadcrumb">
    <a href="index.php">Home</a>
    <span>&rsaquo;</span>
    <span class="current">About Us</span>
  </div>

  <div class="gold-divider"></div>

  <!-- ══ OUR STORY SPLIT ══ -->
  <div class="story-section" id="story">
    <div class="story-visual">
      <div class="story-visual-glow"></div>
      <div class="story-visual-content">
        <p class="story-visual-quote">
          Every great celebration deserves a space as extraordinary as the
          moment itself.
        </p>
      </div>
    </div>
    <div class="story-text">
      <p class="section-eyebrow">Our Story</p>
      <h2 class="section-title">Where It All <em>Began</em></h2>
      <p class="section-body">
        Urban Garden & Pier24 was born from a simple but powerful belief —
        that Lagos deserved event spaces that matched the energy, ambition,
        and elegance of the people who call it home.
        <br />
        Urban Garden <em>x</em> The Pier is a contemporary lifestyle and event
        space designed around a refined conservatory inspired experience where
        greenery, water, elegance, and human connection come together
        effortlessly.
      </p>
      <p class="section-body" style="margin-top: 10px">
        Urban Garden is our <em>Outdoor Turf:</em> an open, green space ideal
        for social gatherings, workshops, celebrations, and relaxed outdoor
        experiences rooted in nature.
        <br />
        The Pier is our waterfront deck overlooking the Lekki-Ikoyi Bridge,
        offering a calm and elevated setting for intimate events, corporate
        offsites, networking, and meaningful conversations by the water.
      </p>

      <p class="section-body" style="margin-top: 10px">
        Complementing both spaces is a private chalet, offering an exclusive,
        intimate setting for rest and relaxation in complete comfort around
        events. Every aspect of our space creates a unique experience where
        lush greenery meets serene waterfront views, designed for comfort,
        creativity, and connection.
      </p>

      <p class="section-body">
        With nature at its core and hospitality in every detail,
        <em>Urban Garden & The Pier</em> is a refreshing urban sanctuary for
        memorable experiences.
      </p>

      <a href="gallery.php" class="story-link">See Our Events &rarr;</a>
    </div>
  </div>

  <div class="gold-divider"></div>

  <!-- ══ PHILOSOPHY ══ -->
  <div class="philosophy-section" id="philosophy">
    <div class="philosophy-bg"></div>
    <div class="philosophy-inner">
      <div class="philosophy-intro">
        <div>
          <p class="section-eyebrow" style="color: var(--gold)">
            What We Stand For
          </p>
          <h2 class="section-title" style="color: var(--cream)">
            Our <em>Philosophy</em>
          </h2>
        </div>
        <div>
          <p
            class="section-body"
            style="color: rgba(238, 231, 218, 0.736); margin-top: 20px">
            Three guiding principles shape every decision we make, every event
            we host, and every experience we create for our guests.
          </p>
        </div>
      </div>
      <div class="philosophy-pillars">
        <div class="pillar">
          <div class="pillar-num">01</div>
          <div class="pillar-icon">
            <svg viewBox="0 0 24 24">
              <path
                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
            </svg>
          </div>
          <h3 class="pillar-title"><em>Passion</em> in Every Detail</h3>
          <p class="pillar-body">
            We approach every event — no matter the size — with the same level
            of passion and care. From the floral arrangements to the lighting
            temperature, nothing is an afterthought.
          </p>
        </div>
        <div class="pillar">
          <div class="pillar-num">02</div>
          <div class="pillar-icon">
            <svg viewBox="0 0 24 24">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
            </svg>
          </div>
          <h3 class="pillar-title"><em>Excellence</em> Without Compromise</h3>
          <p class="pillar-body">
            We hold ourselves to the highest standards — in service, in space,
            and in hospitality. Our guests deserve nothing less than an
            experience that exceeds every expectation they arrive with.
          </p>
        </div>
        <div class="pillar">
          <div class="pillar-num">03</div>
          <div class="pillar-icon">
            <svg viewBox="0 0 24 24">
              <circle cx="12" cy="12" r="10" />
              <path d="M8 14s1.5 2 4 2 4-2 4-2" />
              <line x1="9" y1="9" x2="9.01" y2="9" />
              <line x1="15" y1="9" x2="15.01" y2="9" />
            </svg>
          </div>
          <h3 class="pillar-title"><em>Joy</em> as the Standard</h3>
          <p class="pillar-body">
            At the end of every event, one question guides us: did our guests
            leave joyful? That is our ultimate measure of success — not just a
            beautiful setup, but a truly unforgettable experience.
          </p>
        </div>
      </div>
    </div>
  </div>

  <!-- ══ OUR VENUES ══ -->
  <div class="venues-section" id="venues">
    <p class="section-eyebrow">Where We Host</p>
    <h2 class="section-title">Our <em>Two</em> Venues</h2>
    <p class="section-body" style="max-width: 540px">
      Each venue has its own distinct character, atmosphere, and magic — yet
      both share the same commitment to excellence that defines everything we
      do.
    </p>
    <div class="venues-grid">
      <div class="venue-card">
        <div class="venue-card-bg vc-deck"></div>
        <div class="venue-card-overlay"></div>
        <div class="venue-card-content">
          <span class="venue-card-tag">Ikoyi · Lagos</span>
          <h3 class="venue-card-title">Pier24 —<br /><em>The Pier24</em></h3>
          <p class="venue-card-desc">
            A waterfront sanctuary above the Lagos lagoon — intimate,
            sophisticated, and utterly unforgettable. For gatherings of 20 to
            120 guests who expect the finest.
          </p>
          <a href="pier24deck.php" class="venue-card-link">Explore Pier24 &rarr;</a>
        </div>
      </div>
      <div class="venue-card">
        <div class="venue-card-bg vc-turf"></div>
        <div class="venue-card-overlay"></div>
        <div class="venue-card-content">
          <span class="venue-card-tag">Ikoyi · Lagos</span>
          <h3 class="venue-card-title">The <em>Outdoor</em><br />Turf</h3>
          <p class="venue-card-desc">
            A lush green expanse beneath the open Lagos sky — versatile,
            vibrant, and breathtaking. The perfect stage for celebrations of
            up to 300 guests.
          </p>
          <a href="outdoorturf.php" class="venue-card-link">Explore The Turf &rarr;</a>
        </div>
      </div>
    </div>
  </div>

  <div class="gold-divider"></div>

  <!-- ══ THE TEAM ══ -->
  <!-- <div class="team-section" id="team"> -->
  <!-- <p class="section-eyebrow">The People Behind the Magic</p>
      <h2 class="section-title">Meet the <em>Team</em></h2>
      <p class="section-body" style="max-width: 540px">
        Every extraordinary event begins with extraordinary people. Meet the
        team who work tirelessly behind the scenes to make your occasion
        unforgettable.
      </p>
      <div class="team-grid">
        <div class="team-card">
          <div class="team-card-photo"> -->
  <!-- 📸 IMAGE SLOT — replace .tp-1 with:
                 style="background-image:url('images/team/ceo.jpg');
                 background-size:cover;background-position:top center;" -->
  <!-- <div class="team-photo-bg tp-1"></div>
          </div>
          <div class="team-card-body">
            <h3 class="team-card-name">Founder & CEO</h3>
            <p class="team-card-role">Urban Garden & Pier24</p>
            <p class="team-card-bio">
              The visionary behind both venues — driven by a belief that Lagos
              deserves event spaces that match its energy and ambition. Every
              element of Urban Garden & Pier24 reflects this founding passion.
            </p>
            <div class="team-card-socials">
              <a href="#" class="team-social" aria-label="Instagram"
                ><i class="bi bi-instagram"></i
              ></a>
              <a href="#" class="team-social" aria-label="LinkedIn"
                ><i class="bi bi-linkedin"></i
              ></a>
            </div>
          </div> -->
  <!-- </div> -->

  <!-- <div class="team-card">
          <div class="team-card-photo"> -->
  <!-- 📸 IMAGE SLOT — replace .tp-2 -->
  <!-- <div class="team-photo-bg tp-2"></div> -->
  <!-- </div>
          <div class="team-card-body">
            <h3 class="team-card-name">Head of Events</h3>
            <p class="team-card-role">Events & Experience</p>
            <p class="team-card-bio">
              With years of experience curating premium events across Lagos, our
              Head of Events brings a meticulous eye for detail and an instinct
              for creating experiences that move people.
            </p>
            <div class="team-card-socials">
              <a href="#" class="team-social" aria-label="Instagram"
                ><i class="bi bi-instagram"></i
              ></a>
              <a href="#" class="team-social" aria-label="LinkedIn"
                ><i class="bi bi-linkedin"></i
              ></a>
            </div>
          </div>
        </div> -->

  <!-- <div class="team-card">
          <div class="team-card-photo"> -->
  <!-- 📸 IMAGE SLOT — replace .tp-3 -->
  <!-- <div class="team-photo-bg tp-3"></div>
          </div>
          <div class="team-card-body">
            <h3 class="team-card-name">Executive Chef</h3>
            <p class="team-card-role">Culinary & Bar</p>
            <p class="team-card-bio">
              The creative force behind our bespoke menus and signature cocktail
              programmes — crafting flavour experiences that complement every
              occasion we host, from intimate dinners to grand receptions.
            </p>
            <div class="team-card-socials">
              <a href="#" class="team-social" aria-label="Instagram"
                ><i class="bi bi-instagram"></i
              ></a>
            </div>
          </div>
        </div>
      </div>
    </div> -->

  <!-- ══ TIMELINE ══ -->
  <div class="timeline-section" id="milestones">
    <div class="timeline-inner">
      <p class="section-eyebrow">Our Journey</p>
      <h2 class="section-title">Milestones That <em>Shaped Us</em></h2>
      <p class="section-body" style="max-width: 500px">
        From a bold idea to one of Lagos's most beloved event venues — here's
        how our story has unfolded.
      </p>
      <div class="timeline">
        <div class="timeline-item">
          <div class="timeline-dot"></div>
          <p class="timeline-year">2020</p>
          <h3 class="timeline-title">The <em>Beginning</em></h3>
          <p class="timeline-body">
            Urban Garden & Pier24 opens its doors in Ikoyi, Lagos. Our very
            first event — an intimate birthday celebration on The Deck — sets
            the tone for everything that follows.
          </p>
        </div>

        <div class="timeline-item">
          <div class="timeline-dot"></div>
          <p class="timeline-year">2021</p>
          <h3 class="timeline-title">The Outdoor Turf <em>Launches</em></h3>
          <p class="timeline-body">
            We expand with the launch of our Outdoor Turf — bringing the first
            luxury open-air event space to Ikoyi. The response from Lagos is
            overwhelming and immediate.
          </p>
        </div>

        <div class="timeline-item">
          <div class="timeline-dot"></div>
          <p class="timeline-year">2022</p>
          <h3 class="timeline-title"><em>50</em> Events & Growing</h3>
          <p class="timeline-body">
            We host our 50th event — a milestone celebrated with the same care
            and attention we gave our very first. Our team grows, our menus
            evolve, and our reputation deepens across Lagos.
          </p>
        </div>

        <div class="timeline-item">
          <div class="timeline-dot"></div>
          <p class="timeline-year">2023</p>
          <h3 class="timeline-title">Signature <em>Experiences</em> Born</h3>
          <p class="timeline-body">
            We launch our signature event packages — Valentine's Dinner on The
            Deck, Sip & Paint nights, and the Luxury Picnic Experience on the
            Turf — which quickly become the talk of Lagos.
          </p>
        </div>

        <div class="timeline-item">
          <div class="timeline-dot"></div>
          <p class="timeline-year">2024 – Present</p>
          <h3 class="timeline-title"><em>50+</em> Events. One Standard.</h3>
          <p class="timeline-body">
            Over 50 events hosted. Countless memories made. And one
            unwavering standard — that every guest who walks through our doors
            leaves with an experience they'll never forget.
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="gold-divider"></div>

  <!-- ══ TESTIMONIAL STRIP ══ -->
  <div class="testimonial-strip" id="testimonials">
    <div class="testimonial-strip-bg"></div>
    <div class="testimonial-strip-inner">
      <div class="ts-quote-mark">"</div>
      <p class="ts-text" id="tsText">
        Urban Garden & Pier24 didn't just host our wedding — they made it the
        most magical night of our lives. Every detail was beyond anything we
        could have imagined.
      </p>
      <div class="ts-divider"></div>
      <p class="ts-name" id="tsName">Tunde & Blessing M.</p>
      <p class="ts-event" id="tsEvent">Outdoor Wedding, 2025</p>
      <div class="ts-dots">
        <button class="ts-dot active" onclick="switchTestimonial(0)"></button>
        <button class="ts-dot" onclick="switchTestimonial(1)"></button>
        <button class="ts-dot" onclick="switchTestimonial(2)"></button>
      </div>
    </div>
  </div>

  <!-- ══ RECOGNITION ══ -->
  <div class="recognition-section">
    <p class="section-eyebrow">Why Choose Us</p>
    <h2 class="section-title">What Sets Us <em>Apart</em></h2>
    <div class="recognition-grid">
      <div class="recognition-item">
        <div class="recognition-icon">
          <svg viewBox="0 0 24 24">
            <polygon
              points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
          </svg>
        </div>
        <h4 class="recognition-title">5-Star Service</h4>
        <p class="recognition-sub">Consistently rated across all events</p>
      </div>
      <div class="recognition-item">
        <div class="recognition-icon">
          <svg viewBox="0 0 24 24">
            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
            <circle cx="9" cy="7" r="4" />
            <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
          </svg>
        </div>
        <h4 class="recognition-title">Dedicated Team</h4>
        <p class="recognition-sub">Personal coordinator for every event</p>
      </div>
      <div class="recognition-item">
        <div class="recognition-icon">
          <svg viewBox="0 0 24 24">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
          </svg>
        </div>
        <h4 class="recognition-title">Trusted by Lagos</h4>
        <p class="recognition-sub">50+ events across 3 years</p>
      </div>
      <div class="recognition-item">
        <div class="recognition-icon">
          <svg viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="10" />
            <polyline points="12 6 12 12 16 14" />
          </svg>
        </div>
        <h4 class="recognition-title">Always On Time</h4>
        <p class="recognition-sub">Every setup delivered to perfection</p>
      </div>
    </div>
  </div>

  <!-- ══ FINAL CTA ══ -->
  <div class="final-cta">
    <div class="final-cta-bg"></div>
    <div class="final-cta-inner">
      <p class="final-cta-eyebrow">Let's Create Something Beautiful</p>
      <h2 class="final-cta-title">
        Your <em>Extraordinary</em><br />Event Starts Here
      </h2>
      <p class="final-cta-body">
        Whether you have a vision in mind or are starting from scratch, our
        team is ready to help you create an event that will live in your
        guests' memories long after the evening ends.
      </p>
      <div class="final-cta-actions">
        <a href="contact.php" class="cta-gold">Start Planning</a>
        <a href="gallery.php" class="cta-outline" style="border: 2px solid var(--gold); color: var(--charcoal); font-weight: 500;">View Our Gallery</a>
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
              rel="noopener"
              class="map-cta">Location</a>
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
        <a href="https://yungtechco.gt.tc/"
          target="_blank"
              rel="noopener">YungTech Co. Designed</a>
      </div>
    </div>
  </footer>

  <script src="scripts/about.js"></script>
</body>

</html>
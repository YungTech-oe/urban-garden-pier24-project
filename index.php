<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Urban Garden & Pier24 | Luxury Event Venues</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link
    href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&family=Jost:wght@200;300;400;500&display=swap"
    rel="stylesheet" />

  <!-- Bootstrap Icons -->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <!-- manual styles -->
  <link rel="stylesheet" href="styles/index.css" />
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
    <a href="index.php" class="nav-logo">
      Urban Garden
      <span>& Pier24</span>
    </a>
    <ul class="nav-links">
      <li><a href="index.php" class="active">Home</a></li>
      <li><a href="pier24deck.php">Pier24</a></li>
      <li><a href="outdoorturf.php">Outdoor Turf</a></li>
      <li><a href="gallery.php">Gallery</a></li>
      <li><a href="contact.php">Contact</a></li>
      <li><a href="aboutus.php">About Us</a></li>
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
      <button class="drawer-close" onclick="closeDrawer()" aria-label="Close">
        &times;
      </button>
    </div>
    <ul class="drawer-links">
      <li>
        <a href="index.php" class="active" onclick="closeDrawer()">Home</a>
      </li>
      <li>
        <a href="pier24deck.php" onclick="closeDrawer()">Pier24</a>
      </li>
      <li>
        <a href="outdoorturf.php" onclick="closeDrawer()">Outdoor Turf</a>
      </li>
      <li><a href="gallery.php" onclick="closeDrawer()">Gallery</a></li>
      <li><a href="contact.php" onclick="closeDrawer()">Contact</a></li>
      <li><a href="aboutus.php" onclick="closeDrawer()">About Us</a></li>
    </ul>
    <a
      href="contact.php#contactForm"
      class="drawer-book"
      onclick="closeDrawer()">Book Now</a>
  </div>

  <!-- HERO -->
  <section class="hero">
    <!-- ── HERO BACKGROUND ── -->
    <div class="hero-bg">
      <!-- DESKTOP / TABLET: rotating videos (hidden on mobile via CSS) -->
      <div class="hero-videos">
        <video
          class="hero-video"
          data-index="0"
          autoplay
          muted
          loop
          playsinline
          preload="metadata">
          <source src="assets/videos/bg_1.mp4" type="video/mp4" />
        </video>
        <video
          class="hero-video"
          data-index="1"
          muted
          loop
          playsinline
          preload="metadata">
          <source src="assets/videos/bg_2.mp4" type="video/mp4" />
        </video>
        <video
          class="hero-video"
          data-index="2"
          muted
          loop
          playsinline
          preload="metadata">
          <source src="assets/videos/bg_3.mp4" type="video/mp4" />
        </video>
        <video
          class="hero-video"
          data-index="3"
          muted
          loop
          playsinline
          preload="metadata">
          <source src="assets/videos/Bg_4.mp4" type="video/mp4" />
        </video>
        <div class="hero-video-overlay"></div>
      </div>

      <!-- MOBILE: static images that cycle (shown on mobile only) -->
      <div class="hero-images">
        <img
          class="hero-img hero-img-active"
          src="../assets/images/deck/skyline.jpg"
          alt="Urban Garden & Pier24 venue" />
        <img
          class="hero-img"
          src="../assets/images/bg_1.jpg"
          alt="Pier24 The Deck waterfront" />
        <img
          class="hero-img"
          src="../assets/images/bg_3.jpg"
          alt="Outdoor Turf events" />
        <img
          class="hero-img"
          src="../assets/images/deck/Skaahphotography-9035.jpeg"
          alt="Outdoor Turf events" />
        <div class="hero-video-overlay"></div>
      </div>
    </div>
    <div class="hero-pattern"></div>
    <div class="hero-lines"></div>
    <div class="hero-content">
      <p class="hero-eyebrow">Lagos · Nigeria</p>
      <h1 class="hero-title">
        Where <em>Moments</em><br />Become <em>Memories</em>
      </h1>
      <p class="hero-subtitle">Two iconic venues. Infinite possibilities.</p>
      <a href="#discover" class="hero-cta">Explore Our Venues</a>
    </div>
    <div class="scroll-hint">
      <div class="scroll-line"></div>
      Scroll to discover
    </div>
  </section>

  <!-- DISCOVER / TAB SECTION -->
  <div class="discover" id="discover">
    <div class="discover-backdrop"></div>
    <div class="discover-inner">
      <div class="discover-top">
        <div>
          <p class="section-eyebrow">Our Venues</p>
          <h2 class="section-title">Discover<br /><em>Your Space</em></h2>
        </div>
        <p
          style="
              color: rgba(216, 213, 207, 0.91);
              font-size: 13px;
              font-weight: 300;
              max-width: 300px;
              line-height: 1.8;
              text-align: right;
            ">
          From waterfront elegance to lush open-air gatherings — every
          occasion has its perfect setting.
        </p>
      </div>

      <!-- Tabs -->
      <div class="discover-tabs">
        <button class="tab-btn active" onclick="switchTab('deck')">
          Pier24
        </button>
        <button class="tab-btn" onclick="switchTab('turf')">
          Outdoor Turf
        </button>
      </div>

      <!-- Tab: The Deck -->
      <div class="tab-panel active" id="tab-deck">
        <div class="discover-grid">
          <div class="discover-card">
            <div class="discover-card-num">01</div>
            <h3 class="discover-card-title">The <em>Deck</em> Experience</h3>
            <p class="discover-card-desc">
              Perched above the water with panoramic Lagos views — an intimate
              setting where sky meets sea for events that demand elegance.
            </p>
            <a href="pier24deck.php" class="discover-card-link">Explore The Pier24 &rarr;</a>
          </div>
          <div class="discover-card">
            <div class="discover-card-num">02</div>
            <h3 class="discover-card-title"><em>Dining</em> & Cocktails</h3>
            <p class="discover-card-desc">
              Curated menus crafted by resident chefs, paired with signature
              cocktails designed to complement each celebrated moment.
            </p>
            <a href="gallery.php" class="discover-card-link">View Gallery &rarr;</a>
          </div>
          <div class="discover-card">
            <div class="discover-card-num">03</div>
            <h3 class="discover-card-title">Private <em>Bookings</em></h3>
            <p class="discover-card-desc">
              Exclusive hire for intimate gatherings of 20 to 200 guests. Our
              events team handles every detail from florals to lighting.
            </p>
            <a href="contact.php" class="discover-card-link">Enquire Now &rarr;</a>
          </div>
        </div>
      </div>

      <!-- Tab: Outdoor Turf -->
      <div class="tab-panel" id="tab-turf">
        <div class="discover-grid">
          <div class="discover-card">
            <div class="discover-card-num">01</div>
            <h3 class="discover-card-title">Lush <em>Outdoor</em> Grounds</h3>
            <p class="discover-card-desc">
              A manicured green expanse beneath the Lagos sky — the perfect
              backdrop for celebrations that breathe fresh air and open space.
            </p>
            <a href="outdoorturf.php" class="discover-card-link">Explore The Turf &rarr;</a>
          </div>
          <div class="discover-card">
            <div class="discover-card-num">02</div>
            <h3 class="discover-card-title"><em>Garden</em> Gatherings</h3>
            <p class="discover-card-desc">
              From garden parties to outdoor receptions, our turf transforms
              into an extraordinary venue for up to 300 guests under the open
              sky.
            </p>
            <a href="gallery.php" class="discover-card-link">View Gallery &rarr;</a>
          </div>
          <div class="discover-card">
            <div class="discover-card-num">03</div>
            <h3 class="discover-card-title">Bespoke <em>Setup</em></h3>
            <p class="discover-card-desc">
              Marquees, fairy lights, custom stages and décor — our team
              creates the exact atmosphere your vision deserves, down to every
              last detail.
            </p>
            <a href="contact.php" class="discover-card-link">Plan Your Event &rarr;</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="gold-divider"></div>

  <!-- OUTDOOR TURF CINEMATIC -->
  <div class="cinematic" id="turf">
    <div class="cinematic-bg turf-bg"></div>
    <div
      class="turf-pattern"
      style="position: absolute; inset: 0; z-index: 1"></div>
    <div
      class="cinematic-overlay turf-overlay"
      style="position: absolute; inset: 0; z-index: 2"></div>
    <div class="cinematic-content">
      <p class="cin-eyebrow">Outdoor Turf</p>
      <h2 class="cin-title">Where the <em>Sky</em><br />Is Your Ceiling</h2>
      <p class="cin-body">
        Expansive, verdant, and endlessly versatile — our outdoor turf offers
        an open-air canvas for events that celebrate life in all its fullness.
      </p>
      <a href="outdoorturf.php" class="cin-cta">Discover The Turf</a>
    </div>
  </div>

  <div class="gold-divider"></div>

  <!-- THE DECK CINEMATIC -->
  <div class="cinematic" style="justify-content: flex-end">
    <div class="cinematic-bg deck-bg"></div>
    <div
      class="deck-pattern"
      style="position: absolute; inset: 0; z-index: 1"></div>
    <div
      class="cinematic-overlay deck-overlay"
      style="
          position: absolute;
          inset: 0;
          z-index: 2;
          background: linear-gradient(
            to left,
            rgba(10, 16, 24, 0.9) 0%,
            rgba(10, 16, 24, 0.3) 100%
          );
        "></div>
    <div class="cinematic-content" style="text-align: right">
      <p class="cin-eyebrow">Pier24</p>
      <h2 class="cin-title">Elegance <em>Above</em><br />the Water</h2>
      <p class="cin-body">
        Pier24 offers an unparalleled waterfront experience — sophisticated,
        intimate, and unforgettable for every occasion you choose to celebrate
        here.
      </p>
      <a href="pier24deck.php" class="cin-cta">Explore Pier24</a>
    </div>
  </div>

  <!-- FEATURED EVENTS CAROUSEL -->
  <div class="events-section" id="events">
    <div class="events-header">
      <div>
        <p class="section-eyebrow">Featured Events</p>
        <h2 class="section-title" style="margin-bottom: 0">
          Curated <em>Experiences</em>
        </h2>
      </div>
      <div>
        <div class="events-tabs">
          <button
            class="event-tab-btn active"
            onclick="switchEventTab('deck-events')">
            The Pier24
          </button>
          <button
            class="event-tab-btn"
            onclick="switchEventTab('turf-events')">
            Outdoor Turf
          </button>
        </div>
      </div>
    </div>

    <!-- Deck Events -->
    <div class="event-panel active" id="deck-events">
      <div class="fc-stage">
        <div class="fc-track" id="fc-deck">
          <div class="fc-card fc-active" onclick="fcGoTo('deck', 0)">
            <div class="fc-card-img">
              <div class="fc-card-img-bg img-valentines"></div>
              <span class="card-img-label">The Deck</span>
            </div>
            <div class="fc-card-body">
              <h3 class="event-card-title"><em>Valentine's</em> Dinner</h3>
              <p class="event-card-desc">
                An intimate evening for two — candlelit tables over the water,
                a curated 5-course menu, and the Lagos skyline as your
                backdrop.
              </p>
         
            </div>
          </div>
          <div class="fc-card" onclick="fcGoTo('deck', 1)">
            <div class="fc-card-img">
              <div class="fc-card-img-bg img-birthday"></div>
              <span class="card-img-label">The Deck</span>
            </div>
            <div class="fc-card-body">
              <h3 class="event-card-title">Birthday <em>Soirée</em></h3>
              <p class="event-card-desc">
                Celebrate in style with a private deck takeover — custom
                décor, live music, and a bespoke birthday menu.
              </p>
             
            </div>
          </div>
          <div class="fc-card" onclick="fcGoTo('deck', 2)">
            <div class="fc-card-img">
              <div class="fc-card-img-bg img-sipaint"></div>
              <span class="card-img-label">The Deck</span>
            </div>
            <div class="fc-card-body">
              <h3 class="event-card-title">Sip &amp; <em>Paint</em></h3>
              <p class="event-card-desc">
                Art meets ambiance — guided painting sessions with flowing
                wine and creative energy all evening long.
              </p>
            
            </div>
          </div>
          <div class="fc-card" onclick="fcGoTo('deck', 3)">
            <div class="fc-card-img">
              <div class="fc-card-img-bg img-cocktail"></div>
              <span class="card-img-label">The Deck</span>
            </div>
            <div class="fc-card-body">
              <h3 class="event-card-title">Private <em>Dinner</em></h3>
              <p class="event-card-desc">
                Signature dinner night hosted by our chef
                — each taste a story worth remembering.
              </p>
             
            </div>
          </div>
          <div class="fc-card" onclick="fcGoTo('deck', 4)">
            <div class="fc-card-img">
              <div class="fc-card-img-bg img-view"></div>
              <span class="card-img-label">The Deck</span>
            </div>
            <div class="fc-card-body">
              <h3 class="event-card-title">Night <em>View</em></h3>
              <p class="event-card-desc">
                Productive by day, unforgettable by night — The Deck
                transforms for executive dinners and entertainment.
              </p>
              
            </div>
          </div>
        </div>
      </div>
      <div class="fc-controls">
        <button
          class="fc-btn"
          onclick="fcStep('deck', -1)"
          aria-label="Previous">
          <svg viewBox="0 0 24 24">
            <polyline points="15 18 9 12 15 6"></polyline>
          </svg>
        </button>
        <span class="fc-counter"><span id="fc-deck-cur">1</span>
          <span class="fc-total">/ 5</span></span>
        <button class="fc-btn" onclick="fcStep('deck', 1)" aria-label="Next">
          <svg viewBox="0 0 24 24">
            <polyline points="9 18 15 12 9 6"></polyline>
          </svg>
        </button>
      </div>
      <div class="fc-dots" id="fc-dots-deck">
        <button class="fc-dot active" onclick="fcGoTo('deck', 0)"></button>
        <button class="fc-dot" onclick="fcGoTo('deck', 1)"></button>
        <button class="fc-dot" onclick="fcGoTo('deck', 2)"></button>
        <button class="fc-dot" onclick="fcGoTo('deck', 3)"></button>
        <button class="fc-dot" onclick="fcGoTo('deck', 4)"></button>
      </div>
    </div>

    <!-- Turf Events -->
    <div class="event-panel" id="turf-events">
      <div class="fc-stage">
        <div class="fc-track" id="fc-turf">
          <div class="fc-card fc-active" onclick="fcGoTo('turf', 0)">
            <div class="fc-card-img">
              <div class="fc-card-img-bg img-party"></div>
              <span class="card-img-label">Outdoor Turf</span>
            </div>
            <div class="fc-card-body">
              <h3 class="event-card-title"><em>Garden</em> Party</h3>
              <p class="event-card-desc">
                An al fresco celebration under the open sky — lush green
                grounds, twinkling lights at dusk, and great company.
              </p>
           
            </div>
          </div>
          <div class="fc-card" onclick="fcGoTo('turf', 1)">
            <div class="fc-card-img">
              <div class="fc-card-img-bg img-bar"></div>
              <span class="card-img-label">Outdoor Turf</span>
            </div>
            <div class="fc-card-body">
              <h3 class="event-card-title">Outdoor <em>Bar</em></h3>
              <p class="event-card-desc">
                Our outdoor bar blends artful design with al fresco charm -
                the perfect backdrop for cocktails, celebrations, and moments
                worth savoring.
              </p>
              
            </div>
          </div>
          <div class="fc-card" onclick="fcGoTo('turf', 2)">
            <div class="fc-card-img">
              <div class="fc-card-img-bg img-relaxation"></div>
              <span class="card-img-label">Outdoor Turf</span>
            </div>
            <div class="fc-card-body">
              <h3 class="event-card-title">Relaxation <em>Spot</em></h3>
              <p class="event-card-desc">
                Energize yourself by relaxing on a cool nature-feel spot and
                shared meals in the refreshing openness of our green grounds.
              </p>
   
            </div>
          </div>
          <div class="fc-card" onclick="fcGoTo('turf', 3)">
            <div class="fc-card-img">
              <div class="fc-card-img-bg img-picnic"></div>
              <span class="card-img-label">Outdoor Turf</span>
            </div>
            <div class="fc-card-body">
              <h3 class="event-card-title"><em>Picnic</em> Experience</h3>
              <p class="event-card-desc">
                Curated picnic hampers, lawn games, chilled beverages — an
                afternoon of unhurried luxury in the open air.
              </p>
     
            </div>
          </div>
          <div class="fc-card" onclick="fcGoTo('turf', 4)">
            <div class="fc-card-img">
              <div class="fc-card-img-bg img-garden"></div>
              <span class="card-img-label">Outdoor Turf</span>
            </div>
            <div class="fc-card-body">
              <h3 class="event-card-title">The Garden <em>Oasis</em></h3>
              <p class="event-card-desc">
                Where lush greenery, tropical plants, and fresh harvests set
                the scene for every celebration.
              </p>
              
            </div>
          </div>
        </div>
      </div>
      <div class="fc-controls">
        <button
          class="fc-btn"
          onclick="fcStep('turf', -1)"
          aria-label="Previous">
          <svg viewBox="0 0 24 24">
            <polyline points="15 18 9 12 15 6"></polyline>
          </svg>
        </button>
        <span class="fc-counter"><span id="fc-turf-cur">1</span>
          <span class="fc-total">/ 5</span></span>
        <button class="fc-btn" onclick="fcStep('turf', 1)" aria-label="Next">
          <svg viewBox="0 0 24 24">
            <polyline points="9 18 15 12 9 6"></polyline>
          </svg>
        </button>
      </div>
      <div class="fc-dots" id="fc-dots-turf">
        <button class="fc-dot active" onclick="fcGoTo('turf', 0)"></button>
        <button class="fc-dot" onclick="fcGoTo('turf', 1)"></button>
        <button class="fc-dot" onclick="fcGoTo('turf', 2)"></button>
        <button class="fc-dot" onclick="fcGoTo('turf', 3)"></button>
        <button class="fc-dot" onclick="fcGoTo('turf', 4)"></button>
      </div>
    </div>
  </div>

  <div class="gold-divider"></div>

  <!-- BRAND STORY -->
  <div class="brand-story" id="story">
    <div class="brand-story-media">
      <div class="brand-story-video-placeholder">
        <!-- poster frame shown before play -->
        <img
          class="brand-story-poster"
          src="assets/images/deck/cocktail.jpg"
          alt="Urban Garden & Pier24 — Our Story" />
        <div class="brand-story-img-accent"></div>

        <!-- Inline video (plays in place, no lightbox) -->
        <video
          id="brandStoryVideo"
          class="brand-story-video"
          src="assets/videos/story.mp4"
          poster="assets/images/deck/cocktail.jpg"
          preload="metadata"
          playsinline></video>

        <!-- Click to toggle overlay (covers video while playing) -->
        <div
          class="brand-video-toggle"
          id="brandVideoToggle"
          aria-label="Pause Video"></div>

        <!-- Play button - shown at rest -->
        <button
          class="brand-ctrl-btn"
          id="brandPlayBtn"
          aria-label="Play brand video">
          <span class="brand-play-icon">
            <svg viewBox="0 0 24 24">
              <polygon points="5 3 19 12 5 21 5 3"></polygon>
            </svg>
          </span>
          <span class="brand-spinner" aria-hidden="true"></span>
        </button>

        <!-- Pause Button - shown while playing, bottom-right corner -->
        <button
          class="brand-ctrl-btn brand-pause-btn"
          id="brandPauseBtn"
          aria-label="Pause brand video">
          <svg viewBox="0 0 24 24">
            <rect x="6" y="4" width="4" height="16"></rect>
            <rect x="14" y="4" width="4" height="16"></rect>
          </svg>
        </button>
      </div>
    </div>
    <div class="brand-story-text">
      <p class="section-eyebrow">Our Story</p>
      <h2 class="section-title">
        The <em>Heart</em> Behind<br />the Experience
      </h2>
      <p class="section-body">
        Urban Garden & Pier24 was born from a simple belief — that every
        celebration deserves a space as extraordinary as the moment itself.
        From our waterfront deck to our lush open grounds, we've created two
        sanctuaries in the heart of Lagos where memories are made, toasts are
        raised, and joy has a home.
      </p>
      <a href="aboutus.php" class="story-cta">Discover Our Story</a>
    </div>
  </div>
  
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

  <!-- manual scripts -->
  <script>
    /* ── HERO MEDIA ROTATOR ── */
    (function() {
      var SWITCH_INTERVAL = 5000; // ms between switches
      var MOBILE_BREAKPOINT = 768;

      var isMobile = function() {
        return window.innerWidth <= MOBILE_BREAKPOINT;
      };

      /* ── VIDEO ROTATOR (desktop / tablet) ── */
      var videos = Array.from(document.querySelectorAll(".hero-video"));
      var currentVideo = 0;

      function initVideos() {
        if (!videos.length) return;

        // Pick a random starting video
        currentVideo = Math.floor(Math.random() * videos.length);
        var startVid = videos[currentVideo];
        startVid.classList.add("hero-media-active");
        startVid.play().catch(function() {});

        setInterval(function() {
          if (isMobile()) return; // do nothing on mobile
          var next = (currentVideo + 1) % videos.length;
          var nextVid = videos[next];

          // Preload & play next before fading in
          nextVid.currentTime = 0;
          nextVid.play().catch(function() {});
          nextVid.classList.add("hero-media-active");

          // Fade out current after brief overlap
          var outVid = videos[currentVideo];
          setTimeout(function() {
            outVid.classList.remove("hero-media-active");
            outVid.pause();
            outVid.currentTime = 0;
          }, 1200); // matches CSS transition duration

          currentVideo = next;
        }, SWITCH_INTERVAL);
      }

      /* ── IMAGE ROTATOR (mobile) ── */
      var images = Array.from(document.querySelectorAll(".hero-img"));
      var currentImg = 0;

      function initImages() {
        if (!images.length) return;
        // Ensure first image is active
        images[0].classList.add("hero-img-active");

        setInterval(function() {
          if (!isMobile()) return; // do nothing on desktop
          var next = (currentImg + 1) % images.length;
          images[next].classList.add("hero-img-active");
          var outImg = images[currentImg];
          setTimeout(function() {
            outImg.classList.remove("hero-img-active");
          }, 1000);
          currentImg = next;
        }, SWITCH_INTERVAL);
      }

      initVideos();
      initImages();
    })();
  </script>
  <!-- ── BRAND STORY VIDEO PLAYER ── -->
  <script>
    (function() {
      var video = document.getElementById("brandStoryVideo");
      var playBtn = document.getElementById("brandPlayBtn");
      var pauseBtn = document.getElementById("brandPauseBtn");
      var toggle = document.getElementById("brandVideoToggle");
      var poster = document.querySelector(".brand-story-poster");
      var playIcon = playBtn && playBtn.querySelector(".brand-play-icon");
      var spinner = playBtn && playBtn.querySelector(".brand-spinner");

      if (!video || !playBtn) return;

      function showIdle() {
        // Poster visible, play icon shown, spinner hidden

        if (poster) poster.style.opacity = "1";
        video.style.opacity = "0";
        playBtn.style.opacity = "1";
        playBtn.style.pointerEvents = "auto";
        playBtn.classList.remove("is-loading");
        if (playIcon) playIcon.style.opacity = "1";
        if (spinner) spinner.style.opacity = "0";
        toggle.style.pointerEvents = "none";
        if (pauseBtn) {
          pauseBtn.style.opacity = "0";
          pauseBtn.style.pointerEvents = "none";
        }
      }

      function showLoading() {
        // Poster still visible, spinner shown instead of play icon
        playBtn.classList.add("is-loading");
        if (playIcon) playIcon.style.opacity = "0";
        if (spinner) spinner.style.opacity = "1";
      }

      function showPlaying() {
        if (poster) poster.style.opacity = "0";
        playBtn.style.opacity = "0";
        playBtn.style.pointerEvents = "none";
        video.style.opacity = "1";
        playBtn.classList.remove("is-loading");
        toggle.style.pointerEvents = "auto"; // enable click-to-pause
        if (pauseBtn) {
          pauseBtn.style.opacity = "1";
          pauseBtn.style.pointerEvents = "auto";
        }
      }

      function showPaused() {
        playBtn.style.opacity = "1";
        playBtn.style.pointerEvents = "auto";
        if (playIcon) playIcon.style.opacity = "1";
        if (spinner) spinner.style.opacity = "0";
        playBtn.classList.remove("is-loading");
        toggle.style.pointerEvents = "none"; // disable click-to-pause
        if (pauseBtn) {
          pauseBtn.style.opacity = "0";
          pauseBtn.style.pointerEvents = "none";
        }
      }

      // ── PRELOAD ON SCROLL INTO VIEW ────────────
      // Starts buffering as soon as the section is visible — long
      // before the user clicks play — so it's ready immediately.
      var section = video.closest(".brand-story") || video.closest("section") || video.parentElement;
      if ("IntersectionObserver" in window) {
        var observer = new IntersectionObserver(function(entries) {
          entries.forEach(function(entry) {
            if (entry.isIntersecting) {
              video.preload = "auto"; // browser buffer
              observer.disconnect();
            }
          });
        }, {
          rootMargin: "200px"
        }); // start 200px before it enters viewport
        observer.observe(section);
      } else {
        video.preload = "auto"; // fallback: preload immediately
      }
      // function resetToStart() {
      //   video.style.opacity = "0";
      //   video.currentTime = 0;
      //   if (poster) poster.style.opacity = "1";
      //   showPaused();
      // }

      // ---Play
      playBtn.addEventListener("click", function() {
        if (video.readyState >= 3) {
          video.play();
          showPlaying();
          return;
        }

        // Still buffering - show spinner and wait
        showLoading();
        video.preload = "auto";

        function onReady() {
          video.removeEventListener("canplay", onReady);
          video.play();
          showPlaying();
        }
        video.addEventListener("canplay", onReady);
      });

      // ---Pause button (corner button)
      if (pauseBtn) {
        pauseBtn.addEventListener("click", function() {
          video.pause();
        });
      }

      // Click anywhere on the video to pause
      toggle.addEventListener("click", function() {
        video.pause();
      });

      // Native pause event (covers both pause sources)
      video.addEventListener("pause", function() {
        if (!video.ended) showPaused();
      });

      // On end, reset fully to poster state
      video.addEventListener("ended", function() {
        video.currentTime = 0;
        showIdle();
      });

      // INITIAL STATE
      showIdle();
    })();
  </script>
  <script src="../scripts/index.js"></script>
</body>

</html>
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Outdoor Turf | Urban Garden & Pier24</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link
    href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&family=Jost:wght@200;300;400;500&display=swap"
    rel="stylesheet" />
  <!-- Bootstrap Icons -->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <!-- manual css -->
  <link rel="stylesheet" href="styles/outdoor.css" />
</head>

<body>
  <!-- ANNOUNCEMENT BANNER -->
  <div class="announcement">
    Now booking outdoor events for 2025 —
    <a href="contact.php">Enquire about the Turf &rarr;</a>
  </div>

  <!-- NAVIGATION -->
  <nav id="mainNav">
    <a href="index.php" class="nav-logo">Urban Garden<span>& Pier24</span></a>
    <ul class="nav-links">
      <li><a href="index.php">Home</a></li>
      <li><a href="pier24deck.php">Pier24</a></li>
      <li><a href="outdoorturf.php" class="active">Outdoor Turf</a></li>
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
      <button class="drawer-close" onclick="closeDrawer()">&times;</button>
    </div>
    <ul class="drawer-links">
      <li><a href="index.php" onclick="closeDrawer()">Home</a></li>
      <li>
        <a href="pier24deck.php" onclick="closeDrawer()">Pier24</a>
      </li>
      <li>
        <a href="outdoorturf.php" class="active" onclick="closeDrawer()">Outdoor Turf</a>
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
    <div class="hero-bg"></div>
    <div class="hero-shimmer"></div>
    <div class="hero-ground"></div>
    <div class="hero-texture"></div>
    <div class="hero-line-v"></div>
    <div class="hero-content">
      <div class="hero-badge">
        <div class="hero-badge-dot"></div>
        <span class="hero-badge-text">Urban Garden · Ikoyi · Lagos</span>
        <div class="hero-badge-dot"></div>
      </div>
      <h1 class="hero-title">Outdoor Turf</h1>
      <p class="hero-title-sub">Where the Sky Is Your Ceiling</p>
      <p class="hero-desc">
        A manicured expanse of lush green beneath the open Lagos sky — an al
        fresco sanctuary for celebrations that breathe life, light, and the
        freedom of the open air.
      </p>
      <div class="hero-ctas">
        <a href="contact.php" class="cta-primary">Reserve the Turf</a>
        <a href="#about" class="cta-outline">Explore the Venue</a>
      </div>
    </div>
    <div class="scroll-hint">
      <div class="scroll-line"></div>
      Discover more
    </div>
  </section>

  <!-- STATS STRIP -->
  <div class="stats-strip">
    <div class="stat-item">
      <div class="stat-num">300+</div>
      <div class="stat-label">Guests</div>
    </div>
    <div class="stat-item">
      <div class="stat-num">5+</div>
      <div class="stat-label">Event Types</div>
    </div>
    <div class="stat-item">
      <div class="stat-num">Open</div>
      <div class="stat-label">Air Venue</div>
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
    <span class="current">Outdoor Turf</span>
  </div>

  <div class="gold-divider"></div>

  <!-- ABOUT SECTION -->
  <div class="about-section" id="about">
    <div class="about-visual">
      <div class="leaf-orb leaf-orb-1"></div>
      <div class="leaf-orb leaf-orb-2"></div>
      <div class="leaf-orb leaf-orb-3"></div>
      <div class="about-visual-glow"></div>
      <div class="about-visual-content">
        <div class="about-visual-icon">
          <!-- Leaf / nature icon -->
          <svg
            viewBox="0 0 48 48"
            fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
              d="M8 40 C14 28 22 16 40 8 C40 8 42 28 28 36 C20 40 12 38 8 40Z"
              stroke="#C9A96E"
              stroke-width="1"
              fill="none" />
            <path
              d="M8 40 C16 32 24 24 32 20"
              stroke="#C9A96E"
              stroke-width="1" />
          </svg>
        </div>
        <p class="about-visual-tagline">
          "There is magic in gathering beneath an open sky"
        </p>
      </div>
      <div class="about-visual-grass"></div>
    </div>
    <div class="about-text">
      <p class="section-eyebrow">About the Venue</p>
      <h2 class="section-title">
        Lagos's Premier <em>Open-Air</em><br />Event Space
      </h2>
      <p class="section-body">
        The Urban Garden Outdoor Turf is a lush, manicured green space nestled
        in the heart of Ikoyi Lagos — a rare urban oasis that offers the
        freedom and beauty of the outdoors without sacrificing the refinement
        and service of a premium event venue.
      </p>
      <p class="section-body" style="margin-top: 16px">
        With a capacity of up to 330 guests and a blank-canvas layout, the
        Turf adapts effortlessly to any vision — from fairy-light garden
        parties and outdoor weddings to team-building days and sunset picnics.
        Whatever your occasion, we provide the perfect green backdrop and
        handle every detail.
      </p>
      <a href="contact.php" class="about-link">Enquire About the Turf &rarr;</a>
    </div>
  </div>

  <div class="gold-divider"></div>

  <!-- EXPERIENCE TABS -->
  <div class="experience-section" id="experience">
    <div class="exp-header">
      <p class="section-eyebrow">The Experience</p>
      <h2 class="section-title" style="margin-bottom: 0">
        What We <em>Offer</em>
      </h2>
    </div>
    <div class="exp-tabs">
      <button class="exp-tab active" onclick="switchExp(this, 'setup')">
        Setup & Décor
      </button>
      <button class="exp-tab" onclick="switchExp(this, 'catering')">
        Catering & Bar
      </button>
      <button class="exp-tab" onclick="switchExp(this, 'entertainment')">
        Entertainment
      </button>
    </div>

    <!-- Setup & Décor -->
    <div class="exp-panel active" id="exp-setup">
      <div class="exp-card">
        <div class="exp-card-num">01</div>
        <div class="exp-card-icon">
          <svg viewBox="0 0 24 24">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
          </svg>
        </div>
        <h3 class="exp-card-title">Marquees & <em>Canopies</em></h3>
        <p class="exp-card-body">
          From elegant stretch tents to open-sided marquees — we provide
          weather-appropriate structures that keep your event comfortable and
          stylish regardless of conditions.
        </p>
        <span class="exp-card-tag">Stretch Tents · Marquees · Canopies</span>
      </div>
      <div class="exp-card">
        <div class="exp-card-num">02</div>
        <div class="exp-card-icon">
          <svg viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="5" />
            <line x1="12" y1="1" x2="12" y2="3" />
            <line x1="12" y1="21" x2="12" y2="23" />
            <line x1="4.22" y1="4.22" x2="5.64" y2="5.64" />
            <line x1="18.36" y1="18.36" x2="19.78" y2="19.78" />
            <line x1="1" y1="12" x2="3" y2="12" />
            <line x1="21" y1="12" x2="23" y2="12" />
            <line x1="4.22" y1="19.78" x2="5.64" y2="18.36" />
            <line x1="18.36" y1="5.64" x2="19.78" y2="4.22" />
          </svg>
        </div>
        <h3 class="exp-card-title">Fairy Lights &amp; <em>Ambiance</em></h3>
        <p class="exp-card-body">
          Canopy fairy lights, lanterns, festoon bulbs and garden torches — we
          transform the Turf into a magical glowing wonderland as the Lagos
          sun sets each evening.
        </p>
        <span class="exp-card-tag">Fairy Lights · Lanterns · Torches</span>
      </div>
      <div class="exp-card">
        <div class="exp-card-num">03</div>
        <div class="exp-card-icon">
          <svg viewBox="0 0 24 24">
            <path
              d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
          </svg>
        </div>
        <h3 class="exp-card-title">Floral &amp; <em>Styling</em></h3>
        <p class="exp-card-body">
          Bespoke floral arrangements, themed table styling, custom arch
          builds, petal pathways, and full event décor packages tailored to
          your colour palette and vision.
        </p>
        <span class="exp-card-tag">Florals · Arches · Custom Themes</span>
      </div>
    </div>

    <!-- Catering & Bar -->
    <div class="exp-panel" id="exp-catering">
      <div class="exp-card">
        <div class="exp-card-num">01</div>
        <div class="exp-card-icon">
          <svg viewBox="0 0 24 24">
            <path d="M18 8h1a4 4 0 0 1 0 8h-1" />
            <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z" />
            <line x1="6" y1="1" x2="6" y2="4" />
            <line x1="10" y1="1" x2="10" y2="4" />
            <line x1="14" y1="1" x2="14" y2="4" />
          </svg>
        </div>
        <h3 class="exp-card-title">Outdoor <em>Feasts</em></h3>
        <p class="exp-card-body">
          Garden-style buffets, BBQ stations, grazing tables, and picnic
          spreads — our catering team curates al fresco menus designed for the
          open air experience.
        </p>
        <span class="exp-card-tag">BBQ · Buffet · Grazing Tables</span>
      </div>
      <div class="exp-card">
        <div class="exp-card-num">02</div>
        <div class="exp-card-icon">
          <svg viewBox="0 0 24 24">
            <path
              d="M8 22H5a2 2 0 0 1-2-2V6l3-4h12l3 4v14a2 2 0 0 1-2 2h-3" />
            <line x1="12" y1="10" x2="12" y2="22" />
            <polyline points="8 10 12 6 16 10" />
          </svg>
        </div>
        <h3 class="exp-card-title">Garden <em>Bar</em></h3>
        <p class="exp-card-body">
          A fully stocked open-air bar with craft cocktails, chilled wines,
          local spirits, and non-alcoholic options — served with the Lagos
          breeze as your natural companion.
        </p>
        <span class="exp-card-tag">Cocktails · Wine · Fresh Juices</span>
      </div>
      <div class="exp-card">
        <div class="exp-card-num">03</div>
        <div class="exp-card-icon">
          <svg viewBox="0 0 24 24">
            <path d="M3 11l19-9-9 19-2-8-8-2z" />
          </svg>
        </div>
        <h3 class="exp-card-title">Picnic <em>Hampers</em></h3>
        <p class="exp-card-body">
          Curated luxury picnic hampers with artisan foods, chilled drinks,
          and all the accessories — laid out on our blanket-and-cushion picnic
          setups for a relaxed outdoor luxury experience.
        </p>
        <span class="exp-card-tag">Hampers · Cushion Seating · Artisan Food</span>
      </div>
    </div>

    <!-- Entertainment -->
    <div class="exp-panel" id="exp-entertainment">
      <div class="exp-card">
        <div class="exp-card-num">01</div>
        <div class="exp-card-icon">
          <svg viewBox="0 0 24 24">
            <polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5" />
            <path d="M15.54 8.46a5 5 0 0 1 0 7.07" />
          </svg>
        </div>
        <h3 class="exp-card-title">Live <em>Music</em></h3>
        <p class="exp-card-body">
          From Afrobeats bands and jazz ensembles to acoustic soloists and DJ
          sets — we coordinate world-class live entertainment to set the
          perfect mood under the open sky.
        </p>
        <span class="exp-card-tag">Live Bands · DJ · Acoustic Sets</span>
      </div>
      <div class="exp-card">
        <div class="exp-card-num">02</div>
        <div class="exp-card-icon">
          <svg viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="10" />
            <polygon points="10 8 16 12 10 16 10 8" />
          </svg>
        </div>
        <h3 class="exp-card-title">Outdoor <em>Cinema</em></h3>
        <p class="exp-card-body">
          Private outdoor screening setups on the Turf — inflatable screens,
          projectors, and cosy seating for film nights, sports events, or
          custom video presentations under the stars.
        </p>
        <span class="exp-card-tag">Projection · Inflatable Screen · Custom Shows</span>
      </div>
      <div class="exp-card">
        <div class="exp-card-num">03</div>
        <div class="exp-card-icon">
          <svg viewBox="0 0 24 24">
            <rect x="3" y="3" width="18" height="18" rx="2" />
            <path d="M3 9h18M9 21V9" />
          </svg>
        </div>
        <h3 class="exp-card-title">Lawn <em>Games</em></h3>
        <p class="exp-card-body">
          Giant Jenga, croquet, boules, sack races and more — our lawn games
          package brings energy and laughter to garden parties, corporate
          days, and family gatherings alike.
        </p>
        <span class="exp-card-tag">Jenga · Croquet · Team Activities</span>
      </div>
    </div>
  </div>

  <div class="gold-divider"></div>

  <!-- CAPACITY SECTION -->
  <div class="capacity-section" id="capacity">
    <div class="capacity-bg"></div>
    <div class="capacity-inner">
      <p class="section-eyebrow" style="color: var(--gold)">
        Capacity & Layout
      </p>
      <h2 class="section-title" style="color: var(--cream)">
        The <em>Space</em>
      </h2>
      <p
        class="section-body"
        style="color: rgba(201, 169, 110, 0.5); max-width: 560px">
        The Outdoor Turf is our most versatile space — a blank green canvas
        that scales beautifully from intimate gatherings to grand
        celebrations. Here's what it can hold.
      </p>
      <div class="capacity-grid">
        <div class="cap-card">
          <div class="cap-icon">
            <svg viewBox="0 0 24 24">
              <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
              <circle cx="9" cy="7" r="4" />
              <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
              <path d="M16 3.13a4 4 0 0 1 0 7.75" />
            </svg>
          </div>
          <div class="cap-num">300+</div>
          <div class="cap-label">Capacity</div>
          <p class="cap-desc">
            Full outdoor capacity for large celebrations — weddings,
            festivals, and corporate events with marquee cover and full bar
            service.
          </p>
        </div>
        <div class="cap-card">
          <div class="cap-icon">
            <svg viewBox="0 0 24 24">
              <rect x="3" y="8" width="18" height="12" rx="2" />
              <path d="M7 8V6a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v2" />
              <line x1="12" y1="12" x2="12" y2="16" />
              <line x1="10" y1="14" x2="14" y2="14" />
            </svg>
          </div>
          <div class="cap-num">50+</div>
          <div class="cap-label">Seated Dining</div>
          <p class="cap-desc">
            Comfortable garden-style seated dining for 150 guests with round
            tables, full table service, and ambient lighting throughout.
          </p>
        </div>
        <div class="cap-card">
          <div class="cap-icon">
            <svg viewBox="0 0 24 24">
              <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
              <polyline points="9 22 9 12 15 12 15 22" />
            </svg>
          </div>
          <div class="cap-num">1</div>
          <div class="cap-label">Guests Chalet</div>
          <p class="cap-desc">
            One ensuite guests chalet (sitting room, dinning room, ensuite bedroom).
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="gold-divider"></div>

  <!-- EVENTS GRID -->
  <div class="events-section" id="events">
    <p class="section-eyebrow">Events on the Turf</p>
    <h2 class="section-title">Occasions We <em>Host</em></h2>
    <p class="section-body" style="max-width: 540px">
      Open air. Open hearts. The Outdoor Turf has been the setting for some of
      Lagos's most memorable celebrations — here's what we specialise in.
    </p>
    <div class="events-grid">
      <!-- Large tile -->
      <div class="event-tile large">
        <div class="event-tile-bg bg-garden"></div>
        <div class="event-tile-overlay"></div>
        <div class="event-tile-content">
          <p class="event-tile-tag">Most Popular</p>
          <h3 class="event-tile-title"><em>Garden</em><br />Party</h3>
          <p class="event-tile-desc">
            Lush grounds, twinkling lights as the sun sets, flowing cocktails
            and great company — a Lagos garden party done with true elegance
            and heart.
          </p>
          <a href="contact.php" class="event-tile-link">Plan Your Party &rarr;</a>
        </div>
      </div>
      <!-- Two stacked -->
      <div style="display: flex; flex-direction: column; gap: 2px">
        <div class="event-tile">
          <div class="event-tile-bg bg-wedding" style="height: 249px"></div>
          <div class="event-tile-overlay"></div>
          <div class="event-tile-content">
            <p class="event-tile-tag">Weddings</p>
            <h3 class="event-tile-title">Outdoor <em>Wedding</em></h3>
            <p class="event-tile-desc">
              Vows beneath the open sky on our manicured turf — naturally
              breathtaking.
            </p>
            <a href="contact.php" class="event-tile-link">Plan Your Wedding &rarr;</a>
          </div>
        </div>
        <div class="event-tile">
          <div class="event-tile-bg bg-picnic" style="height: 249px"></div>
          <div class="event-tile-overlay"></div>
          <div class="event-tile-content">
            <p class="event-tile-tag">Relaxed</p>
            <h3 class="event-tile-title"><em>Picnic</em> Experience</h3>
            <p class="event-tile-desc">
              Curated hampers, lawn games, and the warm Lagos afternoon
              breeze.
            </p>
            <a href="contact.php" class="event-tile-link">Book a Picnic &rarr;</a>
          </div>
        </div>
      </div>
      <!-- Bottom row -->
      <div class="event-tile">
        <div class="event-tile-bg bg-view"></div>
        <div class="event-tile-overlay"></div>
        <div class="event-tile-content">
          <p class="event-tile-tag">Photography</p>
          <h3 class="event-tile-title">Side <em>View</em></h3>
          <p class="event-tile-desc">
            Outdoor activities, shared meals and a setting that inspires
            genuine connection.
          </p>
          <a href="contact.php" class="event-tile-link">Enquire Now &rarr;</a>
        </div>
      </div>
      <div class="event-tile">
        <div class="event-tile-bg bg-summit"></div>
        <div class="event-tile-overlay"></div>
        <div class="event-tile-content">
          <p class="event-tile-tag">Creative</p>
          <h3 class="event-tile-title">Garden &amp; <em>Summit</em></h3>
          <p class="event-tile-desc">
            Sunset drinks on the lawn — cocktails, music, and the warm evening
            breeze.
          </p>
          <a href="contact.php" class="event-tile-link">Book a Session &rarr;</a>
        </div>
      </div>
    </div>
  </div>

  <!-- WHAT TO EXPECT -->
  <div class="expect-section">
    <p class="section-eyebrow">How It Works</p>
    <h2 class="section-title">What to <em>Expect</em></h2>
    <p class="section-body" style="max-width: 540px">
      From your first enquiry to the last guest departing, here's how we
      ensure every outdoor event on the Turf is seamless and extraordinary.
    </p>
    <div class="expect-grid">
      <div class="expect-item">
        <div class="expect-num">01</div>
        <div class="expect-text">
          <h3 class="expect-title">Your <em>Enquiry</em></h3>
          <p class="expect-body">
            Submit your enquiry via our contact form or call us directly.
            We'll respond within 24 hours with availability, pricing, and a
            brief introduction from your events coordinator.
          </p>
        </div>
      </div>
      <div class="expect-item">
        <div class="expect-num">02</div>
        <div class="expect-text">
          <h3 class="expect-title">Site <em>Visit</em></h3>
          <p class="expect-body">
            We invite you to walk the Turf in person — see the space, meet
            your coordinator, and start imagining how we'll bring your vision
            to life on the grounds.
          </p>
        </div>
      </div>
      <div class="expect-item">
        <div class="expect-num">03</div>
        <div class="expect-text">
          <h3 class="expect-title">Planning &amp; <em>Design</em></h3>
          <p class="expect-body">
            Your coordinator works with you on every element — layout, décor,
            catering, entertainment, and logistics. We handle the planning so
            you can focus on the excitement.
          </p>
        </div>
      </div>
      <div class="expect-item">
        <div class="expect-num">04</div>
        <div class="expect-text">
          <h3 class="expect-title">Setup <em>Day</em></h3>
          <p class="expect-body">
            Our crew arrives early to set up marquees, lighting, furnishings,
            florals, catering stations, and everything in between — leaving
            you with nothing to do but arrive and enjoy.
          </p>
        </div>
      </div>
      <div class="expect-item">
        <div class="expect-num">05</div>
        <div class="expect-text">
          <h3 class="expect-title">Your <em>Event</em></h3>
          <p class="expect-body">
            The day arrives. Your coordinator is on-site throughout, managing
            staff, timing, and any last-minute needs — so your event runs
            flawlessly from first guest to last dance.
          </p>
        </div>
      </div>
      <div class="expect-item">
        <div class="expect-num">06</div>
        <div class="expect-text">
          <h3 class="expect-title">Memories <em>Made</em></h3>
          <p class="expect-body">
            After the event, we take care of full breakdown and cleanup. You
            leave with nothing but incredible memories — and usually, a
            request to book your next event too.
          </p>
        </div>
      </div>
    </div>
  </div>

  <!-- AMENITIES -->
  <div class="amenities-section" id="amenities">
    <div class="amenities-bg"></div>
    <div class="amenities-inner">
      <p class="section-eyebrow" style="color: var(--gold)">Venue Features</p>
      <h2 class="section-title" style="color: var(--cream)">
        Everything You <em>Need</em>
      </h2>
      <p
        class="section-body"
        style="color: rgba(201, 169, 110, 0.5); max-width: 520px">
        The Outdoor Turf comes fully equipped for seamless event delivery. Our
        team handles every operational detail so your guests experience only
        the best.
      </p>
      <div class="amenities-grid">
        <div class="amenity-item">
          <div class="amenity-icon">
            <svg viewBox="0 0 24 24">
              <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
              <polyline points="9 22 9 12 15 12 15 22" />
            </svg>
          </div>
          <h4 class="amenity-title">Manicured Grounds</h4>
          <p class="amenity-desc">
            Pristine, well-maintained green turf kept in perfect condition for
            every event.
          </p>
        </div>
        <div class="amenity-item">
          <div class="amenity-icon">
            <svg viewBox="0 0 24 24">
              <path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z" />
            </svg>
          </div>
          <h4 class="amenity-title">Marquee Structures</h4>
          <p class="amenity-desc">
            Stretch tents and marquees available for weather cover without
            compromising the open-air feel.
          </p>
        </div>
        <div class="amenity-item">
          <div class="amenity-icon">
            <svg viewBox="0 0 24 24">
              <polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5" />
              <path d="M15.54 8.46a5 5 0 0 1 0 7.07" />
            </svg>
          </div>
          <h4 class="amenity-title">Outdoor Sound</h4>
          <p class="amenity-desc">
            Weatherproof sound system with full outdoor coverage for music,
            speeches, and entertainment.
          </p>
        </div>
        <div class="amenity-item">
          <div class="amenity-icon">
            <svg viewBox="0 0 24 24">
              <circle cx="12" cy="12" r="5" />
              <line x1="12" y1="1" x2="12" y2="3" />
              <line x1="12" y1="21" x2="12" y2="23" />
              <line x1="4.22" y1="4.22" x2="5.64" y2="5.64" />
              <line x1="18.36" y1="18.36" x2="19.78" y2="19.78" />
              <line x1="1" y1="12" x2="3" y2="12" />
              <line x1="21" y1="12" x2="23" y2="12" />
              <line x1="4.22" y1="19.78" x2="5.64" y2="18.36" />
              <line x1="18.36" y1="5.64" x2="19.78" y2="4.22" />
            </svg>
          </div>
          <h4 class="amenity-title">Garden Lighting</h4>
          <p class="amenity-desc">
            Fairy lights, festoon bulbs, lanterns and uplighting to transform
            the Turf after sunset.
          </p>
        </div>
        <div class="amenity-item">
          <div class="amenity-icon">
            <svg viewBox="0 0 24 24">
              <rect x="1" y="3" width="15" height="13" rx="2" />
              <polygon points="16 8 20 8 23 11 23 16 16 16 16 8" />
              <circle cx="5.5" cy="18.5" r="2.5" />
              <circle cx="18.5" cy="18.5" r="2.5" />
            </svg>
          </div>
          <h4 class="amenity-title">Ample Parking</h4>
          <p class="amenity-desc">
            Spacious on-site parking with security attendants for all guest
            vehicles.
          </p>
        </div>
        <div class="amenity-item">
          <div class="amenity-icon">
            <svg viewBox="0 0 24 24">
              <path
                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 1.18h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.37a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7a2 2 0 0 1 1.72 2.01z" />
            </svg>
          </div>
          <h4 class="amenity-title">Events Hotline</h4>
          <p class="amenity-desc">
            Direct line to your coordinator on event day — any need handled
            within minutes.
          </p>
        </div>
        <div class="amenity-item">
          <div class="amenity-icon">
            <svg viewBox="0 0 24 24">
              <path
                d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" />
              <circle cx="12" cy="13" r="4" />
            </svg>
          </div>
          <h4 class="amenity-title">Photography</h4>
          <p class="amenity-desc">
            In-house photography and videography packages to capture every
            golden-hour moment.
          </p>
        </div>
        <div class="amenity-item">
          <div class="amenity-icon">
            <svg viewBox="0 0 24 24">
              <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
              <circle cx="9" cy="7" r="4" />
              <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
              <path d="M16 3.13a4 4 0 0 1 0 7.75" />
            </svg>
          </div>
          <h4 class="amenity-title">Dedicated Coordinator</h4>
          <p class="amenity-desc">
            A personal events coordinator manages your booking end-to-end —
            from planning to pack-down.
          </p>
        </div>
      </div>
    </div>
  </div>

  <!-- GALLERY STRIP -->
  <div class="gallery-strip">
    <div class="gallery-thumb">
      <div class="gallery-thumb-bg gt-1"></div>
      <div class="gallery-thumb-overlay"></div>
      <span class="gallery-thumb-label">The Turf</span>
    </div>
    <div class="gallery-thumb">
      <div class="gallery-thumb-bg gt-2"></div>
      <div class="gallery-thumb-overlay"></div>
      <span class="gallery-thumb-label">Garden Part</span>
    </div>
    <div class="gallery-thumb">
      <div class="gallery-thumb-bg gt-3"></div>
      <div class="gallery-thumb-overlay"></div>
      <span class="gallery-thumb-label">Bar</span>
    </div>
    <div class="gallery-thumb">
      <div class="gallery-thumb-bg gt-4"></div>
      <div class="gallery-thumb-overlay"></div>
      <span class="gallery-thumb-label">Sunset</span>
    </div>
    <div class="gallery-thumb">
      <div class="gallery-thumb-bg gt-5"></div>
      <div class="gallery-thumb-overlay"></div>
      <span class="gallery-thumb-label">Evening</span>
    </div>
  </div>

  <div class="gold-divider"></div>

  <!-- TESTIMONIALS -->
  <div class="testimonials-section">
    <p class="section-eyebrow">Guest Reviews</p>
    <h2 class="section-title">What Our <em>Guests</em> Say</h2>
    <div class="testimonials-grid">
      <div class="testimonial-card">
        <div class="testimonial-stars">
          <svg class="star" viewBox="0 0 24 24">
            <polygon
              points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
          </svg>
          <svg class="star" viewBox="0 0 24 24">
            <polygon
              points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
          </svg>
          <svg class="star" viewBox="0 0 24 24">
            <polygon
              points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
          </svg>
          <svg class="star" viewBox="0 0 24 24">
            <polygon
              points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
          </svg>
          <svg class="star" viewBox="0 0 24 24">
            <polygon
              points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
          </svg>
        </div>
        <div class="testimonial-quote">"</div>
        <p class="testimonial-text">
          We had our wedding reception on the Outdoor Turf and it was beyond
          anything we imagined. The fairy lights, the green grass, the open
          sky at sunset — it was like a dream. Our guests are still talking
          about it.
        </p>
        <div class="testimonial-divider"></div>
        <p class="testimonial-name">Tunde & Blessing M.</p>
        <p class="testimonial-event">Outdoor Wedding, 2024</p>
      </div>
      <div class="testimonial-card">
        <div class="testimonial-stars">
          <svg class="star" viewBox="0 0 24 24">
            <polygon
              points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
          </svg>
          <svg class="star" viewBox="0 0 24 24">
            <polygon
              points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
          </svg>
          <svg class="star" viewBox="0 0 24 24">
            <polygon
              points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
          </svg>
          <svg class="star" viewBox="0 0 24 24">
            <polygon
              points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
          </svg>
          <svg class="star" viewBox="0 0 24 24">
            <polygon
              points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
          </svg>
        </div>
        <div class="testimonial-quote">"</div>
        <p class="testimonial-text">
          Organised a team-building day for 80 staff on the Turf. The lawn
          games, the BBQ, the atmosphere — everyone left energised and
          genuinely bonded. The Urban Garden team made it completely
          effortless for us to plan.
        </p>
        <div class="testimonial-divider"></div>
        <p class="testimonial-name">Seun A., HR Director</p>
        <p class="testimonial-event">Corporate Team Day, 2025</p>
      </div>
      <div class="testimonial-card">
        <div class="testimonial-stars">
          <svg class="star" viewBox="0 0 24 24">
            <polygon
              points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
          </svg>
          <svg class="star" viewBox="0 0 24 24">
            <polygon
              points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
          </svg>
          <svg class="star" viewBox="0 0 24 24">
            <polygon
              points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
          </svg>
          <svg class="star" viewBox="0 0 24 24">
            <polygon
              points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
          </svg>
          <svg class="star" viewBox="0 0 24 24">
            <polygon
              points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
          </svg>
        </div>
        <div class="testimonial-quote">"</div>
        <p class="testimonial-text">
          Booked the picnic experience for my mum's birthday and it was
          perfect — the hampers, the décor, the lawn setup. She cried happy
          tears. I cannot recommend Urban Garden enough for an intimate
          outdoor celebration.
        </p>
        <div class="testimonial-divider"></div>
        <p class="testimonial-name">Kemi O.</p>
        <p class="testimonial-event">Birthday Picnic, 2025</p>
      </div>
    </div>
  </div>

  <!-- COMPARE VENUES BANNER -->
  <div class="compare-banner">
    <div class="compare-text">
      <p>Also Available</p>
      <h3>Looking for something more <em>intimate</em>?</h3>
    </div>
    <a href="pier24deck.php" class="compare-link">Explore Pier24 &rarr;</a>
  </div>

  <!-- BOOKING CTA -->
  <div class="booking-cta">
    <div class="booking-cta-bg"></div>
    <div class="booking-cta-content">
      <p class="booking-cta-eyebrow">Reserve the Outdoor Turf</p>
      <h2 class="booking-cta-title">
        Your <em>Perfect</em><br />Day Outdoors
      </h2>
      <p class="booking-cta-body">
        The Outdoor Turf is one of Lagos's most versatile and sought-after
        open-air event spaces. Dates go fast — reach out today to check
        availability and begin planning your extraordinary event.
      </p>
      <div class="booking-cta-actions">
        <a href="contact.php" class="cta-primary">Book the Turf</a>
        <a href="tel:+2348000000000" class="cta-outline">Call Us Directly</a>
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

  <!-- manual script -->
  <script src="scripts/outdoor.js"></script>
</body>

</html>
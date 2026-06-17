<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pier24 — The Deck | Urban Garden & Pier24</title>
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
  <link rel="stylesheet" href="styles/pier24style.css" />
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
      <li><a href="pier24deck.php" class="active">Pier24</a></li>
      <li><a href="outdoorturf.php">Outdoor Turf</a></li>
      <li><a href="gallery.php">Gallery</a></li>
      <li><a href="contact.php">Contact</a></li>
      <li><a href="aboutus.php">About Us</a></li>
    </ul>
    <a href="contact.php" class="btn-book">Book Now</a>
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
        <a href="pier24deck.php" class="active" onclick="closeDrawer()">Pier24</a>
      </li>
      <li>
        <a href="outdoorturf.php" onclick="closeDrawer()">Outdoor Turf</a>
      </li>
      <li><a href="gallery.php" onclick="closeDrawer()">Gallery</a></li>
      <li><a href="contact.php" onclick="closeDrawer()">Contact</a></li>
      <li><a href="aboutus.php" onclick="closeDrawer()">About Us</a></li>
    </ul>
    <a href="contact.php" class="drawer-book" onclick="closeDrawer()">Book Now</a>
  </div>

  <!-- HERO -->
  <section class="hero">
    <div class="hero-bg"></div>
    <div class="hero-shimmer"></div>
    <div class="hero-water"></div>
    <div class="hero-water-lines"></div>
    <div class="hero-line-v"></div>
    <div class="hero-content">
      <div class="hero-badge">
        <div class="hero-badge-dot"></div>
        <span class="hero-badge-text">Pier24 · Ikoyi · Lagos</span>
        <div class="hero-badge-dot"></div>
      </div>
      <h1 class="hero-title">Pier24</h1>
      <p class="hero-title-sub">Where the Water Meets Elegance</p>
      <p class="hero-desc">
        Perched above the Lagos waterfront, The Deck at Pier24 is an intimate
        sanctuary of elevated experiences — where every gathering becomes a
        memory etched against the city skyline.
      </p>
      <div class="hero-ctas">
        <a href="contact.php" class="cta-primary">Reserve The Deck</a>
        <a href="#about" class="cta-outline">Explore The Venue</a>
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
      <div class="stat-num">100+</div>
      <div class="stat-label">Guests</div>
    </div>
    <div class="stat-item">
      <div class="stat-num">6+</div>
      <div class="stat-label">Event Types</div>
    </div>
    <div class="stat-item">
      <div class="stat-num">Good°</div>
      <div class="stat-label">Waterfront Views</div>
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
    <span class="current">Pier24</span>
  </div>

  <div class="gold-divider"></div>

  <!-- ABOUT SECTION -->
  <div class="about-section" id="about">
    <div class="about-visual">
      <div class="about-orb orb-1"></div>
      <div class="about-orb orb-2"></div>
      <div class="about-visual-glow"></div>
      <div class="about-visual-content">
        <div class="about-visual-icon">
          <!-- Anchor / pier icon -->
          <svg
            viewBox="0 0 48 48"
            fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <circle cx="24" cy="12" r="5" stroke="#C9A96E" stroke-width="1" />
            <line
              x1="24"
              y1="17"
              x2="24"
              y2="40"
              stroke="#C9A96E"
              stroke-width="1" />
            <path
              d="M12 28 C12 36 36 36 36 28"
              stroke="#C9A96E"
              stroke-width="1"
              fill="none" />
            <line
              x1="12"
              y1="22"
              x2="36"
              y2="22"
              stroke="#C9A96E"
              stroke-width="1" />
          </svg>
        </div>
        <p class="about-visual-tagline">
          "An evening on The Deck is an evening you will never forget"
        </p>
      </div>
    </div>
    <div class="about-text">
      <p class="section-eyebrow">About The Venue</p>
      <h2 class="section-title">
        Lagos's Most <em>Intimate</em><br />Waterfront Experience
      </h2>
      <p class="section-body">
        Pier24 — The Pier24 is a premium event space situated directly on the
        Lagos waterfront in Ikoyi. With panoramic views of the water and the
        glittering city skyline, it offers a setting that is at once intimate
        and spectacular.
      </p>
      <p class="section-body" style="margin-top: 16px">
        Designed with a philosophy of understated luxury, The Deck blends
        natural waterfront beauty with refined design details — warm lighting,
        curated furnishings, and a layout that encourages meaningful
        connection. Whether you're celebrating love, milestones, or simply
        life, The Deck rises to every occasion.
      </p>
      <a href="contact.php" class="about-link" style="margin-top: 8px">Enquire About Pier24 &rarr;</a>
    </div>
  </div>

  <div class="gold-divider"></div>

  <!-- EXPERIENCE TABS -->
  <div class="experience-section" id="experience">
    <div class="exp-header">
      <div>
        <p class="section-eyebrow">The Experience</p>
        <h2 class="section-title" style="margin-bottom: 0">
          What We <em>Offer</em>
        </h2>
      </div>
    </div>
    <div class="exp-tabs">
      <button class="exp-tab active" onclick="switchExp(this, 'dining')">
        Dining & Bar
      </button>
      <button class="exp-tab" onclick="switchExp(this, 'events')">
        Events
      </button>
      <button class="exp-tab" onclick="switchExp(this, 'setup')">
        Setup & Décor
      </button>
    </div>

    <!-- Dining -->
    <div class="exp-panel active" id="exp-dining">
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
        <h3 class="exp-card-title">Curated <em>Menus</em></h3>
        <p class="exp-card-body">
          Our resident chefs craft bespoke menus tailored to your event — from
          intimate 5-course dinners to lavish cocktail spreads. Every dish
          tells a story, every plate is a canvas.
        </p>
        <span class="exp-card-tag">Fine Dining · Canapés · Buffet</span>
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
        <h3 class="exp-card-title">Signature <em>Cocktails</em></h3>
        <p class="exp-card-body">
          Our mixologist curates a bespoke drinks menu for every occasion —
          from sparkling welcome drinks to crafted signature cocktails that
          become a conversation piece of their own.
        </p>
        <span class="exp-card-tag">Cocktails · Wine · Mocktails</span>
      </div>
      <div class="exp-card">
        <div class="exp-card-num">03</div>
        <div class="exp-card-icon">
          <svg viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="10" />
            <polyline points="12 6 12 12 16 14" />
          </svg>
        </div>
        <h3 class="exp-card-title">Private <em>Service</em></h3>
        <p class="exp-card-body">
          Every booking on Pier24 comes with dedicated wait staff, and table
          service throughout the evening — nothing is left to chance.
        </p>
        <span class="exp-card-tag">Dedicated Staff · Table Service</span>
      </div>
    </div>

    <!-- Events -->
    <div class="exp-panel" id="exp-events">
      <div class="exp-card">
        <div class="exp-card-num">01</div>
        <div class="exp-card-icon">
          <svg viewBox="0 0 24 24">
            <path
              d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
          </svg>
        </div>
        <h3 class="exp-card-title">Romantic <em>Occasions</em></h3>
        <p class="exp-card-body">
          Valentine's dinners, proposals, anniversary celebrations — The Deck
          transforms into a private romantic sanctuary, dressed in candlelight
          and blooms over the water.
        </p>
        <span class="exp-card-tag">Valentine's · Proposals · Anniversaries</span>
      </div>
      <div class="exp-card">
        <div class="exp-card-num">02</div>
        <div class="exp-card-icon">
          <svg viewBox="0 0 24 24">
            <rect x="3" y="4" width="18" height="18" rx="2" ry="2" />
            <line x1="16" y1="2" x2="16" y2="6" />
            <line x1="8" y1="2" x2="8" y2="6" />
            <line x1="3" y1="10" x2="21" y2="10" />
          </svg>
        </div>
        <h3 class="exp-card-title">Celebrations & <em>Parties</em></h3>
        <p class="exp-card-body">
          Birthdays, milestones, and personal celebrations — we'll handle
          every detail from décor and music to catering, so all you need to do
          is enjoy every single moment.
        </p>
        <span class="exp-card-tag">Birthdays · Milestones · Sip & Paint</span>
      </div>
      <div class="exp-card">
        <div class="exp-card-num">03</div>
        <div class="exp-card-icon">
          <svg viewBox="0 0 24 24">
            <rect x="2" y="7" width="20" height="14" rx="2" ry="2" />
            <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16" />
          </svg>
        </div>
        <h3 class="exp-card-title">Corporate <em>Experiences</em></h3>
        <p class="exp-card-body">
          Entertain clients, reward your team, or host executive dinners with
          the Lagos skyline as your boardroom backdrop. The Deck impresses on
          every level.
        </p>
        <span class="exp-card-tag">Client Dinners · Team Events · Retreats</span>
      </div>
    </div>

    <!-- Setup -->
    <div class="exp-panel" id="exp-setup">
      <div class="exp-card">
        <div class="exp-card-num">01</div>
        <div class="exp-card-icon">
          <svg viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="3" />
            <path
              d="M19.07 4.93a10 10 0 0 1 0 14.14M4.93 4.93a10 10 0 0 0 0 14.14" />
          </svg>
        </div>
        <h3 class="exp-card-title">Ambient <em>Lighting</em></h3>
        <p class="exp-card-body">
          From soft candlelight to colour-washed uplighting and fairy light
          canopies — our team will set the exact mood your event demands,
          crafting the perfect visual atmosphere.
        </p>
        <span class="exp-card-tag">Candles · Uplighting · Fairy Lights</span>
      </div>
      <div class="exp-card">
        <div class="exp-card-num">02</div>
        <div class="exp-card-icon">
          <svg viewBox="0 0 24 24">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
          </svg>
        </div>
        <h3 class="exp-card-title">Floral & <em>Décor</em></h3>
        <p class="exp-card-body">
          Bespoke floral arrangements, table centrepieces, themed
          installations and custom signage — our décor team brings your vision
          to life with meticulous attention to every detail.
        </p>
        <span class="exp-card-tag">Florals · Centrepieces · Custom Themes</span>
      </div>
      <div class="exp-card">
        <div class="exp-card-num">03</div>
        <div class="exp-card-icon">
          <svg viewBox="0 0 24 24">
            <polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5" />
            <path d="M19.07 4.93a10 10 0 0 1 0 14.14" />
            <path d="M15.54 8.46a5 5 0 0 1 0 7.07" />
          </svg>
        </div>
        <h3 class="exp-card-title">Sound & <em>Entertainment</em></h3>
        <p class="exp-card-body">
          In-house sound system, DJ booth, and connections for live musicians.
          We also coordinate with trusted entertainers to ensure your event
          has exactly the right energy.
        </p>
        <span class="exp-card-tag">DJ · Live Music · Sound System</span>
      </div>
    </div>
  </div>

  <div class="gold-divider"></div>

  <!-- CAPACITY SECTION -->
  <div class="capacity-section" id="capacity">
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
        The Pier24 is designed for intimate gatherings that feel grand. Our
        flexible layout adapts to your needs — here's what The Deck can
        accommodate.
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
          <div class="cap-num">100+</div>
          <div class="cap-label">Standing+</div>
          <p class="cap-desc">
            Maximum capacity for cocktail receptions, networking events, and
            standing celebrations with full bar service.
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
          <div class="cap-num">80</div>
          <div class="cap-label">Seated Dinner</div>
          <p class="cap-desc">
            Comfortable seated dining for up to 80 guests with round tables,
            full table service, and a dedicated dining area.
          </p>
        </div>
        <div class="cap-card">
          <div class="cap-icon">
            <svg viewBox="0 0 24 24">
              <path
                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
            </svg>
          </div>
          <div class="cap-num">20</div>
          <div class="cap-label">Intimate Minimum</div>
          <p class="cap-desc">
            The Pier24 is at its most magical for smaller, intimate gatherings
            of 20 guests — private, exclusive, and utterly unforgettable.
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="gold-divider"></div>

  <!-- EVENTS GRID -->
  <div class="events-section" id="events">
    <p class="section-eyebrow">Events on Pier24</p>
    <h2 class="section-title">Occasions We <em>Host</em></h2>
    <p class="section-body" style="max-width: 540px">
      From romance to revelry — The Deck has hosted them all. Here are the
      experiences we specialise in crafting for you.
    </p>
    <div class="events-grid">
      <!-- Large tile -->
      <div class="event-tile large">
        <div class="event-tile-bg bg-valentines"></div>
        <div class="event-tile-overlay"></div>
        <div class="event-tile-content">
          <p class="event-tile-tag">Most Popular</p>
          <h3 class="event-tile-title"><em>Valentine's</em><br />Dinner</h3>
          <p class="event-tile-desc">
            An intimate evening for two above the water — candlelit tables, a
            curated 5-course menu, and the Lagos skyline as your backdrop. The
            most romantic evening in the city.
          </p>
          <a href="contact.php" class="event-tile-link">Reserve a Table &rarr;</a>
        </div>
      </div>
      <!-- Right column: two tiles stacked -->
      <div style="display: flex; flex-direction: column; gap: 2px">
        <div class="event-tile">
          <div class="event-tile-bg bg-birthday" style="height: 249px"></div>
          <div class="event-tile-overlay"></div>
          <div class="event-tile-content">
            <p class="event-tile-tag">Celebrations</p>
            <h3 class="event-tile-title">Birthday <em>Soirée</em></h3>
            <p class="event-tile-desc">
              Custom décor, live music, and a bespoke birthday menu — your
              perfect evening.
            </p>
            <a href="contact.php" class="event-tile-link">Plan Your Soirée &rarr;</a>
          </div>
        </div>
        <div class="event-tile">
          <div class="event-tile-bg bg-sipaint" style="height: 249px"></div>
          <div class="event-tile-overlay"></div>
          <div class="event-tile-content">
            <p class="event-tile-tag">Creative</p>
            <h3 class="event-tile-title">Sip &amp; <em>Paint</em></h3>
            <p class="event-tile-desc">
              Art meets ambiance — guided painting with flowing wine and great
              company.
            </p>
            <a href="contact.php" class="event-tile-link">Book a Session &rarr;</a>
          </div>
        </div>
      </div>
      <!-- Bottom row: three tiles -->
      <div class="event-tile">
        <div class="event-tile-bg bg-cocktail"></div>
        <div class="event-tile-overlay"></div>
        <div class="event-tile-content">
          <p class="event-tile-tag">Nightlife</p>
          <h3 class="event-tile-title">Cocktail <em>Night</em></h3>
          <p class="event-tile-desc">
            Signature cocktails curated by our mixologist — each sip tells a
            story.
          </p>
          <a href="contact.php" class="event-tile-link">Book a Night &rarr;</a>
        </div>
      </div>
      <div class="event-tile">
        <div class="event-tile-bg bg-corporate"></div>
        <div class="event-tile-overlay"></div>
        <div class="event-tile-content">
          <p class="event-tile-tag">Corporate</p>
          <h3 class="event-tile-title">Executive <em>Dinner</em></h3>
          <p class="event-tile-desc">
            Impress your clients with an evening of fine dining on the Lagos
            waterfront.
          </p>
          <a href="contact.php" class="event-tile-link">Enquire Now &rarr;</a>
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
        The Deck comes equipped with everything needed to host a seamless,
        sophisticated event. Our team handles every detail so your guests only
        experience perfection.
      </p>
      <div class="amenities-grid">
        <div class="amenity-item">
          <div class="amenity-icon">
            <svg viewBox="0 0 24 24">
              <circle cx="12" cy="12" r="10" />
              <line x1="2" y1="12" x2="22" y2="12" />
              <path
                d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" />
            </svg>
          </div>
          <h4 class="amenity-title">Waterfront Views</h4>
          <p class="amenity-desc">
            360° panoramic views of the Lagos waterfront and city skyline from
            every seat.
          </p>
        </div>
        
        <div class="amenity-item">
          <div class="amenity-icon">
            <svg viewBox="0 0 24 24">
              <polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5" />
              <path d="M15.54 8.46a5 5 0 0 1 0 7.07" />
            </svg>
          </div>
          <h4 class="amenity-title">Sound System</h4>
          <p class="amenity-desc">
            Professional in-house sound system with DJ booth and live music
            connectivity.
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
          <h4 class="amenity-title">Ambient Lighting</h4>
          <p class="amenity-desc">
            Full lighting control — from soft candlelight ambiance to vibrant
            event lighting.
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
          <h4 class="amenity-title">Free Parking</h4>
          <p class="amenity-desc">
            Dedicated on-site parking for all guests with security throughout
            your event.
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
            In-house photography packages available to capture every moment
            beautifully.
          </p>
        </div>
       
        <div class="amenity-item">
          <div class="amenity-icon">
            <svg viewBox="0 0 24 24">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
            </svg>
          </div>
          <h4 class="amenity-title">Event Coordinator</h4>
          <p class="amenity-desc">
            A dedicated events coordinator manages every aspect of your
            booking from start to finish.
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
      <span class="gallery-thumb-label">The Deck</span>
    </div>
    <div class="gallery-thumb">
      <div class="gallery-thumb-bg gt-2"></div>
      <div class="gallery-thumb-overlay"></div>
      <span class="gallery-thumb-label">Dining</span>
    </div>
    <div class="gallery-thumb">
      <div class="gallery-thumb-bg gt-3"></div>
      <div class="gallery-thumb-overlay"></div>
      <span class="gallery-thumb-label">Cocktails</span>
    </div>
    <div class="gallery-thumb">
      <div class="gallery-thumb-bg gt-4"></div>
      <div class="gallery-thumb-overlay"></div>
      <span class="gallery-thumb-label">Events</span>
    </div>
    <div class="gallery-thumb">
      <div class="gallery-thumb-bg gt-5"></div>
      <div class="gallery-thumb-overlay"></div>
      <span class="gallery-thumb-label">Skyline</span>
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
          The Pier24 exceeded every expectation. The views of the water at
          night, the food, the service — it was the most perfect Valentine's
          evening we've ever had in Lagos.
        </p>
        <div class="testimonial-divider"></div>
        <p class="testimonial-name">Chidi & Adaeze O.</p>
        <p class="testimonial-event">Valentine's Dinner, 2026</p>
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
          We hosted our company's annual client dinner on The Deck and the
          feedback was unanimous — it was the finest evening our team has ever
          arranged. The team was exceptional.
        </p>
        <div class="testimonial-divider"></div>
        <p class="testimonial-name">Funmilayo A.</p>
        <p class="testimonial-event">Corporate Dinner, 2025</p>
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
          I proposed to my girlfriend on The Deck and she said yes! The team
          set everything up perfectly — the flowers, the lighting, the
          champagne. Absolutely magical. Thank you.
        </p>
        <div class="testimonial-divider"></div>
        <p class="testimonial-name">Emeka N.</p>
        <p class="testimonial-event">Proposal Setup, 2026</p>
      </div>
    </div>
  </div>

  <!-- BOOKING CTA -->
  <div class="booking-cta">
    <div class="booking-cta-bg"></div>
    <div class="booking-cta-content">
      <p class="booking-cta-eyebrow">Reserve Pier24</p>
      <h2 class="booking-cta-title">
        Your <em>Perfect</em><br />Evening Awaits
      </h2>
      <p class="booking-cta-body">
        The Pier24 is one of Lagos's most sought-after event spaces. Dates fill
        quickly — reach out to our events team today to check availability and
        start planning your extraordinary evening.
      </p>
      <div class="booking-cta-actions">
        <a href="contact.php" class="cta-primary">Book Pier24</a>
        <a href="tel:+2349126334061" class="cta-outline">Call Us Directly</a>
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

  <!-- manual js -->
  <script src="scripts/pier24script.js"></script>
</body>

</html>
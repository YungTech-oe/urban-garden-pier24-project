<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Gallery | Urban Garden & Pier24</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link
    href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&family=Jost:wght@200;300;400;500&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <!-- Bootstrap Icons -->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" />

  <!-- manual styles -->
  <link rel="stylesheet" href="styles/gallery.css" />
</head>

<body>
  <!-- ANNOUNCEMENT BANNER -->
  <div class="announcement">
    Experience Lagos's finest event venues &mdash;
    <a href="contact.php">Book your event &rarr;</a>
  </div>

  <!-- NAVIGATION -->
  <nav id="mainNav">
    <a href="index.php" class="nav-logo">Urban Garden<span>& Pier24</span></a>
    <ul class="nav-links">
      <li><a href="index.php">Home</a></li>
      <li><a href="pier24deck.php">Pier24</a></li>
      <li><a href="outdoorturf.php">Outdoor Turf</a></li>
      <li><a href="gallery.php" class="active">Gallery</a></li>
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
        <a href="outdoorturf.php" onclick="closeDrawer()">Outdoor Turf</a>
      </li>
      <li>
        <a href="gallery.php" class="active" onclick="closeDrawer()">Gallery</a>
      </li>
      <li><a href="contact.php" onclick="closeDrawer()">Contact</a></li>
      <li>
        <a href="aboutus.php" onclick="closeDrawer()">About Us</a>
      </li>
    </ul>
    <a
      href="contact.php#contactForm"
      class="drawer-book"
      onclick="closeDrawer()">Book Now</a>
  </div>

  <!-- ══════════════════════════════════════
     HERO
══════════════════════════════════════ -->
  <section class="hero">
    <div class="hero-bg"></div>
    <div class="hero-shimmer"></div>
    <div class="hero-grid"></div>
    <div class="hero-line-v"></div>
    <div class="hero-content">
      <p class="hero-eyebrow">Our Story in Images</p>
      <h1 class="hero-title">A Glimpse Into<br /><em>Our World</em></h1>
      <p class="hero-sub">Every frame, a memory. Every event, a story.</p>
    </div>
    <div class="scroll-hint">
      <div class="scroll-line"></div>
      Explore the gallery
    </div>
  </section>

  <!-- BREADCRUMB -->
  <div class="breadcrumb">
    <a href="index.php">Home</a>
    <span>&rsaquo;</span>
    <span class="current">Gallery</span>
  </div>

  <!-- FILTER BAR -->
  <div class="filter-bar" id="filterBar">
    <div class="filter-tabs">
      <button class="filter-tab active" onclick="filterGallery(this, 'all')">
        All Venues
      </button>
      <button class="filter-tab" onclick="filterGallery(this, 'deck')">
        Pier24
      </button>
      <button class="filter-tab" onclick="filterGallery(this, 'turf')">
        Outdoor Turf
      </button>
    </div>
    <span class="filter-count" id="photoCount">18 photographs</span>
  </div>

  <div class="gold-divider"></div>

  <!-- ══════════════════════════════════════
     SECTION 1 — PIER24 THE DECK
══════════════════════════════════════ -->
  <div class="gallery-section" id="section-deck">
    <p class="section-eyebrow">Pier24</p>
    <h2 class="section-title">Waterfront <em>Elegance</em></h2>
    <p class="section-desc">
      From candlelit Valentine's dinners to lively dinner evenings — The
      Deck has been the setting for some of Lagos's most extraordinary
      moments.
    </p>
    <a href="pier24deck.php" class="section-link">View The Pier24 venue &rarr;</a>

    <div class="deck-grid" style="margin-top: 40px" id="deck-grid">
      <div class="photo deck-p1" onclick="openLightbox('deck', 0)">
        <div class="photo-bg"></div>
        <div class="photo-overlay"></div>
        <div class="photo-expand">
          <svg viewBox="0 0 24 24">
            <polyline points="15 3 21 3 21 9" />
            <polyline points="9 21 3 21 3 15" />
            <line x1="21" y1="3" x2="14" y2="10" />
            <line x1="3" y1="21" x2="10" y2="14" />
          </svg>
        </div>
        <div class="photo-info">
          <p class="photo-tag">The Deck</p>
          <p class="photo-label">Evening Ambiance</p>
        </div>
      </div>

      <div class="photo deck-p2" onclick="openLightbox('deck', 1)">
        <div class="photo-bg"></div>
        <div class="photo-overlay"></div>
        <div class="photo-expand">
          <svg viewBox="0 0 24 24">
            <polyline points="15 3 21 3 21 9" />
            <polyline points="9 21 3 21 3 15" />
            <line x1="21" y1="3" x2="14" y2="10" />
            <line x1="3" y1="21" x2="10" y2="14" />
          </svg>
        </div>
        <div class="photo-info">
          <p class="photo-tag">The Deck</p>
          <p class="photo-label">Valentine's Dinner</p>
        </div>
      </div>

      <div class="photo deck-p3" onclick="openLightbox('deck', 2)">
        <div class="photo-bg"></div>
        <div class="photo-overlay"></div>
        <div class="photo-expand">
          <svg viewBox="0 0 24 24">
            <polyline points="15 3 21 3 21 9" />
            <polyline points="9 21 3 21 3 15" />
            <line x1="21" y1="3" x2="14" y2="10" />
            <line x1="3" y1="21" x2="10" y2="14" />
          </svg>
        </div>
        <div class="photo-info">
          <p class="photo-tag">The Deck</p>
          <p class="photo-label">Cocktail Night</p>
        </div>
      </div>

      <div class="photo deck-p4" onclick="openLightbox('deck', 3)">
        <div class="photo-bg"></div>
        <div class="photo-overlay"></div>
        <div class="photo-expand">
          <svg viewBox="0 0 24 24">
            <polyline points="15 3 21 3 21 9" />
            <polyline points="9 21 3 21 3 15" />
            <line x1="21" y1="3" x2="14" y2="10" />
            <line x1="3" y1="21" x2="10" y2="14" />
          </svg>
        </div>
        <div class="photo-info">
          <p class="photo-tag">The Deck</p>
          <p class="photo-label">Private Dining</p>
        </div>
      </div>

      <div class="photo deck-p5" onclick="openLightbox('deck', 4)">
        <div class="photo-bg"></div>
        <div class="photo-overlay"></div>
        <div class="photo-expand">
          <svg viewBox="0 0 24 24">
            <polyline points="15 3 21 3 21 9" />
            <polyline points="9 21 3 21 3 15" />
            <line x1="21" y1="3" x2="14" y2="10" />
            <line x1="3" y1="21" x2="10" y2="14" />
          </svg>
        </div>
        <div class="photo-info">
          <p class="photo-tag">The Deck</p>
          <p class="photo-label">Sip & Paint</p>
        </div>
      </div>

      <div class="photo deck-p6" onclick="openLightbox('deck', 5)">
        <div class="photo-bg"></div>
        <div class="photo-overlay"></div>
        <div class="photo-expand">
          <svg viewBox="0 0 24 24">
            <polyline points="15 3 21 3 21 9" />
            <polyline points="9 21 3 21 3 15" />
            <line x1="21" y1="3" x2="14" y2="10" />
            <line x1="3" y1="21" x2="10" y2="14" />
          </svg>
        </div>
        <div class="photo-info">
          <p class="photo-tag">The Deck</p>
          <p class="photo-label">Skyline at Dusk</p>
        </div>
      </div>

      <div class="photo deck-p7" onclick="openLightbox('deck', 6)">
        <div class="photo-bg"></div>
        <div class="photo-overlay"></div>
        <div class="photo-expand">
          <svg viewBox="0 0 24 24">
            <polyline points="15 3 21 3 21 9" />
            <polyline points="9 21 3 21 3 15" />
            <line x1="21" y1="3" x2="14" y2="10" />
            <line x1="3" y1="21" x2="10" y2="14" />
          </svg>
        </div>
        <div class="photo-info">
          <p class="photo-tag">The Deck</p>
          <p class="photo-label">Birthday Soirée</p>
        </div>
      </div>

      <div class="photo deck-p8" onclick="openLightbox('deck', 7)">
        <div class="photo-bg"></div>
        <div class="photo-overlay"></div>
        <div class="photo-expand">
          <svg viewBox="0 0 24 24">
            <polyline points="15 3 21 3 21 9" />
            <polyline points="9 21 3 21 3 15" />
            <line x1="21" y1="3" x2="14" y2="10" />
            <line x1="3" y1="21" x2="10" y2="14" />
          </svg>
        </div>
        <div class="photo-info">
          <p class="photo-tag">The Deck</p>
          <p class="photo-label">Games</p>
        </div>
      </div>

      <div class="photo deck-p9" onclick="openLightbox('deck', 8)">
        <div class="photo-bg"></div>
        <div class="photo-overlay"></div>
        <div class="photo-expand">
          <svg viewBox="0 0 24 24">
            <polyline points="15 3 21 3 21 9" />
            <polyline points="9 21 3 21 3 15" />
            <line x1="21" y1="3" x2="14" y2="10" />
            <line x1="3" y1="21" x2="10" y2="14" />
          </svg>
        </div>
        <div class="photo-info">
          <p class="photo-tag">The Deck</p>
          <p class="photo-label">More fun time</p>
        </div>
      </div>
    </div>
  </div>

  <!-- VENUE DIVIDER -->
  <div class="venue-divider" id="venue-divider">
    <div class="venue-divider-line"></div>
    <div class="venue-divider-badge">
      <div class="venue-divider-dot"></div>
      <span class="venue-divider-text">Outdoor Turf</span>
      <div class="venue-divider-dot"></div>
    </div>
    <div class="venue-divider-line"></div>
  </div>

  <!-- ══════════════════════════════════════
     SECTION 2 — OUTDOOR TURF
══════════════════════════════════════ -->
  <div class="gallery-section" id="section-turf">
    <p class="section-eyebrow">Outdoor Turf</p>
    <h2 class="section-title">Open Air, <em>Open Hearts</em></h2>
    <p class="section-desc">
      Garden weddings, picnic afternoons, team-building days and sunset
      celebrations — the Outdoor Turf has witnessed it all, beautifully.
    </p>
    <a href="outdoorturf.php" class="section-link">View the Turf venue &rarr;</a>

    <div class="turf-grid" style="margin-top: 40px" id="turf-grid">
      <div class="photo turf-p1" onclick="openLightbox('turf', 0)">
        <div class="photo-bg"></div>
        <div class="photo-overlay"></div>
        <div class="photo-expand">
          <svg viewBox="0 0 24 24">
            <polyline points="15 3 21 3 21 9" />
            <polyline points="9 21 3 21 3 15" />
            <line x1="21" y1="3" x2="14" y2="10" />
            <line x1="3" y1="21" x2="10" y2="14" />
          </svg>
        </div>
        <div class="photo-info">
          <p class="photo-tag">Outdoor Turf</p>
          <p class="photo-label">Lush Grounds</p>
        </div>
      </div>

      <div class="photo turf-p2" onclick="openLightbox('turf', 1)">
        <div class="photo-bg"></div>
        <div class="photo-overlay"></div>
        <div class="photo-expand">
          <svg viewBox="0 0 24 24">
            <polyline points="15 3 21 3 21 9" />
            <polyline points="9 21 3 21 3 15" />
            <line x1="21" y1="3" x2="14" y2="10" />
            <line x1="3" y1="21" x2="10" y2="14" />
          </svg>
        </div>
        <div class="photo-info">
          <p class="photo-tag">Outdoor Turf</p>
          <p class="photo-label">Wedding Reception</p>
        </div>
      </div>

      <div class="photo turf-p3" onclick="openLightbox('turf', 2)">
        <div class="photo-bg"></div>
        <div class="photo-overlay"></div>
        <div class="photo-expand">
          <svg viewBox="0 0 24 24">
            <polyline points="15 3 21 3 21 9" />
            <polyline points="9 21 3 21 3 15" />
            <line x1="21" y1="3" x2="14" y2="10" />
            <line x1="3" y1="21" x2="10" y2="14" />
          </svg>
        </div>
        <div class="photo-info">
          <p class="photo-tag">Outdoor Turf</p>
          <p class="photo-label">Garden Party</p>
        </div>
      </div>

      <div class="photo turf-p4" onclick="openLightbox('turf', 3)">
        <div class="photo-bg"></div>
        <div class="photo-overlay"></div>
        <div class="photo-expand">
          <svg viewBox="0 0 24 24">
            <polyline points="15 3 21 3 21 9" />
            <polyline points="9 21 3 21 3 15" />
            <line x1="21" y1="3" x2="14" y2="10" />
            <line x1="3" y1="21" x2="10" y2="14" />
          </svg>
        </div>
        <div class="photo-info">
          <p class="photo-tag">Outdoor Turf</p>
          <p class="photo-label">Sunset Picnic</p>
        </div>
      </div>

      <div class="photo turf-p5" onclick="openLightbox('turf', 4)">
        <div class="photo-bg"></div>
        <div class="photo-overlay"></div>
        <div class="photo-expand">
          <svg viewBox="0 0 24 24">
            <polyline points="15 3 21 3 21 9" />
            <polyline points="9 21 3 21 3 15" />
            <line x1="21" y1="3" x2="14" y2="10" />
            <line x1="3" y1="21" x2="10" y2="14" />
          </svg>
        </div>
        <div class="photo-info">
          <p class="photo-tag">Outdoor Turf</p>
          <p class="photo-label">Fairy Light Evening</p>
        </div>
      </div>

      <div class="photo turf-p6" onclick="openLightbox('turf', 5)">
        <div class="photo-bg"></div>
        <div class="photo-overlay"></div>
        <div class="photo-expand">
          <svg viewBox="0 0 24 24">
            <polyline points="15 3 21 3 21 9" />
            <polyline points="9 21 3 21 3 15" />
            <line x1="21" y1="3" x2="14" y2="10" />
            <line x1="3" y1="21" x2="10" y2="14" />
          </svg>
        </div>
        <div class="photo-info">
          <p class="photo-tag">Outdoor Turf</p>
          <p class="photo-label">Relaxation Spot</p>
        </div>
      </div>

      <div class="photo turf-p7" onclick="openLightbox('turf', 6)">
        <div class="photo-bg"></div>
        <div class="photo-overlay"></div>
        <div class="photo-expand">
          <svg viewBox="0 0 24 24">
            <polyline points="15 3 21 3 21 9" />
            <polyline points="9 21 3 21 3 15" />
            <line x1="21" y1="3" x2="14" y2="10" />
            <line x1="3" y1="21" x2="10" y2="14" />
          </svg>
        </div>
        <div class="photo-info">
          <p class="photo-tag">Outdoor Turf</p>
          <p class="photo-label">Outdoor Bar</p>
        </div>
      </div>

      <div class="photo turf-p8" onclick="openLightbox('turf', 7)">
        <div class="photo-bg"></div>
        <div class="photo-overlay"></div>
        <div class="photo-expand">
          <svg viewBox="0 0 24 24">
            <polyline points="15 3 21 3 21 9" />
            <polyline points="9 21 3 21 3 15" />
            <line x1="21" y1="3" x2="14" y2="10" />
            <line x1="3" y1="21" x2="10" y2="14" />
          </svg>
        </div>
        <div class="photo-info">
          <p class="photo-tag">Outdoor Turf</p>
          <p class="photo-label">Garden</p>
        </div>
      </div>

      <div class="photo turf-p9" onclick="openLightbox('turf', 8)">
        <div class="photo-bg"></div>
        <div class="photo-overlay"></div>
        <div class="photo-expand">
          <svg viewBox="0 0 24 24">
            <polyline points="15 3 21 3 21 9" />
            <polyline points="9 21 3 21 3 15" />
            <line x1="21" y1="3" x2="14" y2="10" />
            <line x1="3" y1="21" x2="10" y2="14" />
          </svg>
        </div>
        <div class="photo-info">
          <p class="photo-tag">Outdoor Turf</p>
          <p class="photo-label">Photography</p>
        </div>
      </div>
    </div>
  </div>

  <div class="gold-divider"></div>

  <!-- ══════════════════════════════════════
     EXTERNAL ARCHIVE CTA HERO
══════════════════════════════════════ -->
  <section class="archive-cta" id="full-archive">
    <div class="archive-bg"></div>
    <div class="archive-shimmer"></div>

    <!-- Film strip top -->
    <div class="archive-film-top">
      <div class="film-holes">
        <div class="film-hole"></div>
        <div class="film-hole"></div>
        <div class="film-hole"></div>
        <div class="film-hole"></div>
        <div class="film-hole"></div>
        <div class="film-hole"></div>
        <div class="film-hole"></div>
        <div class="film-hole"></div>
        <div class="film-hole"></div>
        <div class="film-hole"></div>
        <div class="film-hole"></div>
        <div class="film-hole"></div>
        <div class="film-hole"></div>
        <div class="film-hole"></div>
        <div class="film-hole"></div>
        <div class="film-hole"></div>
        <div class="film-hole"></div>
        <div class="film-hole"></div>
        <div class="film-hole"></div>
        <div class="film-hole"></div>
        <div class="film-hole"></div>
        <div class="film-hole"></div>
        <div class="film-hole"></div>
        <div class="film-hole"></div>
      </div>
    </div>

    <div class="archive-content">
      <div class="archive-eyebrow">Full Event Archive</div>
      <h2 class="archive-title">Every <em>Moment</em>,<br />Captured</h2>
      <p class="archive-subtitle">
        Hundreds of events. Thousands of memories.
      </p>
      <p class="archive-body">
        Our full archive of past events, celebrations, and experiences is
        waiting for you — browse every venue, every occasion, and every
        beautiful moment captured at Urban Garden & Pier24.
      </p>

      <a
        href="https://urbangardeninsta.gt.tc/"
        target="_blank"
        rel="noopener"
        class="archive-btn">
        View Full Event Archive
        <svg viewBox="0 0 24 24">
          <line x1="5" y1="12" x2="19" y2="12" />
          <polyline points="12 5 19 12 12 19" />
        </svg>
      </a>
      <p class="archive-note">
        Opens in a new tab &nbsp;&bull;&nbsp; Photos &amp; Videos
      </p>

      <div class="archive-stats">
        <div class="archive-stat">
          <div class="archive-stat-num">200+</div>
          <div class="archive-stat-label">Events Hosted</div>
        </div>
        <div class="archive-stat">
          <div class="archive-stat-num">1,000+</div>
          <div class="archive-stat-label">Photographs</div>
        </div>
        <div class="archive-stat">
          <div class="archive-stat-num">5★</div>
          <div class="archive-stat-label">Guest Rating</div>
        </div>
      </div>
    </div>

    <!-- Film strip bottom -->
    <div class="archive-film-bottom">
      <div class="film-holes">
        <div class="film-hole"></div>
        <div class="film-hole"></div>
        <div class="film-hole"></div>
        <div class="film-hole"></div>
        <div class="film-hole"></div>
        <div class="film-hole"></div>
        <div class="film-hole"></div>
        <div class="film-hole"></div>
        <div class="film-hole"></div>
        <div class="film-hole"></div>
        <div class="film-hole"></div>
        <div class="film-hole"></div>
        <div class="film-hole"></div>
        <div class="film-hole"></div>
        <div class="film-hole"></div>
        <div class="film-hole"></div>
        <div class="film-hole"></div>
        <div class="film-hole"></div>
        <div class="film-hole"></div>
        <div class="film-hole"></div>
        <div class="film-hole"></div>
        <div class="film-hole"></div>
        <div class="film-hole"></div>
        <div class="film-hole"></div>
      </div>
    </div>
  </section>

  <div class="gold-divider"></div>

  <!-- LIGHTBOX -->
  <div class="lightbox" id="lightbox" onclick="closeLightboxOnBg(event)">
    <div class="lightbox-inner">
      <button class="lightbox-close" onclick="closeLightbox()">
        &times;
      </button>
      <button class="lightbox-nav lightbox-prev" onclick="lightboxNav(-1)">
        <svg viewBox="0 0 24 24">
          <polyline points="15 18 9 12 15 6" />
        </svg>
      </button>
      <button class="lightbox-nav lightbox-next" onclick="lightboxNav(1)">
        <svg viewBox="0 0 24 24">
          <polyline points="9 18 15 12 9 6" />
        </svg>
      </button>
      <!-- Placeholder — swap with <img> when real photos are added -->
      <div class="lightbox-placeholder" id="lightboxImg"></div>
      <div class="lightbox-footer">
        <div>
          <p class="lightbox-tag" id="lightboxTag"></p>
          <p class="lightbox-caption" id="lightboxCaption"></p>
        </div>
        <p class="lightbox-counter" id="lightboxCounter"></p>
      </div>
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
  <script src="scripts/gallery.js"></script>
</body>

</html>
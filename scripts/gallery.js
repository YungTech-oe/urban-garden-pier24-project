
// ── NAV SCROLL ──
window.addEventListener("scroll", () => {
    document
        .getElementById("mainNav")
        .classList.toggle("scrolled", window.scrollY > 80);
});

// ── DRAWER ──
function openDrawer() {
    document.getElementById("mobileDrawer").classList.add("open");
    document.getElementById("drawerOverlay").classList.add("open");
    document.getElementById("hamburgerBtn").classList.add("open");
    document.body.style.overflow = "hidden";
}
function closeDrawer() {
    document.getElementById("mobileDrawer").classList.remove("open");
    document.getElementById("drawerOverlay").classList.remove("open");
    document.getElementById("hamburgerBtn").classList.remove("open");
    document.body.style.overflow = "";
}
document.getElementById("hamburgerBtn").addEventListener("click", () => {
    document.getElementById("mobileDrawer").classList.contains("open")
        ? closeDrawer()
        : openDrawer();
});

// ── FILTER TABS ──
function filterGallery(btn, venue) {
    document
        .querySelectorAll(".filter-tab")
        .forEach((t) => t.classList.remove("active"));
    btn.classList.add("active");

    const deckSection = document.getElementById("section-deck");
    const turfSection = document.getElementById("section-turf");
    const divider = document.getElementById("venue-divider");
    const count = document.getElementById("photoCount");

    if (venue === "all") {
        deckSection.style.display = "";
        turfSection.style.display = "";
        divider.style.display = "";
        count.textContent = "18 photographs";
    } else if (venue === "deck") {
        deckSection.style.display = "";
        turfSection.style.display = "none";
        divider.style.display = "none";
        count.textContent = "9 photographs — The Deck";
    } else if (venue === "turf") {
        deckSection.style.display = "none";
        turfSection.style.display = "";
        divider.style.display = "none";
        count.textContent = "9 photographs — Outdoor Turf";
    }
}

// ── LIGHTBOX ──
const galleries = {
    deck: [
        {
            tag: "The Deck",
            label: "Evening Ambiance",
            bg: "url('../assets/images/deck/evening-ambience.jpg') no-repeat center/cover",
        },
        {
            tag: "The Deck",
            label: "Valentine's Dinner",
            bg: "url('../assets/images/deck/val-dinner.jpeg') no-repeat center/cover",
        },
        {
            tag: "The Deck",
            label: "Cocktail Night",
            bg: "url('../assets/images/deck/cocktail.jpg') no-repeat center/cover",
        },
        {
            tag: "The Deck",
            label: "Private Dining",
            bg: "url('../assets/images/deck/private-dinning.jpeg') no-repeat center/cover",
        },
        {
            tag: "The Deck",
            label: "Sip & Paint",
            bg: "url('../assets/images/deck/sip&paint.jpg') no-repeat center/cover",
        },
        {
            tag: "The Deck",
            label: "Skyline at Dusk",
            bg: "url('../assets/images/deck/skyline.jpg') no-repeat center/cover",
        },
        {
            tag: "The Deck",
            label: "Birthday Soirée",
            bg: "url('../assets/images/deck/birthday.jpg') no-repeat center/cover",
        },
        {
            tag: "The Deck",
            label: "Corporate Evening",
            bg: "url('../assets/images/deck/games.jpg') no-repeat center/cover",
        },
        {
            tag: "The Deck",
            label: "More fun time",
            bg: "url('../assets/images/deck/IMG_8347.JPG') no-repeat center/cover",
        },
    ],
    turf: [
        {
            tag: "Outdoor Turf",
            label: "Lush Grounds",
            bg: "url('../assets/images/outdoor/IMG_5626.jpg') no-repeat center/cover",
        },
        {
            tag: "Outdoor Turf",
            label: "Wedding Reception",
            bg: "url('../assets/images/outdoor/IMG-20260521-WA0027.jpg') no-repeat center/cover",
        },
        {
            tag: "Outdoor Turf",
            label: "Garden Party",
            bg: "url('../assets/images/outdoor/picnic.JPG') no-repeat center/cover",
        },
        {
            tag: "Outdoor Turf",
            label: "Sunset Picnic",
            bg: "url('../assets/images/outdoor/picnic.JPG') no-repeat center/cover",
        },
        {
            tag: "Outdoor Turf",
            label: "Fairy Light Evening",
            bg: "url('../assets/images/outdoor/view.jpg') no-repeat center/cover",
        },
        {
            tag: "Outdoor Turf",
            label: "Relaxation Spot",
            bg: "url('../assets/images/outdoor/IMG_4600.jpg') no-repeat center/cover",
        },
        {
            tag: "Outdoor Turf",
            label: "Outdoor Bar",
            bg: "url('../assets/images/outdoor/IMG_8703.jpg') no-repeat center/cover",
        },
        {
            tag: "Outdoor Turf",
            label: "Garden",
            bg: "url('../assets/images/outdoor/garden.jpg') no-repeat center/cover",
        },
        {
            tag: "Outdoor Turf",
            label: "Photography",
            bg: "url('../assets/images/outdoor/IMG_5628.jpg') no-repeat center/cover",
        },
    ],
};

let lbVenue = "deck";
let lbIndex = 0;

function openLightbox(venue, idx) {
    lbVenue = venue;
    lbIndex = idx;
    renderLightbox();
    document.getElementById("lightbox").classList.add("open");
    document.body.style.overflow = "hidden";
}

function closeLightbox() {
    document.getElementById("lightbox").classList.remove("open");
    document.body.style.overflow = "";
}

function closeLightboxOnBg(e) {
    if (e.target === document.getElementById("lightbox")) closeLightbox();
}

function lightboxNav(dir) {
    const total = galleries[lbVenue].length;
    lbIndex = (lbIndex + dir + total) % total;
    renderLightbox();
}

function renderLightbox() {
    const item = galleries[lbVenue][lbIndex];
    const total = galleries[lbVenue].length;

    // Placeholder background — swap with real <img> when photos available
    const placeholder = document.getElementById("lightboxImg");
    placeholder.style.background = item.bg;
    placeholder.style.minHeight = "420px";

    document.getElementById("lightboxTag").textContent = item.tag;
    document.getElementById("lightboxCaption").textContent = item.label;
    document.getElementById("lightboxCounter").textContent =
        `${lbIndex + 1} / ${total}`;
}

// Keyboard navigation
document.addEventListener("keydown", (e) => {
    const lb = document.getElementById("lightbox");
    if (!lb.classList.contains("open")) return;
    if (e.key === "ArrowLeft") lightboxNav(-1);
    if (e.key === "ArrowRight") lightboxNav(1);
    if (e.key === "Escape") closeLightbox();
});

// ── SCROLL REVEAL ──
const revealEls = document.querySelectorAll(".photo");
const io = new IntersectionObserver(
    (entries) => {
        entries.forEach((e, i) => {
            if (e.isIntersecting) {
                setTimeout(
                    () => {
                        e.target.style.opacity = "1";
                        e.target.style.transform = "translateY(0)";
                    },
                    (i % 5) * 80,
                );
                io.unobserve(e.target);
            }
        });
    },
    { threshold: 0.08 },
);

revealEls.forEach((el) => {
    el.style.opacity = "0";
    el.style.transform = "translateY(16px)";
    el.style.transition = "opacity 0.6s ease, transform 0.6s ease";
    io.observe(el);
});

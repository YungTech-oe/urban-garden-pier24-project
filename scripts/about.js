
// Nav scroll
window.addEventListener('scroll', () => {
    document.getElementById('mainNav').classList.toggle('scrolled', window.scrollY > 80);
});

// Drawer
function openDrawer() {
    document.getElementById('mobileDrawer').classList.add('open');
    document.getElementById('drawerOverlay').classList.add('open');
    document.getElementById('hamburgerBtn').classList.add('open');
    document.body.style.overflow = 'hidden';
}
function closeDrawer() {
    document.getElementById('mobileDrawer').classList.remove('open');
    document.getElementById('drawerOverlay').classList.remove('open');
    document.getElementById('hamburgerBtn').classList.remove('open');
    document.body.style.overflow = '';
}
document.getElementById('hamburgerBtn').addEventListener('click', () => {
    document.getElementById('mobileDrawer').classList.contains('open') ? closeDrawer() : openDrawer();
});

// Testimonials
const testimonials = [
    {
        text: "Urban Garden & Pier24 didn't just host our wedding — they made it the most magical night of our lives. Every detail was beyond anything we could have imagined.",
        name: "Tunde & Blessing M.",
        event: "Outdoor Wedding, 2025"
    },
    {
        text: "The Valentine's Dinner on The Deck was absolutely perfect — the views, the food, the atmosphere. My partner was speechless. We're already planning to go back.",
        name: "Chidi & Adaeze O.",
        event: "Valentine's Dinner, 2026"
    },
    {
        text: "We hosted our company's annual dinner here and the feedback from our clients was unanimous — the finest evening any of us had experienced in Lagos. Exceptional in every way.",
        name: "Funmilayo A., HR Director",
        event: "Corporate Dinner, 2025"
    }
];
let currentTs = 0;

function switchTestimonial(idx) {
    currentTs = idx;
    const t = testimonials[idx];
    document.getElementById('tsText').textContent = t.text;
    document.getElementById('tsName').textContent = t.name;
    document.getElementById('tsEvent').textContent = t.event;
    document.querySelectorAll('.ts-dot').forEach((d, i) => d.classList.toggle('active', i === idx));
}

// Auto-rotate testimonials every 6s
setInterval(() => {
    switchTestimonial((currentTs + 1) % testimonials.length);
}, 6000);

// Scroll reveal
const revealEls = document.querySelectorAll('.pillar, .stat-item, .team-card, .timeline-item, .recognition-item');
const io = new IntersectionObserver((entries) => {
    entries.forEach((e, i) => {
        if (e.isIntersecting) {
            setTimeout(() => {
                e.target.style.opacity = '1';
                e.target.style.transform = 'translateY(0)';
            }, i * 80);
            io.unobserve(e.target);
        }
    });
}, { threshold: 0.1 });

revealEls.forEach(el => {
    el.style.opacity = '0';
    el.style.transform = 'translateY(20px)';
    el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
    io.observe(el);
});
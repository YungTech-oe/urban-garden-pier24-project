
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

// Experience tabs
function switchExp(btn, id) {
    document.querySelectorAll('.exp-tab').forEach(t => t.classList.remove('active'));
    document.querySelectorAll('.exp-panel').forEach(p => p.classList.remove('active'));
    btn.classList.add('active');
    document.getElementById('exp-' + id).classList.add('active');
}

// Scroll reveal
const revealEls = document.querySelectorAll('.stat-item, .exp-card, .cap-card, .amenity-item, .testimonial-card');
const io = new IntersectionObserver((entries) => {
    entries.forEach((e, i) => {
        if (e.isIntersecting) {
            setTimeout(() => { e.target.style.opacity = '1'; e.target.style.transform = 'translateY(0)'; }, i * 80);
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

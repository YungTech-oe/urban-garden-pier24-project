
// Nav scroll effect
window.addEventListener('scroll', () => {
    document.getElementById('mainNav').classList.toggle('scrolled', window.scrollY > 80);
});

// Mobile drawer
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

// Venue tab switch
function switchTab(tab) {
    document.querySelectorAll('.tab-btn').forEach((b, i) => {
        b.classList.toggle('active', (i === 0 && tab === 'deck') || (i === 1 && tab === 'turf'));
    });
    document.getElementById('tab-deck').classList.toggle('active', tab === 'deck');
    document.getElementById('tab-turf').classList.toggle('active', tab === 'turf');
}

// Events tab switch
function switchEventTab(panel) {
    document.querySelectorAll('.event-tab-btn').forEach((b, i) => {
        b.classList.toggle('active', (i === 0 && panel === 'deck-events') || (i === 1 && panel === 'turf-events'));
    });
    document.getElementById('deck-events').classList.toggle('active', panel === 'deck-events');
    document.getElementById('turf-events').classList.toggle('active', panel === 'turf-events');
}

// ── CENTER-FOCUS CAROUSEL ENGINE ──
const fcState = { deck: 0, turf: 0 };

function fcRender(name) {
    const track = document.getElementById(`fc-${name}`);
    const cards = Array.from(track.children);
    const current = fcState[name];
    const total = cards.length;
    const gap = 20;

    // Toggle active class first
    cards.forEach((c, i) => c.classList.toggle('fc-active', i === current));

    // Wait one frame so CSS flex widths update before we measure
    requestAnimationFrame(() => {
        const stageW = track.parentElement.offsetWidth;

        // Read actual rendered widths from DOM — works at any viewport size
        const widths = cards.map(c => c.offsetWidth);

        // Build left-edge positions
        const positions = [];
        let cursor = 0;
        for (let i = 0; i < total; i++) {
            positions.push(cursor);
            cursor += widths[i] + gap;
        }
        const lastCardRight = positions[total - 1] + widths[total - 1];

        // Ideal: center the active card in the stage
        const activeMid = positions[current] + widths[current] / 2;
        let translateX = activeMid - stageW / 2;

        // Clamp left — never go negative
        translateX = Math.max(0, translateX);

        // Clamp right — never show empty space after the last card
        const maxTranslate = Math.max(0, lastCardRight - stageW);
        translateX = Math.min(translateX, maxTranslate);

        track.style.transform = `translateX(-${translateX}px)`;

        // Counter
        document.getElementById(`fc-${name}-cur`).textContent = current + 1;

        // Dots
        document.querySelectorAll(`#fc-dots-${name} .fc-dot`).forEach((d, i) => {
            d.classList.toggle('active', i === current);
        });
    });
}

function fcGoTo(name, idx) {
    fcState[name] = idx;
    fcRender(name);
}

function fcStep(name, dir) {
    const total = document.getElementById(`fc-${name}`).children.length;
    // Infinite loop: wrap around
    fcState[name] = (fcState[name] + dir + total) % total;
    fcRender(name);
}

// Init both carousels on load
window.addEventListener('load', () => {
    fcRender('deck');
    fcRender('turf');
});

// Re-render on resize so centering stays accurate
window.addEventListener('resize', () => {
    fcRender('deck');
    fcRender('turf');
});

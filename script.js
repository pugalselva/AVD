/* ===========================================
   ABRASIVE DEALERS — MAIN JAVASCRIPT
   =========================================== */

'use strict';

/* ───────────────────────────────────────────
   DOM READY
   ─────────────────────────────────────────── */
document.addEventListener('DOMContentLoaded', () => {
    initHeader();
    initMobileMenu();
    initSmoothScroll();
    initAnimations();
    initGallery();
    initLightbox();
    initContactForm();
    initBackToTop();
});

/* ───────────────────────────────────────────
   HEADER — sticky + scroll class
   ─────────────────────────────────────────── */
function initHeader() {
    const header = document.getElementById('header');
    function onScroll() {
        header.classList.toggle('scrolled', window.scrollY > 60);
    }
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
}

/* ───────────────────────────────────────────
   MOBILE MENU
   ─────────────────────────────────────────── */
function initMobileMenu() {
    const hamburger = document.getElementById('hamburger');
    const navMenu = document.getElementById('navMenu');
    const navLinks = navMenu.querySelectorAll('.nav-link');

    hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('active');
        navMenu.classList.toggle('open');
        document.body.style.overflow = navMenu.classList.contains('open') ? 'hidden' : '';
    });

    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            hamburger.classList.remove('active');
            navMenu.classList.remove('open');
            document.body.style.overflow = '';
        });
    });
}

/* ───────────────────────────────────────────
   SMOOTH SCROLL + ACTIVE NAV
   ─────────────────────────────────────────── */
function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(link => {
        link.addEventListener('click', e => {
            const target = document.querySelector(link.getAttribute('href'));
            if (!target) return;
            e.preventDefault();
            window.scrollTo({ top: target.offsetTop - 80, behavior: 'smooth' });
        });
    });

    const sections = document.querySelectorAll('section[id]');
    const menuLinks = document.querySelectorAll('.nav-link');

    function updateActive() {
        const scrollY = window.scrollY + 120;
        sections.forEach(section => {
            const id = section.getAttribute('id');
            if (scrollY >= section.offsetTop && scrollY < section.offsetTop + section.offsetHeight) {
                menuLinks.forEach(link =>
                    link.classList.toggle('active', link.getAttribute('href') === `#${id}`)
                );
            }
        });
    }

    window.addEventListener('scroll', updateActive, { passive: true });
    updateActive();
}

/* ───────────────────────────────────────────
   SCROLL ANIMATIONS — IntersectionObserver
   ─────────────────────────────────────────── */
function initAnimations() {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animated');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.12, rootMargin: '0px 0px -50px 0px' });

    document.querySelectorAll('[data-animate]').forEach(el => observer.observe(el));
}

/* ───────────────────────────────────────────
   GALLERY — filter static HTML items + lightbox click
   ─────────────────────────────────────────── */
function initGallery() {
    const items = document.querySelectorAll('.gallery-item');
    if (!items.length) return;

    // Staggered fade-in on scroll for static items
    items.forEach((item, idx) => {
        item.style.opacity = '0';
        item.style.transform = 'scale(0.92)';
        item.style.transition = `opacity 0.45s ease ${idx * 0.05}s, transform 0.45s ease ${idx * 0.05}s`;

        const obs = new IntersectionObserver(entries => {
            if (entries[0].isIntersecting) {
                item.style.opacity = '1';
                item.style.transform = 'scale(1)';
                obs.disconnect();
            }
        }, { threshold: 0.05 });
        obs.observe(item);

        // Click to open lightbox (not on Inquire button)
        item.addEventListener('click', e => {
            if (e.target.closest('.gallery-inquiry')) return;
            openLightbox(item);
        });
    });

    // Filter buttons
    document.querySelectorAll('.filter-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            const filter = btn.dataset.filter;
            items.forEach(item => {
                const show = filter === 'all' || item.dataset.category === filter;
                item.style.display = show ? '' : 'none';
            });
        });
    });
}

/* ───────────────────────────────────────────
   LIGHTBOX — reads src/alt directly from static img
   ─────────────────────────────────────────── */
let currentItem = null;

function initLightbox() {
    const lightbox = document.getElementById('lightbox');
    if (!lightbox) return;

    document.getElementById('lightboxOverlay').addEventListener('click', closeLightbox);
    document.getElementById('lightboxClose').addEventListener('click', closeLightbox);
    document.getElementById('lightboxPrev').addEventListener('click', () => navigateLightbox(-1));
    document.getElementById('lightboxNext').addEventListener('click', () => navigateLightbox(1));

    document.addEventListener('keydown', e => {
        if (!lightbox.classList.contains('active')) return;
        if (e.key === 'Escape') closeLightbox();
        if (e.key === 'ArrowLeft') navigateLightbox(-1);
        if (e.key === 'ArrowRight') navigateLightbox(1);
    });
}

function getVisibleItems() {
    return [...document.querySelectorAll('.gallery-item')].filter(
        el => el.style.display !== 'none'
    );
}

function openLightbox(itemEl) {
    const lightbox = document.getElementById('lightbox');
    const body = document.getElementById('lightboxBody');
    const caption = document.getElementById('lightboxCaption');
    if (!lightbox) return;

    const img = itemEl.querySelector('img');
    const label = itemEl.querySelector('.gallery-label');
    currentItem = itemEl;

    body.innerHTML = `
        <img src="${img.src}"
             alt="${img.alt}"
             style="width:100%;height:auto;display:block;border-radius:10px;max-height:65vh;object-fit:contain;">
    `;
    caption.textContent = label ? label.textContent : img.alt;

    lightbox.classList.add('active');
    document.body.style.overflow = 'hidden';
}

function closeLightbox() {
    const lightbox = document.getElementById('lightbox');
    if (!lightbox) return;
    lightbox.classList.remove('active');
    document.body.style.overflow = '';
    currentItem = null;
}

window.closeLightbox = closeLightbox;

function navigateLightbox(dir) {
    const visible = getVisibleItems();
    const idx = visible.indexOf(currentItem);
    if (idx === -1) return;
    openLightbox(visible[(idx + dir + visible.length) % visible.length]);
}

/* ───────────────────────────────────────────
   CONTACT FORM
   ─────────────────────────────────────────── */
function initContactForm() {
    const form = document.getElementById('contactForm');
    const success = document.getElementById('formSuccess');
    if (!form) return;

    form.addEventListener('submit', e => {
        e.preventDefault();
        if (!form.name.value.trim() || !form.phone.value.trim() || !form.message.value.trim()) {
            form.style.animation = 'shake 0.4s ease';
            setTimeout(() => form.style.animation = '', 500);
            return;
        }

        const btn = form.querySelector('.btn-submit');
        const orig = btn.innerHTML;
        btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
        btn.disabled = true;

        setTimeout(() => {
            form.reset();
            btn.innerHTML = orig;
            btn.disabled = false;
            success.classList.add('show');
            setTimeout(() => success.classList.remove('show'), 5000);
        }, 1500);
    });

    form.querySelectorAll('input, select, textarea').forEach(input => {
        const getIcon = () => input.closest('.input-wrap')?.querySelector('i');
        input.addEventListener('focus', () => { const i = getIcon(); if (i) i.style.color = 'var(--accent)'; });
        input.addEventListener('blur', () => { const i = getIcon(); if (i) i.style.color = ''; });
    });
}

/* ───────────────────────────────────────────
   BACK TO TOP
   ─────────────────────────────────────────── */
function initBackToTop() {
    const btn = document.getElementById('backToTop');
    if (!btn) return;
    window.addEventListener('scroll', () => btn.classList.toggle('show', window.scrollY > 500), { passive: true });
    btn.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
}

/* ───────────────────────────────────────────
   SHAKE animation (injected once)
   ─────────────────────────────────────────── */
const shakeStyle = document.createElement('style');
shakeStyle.textContent = `
    @keyframes shake {
        0%,100%{ transform:translateX(0) }
        20%{ transform:translateX(-8px) }
        40%{ transform:translateX(8px) }
        60%{ transform:translateX(-5px) }
        80%{ transform:translateX(5px) }
    }
`;
document.head.appendChild(shakeStyle);

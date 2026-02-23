/* ===========================================
   ABRASIVE DEALERS — MAIN JAVASCRIPT
   =========================================== */

'use strict';

/* ───────────────────────────────────────────
   DOM READY
   ─────────────────────────────────────────── */
document.addEventListener('DOMContentLoaded', () => {
    initHeader();
    initDropdown();
    initMobileMenu();
    initSmoothScroll();
    initAnimations();
    initGallery();
    initLightbox();
    initContactForm();
    initBackToTop();
    initProductCatalog();
    // Reveal Animations on Scroll
    const revealElements = document.querySelectorAll('[data-animate="reveal"]');
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
            }
        });
    }, { threshold: 0.1 });

    revealElements.forEach(el => revealObserver.observe(el));
});

/* ───────────────────────────────────────────
   HEADER — sticky + scroll class
   ─────────────────────────────────────────── */
function initHeader() {
    const header = document.getElementById('header');
    function onScroll() {
        header.classList.toggle('scrolled', window.scrollY > 40);
    }
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
}

/* ───────────────────────────────────────────
   DROPDOWN — click to open/close (desktop)
   ─────────────────────────────────────────── */
function initDropdown() {
    const dropdowns = document.querySelectorAll('.nav-item-dropdown');

    dropdowns.forEach(dropdown => {
        const trigger = dropdown.querySelector('.nav-link');

        trigger.addEventListener('click', (e) => {
            // Only handle on desktop
            if (window.innerWidth <= 900) return;
            e.preventDefault();
            const isOpen = dropdown.classList.contains('open');
            // Close all dropdowns first
            dropdowns.forEach(d => d.classList.remove('open'));
            // Toggle current
            if (!isOpen) dropdown.classList.add('open');
        });
    });

    // Close dropdown when clicking outside
    document.addEventListener('click', (e) => {
        if (!e.target.closest('.nav-item-dropdown')) {
            dropdowns.forEach(d => d.classList.remove('open'));
        }
    });
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
        link.addEventListener('click', (e) => {
            // Dropdown handling on mobile
            const dropdown = link.closest('.nav-item-dropdown');
            if (dropdown && window.innerWidth <= 900) {
                // Toggle the dropdown on mobile instead of navigating
                e.preventDefault();
                dropdown.classList.toggle('active');
                return;
            }

            hamburger.classList.remove('active');
            navMenu.classList.remove('open');
            document.body.style.overflow = '';
        });
    });

    // Allow dropdown items to also close the menu on mobile
    navMenu.querySelectorAll('.dropdown-item').forEach(item => {
        item.addEventListener('click', () => {
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
    document.querySelectorAll('a[href*="#"]').forEach(link => {
        link.addEventListener('click', e => {
            const href = link.getAttribute('href');
            const url = new URL(link.href);
            const isSamePage = url.pathname === window.location.pathname ||
                (url.pathname.endsWith('/') && window.location.pathname.endsWith('index.php')) ||
                (url.pathname.endsWith('index.php') && window.location.pathname.endsWith('/'));

            if (isSamePage && url.hash) {
                const target = document.querySelector(url.hash);
                if (target) {
                    e.preventDefault();
                    window.scrollTo({ top: target.offsetTop - 80, behavior: 'smooth' });

                    // Close mobile menu if open
                    const hamburger = document.getElementById('hamburger');
                    const navMenu = document.getElementById('navMenu');
                    if (navMenu && navMenu.classList.contains('open')) {
                        hamburger.classList.remove('active');
                        navMenu.classList.remove('open');
                        document.body.style.overflow = '';
                    }
                }
            }
        });
    });

    const sections = document.querySelectorAll('section[id]');
    const menuLinks = document.querySelectorAll('.nav-link');

    function updateActive() {
        if (!window.location.pathname.endsWith('index.php') && window.location.pathname !== '/') return;

        const scrollY = window.scrollY + 120;
        sections.forEach(section => {
            const id = section.getAttribute('id');
            if (scrollY >= section.offsetTop && scrollY < section.offsetTop + section.offsetHeight) {
                menuLinks.forEach(link => {
                    const href = link.getAttribute('href');
                    if (href === `index.php#${id}` || href === `#${id}`) {
                        link.classList.add('active');
                    } else if (href.includes('#')) {
                        link.classList.remove('active');
                    }
                });
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

        const name = form.name.value.trim();
        const phone = form.phone.value.trim();
        const message = form.message.value.trim();

        if (!name || !phone || !message) {
            form.style.animation = 'shake 0.4s ease';
            setTimeout(() => form.style.animation = '', 500);
            return;
        }

        const btn = form.querySelector('button[type="submit"]');
        const orig = btn.innerHTML;
        btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Dispatching...';
        btn.disabled = true;

        const error = document.getElementById('formError');
        success.style.display = 'none';
        error.style.display = 'none';

        // Create FormData object
        const formData = new FormData(form);

        // Send to PHP backend
        fetch('send_email.php', {
            method: 'POST',
            body: formData
        })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok: ' + response.statusText);
                }
                return response.text(); // Get as text first to handle potential PHP errors
            })
            .then(text => {
                try {
                    const data = JSON.parse(text);
                    btn.innerHTML = orig;
                    btn.disabled = false;

                    if (data.status === 'success') {
                        form.reset();
                        success.style.display = 'block';
                        setTimeout(() => success.style.display = 'none', 8000);
                    } else {
                        error.style.display = 'block';
                        error.innerHTML = `<i class="fas fa-exclamation-circle"></i> Service Error: ${data.message}`;
                    }
                } catch (e) {
                    console.error('JSON Parse Error:', e);
                    console.error('Raw Response:', text);
                    btn.innerHTML = orig;
                    btn.disabled = false;
                    alert('Server returned an invalid response. This often happens if PHP mail is not configured in XAMPP. Check console for details.');
                }
            })
            .catch(error => {
                console.error('Fetch Error:', error);
                btn.innerHTML = orig;
                btn.disabled = false;
                alert('There was an error sending your message: ' + error.message);
            });
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
   PRODUCT CATALOG (grinding.php)
   ─────────────────────────────────────────── */
function initProductCatalog() {
    const grid = document.getElementById('productGrid');
    if (!grid) return;

    const products = [
        {
            name: "AGNI DC Wheel",
            category: "Grinding Wheels",
            materials: ["Steel", "Carbon Steel", "Cast Iron"],
            img: "images/Gun-DC-Wheel.jpg"
        },
        {
            name: "AGNI-H DC Wheel",
            category: "Grinding Wheels",
            materials: ["Heavy Duty", "Steel", "Alloy Steel"],
            img: "images/Gun-DC-Wheel.jpg"
        },
        {
            name: "AGNI-S DC Wheel",
            category: "Grinding Wheels",
            materials: ["Stainless Steel", "Non Ferrous Metal"],
            img: "images/Gun-DC-Wheel.jpg"
        },
        {
            name: "CUMI Depressed Centre Disc",
            category: "Grinding Wheels",
            materials: ["Steel", "Cast Iron", "Weld Prep"],
            img: "images/Depressed.jpg"
        },
        {
            name: "CUMI Flap Disc",
            category: "Grinding Wheels",
            materials: ["Stainless Steel", "Alloy Steel", "Finishing"],
            img: "images/Flap-Disc.png"
        },
        {
            name: "CUMI Green 2 Net Wheel",
            category: "Cutting Discs",
            materials: ["Stainless Steel", "Alloy Steel", "Metal"],
            img: "images/cumi_green_2.webp"
        },
        {
            name: "CUMI Zon Ultra Thin",
            category: "Cutting Discs",
            materials: ["Stainless Steel", "Mild Steel"],
            img: "images/cumi_zon_ultra_thin_wheel_feat_img.webp"
        },
        {
            name: "Metal Cutting Disc 125mm",
            category: "Cutting Discs",
            materials: ["Construction Steel", "Mild Steel"],
            img: "images/Metal-Cutting-Disc-125mm.png"
        },
        {
            name: "CUMI Rapid Chopsaw CW09",
            category: "Power Tool Accessories",
            materials: ["Alloy Steel", "Carbon Steel"],
            img: "images/CUMI-Rapid-Chopsaw-CW09.jpg"
        },
        {
            name: "CUMI Green Chopsaw DF",
            category: "Power Tool Accessories",
            materials: ["Non Ferrous Metal", "Metal"],
            img: "images/CUMI-Green-Chopsaw-DF.jpg"
        },
        {
            name: "CAG-100 850W Angle Grinder",
            category: "Power Tools",
            materials: ["Grinding", "Cutting", "Polishing"],
            img: "images/CAG-100-850W.webp"
        },
        {
            name: "Ajax Sukha Paper Plus",
            category: "Coated Abrasives",
            materials: ["Wood", "Metal", "Plastic"],
            img: "images/Ajax-Sukha-Paper-Plus.jpg"
        },
        {
            name: "Ajax Waterproof Sheet",
            category: "Coated Abrasives",
            materials: ["Automotive", "Metal", "Wet Sanding"],
            img: "images/Ajax-Sheet.jpg"
        },
        {
            name: "Sandmaster Paper Roll",
            category: "Coated Abrasives",
            materials: ["Metal", "Paint Removal"],
            img: "images/Sandmaster-Paper-Roll-Side.jpg"
        },
        {
            name: "Sandmaster Premium Roll",
            category: "Coated Abrasives",
            materials: ["Wood", "Metal", "Finishing"],
            img: "images/Sandmaster-Roll-Front.jpg"
        },
        {
            name: "Concord NXT Cloth Roll",
            category: "Coated Abrasives",
            materials: ["Steel", "Mild Steel"],
            img: "images/Concord-Roll.jpg"
        },
        {
            name: "CUMI Chopsaw Wheel",
            category: "Cutting Discs",
            materials: ["Steel", "Iron", "Metal Cutting"],
            img: "images/Chopsaw.jpg"
        },
        {
            name: "CUMI Thin Cutting Disc",
            category: "Cutting Discs",
            materials: ["Stainless Steel", "Alloy Steel"],
            img: "images/Cutting.png"
        },
        {
            name: "Industrial Grinding Wheel",
            category: "Grinding Wheels",
            materials: ["Technical Grinding", "Metal"],
            img: "images/Grinding-Wheels.png"
        },
        {
            name: "Sandmaster Sanding Sheet",
            category: "Coated Abrasives",
            materials: ["Wood", "Paint", "Metal"],
            img: "images/Sandmaster-Sheet.jpg"
        },
        {
            name: "CUMI Premium Paper Roll",
            category: "Coated Abrasives",
            materials: ["Surface Prep", "Wood", "Metal"],
            img: "images/paper-roll.png"
        },
        {
            name: "Heavy Duty Chopsaw",
            category: "Power Tools",
            materials: ["Structural Steel", "Metal Cutting"],
            img: "images/power-tools.png"
        },
        {
            name: "Industrial Sanding Disc",
            category: "Coated Abrasives",
            materials: ["Finishing", "Metal"],
            img: "images/sanding.png"
        }
    ];

    const searchInput = document.getElementById('productSearch');
    const materialFilters = document.querySelectorAll('.material-filter');
    const clearBtn = document.getElementById('clearFilters');
    const loader = document.getElementById('loader');
    const noResults = document.getElementById('noResults');
    const template = document.getElementById('productTemplate');

    function renderProducts() {
        grid.innerHTML = '';
        const query = searchInput.value.toLowerCase();
        const activeMaterials = Array.from(materialFilters)
            .filter(i => i.checked)
            .map(i => i.value);

        const filtered = products.filter(p => {
            const matchesSearch = p.name.toLowerCase().includes(query) ||
                p.category.toLowerCase().includes(query);
            const matchesMaterial = activeMaterials.length === 0 ||
                p.materials.some(m => activeMaterials.includes(m));
            return matchesSearch && matchesMaterial;
        });

        if (filtered.length === 0) {
            noResults.style.display = 'block';
        } else {
            noResults.style.display = 'none';
            filtered.forEach(p => {
                const clone = template.content.cloneNode(true);
                clone.querySelector('.product-name').textContent = p.name;
                clone.querySelector('.product-cat').textContent = p.category;
                clone.querySelector('.product-img').src = p.img;
                clone.querySelector('.product-img').alt = p.name;

                const mWrap = clone.querySelector('.product-materials');
                p.materials.forEach(m => {
                    const span = document.createElement('span');
                    span.className = 'material-tag';
                    span.textContent = m;
                    mWrap.appendChild(span);
                });

                grid.appendChild(clone);
            });
            // Re-init reveal animations for new items
            initAnimations();
        }
    }

    // Set initial behavior
    setTimeout(() => {
        loader.style.display = 'none';
        renderProducts();
    }, 800);

    // Event listeners
    searchInput.addEventListener('input', renderProducts);
    materialFilters.forEach(f => f.addEventListener('change', renderProducts));

    clearBtn.addEventListener('click', () => {
        searchInput.value = '';
        materialFilters.forEach(f => f.checked = false);
        renderProducts();
    });
}

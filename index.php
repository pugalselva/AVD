<?php
$activePage = 'home';
$pageTitle = 'Home';
include 'header.php';
?>



<!-- ===== PREMIUM HERO SECTION ===== -->
<section class="hero-premium" id="home">
    <div class="hero-visuals">
        <div class="ambient-glow glow-1"></div>
        <div class="ambient-glow glow-2"></div>
        <div class="hero-img-bg"></div>
    </div>

    <div class="container">
        <div class="hero-content-premium" data-animate="reveal">
            <div class="shimmer-label">
                <i class="fas fa-certificate"></i>
                <span>Authorised CUMI Distributor</span>
            </div>

            <h1 class="hero-title-main">
                AVD <span class="text-accent d-inline">Industrial</span>
                Traders
            </h1>

            <p class="subtitle">
                Authorised Distributor for CUMI – Carborundum Universal Limited <strong>(Murugappa Group).</strong>
                Premium abrasive products and power tools delivered across Villupuram & Tamil Nadu.
            </p>

            <div class="hero-btns-premium d-flex gap-4 mb-5">
                <a href="grinding.php" class="btn btn-primary px-5 py-3">
                    <i class="fas fa-th-large me-2"></i> View Products
                </a>
                <a href="tel:+918682069879" class="btn btn-outline px-5 py-3">
                    <i class="fas fa-phone-alt me-2"></i> Call Us Now
                </a>
            </div>

            <div class="hero-stats-row" data-animate="reveal">
                <div class="stat-item">
                    <span class="stat-number">500+</span>
                    <span class="stat-label">Products</span>
                </div>
                <div class="separator"></div>
                <div class="stat-item">
                    <span class="stat-number" style="color: white; -webkit-text-stroke: 1px #1565c0;">CUMI</span>
                    <span class="stat-label">Authorised</span>
                </div>
            </div>
        </div>
    </div>

    <div class="scroll-indicator">
        <span class="text-uppercase small opacity-50 tracking-widest mb-2 d-block">Explore</span>
        <div class="line"></div>
    </div>
</section>

<!-- ===== PREMIUM ABOUT SECTION ===== -->
<section class="about-section py-lg-7" id="about">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-5" data-animate="reveal">
                <div class="about-visual-wrapper position-relative">
                    <div class="accent-frame"></div>
                    <div class="glass-premium overflow-hidden rounded-lg shadow-xl">
                        <img src="images/about1.png" alt="Industrial Facility" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div class="about-iso-badge premium-badge">
                        <strong class="d-block">ISO</strong>
                        <span class="text-uppercase tracking-widest">Certified</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-7" data-animate="reveal" style="transition-delay: 0.2s;">
                <span class="section-tag">Corporate Excellence</span>
                <h2 class="section-title">The AVD <span>Legacy</span></h2>
                <p class="section-desc mb-4">
                    Led by <strong>G. Govindavasan, M.Tech.</strong>, AVD Industrial Traders stands as a beacon of
                    technical excellence in the abrasive industry.
                </p>
                <p class="text-muted mb-5">
                    As authorised distributors for CUMI (Carborundum Universal Limited), we bridge the gap between
                    world-class engineering and local industrial requirements with unparalleled technical depth.
                </p>
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="glass-premium p-4 border-start-accent">
                            <h4 class="h6 mb-2">Expert Consultancy</h4>
                            <p class="small text-muted mb-0">Technical guidance driven by advanced M.Tech. expertise.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="glass-premium p-4 border-start-highlight">
                            <h4 class="h6 mb-2">Verified Supply</h4>
                            <p class="small text-muted mb-0">Authorised CUMI distribution with GSTIN compliance.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ===== PREMIUM PRODUCTS SECTION ===== -->
<section style="padding: 120px 0; background: var(--bg-light);" id="products">
    <div class="container">
        <div class="section-header text-center mb-5" data-animate="reveal">
            <span class="header-tag-minimal mb-2">CUMI Authorised Solutions</span>
            <h2 style="font-size: 3rem;">Our <span>Products</span></h2>
        </div>

        <div class="row g-4">
            <!-- Product Card 1 -->
            <div class="col-lg-4 col-md-6" data-animate="reveal">
                <div class="glass-premium product-card-premium h-100 shadow-sm border-0">
                    <div class="product-img-wrapper"
                        style="height: 250px; background: #eaeff5; display: flex; align-items: center; justify-content: center; padding: 30px; border-radius: var(--radius-sm) var(--radius-sm) 0 0;">
                        <img src="images/Grinding-Wheels.png" alt="Grinding Wheels"
                            style="max-height: 80%; transition: transform 0.6s ease;">
                    </div>
                    <div class="product-info p-4">
                        <span class="product-category fw-bold"
                            style="color: var(--accent); font-size: 0.75rem; text-transform: uppercase;">Bonded
                            Abrasives</span>
                        <h3 class="h4 mt-2">Grinding Wheels</h3>
                        <p class="text-muted small mb-4">Superior surface finishing and extreme material removal for
                            precision engineering.</p>
                        <a href="grinding.php" class="btn btn-primary w-100 py-3"
                            style="border-radius: var(--radius-sm);">VIEW SPECS</a>
                    </div>
                </div>
            </div>

            <!-- Product Card 2 -->
            <div class="col-lg-4 col-md-6" data-animate="reveal" style="transition-delay: 0.1s;">
                <div class="glass-premium product-card-premium h-100 shadow-sm border-0">
                    <div class="product-img-wrapper"
                        style="height: 250px; background: #eaeff5; display: flex; align-items: center; justify-content: center; padding: 30px; border-radius: var(--radius-sm) var(--radius-sm) 0 0;">
                        <img src="images/Cutting.png" alt="Cutting Discs"
                            style="max-height: 80%; transition: transform 0.6s ease;">
                    </div>
                    <div class="product-info p-4">
                        <span class="product-category fw-bold"
                            style="color: var(--accent); font-size: 0.75rem; text-transform: uppercase;">Cutting
                            Solutions</span>
                        <h3 class="h4 mt-2">Advanced Cutting</h3>
                        <p class="text-muted small mb-4">Ultra-thin technology for clean, burr-free cuts in stainless
                            steel and alloys.</p>
                        <a href="grinding.php" class="btn btn-outline w-100 py-3"
                            style="border-radius: var(--radius-sm);">VIEW SPECS</a>
                    </div>
                </div>
            </div>

            <!-- Product Card 3 -->
            <div class="col-lg-4 col-md-6" data-animate="reveal" style="transition-delay: 0.2s;">
                <div class="glass-premium product-card-premium h-100 shadow-sm border-0">
                    <div class="product-img-wrapper"
                        style="height: 250px; background: #eaeff5; display: flex; align-items: center; justify-content: center; padding: 30px; border-radius: var(--radius-sm) var(--radius-sm) 0 0;">
                        <img src="images/power-tools.png" alt="Power Tools"
                            style="max-height: 80%; transition: transform 0.6s ease;">
                    </div>
                    <div class="product-info p-4">
                        <span class="product-category fw-bold"
                            style="color: var(--accent); font-size: 0.75rem; text-transform: uppercase;">Machinery</span>
                        <h3 class="h4 mt-2">Power Tools</h3>
                        <p class="text-muted small mb-4">High-performance industrial machinery with robust motor
                            technology for heavy duty.</p>
                        <a href="products.php#power-tools" class="btn btn-outline w-100 py-3"
                            style="border-radius: var(--radius-sm);">VIEW SPECS</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-5" data-animate="reveal">
            <a href="grinding.php" class="btn btn-primary px-5 py-3">VIEW ENTIRE CATALOG</a>
        </div>
    </div>
</section>

<!-- ===== COATED ABRASIVES SECTION ===== -->
<!-- <section class="coated-abrasives" id="coated-abrasives">
        <div class="container">
            <div class="section-header" data-animate="fadeInUp">
                <div class="section-tag">Specialized Range</div>
                <h2 class="section-title">Coated <span>Abrasives</span></h2>
                <div class="title-underline"></div>
                <p class="section-desc">Premium quality rolls, sheets, and specialized cutting wheels for industrial
                    applications.</p>
            </div>

            <div class="coated-grid"> -->
<!-- Rolls Subcategory -->
<!-- <div class="coated-column" data-animate="fadeInUp">
                    <div class="coated-category-header">
                        <i class="fas fa-scroll"></i>
                        <h3>Cloth & Paper Rolls</h3>
                    </div>
                    <ul class="coated-product-list">
                        <li>
                            <span class="product-name">Concord NXT Cloth Roll</span>
                            <a href="#contact" class="mini-inquiry">Inquire</a>
                        </li>
                        <li>
                            <span class="product-name">Sandmaster NXT Cloth Roll</span>
                            <a href="#contact" class="mini-inquiry">Inquire</a>
                        </li>
                        <li>
                            <span class="product-name">Sandmaster Paper Roll</span>
                            <a href="#contact" class="mini-inquiry">Inquire</a>
                        </li>
                    </ul>
                </div> -->

<!-- Sheets Subcategory -->
<!-- <div class="coated-column" data-animate="fadeInUp" style="--delay:0.1s">
                    <div class="coated-category-header">
                        <i class="fas fa-file-alt"></i>
                        <h3>Sanding Sheets</h3>
                    </div>
                    <ul class="coated-product-list">
                        <li>
                            <span class="product-name">Ajax Sukha Plus Sheet</span>
                            <a href="#contact" class="mini-inquiry">Inquire</a>
                        </li>
                        <li>
                            <span class="product-name">Ajax Waterproof Sanding Sheet</span>
                            <a href="#contact" class="mini-inquiry">Inquire</a>
                        </li>
                        <li>
                            <span class="product-name">Sand Master Sheet</span>
                            <a href="#contact" class="mini-inquiry">Inquire</a>
                        </li>
                    </ul>
                </div> -->

<!-- Cutting and Grinding Subcategory -->
<!-- <div class="coated-column" data-animate="fadeInUp" style="--delay:0.2s">
                    <div class="coated-category-header">
                        <i class="fas fa-compact-disc"></i>
                        <h3>Cutting & Grinding</h3>
                    </div>
                    <ul class="coated-product-list">
                        <li>
                            <span class="product-name">CUMI Green 2 Net Ultra Thin Wheel</span>
                            <a href="#contact" class="mini-inquiry">Inquire</a>
                        </li>
                        <li>
                            <span class="product-name">CUMI Green Chopsaw DF</span>
                            <a href="#contact" class="mini-inquiry">Inquire</a>
                        </li>
                        <li>
                            <span class="product-name">CUMI NXT Chopsaw</span>
                            <a href="#contact" class="mini-inquiry">Inquire</a>
                        </li>
                        <li>
                            <span class="product-name">CUMI Rapid Chopsaw CW 09</span>
                            <a href="#contact" class="mini-inquiry">Inquire</a>
                        </li>
                        <li>
                            <span class="product-name">CUMI Zon Ultra Thin Wheel</span>
                            <a href="#contact" class="mini-inquiry">Inquire</a>
                        </li>
                        <li>
                            <span class="product-name">GUN DC Wheel</span>
                            <a href="#contact" class="mini-inquiry">Inquire</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section> -->

<!-- Redundant Gallery removed for cleaner Premium Flow -->

<!-- ===== PREMIUM WHY CHOOSE US ===== -->
<section class="features-section py-lg-7 text-white position-relative overflow-hidden" id="why-us">
    <div class="ambient-glow glow-centered"></div>
    <div class="container position-relative z-index-2">
        <div class="text-center mb-5" data-animate="reveal">
            <span class="section-tag border-white opacity-70">Strategic Edge</span>
            <h2 class="section-title">Why <span>Partner With Us</span>
            </h2>
        </div>

        <div class="row g-4">
            <div class="col-lg-4" data-animate="reveal">
                <div class="glass-premium-white p-4 h-100 border-top-accent shadow-lg">
                    <div class="icon-circle mb-4 bg-white-10 shadow-lg"><i class="fas fa-medal"></i></div>
                    <h3 class="h5 text-dark mb-3">Global Quality</h3>
                    <p class="small text-dark opacity-70 mb-0">Authorised distribution channel for CUMI products,
                        ensuring world-class industrial standards.</p>
                </div>
            </div>

            <div class="col-lg-4" data-animate="reveal" style="transition-delay: 0.1s;">
                <div class="glass-premium-white p-4 h-100 border-top-highlight shadow-lg">
                    <div class="icon-circle mb-4 bg-white-10 highlight-icon shadow-lg"><i class="fas fa-microchip"></i></div>
                    <h3 class="h5 text-dark mb-3">Technical Depth</h3>
                    <p class="small text-dark opacity-70 mb-0">Expert advice provided by M.Tech professionals to solve
                        complex abrasive challenges.</p>
                </div>
            </div>

            <div class="col-lg-4" data-animate="reveal" style="transition-delay: 0.2s;">
                <div class="glass-premium-white p-4 h-100 border-top-highlight shadow-lg">
                    <div class="icon-circle mb-4 bg-white-10 text-dark shadow-lg"><i class="fas fa-truck-fast"></i></div>
                    <h3 class="h5 text-dark mb-3">Supply Agility</h3>
                    <p class="small text-dark opacity-70 mb-0">Optimized logistics network ensuring rapid delivery
                        across Tamil Nadu regions.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== PREMIUM INDUSTRIES SECTION ===== -->
<section style="padding: 120px 0; background: var(--bg-alt);" id="industries">
    <div class="container">
        <div class="text-center mb-5" data-animate="reveal">
            <span class="section-tag border-white opacity-70">Market Intelligence</span>
            <h2 class="section-title">Sectors We <span>Empower</span>
            </h2>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-animate="reveal">
                <div class="glass-premium p-4 h-100 shadow-lg border-0 bg-white"
                    style="border-radius: var(--radius-sm);">
                    <div class="icon-circle mb-4 bg-light"
                        style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; border-radius: 12px; color: var(--accent);">
                        <i class="fas fa-industry" style="font-size: 1.5rem;"></i>
                    </div>
                    <h4 class="h5 mb-3">Manufacturing</h4>
                    <p class="text-muted small mb-0">Precision tools for high-volume production lines and precision
                        engineering units.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-animate="reveal" style="transition-delay: 0.1s;">
                <div class="glass-premium p-4 h-100 shadow-lg border-0 bg-white"
                    style="border-radius: var(--radius-sm);">
                    <div class="icon-circle mb-4 bg-light"
                        style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; border-radius: 12px; color: var(--highlight);">
                        <i class="fas fa-car" style="font-size: 1.5rem;"></i>
                    </div>
                    <h4 class="h5 mb-3">Automotive</h4>
                    <p class="text-muted small mb-0">Specialized abrasives for body finishing, engine components, and
                        assembly.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-animate="reveal" style="transition-delay: 0.2s;">
                <div class="glass-premium p-4 h-100 shadow-lg border-0 bg-white"
                    style="border-radius: var(--radius-sm);">
                    <div class="icon-circle mb-4 bg-light"
                        style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; border-radius: 12px; color: var(--primary);">
                        <i class="fas fa-building" style="font-size: 1.5rem;"></i>
                    </div>
                    <h4 class="h5 mb-3">Construction</h4>
                    <p class="text-muted small mb-0">Heavy-duty solutions for structural steel and architectural metal
                        work.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ===== PREMIUM LEADERSHIP SECTION ===== -->
<section class="leadership-section py-lg-7" id="leadership">
    <div class="container">
        <div class="text-center mb-5" data-animate="reveal">
            <span class="section-tag">Pillars of Integrity</span>
            <h2 class="section-title">Visionary <span>Leadership</span></h2>
        </div>

        <div class="row g-4 justify-content-center">
            <!-- Leader 1 -->
            <div class="col-lg-5" data-animate="reveal">
                <div
                    class="glass-premium p-4 h-100 d-flex align-items-center gap-4 border-start-accent hover-translate">
                    <div class="leader-avatar flex-shrink-0">
                        <img src="images/man.png" alt="G. Govindavasan">
                    </div>
                    <div class="leader-details">
                        <h4 class="h5 mb-1">G. Govindavasan</h4>
                        <span class="small text-uppercase fw-bold text-accent tracking-widest d-block mb-3">Founder &
                            CEO</span>
                        <div class="leader-socials d-flex gap-3 text-muted">
                            <a href="#" class="hover-accent"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="hover-accent"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== PREMIUM CONTACT SECTION ===== -->
<section style="padding: 120px 0; background: var(--bg-light);" id="contact">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-5" data-animate="reveal">
                <span class="header-tag-minimal" style="color: var(--accent);">Direct Connection</span>
                <h2 style="font-size: 3rem; margin-bottom: 30px;">Let's Build <span>Together</span></h2>
                <p style="color: var(--text-muted); margin-bottom: 40px; line-height: 1.8;">Technical excellence and
                    reliable delivery. Partner with AVD Industrial Traders for all your abrasive and Power tools requirements.
                </p>

                <div style="margin-bottom: 30px;">
                    <div style="display: flex; gap: 20px; align-items: center; margin-bottom: 25px;">
                        <div
                            style="width: 60px; height: 60px; background: white; border-radius: var(--radius-sm); display: flex; align-items: center; justify-content: center; color: var(--accent); box-shadow: var(--shadow-glass);">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div>
                            <span
                                style="display: block; font-size: 0.7rem; font-weight: 800; text-transform: uppercase; color: var(--text-light); letter-spacing: 1px;">Expert
                                Hotline</span>
                            <strong style="font-size: 1.1rem; color: var(--primary);">+91 86820 69879</strong>
                        </div>
                    </div>

                    <div style="display: flex; gap: 20px; align-items: center;">
                        <div
                            style="width: 60px; height: 60px; background: white; border-radius: var(--radius-sm); display: flex; align-items: center; justify-content: center; color: var(--highlight); box-shadow: var(--shadow-glass);">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <span
                                style="display: block; font-size: 0.7rem; font-weight: 800; text-transform: uppercase; color: var(--text-light); letter-spacing: 1px;">Official
                                Email</span>
                            <strong
                                style="font-size: 1.1rem; color: var(--primary);">avdindustrialtraders0006@gmail.com</strong>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7" data-animate="reveal">
                <div class="glass-premium" style="padding: 60px; background: white; box-shadow: var(--shadow-premium);">
                    <form id="contactForm">
                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <input type="text" placeholder="Your Name" required
                                    style="width: 100%; padding: 15px 25px; border-radius: var(--radius-sm); border: 1px solid #eee; background: #fdfdfd;">
                            </div>
                            <div class="col-md-6">
                                <input type="tel" placeholder="Phone Number" required
                                    style="width: 100%; padding: 15px 25px; border-radius: var(--radius-sm); border: 1px solid #eee; background: #fdfdfd;">
                            </div>
                        </div>
                        <input type="email" placeholder="Email Address" required
                            style="width: 100%; padding: 15px 25px; border-radius: var(--radius-sm); border: 1px solid #eee; background: #fdfdfd; margin-bottom: 20px;">
                        <textarea placeholder="How can we help you technicaly?" rows="5" required
                            style="width: 100%; padding: 15px 25px; border-radius: var(--radius-sm); border: 1px solid #eee; background: #fdfdfd; margin-bottom: 30px; resize: none;"></textarea>
                        <button type="submit" class="btn btn-primary"
                            style="width: 100%; padding: 20px; border-radius: var(--radius-sm); font-weight: 800; letter-spacing: 1px;">SEND
                            TECHNICAL INQUIRY</button>
                    </form>
                </div>
            </div>
        </div>
</section>


<!-- ===== PARTNER BRANDS SECTION ===== -->
<section class="partners-section py-lg-7 bg-light border-top" id="partners">
    <div class="container">
        <div class="text-center mb-5" data-animate="reveal">
            <span class="section-tag">Trusted Quality</span>
            <h2 class="section-title">Partner <span>Brands</span></h2>
        </div>

        <div class="row g-3 row-cols-2 row-cols-md-3 row-cols-lg-5">
            <div class="col" data-animate="reveal">
                <div class="glass-premium p-3 text-center h-100 d-flex align-items-center justify-content-center">
                    <span class="fw-bold small text-primary">JAWAN BRAND</span>
                </div>
            </div>
            <div class="col" data-animate="reveal" style="transition-delay: 0.05s;">
                <div class="glass-premium p-3 text-center h-100 d-flex align-items-center justify-content-center">
                    <span class="fw-bold small text-primary">AJAX</span>
                </div>
            </div>
            <div class="col" data-animate="reveal" style="transition-delay: 0.1s;">
                <div class="glass-premium p-3 text-center h-100 d-flex align-items-center justify-content-center">
                    <span class="fw-bold small text-primary">SAND MASTER</span>
                </div>
            </div>
            <div class="col" data-animate="reveal" style="transition-delay: 0.15s;">
                <div class="glass-premium p-3 text-center h-100 d-flex align-items-center justify-content-center">
                    <span class="fw-bold small text-primary">WARRIOR</span>
                </div>
            </div>
            <div class="col" data-animate="reveal" style="transition-delay: 0.2s;">
                <div class="glass-premium p-3 text-center h-100 d-flex align-items-center justify-content-center">
                    <span class="fw-bold small text-primary">CONCORD</span>
                </div>
            </div>
            <div class="col" data-animate="reveal" style="transition-delay: 0.25s;">
                <div class="glass-premium p-3 text-center h-100 d-flex align-items-center justify-content-center">
                    <span class="fw-bold small text-primary">HI-CUT</span>
                </div>
            </div>
            <div class="col" data-animate="reveal" style="transition-delay: 0.3s;">
                <div class="glass-premium p-3 text-center h-100 d-flex align-items-center justify-content-center">
                    <span class="fw-bold small text-primary">SAMURAI</span>
                </div>
            </div>
            <div class="col" data-animate="reveal" style="transition-delay: 0.35s;">
                <div class="glass-premium p-3 text-center h-100 d-flex align-items-center justify-content-center">
                    <span class="fw-bold small text-primary">CHAMAK</span>
                </div>
            </div>
            <div class="col" data-animate="reveal" style="transition-delay: 0.4s;">
                <div class="glass-premium p-3 text-center h-100 d-flex align-items-center justify-content-center">
                    <span class="fw-bold small text-primary">SPEED</span>
                </div>
            </div>
            <div class="col" data-animate="reveal" style="transition-delay: 0.45s;">
                <div class="glass-premium p-3 text-center h-100 d-flex align-items-center justify-content-center">
                    <span class="fw-bold small text-primary">TEZZ</span>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
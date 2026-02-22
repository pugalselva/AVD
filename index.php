<?php
$activePage = 'home';
$pageTitle = 'Home';
include 'header.php';
?>



<!-- ===== PREMIUM HERO SECTION ===== -->
<section class="hero-premium" id="home"
    style="min-height: 100vh; position: relative; background: var(--primary); overflow: hidden; display: flex; align-items: center; padding-top: var(--header-height);">
    <!-- Abstract Ambient Visuals -->
    <div
        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-image: radial-gradient(circle at 80% 20%, rgba(0, 188, 212, 0.15) 0%, transparent 50%), radial-gradient(circle at 20% 80%, rgba(233, 30, 99, 0.1) 0%, transparent 50%);">
    </div>
    <div
        style="position: absolute; inset: 0; background: url('images/hero-bg.jpg') center/cover no-repeat; opacity: 0.3; filter: grayscale(1) brightness(0.6);">
    </div>

    <div class="container" style="position: relative; z-index: 2;">
        <div class="hero-content-premium" data-animate="reveal" class="active">
            <div class="glass-premium"
                style="display: inline-flex; align-items: center; gap: 10px; padding: 10px 20px; border-radius: var(--radius-full); margin-bottom: 30px;">
                <i class="fas fa-certificate" style="color: var(--accent);"></i>
                <span
                    style="color: var(--white); font-size: 0.8rem; font-weight: 800; letter-spacing: 2px; text-transform: uppercase;">Authorised
                    CUMI Distributor</span>
            </div>

            <h1 class="premium-title-main" style="margin-bottom: 20px;">
                AVD Industrial
                <span>Traders</span>
            </h1>

            <p
                style="font-size: 1.25rem; color: var(--text-light); max-width: 600px; line-height: 1.8; margin-bottom: 50px; border-left: 2px solid var(--accent); padding-left: 30px;">
                Authorised Distributor for <strong>CUMI – Carborundum Universal Limited (Murugappa Group)</strong>.
                Premium abrasive solutions and precision engineering tools delivered across Tamil Nadu.
            </p>

            <div style="display: flex; gap: 20px; margin-bottom: 80px;">
                <a href="#products" class="btn btn-primary"
                    style="padding: 20px 45px; border-radius: var(--radius-full); font-weight: 800; letter-spacing: 1px;">EXPLORE
                    CATALOG</a>
                <a href="#contact" class="btn btn-outline"
                    style="padding: 20px 45px; border-radius: var(--radius-full); color: white; border-color: rgba(255,255,255,0.3);">CONSULT
                    AN EXPERT</a>
            </div>

            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 40px; max-width: 800px;">
                <div class="glass-premium" style="padding: 30px; border-top: 1px solid rgba(0, 188, 212, 0.3);">
                    <strong
                        style="display: block; font-size: 2.5rem; color: var(--white); line-height: 1;">500+</strong>
                    <span
                        style="color: var(--accent); font-weight: 800; text-transform: uppercase; font-size: 0.7rem; letter-spacing: 2px;">Precision
                        Products</span>
                </div>
                <div class="glass-premium" style="padding: 30px; border-top: 1px solid rgba(255, 255, 255, 0.2);">
                    <strong
                        style="display: block; font-size: 2.5rem; color: var(--white); line-height: 1;">300+</strong>
                    <span
                        style="color: var(--text-light); font-weight: 800; text-transform: uppercase; font-size: 0.7rem; letter-spacing: 2px;">Customers
                        Served</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Scrolling Decoration -->
    <div style="position: absolute; bottom: 40px; left: 50%; transform: translateX(-50%); text-align: center;">
        <span
            style="display: block; font-size: 0.7rem; color: var(--text-light); letter-spacing: 4px; text-transform: uppercase; margin-bottom: 15px;">Discover
            Excellence</span>
        <div
            style="width: 2px; height: 60px; background: linear-gradient(to bottom, var(--accent), transparent); margin: 0 auto;">
        </div>
    </div>
</section>

<!-- ===== PREMIUM ABOUT SECTION ===== -->
<section style="padding: 120px 0; background: var(--white); position: relative;" id="about">
    <div class="container">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 100px; align-items: center;">
            <div data-animate="reveal">
                <div style="position: relative;">
                    <div
                        style="position: absolute; top: -30px; left: -30px; width: 120px; height: 120px; border-top: 5px solid var(--accent); border-left: 5px solid var(--accent); z-index: 0;">
                    </div>
                    <div class="glass-premium"
                        style="position: relative; z-index: 1; border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-premium);">
                        <img src="images/about1.png" alt="Industrial Facility" style="width: 100%; display: block;">
                    </div>
                    <div class="glass-premium"
                        style="position: absolute; bottom: -30px; left:90%; transform: translateX(-50%); padding: 25px 40px; background: var(--primary); color: white; border-radius: var(--radius-md); box-shadow: var(--shadow-premium); white-space: nowrap; text-align: center; z-index: 2;">
                        <strong
                            style="display: block; font-size: 2.5rem; color: var(--highlight); line-height: 1; margin-bottom: 5px;">ISO
                        </strong>
                        <span
                            style="font-size: 0.75rem; font-weight: 800; letter-spacing: 2px; text-transform: uppercase; color: var(--accent);">Certified
                        </span>
                    </div>
                </div>
            </div>

            <div data-animate="reveal" style="transition-delay: 0.2s;">
                <span class="header-tag-minimal" style="color: var(--highlight);">Corporate Excellence</span>
                <h2 style="font-size: 3.5rem; margin-bottom: 30px; line-height: 1.1;">The AVD <span>Legacy</span>
                </h2>
                <p style="font-size: 1.15rem; line-height: 1.8; color: var(--text-main); margin-bottom: 25px;">
                    Led by <strong>G. Govindavasan, M.Tech.</strong>, AVD Industrial Traders stands as a beacon of
                    technical excellence in the abrasive industry.
                </p>
                <p style="color: var(--text-muted); line-height: 1.7; margin-bottom: 40px;">
                    As authorised distributors for CUMI (Carborundum Universal Limited), we bridge the gap between
                    world-class engineering and local industrial requirements with unparalleled technical depth.
                </p>

                <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px;">
                    <div class="glass-premium" style="padding: 25px; border-left: 2px solid var(--accent);">
                        <h4 style="font-size: 0.9rem; margin-bottom: 10px; color: var(--primary);">Expert
                            Consultancy
                        </h4>
                        <p style="font-size: 0.8rem; color: var(--text-muted);">Technical guidance driven by
                            advanced
                            M.Tech. expertise.</p>
                    </div>
                    <div class="glass-premium" style="padding: 25px; border-left: 2px solid var(--highlight);">
                        <h4 style="font-size: 0.9rem; margin-bottom: 10px; color: var(--primary);">Verified Supply
                        </h4>
                        <p style="font-size: 0.8rem; color: var(--text-muted);">Authorised CUMI distribution with
                            GSTIN
                            compliance.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ===== PREMIUM PRODUCTS SECTION ===== -->
<section style="padding: 120px 0; background: var(--bg-light);" id="products">
    <div class="container">
        <div class="section-header" style="text-align: center; margin-bottom: 80px;" data-animate="reveal">
            <span class="header-tag-minimal" style="color: var(--accent); display: block; margin: 0 auto;">CUMI
                Authorised Solutions</span>
            <h2 style="font-size: 3rem;">Precision <span>Engineering Range</span></h2>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 40px;">
            <!-- Product Card 1 -->
            <div class="glass-premium shimmer"
                style="overflow: hidden; transition: transform 0.4s var(--transition-premium);" data-animate="reveal">
                <div
                    style="height: 250px; background: #eaeff5; display: flex; align-items: center; justify-content: center; padding: 30px;">
                    <img src="images/Grinding-Wheels.png" alt="Grinding Wheels"
                        style="max-height: 80%; transition: scale 0.6s ease;">
                </div>
                <div style="padding: 35px;">
                    <h3 style="font-size: 1.4rem; margin-bottom: 10px;">Grinding Wheels</h3>
                    <p style="color: var(--text-muted); font-size: 0.9rem; margin-bottom: 25px;">Superior surface
                        finishing and extreme material removal.</p>
                    <a href="products.php" class="btn btn-primary"
                        style="width: 100%; justify-content: center; font-size: 0.8rem; border-radius: var(--radius-sm);">VIEW
                        SPECS</a>
                </div>
            </div>

            <!-- Product Card 2 -->
            <div class="glass-premium shimmer"
                style="overflow: hidden; transition: transform 0.4s var(--transition-premium); transition-delay: 0.1s;"
                data-animate="reveal">
                <div
                    style="height: 250px; background: #eaeff5; display: flex; align-items: center; justify-content: center; padding: 30px;">
                    <img src="images/Cutting.png" alt="Cutting Discs" style="max-height: 80%;">
                </div>
                <div style="padding: 35px;">
                    <h3 style="font-size: 1.4rem; margin-bottom: 10px;">Cutting Discs</h3>
                    <p style="color: var(--text-muted); font-size: 0.9rem; margin-bottom: 25px;">Ultra-thin
                        high-speed
                        cutting for clean industrial results.</p>
                    <a href="products.php" class="btn btn-primary"
                        style="width: 100%; justify-content: center; font-size: 0.8rem; border-radius: var(--radius-sm);">VIEW
                        SPECS</a>
                </div>
            </div>

            <!-- Product Card 3 -->
            <div class="glass-premium shimmer"
                style="overflow: hidden; transition: transform 0.4s var(--transition-premium); transition-delay: 0.2s;"
                data-animate="reveal">
                <div
                    style="height: 250px; background: #eaeff5; display: flex; align-items: center; justify-content: center; padding: 30px;">
                    <img src="images/sanding.png" alt="Sanding Sheets" style="max-height: 80%;">
                </div>
                <div style="padding: 35px;">
                    <h3 style="font-size: 1.4rem; margin-bottom: 10px;">Sanding Solutions</h3>
                    <p style="color: var(--text-muted); font-size: 0.9rem; margin-bottom: 25px;">Premium coated
                        abrasives for peak surface preparation.</p>
                    <a href="products.php" class="btn btn-primary"
                        style="width: 100%; justify-content: center; font-size: 0.8rem; border-radius: var(--radius-sm);">VIEW
                        SPECS</a>
                </div>
            </div>
        </div>

        <div style="text-align: center; margin-top: 60px;" data-animate="reveal">
            <a href="products.php" class="btn btn-outline"
                style="border-radius: var(--radius-full); padding: 15px 40px; color: var(--primary); border-color: var(--primary);">VIEW
                ENTIRE CATALOG <i class="fas fa-arrow-right" style="margin-left: 10px;"></i></a>
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
<section style="padding: 120px 0; background: var(--primary); color: white; position: relative; overflow: hidden;"
    id="why-us">
    <div
        style="position: absolute; inset: 0; background: radial-gradient(circle at 50% 50%, rgba(0, 188, 212, 0.05) 0%, transparent 70%);">
    </div>
    <div class="container" style="position: relative; z-index: 1;">
        <div class="section-header" style="text-align: center; margin-bottom: 80px;" data-animate="reveal">
            <span class="header-tag-minimal" style="color: var(--accent); display: block; margin: 0 auto;">Our
                Strategic Edge</span>
            <h2 style="font-size: 3rem; color: white;">Why <span>Partner With Us</span></h2>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
            <div class="glass-premium"
                style="padding: 40px; border-top: 1px solid rgba(0, 188, 212, 0.3); transition: transform 0.4s ease;"
                data-animate="reveal">
                <i class="fas fa-medal" style="font-size: 2.5rem; color: var(--accent); margin-bottom: 25px;"></i>
                <h3 style="font-size: 1.25rem; margin-bottom: 15px; color: white;">Global Quality</h3>
                <p style="font-size: 0.85rem; color: var(--text-light); line-height: 1.6;">Authorised distribution
                    channel for CUMI products, ensuring world-class industrial standards.</p>
            </div>

            <div class="glass-premium"
                style="padding: 40px; border-top: 1px solid rgba(233, 30, 99, 0.3); transition: transform 0.4s ease; transition-delay: 0.1s;"
                data-animate="reveal">
                <i class="fas fa-microchip"
                    style="font-size: 2.5rem; color: var(--highlight); margin-bottom: 25px;"></i>
                <h3 style="font-size: 1.25rem; margin-bottom: 15px; color: white;">Technical Depth</h3>
                <p style="font-size: 0.85rem; color: var(--text-light); line-height: 1.6;">Expert advice provided by
                    M.Tech professionals to solve complex abrasive challenges.</p>
            </div>

            <div class="glass-premium"
                style="padding: 40px; border-top: 1px solid rgba(255, 255, 255, 0.2); transition: transform 0.4s ease; transition-delay: 0.2s;"
                data-animate="reveal">
                <i class="fas fa-truck-fast" style="font-size: 2.5rem; color: var(--white); margin-bottom: 25px;"></i>
                <h3 style="font-size: 1.25rem; margin-bottom: 15px; color: white;">Supply Agility</h3>
                <p style="font-size: 0.85rem; color: var(--text-light); line-height: 1.6;">Optimized logistics
                    network ensuring rapid delivery across Tamil Nadu regions.</p>
            </div>
        </div>
    </div>
</section>

<!-- ===== PREMIUM INDUSTRIES SECTION ===== -->
<section style="padding: 120px 0; background: var(--bg-alt);" id="industries">
    <div class="container">
        <div class="section-header" style="text-align: center; margin-bottom: 80px;" data-animate="reveal">
            <span class="header-tag-minimal" style="color: var(--highlight); display: block; margin: 0 auto;">Market
                Intelligence</span>
            <h2 style="font-size: 3rem;">Sectors We <span>Empower</span></h2>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
            <div class="glass-premium" style="padding: 35px; background: white; border: 1px solid rgba(0,0,0,0.05);"
                data-animate="reveal">
                <div
                    style="width: 60px; height: 60px; background: var(--bg-alt); display: flex; align-items: center; justify-content: center; border-radius: 12px; margin-bottom: 25px; color: var(--accent);">
                    <i class="fas fa-industry" style="font-size: 1.5rem;"></i>
                </div>
                <h4 style="font-size: 1.1rem; margin-bottom: 15px;">Manufacturing</h4>
                <p style="font-size: 0.8rem; color: var(--text-muted); line-height: 1.6;">Precision tools for
                    high-volume production lines and precision engineering units.</p>
            </div>

            <div class="glass-premium"
                style="padding: 35px; background: white; border: 1px solid rgba(0,0,0,0.05); transition-delay: 0.1s;"
                data-animate="reveal">
                <div
                    style="width: 60px; height: 60px; background: var(--bg-alt); display: flex; align-items: center; justify-content: center; border-radius: 12px; margin-bottom: 25px; color: var(--highlight);">
                    <i class="fas fa-car" style="font-size: 1.5rem;"></i>
                </div>
                <h4 style="font-size: 1.1rem; margin-bottom: 15px;">Automotive</h4>
                <p style="font-size: 0.8rem; color: var(--text-muted); line-height: 1.6;">Specialized abrasives for
                    body finishing, engine components, and assembly.</p>
            </div>

            <div class="glass-premium"
                style="padding: 35px; background: white; border: 1px solid rgba(0,0,0,0.05); transition-delay: 0.2s;"
                data-animate="reveal">
                <div
                    style="width: 60px; height: 60px; background: var(--bg-alt); display: flex; align-items: center; justify-content: center; border-radius: 12px; margin-bottom: 25px; color: var(--primary);">
                    <i class="fas fa-building" style="font-size: 1.5rem;"></i>
                </div>
                <h4 style="font-size: 1.1rem; margin-bottom: 15px;">Construction</h4>
                <p style="font-size: 0.8rem; color: var(--text-muted); line-height: 1.6;">Heavy-duty solutions for
                    structural steel and architectural metal work.</p>
            </div>
        </div>
    </div>
</section>
<!-- ===== PREMIUM LEADERSHIP SECTION ===== -->
<section style="padding: 120px 0; background: var(--white);" id="leadership">
    <div class="container">
        <div class="section-header" style="text-align: center; margin-bottom: 80px;" data-animate="reveal">
            <span class="header-tag-minimal" style="color: var(--accent); display: block; margin: 0 auto;">Pillars
                of Integrity</span>
            <h2 style="font-size: 3rem;">Visionary <span>Leadership</span></h2>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(400px, 1fr)); gap: 50px;">
            <div class="glass-premium" style="display: flex; gap: 30px; padding: 40px; align-items: center;"
                data-animate="reveal">
                <div
                    style="width: 150px; height: 150px; border-radius: var(--radius-md); overflow: hidden; box-shadow: var(--shadow-md); flex-shrink: 0;">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=400&h=400&fit=crop"
                        alt="G. Govindavasan" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div>
                    <h3 style="font-size: 1.5rem; margin-bottom: 5px;">G. Govindavasan</h3>
                    <span
                        style="display: block; font-size: 0.75rem; font-weight: 800; color: var(--accent); letter-spacing: 2px; text-transform: uppercase; margin-bottom: 15px;">Founder
                        & Proprietor | M.Tech</span>
                    <p style="font-size: 0.9rem; color: var(--text-muted); line-height: 1.6;">Technical visionary
                        driving AVD's commitment to industrial excellence and product precision.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== PREMIUM CONTACT SECTION ===== -->
<section style="padding: 120px 0; background: var(--bg-light);" id="contact">
    <div class="container">
        <div style="display: grid; grid-template-columns: 1fr 1.2fr; gap: 80px;">
            <div data-animate="reveal">
                <span class="header-tag-minimal" style="color: var(--accent);">Direct Connection</span>
                <h2 style="font-size: 3rem; margin-bottom: 30px;">Let's Build <span>Together</span></h2>
                <p style="color: var(--text-muted); margin-bottom: 50px; line-height: 1.8;">Technical inquiries,
                    bulk quotations, or product consultations—our team is ready to assist your industrial
                    operations.</p>

                <div style="display: grid; gap: 20px;">
                    <div class="glass-premium" style="padding: 30px; display: flex; gap: 20px; align-items: center;">
                        <i class="fas fa-phone-alt" style="color: var(--accent); font-size: 1.5rem;"></i>
                        <div>
                            <span
                                style="display: block; font-size: 0.65rem; font-weight: 800; color: var(--text-light); text-transform: uppercase;">Primary
                                Line</span>
                            <a href="tel:+919843325078" style="font-size: 1.1rem; font-weight: 700;">+91 98433
                                25078</a>
                        </div>
                    </div>
                    <div class="glass-premium" style="padding: 30px; display: flex; gap: 20px; align-items: center;">
                        <i class="fab fa-whatsapp" style="color: #25D366; font-size: 1.5rem;"></i>
                        <div>
                            <span
                                style="display: block; font-size: 0.65rem; font-weight: 800; color: var(--text-light); text-transform: uppercase;">Business
                                WhatsApp</span>
                            <a href="https://wa.me/918682069879" style="font-size: 1.1rem; font-weight: 700;">+91
                                86820 69879</a>
                        </div>
                    </div>
                    <div class="glass-premium" style="padding: 30px; display: flex; gap: 20px; align-items: center;">
                        <i class="fas fa-envelope" style="color: var(--highlight); font-size: 1.5rem;"></i>
                        <div>
                            <span
                                style="display: block; font-size: 0.65rem; font-weight: 800; color: var(--text-light); text-transform: uppercase;">Email
                                HQ</span>
                            <a href="mailto:avdindustrialtraders0006@gmail.com"
                                style="font-size: 0.95rem; font-weight: 700;">avdindustrialtraders0006@gmail.com</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="glass-premium" style="padding: 60px; background: white; box-shadow: var(--shadow-premium);"
                data-animate="reveal">
                <form id="contactForm">
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                        <input type="text" placeholder="Your Name" required
                            style="width: 100%; padding: 15px 25px; border-radius: var(--radius-sm); border: 1px solid #eee; background: #fdfdfd;">
                        <input type="tel" placeholder="Phone Number" required
                            style="width: 100%; padding: 15px 25px; border-radius: var(--radius-sm); border: 1px solid #eee; background: #fdfdfd;">
                    </div>
                    <input type="email" placeholder="Email Address"
                        style="width: 100%; padding: 15px 25px; border-radius: var(--radius-sm); border: 1px solid #eee; background: #fdfdfd; margin-bottom: 20px;">
                    <textarea rows="5" placeholder="Project Requirements / Message" required
                        style="width: 100%; padding: 15px 25px; border-radius: var(--radius-sm); border: 1px solid #eee; background: #fdfdfd; margin-bottom: 30px;"></textarea>

                    <button type="submit" class="btn btn-primary"
                        style="width: 100%; justify-content: center; padding: 20px; border-radius: var(--radius-full);">SUBMIT
                        INQUIRY <i class="fas fa-paper-plane" style="margin-left: 10px;"></i></button>
                </form>
            </div>
        </div>
    </div>
</section>


<!-- ===== PARTNER BRANDS SECTION ===== -->
<section style="padding: 100px 0; background: var(--white); border-top: 1px solid rgba(0,0,0,0.05);" id="partners">
    <div class="container">
        <div class="section-header" style="text-align: center; margin-bottom: 60px;" data-animate="reveal">
            <span class="header-tag-minimal" style="color: var(--accent); display: block; margin: 0 auto;">Trusted Quality</span>
            <h2 style="font-size: 2.5rem;">Partner <span>Brands</span></h2>
        </div>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); gap: 30px; align-items: center; justify-items: center;">
            <div data-animate="reveal" class="glass-premium" style="padding: 20px; width: 100%; text-align: center;">
                <span style="font-weight: 800; color: var(--primary); font-size: 0.9rem;">JAWAN BRAND</span>
            </div>
            <div data-animate="reveal" class="glass-premium" style="padding: 20px; width: 100%; text-align: center; transition-delay: 0.05s;">
                <span style="font-weight: 800; color: var(--primary); font-size: 0.9rem;">AJAX</span>
            </div>
            <div data-animate="reveal" class="glass-premium" style="padding: 20px; width: 100%; text-align: center; transition-delay: 0.1s;">
                <span style="font-weight: 800; color: var(--primary); font-size: 0.9rem;">SAND MASTER</span>
            </div>
            <div data-animate="reveal" class="glass-premium" style="padding: 20px; width: 100%; text-align: center; transition-delay: 0.15s;">
                <span style="font-weight: 800; color: var(--primary); font-size: 0.9rem;">WARRIOR</span>
            </div>
            <div data-animate="reveal" class="glass-premium" style="padding: 20px; width: 100%; text-align: center; transition-delay: 0.2s;">
                <span style="font-weight: 800; color: var(--primary); font-size: 0.9rem;">CONCORD</span>
            </div>
            <div data-animate="reveal" class="glass-premium" style="padding: 20px; width: 100%; text-align: center; transition-delay: 0.25s;">
                <span style="font-weight: 800; color: var(--primary); font-size: 0.9rem;">HI-CUT</span>
            </div>
            <div data-animate="reveal" class="glass-premium" style="padding: 20px; width: 100%; text-align: center; transition-delay: 0.3s;">
                <span style="font-weight: 800; color: var(--primary); font-size: 0.9rem;">SAMURAI</span>
            </div>
            <div data-animate="reveal" class="glass-premium" style="padding: 20px; width: 100%; text-align: center; transition-delay: 0.35s;">
                <span style="font-weight: 800; color: var(--primary); font-size: 0.9rem;">CHAMAK</span>
            </div>
            <div data-animate="reveal" class="glass-premium" style="padding: 20px; width: 100%; text-align: center; transition-delay: 0.4s;">
                <span style="font-weight: 800; color: var(--primary); font-size: 0.9rem;">SPEED</span>
            </div>
            <div data-animate="reveal" class="glass-premium" style="padding: 20px; width: 100%; text-align: center; transition-delay: 0.45s;">
                <span style="font-weight: 800; color: var(--primary); font-size: 0.9rem;">TEZZ</span>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>

<?php
$activePage = 'products';
$pageTitle = 'Our Products';
include 'header.php';
?>

<!-- ===== PREMIUM PAGE HERO ===== -->
<div class="page-header-premium">
    <div class="container">
        <div class="header-content-inner shimmer" data-animate="reveal" class="active">
            <h1 class="premium-title-main">
                PRECISION <span>CATALOG</span>
            </h1>
            <p class="premium-subtitle">
                Explore the most advanced collection of CUMI abrasive solutions engineered for industrial performance.
            </p>
        </div>
    </div>
</div>

<!-- ===== PRODUCT CATALOG ===== -->
<section class="products-catalog" style="padding: 120px 0; background: var(--bg-light);">
    <div class="container">
        <div class="section-header" style="text-align: center; margin-bottom: 100px;">
            <span class="header-tag-minimal" style="color: var(--accent); display: block; margin: 0 auto;">CUMI
                Authorised Distribution</span>
            <h2 style="font-size: 3.5rem;">The Master <span>Collection</span></h2>
        </div>

        <!-- CATEGORY: GRINDING & CUTTING -->
        <div style="margin-bottom: 40px; border-left: 6px solid var(--accent); padding-left: 20px;">
            <h3 style="color: var(--primary); font-size: 2.2rem; text-transform: uppercase; letter-spacing: -1px;">
                Grinding & <span style="color: var(--accent);">Cutting Discs</span></h3>
        </div>

        <div
            style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 40px; margin-bottom: 100px;">
            <!-- Product 1 -->
            <div class="glass-premium shimmer"
                style="overflow: hidden; transition: transform 0.4s var(--transition-premium);" data-animate="reveal">
                <div
                    style="height: 300px; background: #eaeff5; display: flex; align-items: center; justify-content: center; padding: 40px;">
                    <img src="images/Grinding-Wheels.png" alt="Grinding Wheels"
                        style="max-height: 100%; transition: scale 0.6s ease;">
                </div>
                <div style="padding: 40px;">
                    <span
                        style="color: var(--highlight); font-weight: 800; font-size: 0.75rem; text-transform: uppercase;">Heavy
                        Duty</span>
                    <h3 style="font-size: 1.6rem; margin: 10px 0;">Precision Grinding Wheels</h3>
                    <p style="color: var(--text-muted); font-size: 0.95rem; margin-bottom: 25px;">Maximum material
                        removal with a superior cold-cut finish for all industrial metals.</p>
                    <ul style="list-style: none; padding: 0; margin-bottom: 30px;">
                        <li style="margin-bottom: 10px; font-size: 0.9rem; color: var(--text-main);"><i
                                class="fas fa-circle-check" style="color: var(--accent); margin-right: 10px;"></i>
                            Reinforced Bond Matrix</li>
                        <li style="margin-bottom: 10px; font-size: 0.9rem; color: var(--text-main);"><i
                                class="fas fa-circle-check" style="color: var(--accent); margin-right: 10px;"></i> ISO
                            9001 Safety Standards</li>
                    </ul>
                    <a href="contact.php" class="btn btn-primary"
                        style="width: 100%; justify-content: center; border-radius: var(--radius-sm);">Get Tech
                        Specs</a>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="glass-premium shimmer"
                style="overflow: hidden; transition: transform 0.4s var(--transition-premium); transition-delay: 0.1s;"
                data-animate="reveal">
                <div
                    style="height: 300px; background: #eaeff5; display: flex; align-items: center; justify-content: center; padding: 40px;">
                    <img src="images/Cutting.png" alt="Cutting Discs" style="max-height: 100%;">
                </div>
                <div style="padding: 40px;">
                    <span
                        style="color: var(--accent); font-weight: 800; font-size: 0.75rem; text-transform: uppercase;">Precision</span>
                    <h3 style="font-size: 1.6rem; margin: 10px 0;">Advanced Cutting Discs</h3>
                    <p style="color: var(--text-muted); font-size: 0.95rem; margin-bottom: 25px;">Ultra-thin technology
                        for clean, burr-free cuts on stainless steel and alloys.</p>
                    <ul style="list-style: none; padding: 0; margin-bottom: 30px;">
                        <li style="margin-bottom: 10px; font-size: 0.9rem; color: var(--text-main);"><i
                                class="fas fa-circle-check" style="color: var(--accent); margin-right: 10px;"></i>
                            Minimal Burr Formation</li>
                        <li style="margin-bottom: 10px; font-size: 0.9rem; color: var(--text-main);"><i
                                class="fas fa-circle-check" style="color: var(--accent); margin-right: 10px;"></i>
                            Extremely High Speed</li>
                    </ul>
                    <a href="contact.php" class="btn btn-primary"
                        style="width: 100%; justify-content: center; border-radius: var(--radius-sm);">Get Tech
                        Specs</a>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="glass-premium shimmer"
                style="overflow: hidden; transition: transform 0.4s var(--transition-premium); transition-delay: 0.2s;"
                data-animate="reveal">
                <div
                    style="height: 300px; background: #eaeff5; display: flex; align-items: center; justify-content: center; padding: 40px;">
                    <img src="images/sanding.png" alt="DCGW" style="max-height: 100%;">
                </div>
                <div style="padding: 40px;">
                    <span
                        style="color: var(--highlight); font-weight: 800; font-size: 0.75rem; text-transform: uppercase;">Specialty</span>
                    <h3 style="font-size: 1.6rem; margin: 10px 0;">Depressed Centre Discs</h3>
                    <p style="color: var(--text-muted); font-size: 0.95rem; margin-bottom: 25px;">Optimized for weld
                        preparation and material leveling in heavy fabrication.</p>
                    <ul style="list-style: none; padding: 0; margin-bottom: 30px;">
                        <li style="margin-bottom: 10px; font-size: 0.9rem; color: var(--text-main);"><i
                                class="fas fa-circle-check" style="color: var(--accent); margin-right: 10px;"></i>
                            Operator Comfort Focus</li>
                        <li style="margin-bottom: 10px; font-size: 0.9rem; color: var(--text-main);"><i
                                class="fas fa-circle-check" style="color: var(--accent); margin-right: 10px;"></i> CUMI
                            Certified Quality</li>
                    </ul>
                    <a href="contact.php" class="btn btn-primary"
                        style="width: 100%; justify-content: center; border-radius: var(--radius-sm);">Get Tech
                        Specs</a>
                </div>
            </div>
        </div>

        <!-- CATEGORY: COATED -->
        <div style="margin-bottom: 40px; border-left: 6px solid var(--highlight); padding-left: 20px;">
            <h3 style="color: var(--primary); font-size: 2.2rem; text-transform: uppercase; letter-spacing: -1px;">
                Coated <span style="color: var(--highlight);">Abrasives</span></h3>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 40px;">
            <!-- Product 4 -->
            <div class="glass-premium shimmer" style="overflow: hidden;" data-animate="reveal">
                <div
                    style="height: 300px; background: #eaeff5; display: flex; align-items: center; justify-content: center; padding: 40px;">
                    <img src="images/sanding.png" alt="Sanding Sheets" style="max-height: 100%;">
                </div>
                <div style="padding: 40px;">
                    <span
                        style="color: var(--accent); font-weight: 800; font-size: 0.75rem; text-transform: uppercase;">Versatile</span>
                    <h3 style="font-size: 1.6rem; margin: 10px 0;">Premium Sanding Sheets</h3>
                    <p style="color: var(--text-muted); font-size: 0.95rem; margin-bottom: 25px;">Industrial-grade paper
                        and cloth sheets for peak surface preparation.</p>
                    <ul style="list-style: none; padding: 0; margin-bottom: 30px;">
                        <li style="margin-bottom: 10px; font-size: 0.9rem; color: var(--text-main);"><i
                                class="fas fa-circle-check" style="color: var(--highlight); margin-right: 10px;"></i>
                            anti-clogging Technology</li>
                        <li style="margin-bottom: 10px; font-size: 0.9rem; color: var(--text-main);"><i
                                class="fas fa-circle-check" style="color: var(--highlight); margin-right: 10px;"></i>
                            Grit 40 to 1200</li>
                    </ul>
                    <a href="contact.php" class="btn btn-primary"
                        style="width: 100%; justify-content: center; border-radius: var(--radius-sm);">Inquire Bulk</a>
                </div>
            </div>
            <!-- Product 5 -->
            <div class="glass-premium shimmer" style="overflow: hidden;" data-animate="reveal"
                style="transition-delay: 0.1s;">
                <div
                    style="height: 300px; background: #eaeff5; display: flex; align-items: center; justify-content: center; padding: 40px;">
                    <img src="images/paper-roll.png" alt="Abrasive Rolls" style="max-height: 100%;">
                </div>
                <div style="padding: 40px;">
                    <span
                        style="color: var(--highlight); font-weight: 800; font-size: 0.75rem; text-transform: uppercase;">Bulk
                        Supply</span>
                    <h3 style="font-size: 1.6rem; margin: 10px 0;">Industrial Abrasive Rolls</h3>
                    <p style="color: var(--text-muted); font-size: 0.95rem; margin-bottom: 25px;">Continuous supply
                        solutions for automated surface finishing machines.</p>
                    <ul style="list-style: none; padding: 0; margin-bottom: 30px;">
                        <li style="margin-bottom: 10px; font-size: 0.9rem; color: var(--text-main);"><i
                                class="fas fa-circle-check" style="color: var(--highlight); margin-right: 10px;"></i>
                            High Flexibility Cloth</li>
                        <li style="margin-bottom: 10px; font-size: 0.9rem; color: var(--text-main);"><i
                                class="fas fa-circle-check" style="color: var(--highlight); margin-right: 10px;"></i>
                            Custom Width Options</li>
                    </ul>
                    <a href="contact.php" class="btn btn-primary"
                        style="width: 100%; justify-content: center; border-radius: var(--radius-sm);">Inquire Bulk</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== INTERACTIVE GALLERY ===== -->
<section style="padding: 120px 0; background: var(--white);">
    <div class="container">
        <div class="section-header" style="text-align: center; margin-bottom: 60px;">
            <h2 style="font-size: 3rem;">Product <span>Gallery</span></h2>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 30px;">
            <div class="glass-premium" style="height: 400px; overflow: hidden; position: relative;"
                data-animate="reveal">
                <img src="images/Sandmaster-sheet.jpg" alt="Showcase"
                    style="width: 100%; height: 100%; object-fit: contain; padding: 40px;">
                <div
                    style="position: absolute; inset: 0; background: rgba(15, 23, 42, 0.7); display: flex; align-items: center; justify-content: center; opacity: 0; transition: opacity 0.3s ease; padding: 20px;">
                    <p style="color: white; text-align: center; font-weight: 600;">High Precision CUMI Grinding</p>
                </div>
            </div>
            <div class="glass-premium" style="height: 400px; overflow: hidden; position: relative;"
                data-animate="reveal">
                <img src="images/Cutting-Disc.png" alt="Showcase"
                    style="width: 100%; height: 100%; object-fit: contain; padding: 40px;">
                <div
                    style="position: absolute; inset: 0; background: rgba(15, 23, 42, 0.7); display: flex; align-items: center; justify-content: center; opacity: 0; transition: opacity 0.3s ease;">
                    <p style="color: white; text-align: center; font-weight: 600;">Safety First Cutting Technology</p>
                </div>
            </div>
            <div class="glass-premium" style="height: 400px; overflow: hidden; position: relative;"
                data-animate="reveal">
                <img src="images/Abrasive-Rolls.png" alt="Showcase"
                    style="width: 100%; height: 100%; object-fit: contain; padding: 40px;">
                <div
                    style="position: absolute; inset: 0; background: rgba(15, 23, 42, 0.7); display: flex; align-items: center; justify-content: center; opacity: 0; transition: opacity 0.3s ease;">
                    <p style="color: white; text-align: center; font-weight: 600;">Industrial Continuous Abrasives</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== FINAL CTA ===== -->
<section
    style="padding: 100px 0; background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%); color: var(--white); border-top: 1px solid rgba(0, 188, 212, 0.1);">
    <div class="container" style="text-align: center;">
        <h2 style="font-size: 3rem; margin-bottom: 20px; color: var(--white);">Ready for Industrial Excellence?</h2>
        <p style="font-size: 1.25rem; margin-bottom: 40px; opacity: 0.8; max-width: 700px; margin-inline: auto;">Get in
            touch with our technical experts for custom bulk orders and solution consultations.</p>
        <div style="display: flex; gap: 20px; justify-content: center;">
            <a href="contact.php" class="btn btn-accent"
                style="padding: 20px 50px; border-radius: var(--radius-full); font-weight: 800;">Request Quote</a>
            <a href="tel:+918682069879" class="btn btn-outline"
                style="color: white; border-color: rgba(255,255,255,0.3); padding: 20px 50px; border-radius: var(--radius-full);">Direct
                Connect</a>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
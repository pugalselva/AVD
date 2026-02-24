<?php
$activePage = 'products';
$pageTitle = 'Our Products';
include 'header.php';
?>
<!-- ===== PREMIUM PAGE HEADER ===== -->
<div class="page-premium-header py-7"
    style="position: relative; background: url('images/Coated-Abrasives.webp') center/cover no-repeat; color: white; padding-top: 151px; min-height: 450px; display: flex; align-items: center;">
    <div
        style="position: absolute; inset: 0; background: linear-gradient(to right, rgba(15, 23, 42, 0.95) 40%, rgba(15, 23, 42, 0.4) 100%); z-index: 1;">
    </div>
    <div class="container" style="position: relative; z-index: 2;" data-animate="reveal">
        <span class="header-tag-minimal mb-3" style="color: var(--accent-light);">Technical Catalog</span>
        <h1 class="display-3 fw-800 mb-4" style="color: white;">Superior <span>Industrial</span> Solutions</h1>
        <p class="lead opacity-80 max-w-700">Explore the most advanced collection of CUMI abrasive solutions engineered
            for peak industrial performance.</p>
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

        <div class="row g-4">
            <!-- Product 1 -->
            <div class="col-lg-6 col-md-6" data-animate="reveal">
                <div class="glass-premium p-4 h-100 shadow-sm border-0 bg-white"
                    style="border-radius: var(--radius-sm); display: flex; flex-direction: column;">
                    <div
                        style="height: 250px; display: flex; align-items: center; justify-content: center; background: #eaeff5; border-radius: var(--radius-sm); overflow: hidden; margin-bottom: 20px;">
                        <img src="images/Grinding-Wheels.png" alt="Grinding Wheels"
                            style="max-height: 80%; width: auto;">
                    </div>
                    <div class="flex-grow-1">
                        <span
                            style="color: var(--accent); font-weight: 800; font-size: 0.7rem; text-transform: uppercase;">Bonded
                            Abrasives</span>
                        <h3 class="h4 mt-2">Precision Grinding Wheels</h3>
                        <p class="text-muted small">Maximum material removal with a superior cold-cut finish.</p>
                    </div>
                    <a href="grinding.php" class="btn btn-primary w-100 py-3 mt-3">View Products</a>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="col-lg-6 col-md-6" data-animate="reveal" style="transition-delay: 0.1s;">
                <div class="glass-premium p-4 h-100 shadow-sm border-0 bg-white"
                    style="border-radius: var(--radius-sm); display: flex; flex-direction: column;">
                    <div
                        style="height: 250px; display: flex; align-items: center; justify-content: center; background: #eaeff5; border-radius: var(--radius-sm); overflow: hidden; margin-bottom: 20px;">
                        <img src="images/Cutting.png" alt="Cutting Discs" style="max-height: 80%; width: auto;">
                    </div>
                    <div class="flex-grow-1">
                        <span
                            style="color: var(--accent); font-weight: 800; font-size: 0.7rem; text-transform: uppercase;">Cutting
                            Solutions</span>
                        <h3 class="h4 mt-2">Advanced Cutting Discs</h3>
                        <p class="text-muted small">Ultra-thin technology for clean, burr-free cuts in industrial
                            alloys.</p>
                    </div>
                    <a href="grinding.php" class="btn btn-primary w-100 py-3 mt-3">View Products</a>
                </div>
            </div>
        </div>

        <!-- CATEGORY: COATED -->
        <div class="category-divider-premium highlight-accent" style="margin-top: 100px;">
            <h3 class="category-title">Coated <span>Abrasives</span></h3>
        </div>

        <div class="row g-4">
            <!-- Product 4 -->
            <div class="col-lg-6" data-animate="reveal">
                <div class="glass-premium p-4 h-100 shadow-sm border-0 bg-white"
                    style="border-radius: var(--radius-sm); display: flex; flex-direction: column;">
                    <div
                        style="height: 250px; display: flex; align-items: center; justify-content: center; background: #eaeff5; border-radius: var(--radius-sm); overflow: hidden; margin-bottom: 20px;">
                        <img src="images/sanding.png" alt="Sanding Sheets" style="max-height: 80%; width: auto;">
                    </div>
                    <div class="flex-grow-1">
                        <span
                            style="color: var(--accent); font-weight: 800; font-size: 0.7rem; text-transform: uppercase;">Versatile</span>
                        <h3 class="h4 mt-2">Premium Sanding Sheets</h3>
                        <p class="text-muted small">Industrial-grade surface preparation for peak finish and durability.
                        </p>
                    </div>
                    <a href="grinding.php" class="btn btn-primary w-100 py-3 mt-3">View Products</a>
                </div>
            </div>

            <!-- Product 5 -->
            <div class="col-lg-6" data-animate="reveal" style="transition-delay: 0.1s;">
                <div class="glass-premium p-4 h-100 shadow-sm border-0 bg-white"
                    style="border-radius: var(--radius-sm); display: flex; flex-direction: column;">
                    <div
                        style="height: 250px; display: flex; align-items: center; justify-content: center; background: #eaeff5; border-radius: var(--radius-sm); overflow: hidden; margin-bottom: 20px;">
                        <img src="images/paper-roll.png" alt="Abrasive Rolls" style="max-height: 80%; width: auto;">
                    </div>
                    <div class="flex-grow-1">
                        <span
                            style="color: var(--accent); font-weight: 800; font-size: 0.7rem; text-transform: uppercase;">Bulk
                            Supply</span>
                        <h3 class="h4 mt-2">Industrial Abrasive Rolls</h3>
                        <p class="text-muted small">Continuous supply solutions for large-scale surface finishing
                            operations.</p>
                    </div>
                    <a href="grinding.php" class="btn btn-primary w-100 py-3 mt-3">View Products</a>
                </div>
            </div>
        </div>

        <!-- CATEGORY: POWER TOOLS -->
        <div id="power-tools" class="category-divider-premium yellow-accent" style="margin-top: 100px;">
            <h3 class="category-title">Industrial <span>Power Tools</span></h3>
        </div>

        <div class="row g-4">
            <!-- Product 6 -->
            <div class="col-lg-6" data-animate="reveal">
                <div class="glass-premium p-4 h-100 shadow-sm border-0 bg-white"
                    style="border-radius: var(--radius-sm); display: flex; flex-direction: column;">
                    <div
                        style="height: 250px; display: flex; align-items: center; justify-content: center; background: #eaeff5; border-radius: var(--radius-sm); overflow: hidden; margin-bottom: 20px;">
                        <img src="images/power-tools.png" alt="Industrial Chopsaw"
                            style="max-height: 80%; width: auto;">
                    </div>
                    <div class="flex-grow-1">
                        <span
                            style="color: var(--accent); font-weight: 800; font-size: 0.7rem; text-transform: uppercase;">Heavy
                            Duty</span>
                        <h3 class="h4 mt-2">High-Performance Chopsaws</h3>
                        <p class="text-muted small">Robust cutting solutions for precision metal fabrication and
                            structural work.</p>
                    </div>
                    <a href="powertools.php" class="btn btn-primary w-100 py-3 mt-3">View Products</a>
                </div>
            </div>

            <!-- Product 7 -->
            <div class="col-lg-6" data-animate="reveal" style="transition-delay: 0.1s;">
                <div class="glass-premium p-4 h-100 shadow-sm border-0 bg-white"
                    style="border-radius: var(--radius-sm); display: flex; flex-direction: column;">
                    <div
                        style="height: 250px; display: flex; align-items: center; justify-content: center; background: #eaeff5; border-radius: var(--radius-sm); overflow: hidden; margin-bottom: 20px;">
                        <img src="images/IMG-20251116-WA0003.jpg.jpeg" alt="Industrial Grinder"
                            style="max-height: 80%; width: auto;">
                    </div>
                    <div class="flex-grow-1">
                        <span
                            style="color: var(--accent); font-weight: 800; font-size: 0.7rem; text-transform: uppercase;">Precision</span>
                        <h3 class="h4 mt-2">Angle Grinders & Sanders</h3>
                        <p class="text-muted small">Professional-grade grinders for seamless industrial finishing and
                            polishing.</p>
                    </div>
                    <a href="powertools.php" class="btn btn-primary w-100 py-3 mt-3">View Products</a>
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
                <img src="images/powertools/Chopsaw-2.jpg" alt="Showcase"
                    style="width: 100%; height: 100%; object-fit: contain; padding: 40px;">
                <div
                    style="position: absolute; inset: 0; background: rgba(15, 23, 42, 0.7); display: flex; align-items: center; justify-content: center; opacity: 0; transition: opacity 0.3s ease;">
                    <p style="color: white; text-align: center; font-weight: 600;">Safety First Cutting Technology</p>
                </div>
            </div>
            <div class="glass-premium" style="height: 400px; overflow: hidden; position: relative;"
                data-animate="reveal">
                <img src="images/powertools/CCM-355E.webp" alt="Showcase"
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
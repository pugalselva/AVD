<?php
$activePage = 'about';
$pageTitle = 'Our Story';
include 'header.php';
?>
<!-- ===== PREMIUM PAGE HEADER ===== -->
<div class="page-premium-header py-7"
    style="position: relative; background: url('images/about.jpg') center/cover no-repeat; color: white; padding-top: 151px; min-height: 450px; display: flex; align-items: center;">
    <div
        style="position: absolute; inset: 0; background: linear-gradient(to right, rgba(15, 23, 42, 0.95) 40%, rgba(15, 23, 42, 0.4) 100%); z-index: 1;">
    </div>
    <div class="container" style="position: relative; z-index: 2;" data-animate="reveal">
        <span class="header-tag-minimal mb-3" style="color: var(--accent-light);">Company Legacy</span>
        <h1 class="display-3 fw-800 mb-4" style="color: white;">Precision <span>Through</span> Generations</h1>
        <p class="lead opacity-80 max-w-700">Reliable CUMI Authorised Distributors serving Tamil Nadu with three decades
            of precision engineering excellence.</p>
    </div>
</div>

<!-- ===== ABOUT DETAILED ===== -->
<section class="about-detailed" style="padding: 120px 0; background: var(--bg-light);">
    <div class="container">
        <div class="section-header text-center mb-5" data-animate="reveal">
            <span class="header-tag-minimal mb-2">CUMI Authorised Distribution</span>
            <h2 style="font-size: 3.5rem;">About Us</h2>
        </div>

        <div class="row g-5 align-items-center">
            <div class="col-lg-6" data-animate="reveal">
                <div class="position-relative">
                    <div class="glass-premium shadow-lg border-0 bg-white"
                        style="border-radius: var(--radius-md); overflow: hidden;">
                        <img src="images/about1.png" alt="Industrial Excellence"
                            style="width: 100%; border-radius: var(--radius-sm);">
                    </div>
                </div>
            </div>

            <div class="col-lg-6" data-animate="reveal" style="transition-delay: 0.2s;">
                <span class="section-tag" style="color: var(--accent);">Authorised Distributor</span>
                <h2 class="h1 mb-4">Serving Industrial <span>Excellence</span></h2>
                <p class="text-muted mb-5" style="font-size: 1.1rem; line-height: 1.8;">AVD Industrial Traders is a
                    premier technical distribution house specializing in high-performance abrasive solutions. As an
                    official partner of CUMI (Carborundum Universal Limited), we bring world-class precision tools to
                    the heart of Tamil Nadu's industrial landscape.</p>

                <div class="row g-4 mt-2">
                    <div class="col-md-6">
                        <div class="glass-premium p-4 h-100 shadow-sm border-0 bg-white"
                            style="border-radius: var(--radius-sm);">
                            <i class="fas fa-certificate text-accent h3 mb-3 d-block"></i>
                            <h4 class="h5 mb-2">CUMI Partner</h4>
                            <p class="text-muted small mb-0">Direct access to the latest abrasive innovations and
                                engineering support from Murugappa Group.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="glass-premium p-4 h-100 shadow-sm border-0 bg-white"
                            style="border-radius: var(--radius-sm);">
                            <i class="fas fa-microchip text-accent h3 mb-3 d-block"></i>
                            <h4 class="h5 mb-2">Tech Support</h4>
                            <p class="text-muted small mb-0">In-depth technical consultancy for specific material
                                removal needs and performance optimization.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== TEAM / LEADERSHIP ===== -->
<section class="leadership py-7" id="leadership" style="background: var(--white); padding: 120px 0;">
    <div class="container">
        <div class="section-header text-center mb-5" data-animate="reveal">
            <span class="header-tag-minimal mb-2">Pillars of Excellence</span>
            <h2 style="font-size: 3rem;">Visionary <span>Leadership</span></h2>
        </div>

        <div class="row g-4 justify-content-center">
            <!-- Leader 1 -->
            <div class="col-lg-5" data-animate="reveal">
                <div class="glass-premium p-4 h-100 d-flex align-items-center gap-4 bg-white shadow-sm border-0"
                    style="border-radius: var(--radius-md); border-left: 5px solid var(--accent) !important;">
                    <div class="leader-avatar flex-shrink-0"
                        style="width: 120px; height: 120px; border-radius: 50%; overflow: hidden; border: 4px solid var(--accent);">
                        <img src="images/founder.jpeg" alt="G. Govindavasan"
                            style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div class="leader-details">
                        <h4 class="h5 mb-1">G. Govindavasan</h4>
                        <span class="small text-uppercase fw-bold text-accent d-block mb-3">Founder & Proprietor</span>
                        <div class="leader-socials d-flex gap-3 text-muted">
                            <a href="#" class="hover-accent"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="hover-accent"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Leader 2 -->
            <!-- <div class="col-lg-5" data-animate="reveal" style="transition-delay: 0.1s;">
                <div class="glass-premium p-4 h-100 d-flex align-items-center gap-4 bg-white shadow-sm border-0"
                    style="border-radius: var(--radius-md); border-left: 5px solid var(--highlight) !important;">
                    <div class="leader-avatar flex-shrink-0"
                        style="width: 120px; height: 120px; border-radius: 50%; overflow: hidden; border: 4px solid var(--highlight);">
                        <img src="images/pugal.jpeg" alt="Pugal" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div class="leader-details">
                        <h4 class="h5 mb-1">Pugal</h4>
                        <span class="small text-uppercase fw-bold text-highlight d-block mb-3">Managing Director</span>
                        <div class="leader-socials d-flex gap-3 text-muted">
                            <a href="#" class="hover-highlight"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="hover-highlight"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>

<!-- ===== FINAL CTA ===== -->
<section class="final-cta"
    style="padding: 100px 0; background: var(--primary); text-align: center; position: relative; overflow: hidden;">
    <div
        style="position: absolute; inset: 0; background: radial-gradient(circle at 50% 50%, rgba(2, 132, 199, 0.15) 0%, transparent 70%);">
    </div>
    <div class="container" style="position: relative; z-index: 1;">
        <h2 style="color: var(--white); font-size: 3rem; margin-bottom: 20px;">Ready for Industrial Excellence?</h2>
        <p
            style="color: var(--text-light); margin-bottom: 40px; max-width: 600px; margin-inline: auto; font-size: 1.25rem;">
            Get in touch with our technical experts for custom bulk orders and solution consultations.</p>
        <div style="display: flex; gap: 20px; justify-content: center;">
            <a href="contact.php" class="btn btn-primary"
                style="padding: 20px 50px; border-radius: var(--radius-full); font-weight: 800;">Request Quote</a>
            <a href="tel:+918682069879" class="btn btn-outline"
                style="color: white; border-color: rgba(255,255,255,0.3); padding: 20px 50px; border-radius: var(--radius-full);">Direct
                Connect</a>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>

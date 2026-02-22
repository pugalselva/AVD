<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo isset($pageTitle) ? $pageTitle . " | AVD Industrial Traders" : "AVD Industrial Traders - Authorised CUMI Distributor"; ?>
    </title>
    <meta name="description"
        content="<?php echo isset($pageDesc) ? $pageDesc : "Premium CUMI abrasive products, grinding wheels, and cutting discs in Villupuram, Tamil Nadu."; ?>">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="images/logo1.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- ===== HEADER ===== -->
    <header class="header" id="header">
        <nav class="navbar">
            <div class="nav-logo">
                <a href="index.php" class="logo-link">
                    <img src="images/logo1.png" alt="AVD Industrial Traders" class="logo-img">
                    <div class="logo-text">
                        <span class="logo-main" style="color: #ffffffff;">INDUSTRIAL TRADERS</span>
                        <span class="logo-sub">Abrasive Experts</span>
                    </div>
                </a>
            </div>

            <ul class="nav-menu" id="navMenu">
                <li><a href="index.php" class="nav-link <?php echo $activePage == 'home' ? 'active' : ''; ?>">Home</a>
                </li>
                <li><a href="about.php" class="nav-link <?php echo $activePage == 'about' ? 'active' : ''; ?>">About</a>
                </li>
                <li><a href="products.php"
                        class="nav-link <?php echo $activePage == 'products' ? 'active' : ''; ?>">Products</a></li>
                <li><a href="contact.php"
                        class="nav-link <?php echo $activePage == 'contact' ? 'active' : ''; ?>">Contact</a></li>
            </ul>

            <div class="nav-actions">
                <div class="nav-actions-phones"
                    style="display: flex; flex-direction: column; align-items: flex-end; margin-right: 20px;">
                    <a href="tel:+918682069879"
                        style="font-size: 0.9rem; font-weight: 700; color: var(--primary);">86820 69879</a>
                    <a href="tel:+919843325078"
                        style="font-size: 0.9rem; font-weight: 700; color: var(--primary);">98433 25078</a>
                </div>
                <div class="hamburger" id="hamburger">
                    <span></span><span></span><span></span>
                </div>
            </div>
        </nav>
    </header>
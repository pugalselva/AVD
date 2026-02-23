<?php
$activePage = 'products';
$pageTitle = 'Grinding & Cutting - Product Catalog';
include 'header.php';
?>
<!-- ===== CATALOG HEADER ===== -->
<div class="page-premium-header py-7"
    style="position: relative; background: url('images/Grinding-Wheels.png') center/cover no-repeat; color: white; padding-top: 151px; min-height: 400px; display: flex; align-items: center;">
    <div
        style="position: absolute; inset: 0; background: linear-gradient(to right, rgba(15, 23, 42, 0.95) 40%, rgba(15, 23, 42, 0.6) 100%); z-index: 1;">
    </div>
    <div class="container" style="position: relative; z-index: 2;" data-animate="reveal">
        <span class="header-tag-minimal mb-3" style="color: var(--accent-light);">Cutting & Grinding</span>
        <h1 class="display-4 fw-800 mb-4" style="color: white;">CUMI <span>Industrial</span> Abrasives</h1>
        <p class="lead opacity-80 max-w-700">Explore our comprehensive range of high-performance grinding wheels and
            cutting discs forทุก industrial application.</p>
    </div>
</div>

<!-- ===== PRODUCT CATALOG SECTION ===== -->
<section class="catalog-section" style="padding: 80px 0; background: var(--bg-light);">
    <div class="container">
        <div class="row g-5">
            <!-- Sidebar: Filters -->
            <div class="col-lg-3">
                <div class="glass-premium p-4 sticky-top" style="top: 100px; border-radius: var(--radius-md);">
                    <h4 class="mb-4 pb-2 border-bottom"
                        style="font-size: 1.1rem; text-transform: uppercase; letter-spacing: 1px;">Filters</h4>

                    <div class="filter-group mb-4">
                        <label class="form-label-premium mb-3" style="font-size: 0.8rem;">Materials</label>
                        <div class="filter-options d-flex flex-column gap-2">
                            <label class="d-flex align-items-center gap-2 small cursor-pointer">
                                <input type="checkbox" class="material-filter" value="Alloy Steel"> Alloy Steel
                            </label>
                            <label class="d-flex align-items-center gap-2 small cursor-pointer">
                                <input type="checkbox" class="material-filter" value="Carbon Steel"> Carbon Steel
                            </label>
                            <label class="d-flex align-items-center gap-2 small cursor-pointer">
                                <input type="checkbox" class="material-filter" value="Cast Iron"> Cast Iron
                            </label>
                            <label class="d-flex align-items-center gap-2 small cursor-pointer">
                                <input type="checkbox" class="material-filter" value="Construction Steel"> Construction
                                Steel
                            </label>
                            <label class="d-flex align-items-center gap-2 small cursor-pointer">
                                <input type="checkbox" class="material-filter" value="Metal"> Metal
                            </label>
                            <label class="d-flex align-items-center gap-2 small cursor-pointer">
                                <input type="checkbox" class="material-filter" value="Mild Steel"> Mild Steel
                            </label>
                            <label class="d-flex align-items-center gap-2 small cursor-pointer">
                                <input type="checkbox" class="material-filter" value="Non Ferrous Metal"> Non Ferrous
                                Metal
                            </label>
                            <label class="d-flex align-items-center gap-2 small cursor-pointer">
                                <input type="checkbox" class="material-filter" value="Stainless Steel"> Stainless Steel
                            </label>
                        </div>
                    </div>

                    <button id="clearFilters" class="btn btn-outline w-100 py-2 mt-3"
                        style="font-size: 0.8rem; border-radius: var(--radius-sm);">Clear All</button>
                </div>
            </div>

            <!-- Main Content: Search + Results -->
            <div class="col-lg-9">
                <!-- Search Bar -->
                <div class="search-wrapper mb-5" data-animate="reveal">
                    <div class="position-relative">
                        <input type="text" id="productSearch" class="form-control-premium py-4 ps-5"
                            placeholder="Search for products (e.g. AGNI, Cutting Disc)..."
                            style="border-radius: var(--radius-md); box-shadow: var(--shadow-sm);">
                        <i class="fas fa-search position-absolute"
                            style="left: 20px; top: 50%; transform: translateY(-50%); color: var(--text-light);"></i>
                    </div>
                </div>

                <!-- Product Grid -->
                <div id="productGrid" class="row g-4">
                    <!-- Products will be injected by JavaScript -->
                    <div class="col-12 text-center py-5" id="loader">
                        <i class="fas fa-spinner fa-spin fa-3x" style="color: var(--accent);"></i>
                        <p class="mt-3 text-muted">Loading technical catalog...</p>
                    </div>
                </div>

                <!-- No Results -->
                <div id="noResults" class="text-center py-5" style="display: none;">
                    <i class="fas fa-search fa-3x mb-3 opacity-20"></i>
                    <h4>No products found</h4>
                    <p class="text-muted">Try adjusting your search or filters.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Product Item Template (Hidden) -->
<template id="productTemplate">
    <div class="col-md-6 col-xl-4 product-item" data-animate="reveal">
        <div class="glass-premium p-4 h-100 border-0 bg-white d-flex flex-column"
            style="border-radius: var(--radius-md);">
            <div class="product-badge" style="position: absolute; top: 15px; right: 15px; z-index: 2;">
                <span class="badge bg-accent px-3 py-2"
                    style="border-radius: var(--radius-full); font-size: 0.65rem; text-transform: uppercase; letter-spacing: 1px;">CUMI</span>
            </div>
            <div class="product-img-box mb-4"
                style="height: 200px; background: #f1f5f9; border-radius: var(--radius-sm); overflow: hidden; display: flex; align-items: center; justify-content: center; padding: 20px;">
                <img src="" alt="" class="product-img img-fluid"
                    style="max-height: 100%; object-fit: contain; transition: transform 0.5s ease;">
            </div>
            <div class="product-details flex-grow-1">
                <span class="product-cat text-accent-dark fw-800 small text-uppercase"
                    style="font-size: 0.65rem; letter-spacing: 1px;"></span>
                <h3 class="h5 product-name mt-2 mb-2" style="font-weight: 700;"></h3>
                <div class="product-materials d-flex flex-wrap gap-1 mb-3">
                    <!-- Material tags go here -->
                </div>
            </div>
            <a href="contact.php" class="btn btn-primary w-100 py-3 mt-auto"
                style="border-radius: var(--radius-sm);">Get Quotation</a>
        </div>
    </div>
</template>

<style>
    .bg-accent {
        background-color: var(--accent) !important;
    }

    .text-accent-dark {
        color: var(--accent-dark) !important;
    }

    .cursor-pointer {
        cursor: pointer;
    }

    .product-item {
        transition: all 0.3s ease;
    }

    .product-item:hover .product-img {
        transform: scale(1.1);
    }

    .material-tag {
        font-size: 0.6rem;
        background: #f1f5f9;
        color: var(--text-muted);
        padding: 4px 10px;
        border-radius: 4px;
        font-weight: 600;
        text-transform: uppercase;
    }
</style>

<?php include 'footer.php'; ?>

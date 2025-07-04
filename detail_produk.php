<?php
session_start();
?>
<!doctype html>
<html class="no-js" lang="zxx">
    
<!-- single-product31:30-->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Detail Product || Altro</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
        <!-- Material Design Iconic Font-V2.2.0 -->
        <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- Font Awesome Stars-->
        <link rel="stylesheet" href="css/fontawesome-stars.css">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="css/meanmenu.css">
        <!-- owl carousel CSS -->
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <!-- Slick Carousel CSS -->
        <link rel="stylesheet" href="css/slick.css">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- Jquery-ui CSS -->
        <link rel="stylesheet" href="css/jquery-ui.min.css">
        <!-- Venobox CSS -->
        <link rel="stylesheet" href="css/venobox.css">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="css/nice-select.css">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="css/magnific-popup.css">
        <!-- Bootstrap V4.1.3 Fremwork CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Helper CSS -->
        <link rel="stylesheet" href="css/helper.css">
        <!-- Main Style CSS -->
        <link rel="stylesheet" href="style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- Modernizr js -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
        <!-- Begin Body Wrapper -->
        <div class="body-wrapper">
            <!-- Begin Header Area -->
            <header>
                <!-- Begin Header Top Area -->
                <div class="header-top">
                    <div class="container">
                        <div class="row">
                            <!-- Begin Header Top Left Area -->
                            <div class="col-lg-3 col-md-4">
                                <div class="header-top-left">
                                </div>
                            </div>
                            <!-- Header Top Left Area End Here -->
                            <!-- Begin Header Top Right Area -->
                            <div class="col-lg-9 col-md-8">
                                <div class="header-top-right">
                                    <ul class="ht-menu">      
                                    </ul>
                                </div>
                            </div>
                            <!-- Header Top Right Area End Here -->
                        </div>
                    </div>
                </div>
                <!-- Header Top Area End Here -->
                <!-- Begin Header Middle Area -->
            <div class="header-middle pl-sm-0 pr-sm-0 pl-xs-0 pr-xs-0">
                <div class="container">
                    <div class="row">
                        <!-- Begin Header Logo Area -->
                        <div class="col-lg-3">
                            <div class="logo pb-sm-30 pb-xs-30">
                                <a href="index.php">
                                    <h1>Altro</h1>
                                </a>
                            </div>
                        </div>
                        <!-- Header Logo Area End Here -->
                            <!-- Begin Header Middle Right Area -->
                            <div class="col-lg-9 pl-0 ml-sm-15 ml-xs-15">
                                <!-- Begin Header Middle Right Area -->
                                <div class="header-middle-right">
                                    <ul class="hm-menu">
                                        <?php 
                                        if (!isset($_SESSION['id_user'])) {
                                        ?>
                                            <li class="hm-wishlist">
                                                <a href="login.php" title="Login">
                                                    <i class="fa fa-user"></i>
                                                </a>
                                            </li> 
                                        <?php
                                        } else {

                                            $nama_user = $_SESSION['username'];
                                        ?>
                                            <li class = "hm-wishlist dropdown">
                                                <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-user"></i>
                                                </a>
                                                <ul class="dropdown-menu" style="padding: 10px; min-width: 150px; text-align: center;">
                                                    <li style="padding: 5px 10px; font-weight: bold;">
                                                        <?= htmlspecialchars($nama_user) ?>
                                                    </li>
                                                    <li hr style="margin: 5px 0;">
                                                    </li>
                                                    <li>
                                                        <a href="logout.php" style="display: flex; align-items: center; justify-content: center; gap: 5px;">
                                                            <i class="fa fa-sign-out"></i> Logout
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                       
                                        <!-- Begin Header Mini Cart Area -->
                                        <li class="hm-minicart">
                                            <span></span>
                                            <div class="minicart">
                                                <ul class="minicart-product-list">
                                                    <li>
                                                        <a href="single-product.html" class="minicart-product-image">
                                                            <img src="images/product/small-size/1.jpg" alt="cart products">
                                                        </a>
                                                        <div class="minicart-product-details">
                                                            <h6><a href="single-product.html">Aenean eu tristique</a></h6>
                                                            <span>£40 x 1</span>
                                                        </div>
                                                        <button class="close">
                                                            <i class="fa fa-close"></i>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <a href="single-product.html" class="minicart-product-image">
                                                            <img src="images/product/small-size/2.jpg" alt="cart products">
                                                        </a>
                                                        <div class="minicart-product-details">
                                                            <h6><a href="single-product.html">Aenean eu tristique</a></h6>
                                                            <span>£40 x 1</span>
                                                        </div>
                                                        <button class="close">
                                                            <i class="fa fa-close"></i>
                                                        </button>
                                                    </li>
                                                </ul>
                                                <p class="minicart-total">SUBTOTAL: <span>£80.00</span></p>
                                                <div class="minicart-button">
                                                    <a href="checkout.html" class="li-button li-button-dark li-button-fullwidth li-button-sm">
                                                        <span>View Full Cart</span>
                                                    </a>
                                                    <a href="checkout.html" class="li-button li-button-fullwidth li-button-sm">
                                                        <span>Checkout</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <?php } ?>
                                        <!-- Header Middle Wishlist Area End Here -->
                                         <li class="hm-minicart">
                                            <div class="hm-minicart-trigger">
                                                <span class="item-icon"></span>
                                                <span class="item-text">£80.00
                                                    <span class="cart-item-count">2</span>
                                                </span>
                                            </div>
                                            <span></span>
                                            <div class="minicart">
                                                <ul class="minicart-product-list">
                                                    <li>
                                                        <a href="single-product.html" class="minicart-product-image">
                                                            <img src="images/product/small-size/1.jpg" alt="cart products">
                                                        </a>
                                                        <div class="minicart-product-details">
                                                            <h6><a href="single-product.html">Aenean eu tristique</a></h6>
                                                            <span>£40 x 1</span>
                                                        </div>
                                                        <button class="close">
                                                            <i class="fa fa-close"></i>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <a href="single-product.html" class="minicart-product-image">
                                                            <img src="images/product/small-size/2.jpg" alt="cart products">
                                                        </a>
                                                        <div class="minicart-product-details">
                                                            <h6><a href="single-product.html">Aenean eu tristique</a></h6>
                                                            <span>£40 x 1</span>
                                                        </div>
                                                        <button class="close">
                                                            <i class="fa fa-close"></i>
                                                        </button>
                                                    </li>
                                                </ul>
                                                <p class="minicart-total">SUBTOTAL: <span>£80.00</span></p>
                                                <div class="minicart-button">
                                                    <a href="checkout.html" class="li-button li-button-dark li-button-fullwidth li-button-sm">
                                                        <span>View Full Cart</span>
                                                    </a>
                                                    <a href="checkout.html" class="li-button li-button-fullwidth li-button-sm">
                                                        <span>Checkout</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Header Middle Right Area End Here -->
                            </div>
                            <!-- Header Middle Right Area End Here -->
                        </div>
                    </div>
                </div>
                <!-- Header Middle Area End Here -->
                <!-- Begin Header Bottom Area -->
                 <div class="header-bottom header-sticky stick d-none d-lg-block d-xl-block">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                               <!-- Begin Header Bottom Menu Area -->
                               <div class="hb-menu">
                                   <nav>
                                       <ul>
                                           <li class="dropdown-holder"><a href="index.php">Beranda</a>
                                           </li>
                                           <li class="megamenu-holder"><a href="belanja.php">Belanja</a>
                                           </li>
                                           <li class="dropdown-holder"><a href="contact.php">Hubungi Kami</a>
                                           
                                       </ul>
                                   </nav>
                               </div>
                               <!-- Header Bottom Menu Area End Here -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Header Bottom Area End Here -->
                <!-- Begin Mobile Menu Area -->
                <div class="mobile-menu-area d-lg-none d-xl-none col-12">
                    <div class="container"> 
                        <div class="row">
                            <div class="mobile-menu">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu Area End Here -->
            </header>
            <!-- Header Area End Here -->
            <!-- Begin Li's Breadcrumb Area -->
            <div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="index.php">Beranda</a></li>
                            <li class="active">Detail Product</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Li's Breadcrumb Area End Here -->
            <!-- content-wraper start -->
             <?php
             include 'admin/koneksi.php'; // koneksi ke database

            $id = $_GET['id'];
            $query = mysqli_query($koneksi, "SELECT p.*, k.nm_kategori FROM tb_produk p LEFT JOIN tb_kategori k ON p.id_kategori = k.id_kategori WHERE id_produk = '$id'");
            $data = mysqli_fetch_assoc($query);
            ?>

            <div class="content-wraper">
                <div class="container">
                    <div class="row single-product-area">
                        <div class="col-lg-5 col-md-6">
                           <!-- Product Details Left -->
                            <div class="product-details-left">
                                <div class="product-details-images slider-navigation-1">
                                    <div class="lg-image">
                                        <a class="popup-img venobox vbox-item" href="admin/produk_img/<?= $data['gambar'] ?>" data-gall="myGallery">
                                            <img src="admin/produk_img/<?= $data['gambar'] ?>" alt="<?= $data['nm_produk'] ?>" width="300" height="300">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--// Product Details Left -->
                        </div>

                        <?php if ($data['stok'] == 0) : ?>
                            <script>
                                alert('Stok produk habis');
                                window.location.href = 'belanja.php';
                            </script>
                        <?php endif; ?>

                        <div class="col-lg-7 col-md-6">
                            <div class="product-details-view-content p-2">
                                <div class="product-info">
                                    <h2><?= $data['nm_produk'] ?></h2>
                                    <span class="new-price new-price-2"> Rp<?= number_format($data['harga'], 0, ',', '.') ?></span>
                                    <div class="product-desc">
                                        <p>
                                            <span><?= nl2br($data['desk']) ?></span>
                                        </p>
                                        <p><strong>Stok Tersedia:</strong> <?= $data['stok'] ?> unit</p>
                                    </div>
                                    
                                    <div class="single-add-to-cart">
                                        <form action="tambah_ke_keranjang.php" method="POST" class="cart-quantity">
                                            <input type="hidden" name="id_produk" value="<?= $data['id_produk'] ?>">
                                            <input type="hidden" name="id_user" value="<?= $_SESSION['id_user'] ?>">
                                            <input type="hidden" name="harga" value="<?= $data['harga'] ?>">
                                            <input type="hidden" name="redirect_url" value="<?= $_SERVER['REQUEST_URI'] ?>">
                                            <div class="quantity">
                                                <label>Jumlah</label>
                                                <div class="cart-plus-minus">
                                                    <input name="jumlah" class="cart-plus-minus-box" value="1"
                                                    type="number" min="1" max="<?= $data['stok'] ?>">
                                                    <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                    <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                </div>
                                            </div>
                                            <button class="add-to-cart" type="submit">Add to cart</button>
                                        </form>
                                    </div>
                                    <div class="product-additional-info pt-25">
                                        
                                        <div class="product-social-sharing pt-25">
                                            <ul>
                                                <li class="instagram"><a href="#"><i class="fa fa-instagram"></i>Instagram</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            <!-- content-wraper end -->
            <!-- Begin Product Area -->
            <div class="product-area pt-35">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="li-product-tab">
                                <ul class="nav li-product-menu">
                                   <li><a class="active" data-toggle="tab" href="#description"><span>Deskripsi</span></a></li>
                                </ul>               
                            </div>
                            <!-- Begin Li's Tab Menu Content Area -->
                        </div>
                    </div>
                    <div class="tab-content">
                        <div id="description" class="tab-pane active show" role="tabpanel">
                            <div class="product-description">
                                <span><?= nl2br($data['desk']) ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product Area End Here -->
            <!-- Begin Li's Laptop Product Area -->
            <section class="product-area li-laptop-product pt-30 pb-50">
                <div class="container">
                    <div class="row">
                        <!-- Begin Li's Section Area -->
                        <div class="col-lg-12">
                            <div class="li-section-title">
                                <h2>
                                    <span>Produk Lainnya</span>
                                </h2>
                            </div>
                            <div class="row">
                                <div class="product-active owl-carousel">
                                    <?php
                                    include 'admin/koneksi.php';
                                    $id_produk = $_GET['id'];

                                    $query_produk_lain = mysqli_query($koneksi, "SELECT * FROM tb_produk WHERE id_produk != '$id_produk' ORDER BY RAND() LIMIT 6");
                                    while ($p = mysqli_fetch_array($query_produk_lain)) {
                                    ?>
                                    
                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="detail_produk.php?id_produk=<?= $p['id_produk'] ?>">
                                                    <img src="admin/produk_img/<?= $p['gambar'] ?>" alt="<?= $p['nm_produk'] ?>" width="300" height="300">
                                                </a>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="#"><?= $p['id_kategori'] ?></a>
                                                        </h5>
                                                    </div>
                                                    <h4><a class="product_name" href="detail_produk.php?id_produk=<?= $p['id_produk'] ?>"><?= $p['nm_produk'] ?></a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">Rp<?= number_format($p['harga'], 0, ',', '.') ?></span>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="detail_produk.php?id_produk=<?= $p['id_produk'] ?>">Beli Sekarang</a></li>
                                                        <li><a href="detail_produk.php?id_produk=<?= $p['id_produk'] ?>" title="Quick View" class="quick-view-btn"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <!-- Li's Section Area End Here -->
                    </div>
                </div>
            </section>
            <!-- Li's Laptop Product Area End Here -->
           <!-- Begin Footer Area -->
        <div class="footer">
            <!-- Begin Footer Static Top Area -->
            <div class="footer-static-top">
                <div class="container">
                    <!-- Begin Footer Shipping Area -->
                    <div class="footer-shipping pt-60 pb-55 pb-xs-25">
                        <div class="row">
                             <!-- Mulai Area Kotak Pengiriman Li -->
                            <div class="row text-center align-items-stretch">
                                <div class="col-lg-3 col-md-6 pb-55">
                                    <div class="li-shipping-inner-box h-100">
                                        <div class="shipping-icon">
                                            <img src="images/shipping-icon/1.png" alt="Delivery Icon">
                                        </div>
                                        <div class="shipping-text">
                                            <h2>Delivery</h2>
                                            <p>Delivery atau ambil ditempat pun bisa.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 pb-55">
                                    <div class="li-shipping-inner-box h-100">
                                        <div class="shipping-icon">
                                            <img src="images/shipping-icon/2.png" alt="Payment Icon">
                                        </div>
                                        <div class="shipping-text">
                                            <h2>Payment</h2>
                                            <p>Tunai, transfer, Qris.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 pb-55">
                                    <div class="li-shipping-inner-box h-100">
                                        <div class="shipping-icon">
                                            <img src="images/shipping-icon/3.png" alt="Privacy Icon">
                                        </div>
                                        <div class="shipping-text">
                                            <h2>Privacy</h2>
                                            <p>100% privacy for user.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 pb-55">
                                    <div class="li-shipping-inner-box h-100">
                                        <div class="shipping-icon">
                                            <img src="images/shipping-icon/4.png" alt="Help Icon">
                                        </div>
                                        <div class="shipping-text">
                                            <h2>24/7 Help Center</h2>
                                            <p>Have a question? Call the e-mail.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Akhir Area Kotak Pengiriman Li -->

                    <!-- Footer Shipping Area End Here -->
                </div>
            </div>
            <!-- Footer Static Top Area End Here -->
            <!-- Begin Footer Static Middle Area -->
            <div class="footer-static-middle">
                <div class="container">
                    <div class="footer-logo-wrap pt-50 pb-35">
                        <div class="row">
                            <!-- Begin Footer Logo Area -->
                            <div class="col-lg-4 col-md-6">
                                <div class="footer-logo">
                                    <h1>Altro</h1>
                                    <p class="info">
                                            Investasi Tepat, Kualitas Hebat.
                                            Enggak Usah Pindah Tempat, Di Sini Semua Tepat.
                                        </p>
                                    </div>
                                    <ul class="des">
                                        <li>
                                            <span>Address: </span>
                                            Sekolah Tinggi Teknologi Ronggolawe Cepu
                                        </li>
                                        <li>
                                            <span>Phone: </span>
                                            <a href="tel : +6285212221394">085212221394</a>
                                        </li>
                                        <li>
                                            <span>Email: </span>
                                            <a href="alifnanur05@gmail.com">alifnanur05@gmail.com</a>
                                    </li>
                                </ul>
                            </div>

                            <!-- Footer Logo Area End Here -->
                            <!-- Begin Footer Block Area -->
                            <div class="col-lg-2 col-md-3 col-sm-6">

                            </div>
                            <!-- Footer Block Area End Here -->
                            <!-- Begin Footer Block Area -->
                            <div class="col-lg-2 col-md-3 col-sm-6">

                            </div>
                            <!-- Footer Block Area End Here -->
                            <!-- Begin Footer Block Area -->
                            <div class="col-lg-4">
                                <div class="footer-block">
                                    <h3 class="footer-block-title">Follow us</h3>
                                    <ul class="social-link">
                                        <li class="instagram">
                                            <a href="https://instagram.com/alif.nfdl/" data-toggle="tooltip" target="_blank" title="Instagram">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Begin Footer Newsletter Area -->
                                <!-- Footer Newsletter Area End Here -->
                            </div>
                            <!-- Footer Block Area End Here -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Static Middle Area End Here -->
            <!-- Begin Footer Static Bottom Area -->
            <div class="footer-static-bottom pt-55 pb-55">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Begin Footer Payment Area -->
                            <div class="copyright text-center">
                                <a href="#">
                                    <img src="images/payment/1.png" alt="">
                                </a>
                            </div>
                            <!-- Footer Payment Area End Here -->
                            <!-- Begin Copyright Area -->
                            <div class="copyright text-center pt-25">
                                <span><a target="_blank" href="https://instagram.com/alif.nfdl/">Designed by: Alifna</a></span>
                            </div>
                            <!-- Copyright Area End Here -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Static Bottom Area End Here -->
        </div>
        <!-- Footer Area End Here -->
        <!-- Body Wrapper End Here -->
        <!-- jQuery-V1.12.4 -->
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        <!-- Popper js -->
        <script src="js/vendor/popper.min.js"></script>
        <!-- Bootstrap V4.1.3 Fremwork js -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Ajax Mail js -->
        <script src="js/ajax-mail.js"></script>
        <!-- Meanmenu js -->
        <script src="js/jquery.meanmenu.min.js"></script>
        <!-- Wow.min js -->
        <script src="js/wow.min.js"></script>
        <!-- Slick Carousel js -->
        <script src="js/slick.min.js"></script>
        <!-- Owl Carousel-2 js -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- Magnific popup js -->
        <script src="js/jquery.magnific-popup.min.js"></script>
        <!-- Isotope js -->
        <script src="js/isotope.pkgd.min.js"></script>
        <!-- Imagesloaded js -->
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <!-- Mixitup js -->
        <script src="js/jquery.mixitup.min.js"></script>
        <!-- Countdown -->
        <script src="js/jquery.countdown.min.js"></script>
        <!-- Counterup -->
        <script src="js/jquery.counterup.min.js"></script>
        <!-- Waypoints -->
        <script src="js/waypoints.min.js"></script>
        <!-- Barrating -->
        <script src="js/jquery.barrating.min.js"></script>
        <!-- Jquery-ui -->
        <script src="js/jquery-ui.min.js"></script>
        <!-- Venobox -->
        <script src="js/venobox.min.js"></script>
        <!-- Nice Select js -->
        <script src="js/jquery.nice-select.min.js"></script>
        <!-- ScrollUp js -->
        <script src="js/scrollUp.min.js"></script>
        <!-- Main/Activator js -->
        <script src="js/main.js"></script>
    </body>

<!-- single-product31:32-->
</html>
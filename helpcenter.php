<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--============ FLATICON ==============-->
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-straight/css/uicons-regular-straight.css'>
    <!--============ SWIPER CSS ==============-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!--============ CSS ==============-->
    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Help Center | Baby World</title>
</head>

<body>
    <!--============ HEADER ==============-->
    <header class="header">
        <div class="header__top">
            <div class="header__container container">
                <div class="header__contact">
                    <span>0865-9712-0151</span>
                    <span><a href="location.php">Our Location</a></span>
                </div>

                <p class="header__alert-news">
                    <a href="voucher.php">Super Value Deals - Save more with coupons</a>
                </p>

                <div class="header__contact">
                    <span><a href="helpcenter.php"> Help Center</a></span>
                    <span><a href="login-register.php"> Log In / Sign Up</a></span>
                </div>
            </div>
        </div>

        <nav class="nav container">
            <a href="index.php" class="nav__logo">
                <img src="assets/img/feelin'.png" alt="" class="nav__logo-img">
            </a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="index.php" class="nav__link active">Home</a>
                    </li>

                    <li class="nav__item">
                        <a href="shop.php" class="nav__link">Shop</a>
                    </li>

                    <li class="nav__item">
                        <a href="accounts.php" class="nav__link">My Account</a>
                    </li>

                    <li class="nav__item">
                        <a href="compare.php" class="nav__link">Compare</a>
                    </li>

                    <li class="nav__item">
                        <a href="contact.php" class="nav__link">Contact</a>
                    </li>

                    <li class="nav__item">
                        <a href="login-register.php" class="nav__link">Login</a>
                    </li>
                </ul>

                <div class="header__search">
                    <input type="text" placeholder="Search for items..." class="form__input">

                    <button class="search__btn">
                        <i class='bx bx-search-alt'></i>
                    </button>
                </div>
            </div>

            <div class="header__user-actions">
                <a href="wishlist.php" class="header__action-btn">
                    <i class='bx bxs-heart'></i>
                    <span class="count">8</span>
                </a>

                <a href="cart.php" class="header__action-btn">
                    <i class='bx bxs-cart-alt'></i>
                    <span class="count">4</span>
                </a>

                <a href="chat.php" class="header__action-btn">
                    <i class='bx bxs-envelope'></i>
                </a>
            </div>
        </nav>
    </header>

    <!--============ BREADCRUMP ==============-->
    <section class="breadcrumb">
        <ul class="breadcrumb__list flex container">
            <li><a href="index.php" class="breadcrumb__link">Home</a></li>
            <li><span class="breadcrumb__link">></span></li>
            <li><span class="breadcrumb__link">Help Center</span></li>
        </ul>
    </section>

    <!--============ HELPCENTER ==============-->
    <div class="main-banner custom-main-banner">
        <h1>Hai, ada yang bisa kami bantu?</h1>
        <div class="search-bar custom-search-bar">
            <input placeholder="Search...." type="text" />

            <button class="search-btn">
                <i class='bx bx-search-alt'></i>
            </button>
        </div>
    </div>

    <div class="categories custom-categories">
        <h2>Kategori</h2>
        <div class="category-grid">
            <div class="category-item">
                <img src="assets/img/HelpCenter/Akun.png" alt="Akun & Keamanan icon" height="40" width="50" />
                <p>Akun & Keamanan</p>
            </div>
            <div class="category-item">
                <img src="assets/img/HelpCenter/Pesanan.png" alt="Pesanan icon" height="40" width="50" />
                <p>Pesanan</p>
            </div>
            <div class="category-item">
                <img src="assets/img/HelpCenter/Pembayaran.png" alt="Pembayaran icon" height="40" width="50" />
                <p>Pembayaran</p>
            </div>
            <div class="category-item">
                <img src="assets/img/HelpCenter/Pengiriman.png" alt="Pengiriman icon" height="40" width="50" />
                <p>Pengiriman</p>
            </div>
            <div class="category-item">
                <img src="assets/img/HelpCenter/Pengembalian Dana.png" alt="Pengembalian Dana icon" height="40"
                    width="50" />
                <p>Pengembalian Dana</p>
            </div>
            <div class="category-item">
                <img src="assets/img/HelpCenter/Komplain.png" alt="Komplain icon" height="40" width="50" />
                <p>Komplain Pesanan</p>
            </div>
            <div class="category-item">
                <img src="assets/img/HelpCenter/Promosi.png" alt="Promosi icon" height="40" width="50" />
                <p>Promosi</p>
            </div>
            <div class="category-item">
                <img src="assets/img/HelpCenter/lainnya.png" alt="Informasi Lainnya icon" height="40" width="50" />
                <p>Informasi Lainnya</p>
            </div>
        </div>
    </div>

    <!--============ FAQ ==============-->
    <div class="faq-container">
        <h1>FAQ</h1>
        <div class="faq-list">
            <div class="faq-item">
                <a href="faq.html" class="faq-title">[Akun & Keamanan] Saya lupa kata sandi saya, bagaimana cara
                    menggantinya?</a>
            </div>
            <div class="faq-item">
                <a href="faq.html" class="faq-title">[Pesanan] Apakah saya dapat membatalkan pesanan saya?</a>
            </div>
            <div class="faq-item">
                <a href="faq.html" class="faq-title">[Pembayaran] Apa saja kartu kredit/debit yang dapat digunakan untuk
                    melakukan pembelian?</a>
            </div>
            <div class="faq-item">
                <a href="faq.html" class="faq-title">[Pengiriman] Apa itu layanan Kirim Instant?</a>
            </div>
            <div class="faq-item">
                <a href="faq.html" class="faq-title">[Pengembalian Dana] Bagaimana proses pengembalian dana untuk
                    pesanan yang dibatalkan?</a>
            </div>
            <div class="faq-item">
                <a href="faq.html" class="faq-title">[Komplain Pesanan] Siapa yang bertanggung jawab atas kerusakan
                    barang yang terjadi saat pengiriman?</a>
            </div>
            <div class="faq-item">
                <a href="faq.html" class="faq-title">[Promosi] Bagaimana cara menggunakan kode Voucher?</a>
            </div>
        </div>
    </div>


    <!--============ NEWSLETTER  ==============-->
    <section class="newsletter section home__newsletter">
        <div class="newsletter__container container grid">
            <h3 class="newsletter__title flex">
                <img src="assets/svg/mailbox-flag-up.svg" alt="" class="newsletter__icon">
                Sign Up to Newsletter
            </h3>

            <p class="newsletter__description">
                ...and receive Rp100.000 coupon for first shopping.
            </p>

            <form action="" class="newsletter__form">
                <input type="text" placeholder="Enter your Email" class="newsletter__input">
                <button type="submit" class="newsletter__btn">Subscribe</button>
            </form>
        </div>
    </section>

    <!--============ FOOTER ==============-->
    <footer class="footer__container">
        <div class="footer__container grid">
            <div class="footer__content">
                <a href="index.html" class="footer__logo">
                    <img src="assets/img/feelin'.png" alt="" class="footer__logo-img">
                </a>

                <h4 class="footer__subtitle">Contact</h4>

                <p class="footer__description">
                    <span>Address:</span> Jl. Telekomunikasi, No 73, Bandung, Jawa Barat.
                </p>

                <p class="footer__description">
                    <span>Phone:</span> +62 856 9712 0151 / (+62) 897 4395 313
                </p>

                <p class="footer__description">
                    <span>Hours:</span> 10:00 - 18:00, Mon - Sat
                </p>

                <div class="footer__social">
                    <h4 class="footer__subtitle">Follow Us</h4>

                    <div class="footer__social-links">
                        <a href="">
                            <img src="assets/svg/facebook.svg" alt="" class="footer__social-icon">
                        </a>

                        <a href="">
                            <img src="assets/svg/instagram.svg" alt="" class="footer__social-icon">
                        </a>

                        <a href="">
                            <img src="assets/svg/pinterest.svg" alt="" class="footer__social-icon">
                        </a>

                        <a href="">
                            <img src="assets/svg/youtube.svg" alt="" class="footer__social-icon">
                        </a>
                    </div>
                </div>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Address</h3>

                <ul class="footer__links">
                    <li><a href="" class="footer__link">About Us</a></li>
                    <li><a href="" class="footer__link">Delivery Information</a></li>
                    <li><a href="" class="footer__link">Privacy Policy</a></li>
                    <li><a href="" class="footer__link">Terms & Conditions</a></li>
                    <li><a href="" class="footer__link">Contact Us</a></li>
                    <li><a href="" class="footer__link">Support Center</a></li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">My Account</h3>

                <ul class="footer__links">
                    <li><a href="" class="footer__link">Sign In</a></li>
                    <li><a href="" class="footer__link">View Cart</a></li>
                    <li><a href="" class="footer__link">My Wishlist</a></li>
                    <li><a href="" class="footer__link">Track My Order</a></li>
                    <li><a href="" class="footer__link">Help</a></li>
                    <li><a href="" class="footer__link">Order</a></li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Secured Payment Gateways</h3>
                <div class="footer__contents">
                    <img src="assets/img/card.png" alt="" class="payment__img">
                    <img src="assets/img/visa.png" alt="" class="payment__img">
                    <img src="assets/img/paypal.png" alt="" class="payment__img">
                    <img src="assets/img/jcb.png" alt="" class="payment__img">
                </div>
            </div>
        </div>

        <div class="footer__bottom">
            <p class="copyright">&copy; 2024 BabyWorld. All rights reserved </p>
            <span class="designer">Designed by DianNadineAkhtar</span>
        </div>
    </footer>



</html>
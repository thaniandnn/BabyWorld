<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart | Baby World</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="projectuid.js" defer></script>
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
            <li><span class="breadcrumb__link">Location</span></li>
        </ul>
    </section>

    <!--============ LOCATION ==============-->
    <section class="location container section">
        <div class="location__title">
            <h2>Find Location</h2>
        </div>

        <div id="coupon__location">
            <div class="location__flex">
                <input type="text" placeholder="Enter city or postcode here">
                <button class="normal">Search</button>
            </div>
        </div>

        <div class="content">
            <div class="store-list">

                <div class="store-item">
                    <img height="50" src="assets/img/feelin'.png">
                    <div class="store-details">
                        <h3>BabyWorld Plaza Indonesia</h3>
                        <p>
                            J. MH. Thamrin No.Kav. 28-30, RT.9/RW.5, Gondangdia, Kec. Menteng, Kota Jakarta Pusat,
                            Daerah Khusus Ibukota Jakarta 10350 Jakarta 10350
                        </p>
                        <a href="#">
                            View Store Details
                        </a>
                        <br />
                        <a href="#">
                            Get Directions
                        </a>
                    </div>

                    <img height="50" src="assets/img/feelin'.png">
                    <div class="store-details">
                        <h3>
                            BABYWORLD PLAZA SENAYAN
                        </h3>
                        <p>
                            Plaza Senayan, 2nd floor, #217A - 219A Asia Afrika Street No.8 Jakarta 10270 Jakarta 10270
                        </p>
                        <a href="#">
                            View Store Details
                        </a>
                        <br />
                        <a href="#">
                            Get Directions
                        </a>
                    </div>

                    <img height="50" src="assets/img/feelin'.png">
                    <div class="store-details">
                        <h3>
                            BABYWORLD KOTA KASABLANKA
                        </h3>
                        <p>
                            Mall Kota Kasablanka, Ground floor, unit #11 Casablanca Street No.88 Jakarta 12870
                        </p>
                        <a href="#">
                            View Store Details
                        </a>
                        <br />
                        <a href="#">
                            Get Directions
                        </a>
                    </div>

                    <img height="50" src="assets/img/feelin'.png">
                    <div class="store-details">
                        <h3>
                            BABYWORLD PASKAL BANDUNG
                        </h3>
                        <p>
                            23 Paskal Shopping Center, 1st floor, #B88 Paskal Kaiji Street No.25-27 Bandung, West Java
                            40181
                        </p>
                        <a href="#">
                            View Store Details
                        </a>
                        <br />
                        <a href="#">
                            Get Directions
                        </a>
                    </div>

                    <img height="50" src="assets/img/feelin'.png">
                    <div class="store-details">
                        <h3>BabyWorld Plaza Indonesia</h3>
                        <p>
                            J. MH. Thamrin No.Kav. 28-30, RT.9/RW.5, Gondangdia, Kec. Menteng, Kota Jakarta Pusat,
                            Daerah Khusus Ibukota Jakarta 10350 Jakarta 10350
                        </p>
                        <a href="#">
                            View Store Details
                        </a>
                        <br />
                        <a href="#">
                            Get Directions
                        </a>
                    </div>

                    <img height="50" src="assets/img/feelin'.png">
                    <div class="store-details">
                        <h3>BabyWorld Plaza Indonesia</h3>
                        <p>
                            J. MH. Thamrin No.Kav. 28-30, RT.9/RW.5, Gondangdia, Kec. Menteng, Kota Jakarta Pusat,
                            Daerah Khusus Ibukota Jakarta 10350 Jakarta 10350
                        </p>
                        <a href="#">
                            View Store Details
                        </a>
                        <br />
                        <a href="#">
                            Get Directions
                        </a>
                    </div>

                    <img height="50" src="assets/img/feelin'.png">
                    <div class="store-details">
                        <h3>BabyWorld Plaza Indonesia</h3>
                        <p>
                            J. MH. Thamrin No.Kav. 28-30, RT.9/RW.5, Gondangdia, Kec. Menteng, Kota Jakarta Pusat,
                            Daerah Khusus Ibukota Jakarta 10350 Jakarta 10350
                        </p>
                        <a href="#">
                            View Store Details
                        </a>
                        <br />
                        <a href="#">
                            Get Directions
                        </a>
                    </div>

                </div>
            </div>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.3044480783615!2d107.62777107316275!3d-6.973362593027323!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9adf177bf8d%3A0x437398556f9fa03!2sTelkom%20University!5e0!3m2!1sen!2sid!4v1735458851179!5m2!1sen!2sid"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

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
</body>

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
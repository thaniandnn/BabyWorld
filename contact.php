<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=g, initial-scale=1.0">
    <title>Contact | Baby World</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
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

    <div class="content">
        <div class="text-content">
            <h1>Connect with us</h1>

        </div>
    </div>
    <div class="contact-box">
        <div class="contact-left">
            <h3>Sent your request</h3>
            <form>
                <div class="contact-input-row">
                    <div class="contact-input-group">
                        <label>Name</label>
                        <input class="input-n-contact" type="text" placeholder="Masukan nama...">
                    </div>
                    <div class="contact-input-group">
                        <label>Phone</label>
                        <input class="input-p-contact" type="number" placeholder="Masukan nomor telp...">
                    </div>
                </div>
                <div class="contact-input-row">
                    <div class="contact-input-group">
                        <label>Email</label>
                        <input class="input-e-contact" type="email" placeholder="Masukan Email...">
                    </div>
                    <div class="contact-input-group">
                        <label>Subject</label>
                        <input class="input-s-contact" type="number" placeholder="Masukan nama produk...">
                    </div>
                </div>

                <label>Message</label>
                <textarea rows="5" placeholder="Pesan..."></textarea>
                <button class="button-contact" type="submit">SEND</button>
            </form>
        </div>
        <div class="contact-right">
            <h3>Reach Us</h3>

            <table type="table-contact">
                <tr>
                    <td>Email : </td>
                    <td>info@baby.co</td>
                </tr>
                <tr>
                    <td>Phone : </td>
                    <td>+62 865-9712-0151</td>
                </tr>
                <tr>
                    <td>Address : </td>
                    <td>Jl. Telekomunikasi, No 73,
                        Bandung, Jawa Barat.</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="footer">
        <div class="social">
            <a href="https://www.instagram.com/babyworldjogja/?utm_source=ig_web_button_share_sheet"
                target="_blank">instagram</a>
            <a href="https://api.whatsapp.com/send/?phone=6281313872004&text&type=phone_number&app_absent=0"
                target="_blank">whatsapp</a>
            <a href="https://x.com/BabyWorld97" target="_blank">twitter</a>
            <a href="https://web.facebook.com/profile.php?id=100084992343547" target="_blank">facebook</a>
        </div>
    </div>
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
                <img src="assets/img/card.png" alt="" class="payment__img">
                <img src="assets/img/visa.png" alt="" class="payment__img">
                <img src="assets/img/paypal.png" alt="" class="payment__img">
                <img src="assets/img/jcb.png" alt="" class="payment__img">
            </div>
        </div>

        <div class="footer__bottom">
            <p class="copyright">&copy; 2024 BabyWorld. All rights reserved </p>
            <span class="designer">Designed by DianNadineAkhtar</span>
        </div>
    </footer>

    <!--============ SWIPER JS ==============-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!--============ SWIPER JS ==============-->
    <script src="assets/js/main.js"></script>

    <script src="assets/js/script.js"></script>
</body>


</html>
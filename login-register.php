<?php
session_start();
include "configdb.php";

// PROSES REGISTER
if (isset($_POST['register'])) {
    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $password = md5($_POST['password']);
    $role     = 'user'; // default register sebagai user
    $created  = date('Y-m-d H:i:s');

    $check = mysqli_query($conn, "SELECT * FROM tb_user WHERE email='$email'");
    if (mysqli_num_rows($check) > 0) {
        echo "<script>alert('Email sudah terdaftar!');</script>";
    } else {
        $insert = mysqli_query($conn, "INSERT INTO tb_user (name, email, password, role, created_at) 
                                       VALUES ('$name', '$email', '$password', '$role', '$created')");
        if ($insert) {
            echo "<script>alert('Akun berhasil dibuat! Silakan login.');</script>";
        } else {
            echo "<script>alert('Gagal membuat akun.');</script>";
        }
    }
}

// PROSES LOGIN
if (isset($_POST['login'])) {
    $email    = $_POST['email'];
    $password = md5($_POST['password']);

    $query = mysqli_query($conn, "SELECT * FROM tb_user WHERE email='$email'");
    $user = mysqli_fetch_assoc($query);

    if ($user) {
        if ($password === $user['password']) {
            $_SESSION['email'] = $user['email'];
            $_SESSION['name']  = $user['name'];
            $_SESSION['role']  = $user['role'];

            // Arahkan berdasarkan role
            if ($user['role'] === 'admin') {
                header("Location: /webpro2025/BbyWorld/admin/dashboard.php");
            } else {
                header("Location: index.php");
            }
            exit();
        } else {
            echo "<script>alert('Password salah.');</script>";
        }
    } else {
        echo "<script>alert('Email tidak ditemukan.');</script>";
    }
}
?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Baby World : Sign In</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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

    <!--============ LOGIN % REGISTER ==============-->
    <div class="login-container" id="login-container">
        <div class="form-container sign-up">
            <form method="POST">
                <h1>Buat Akun</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g" style="color: #F72D73;"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f" style="color: #F72D73;"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-twitter" style="color: #F72D73;"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-apple" style="color: #F72D73;"></i></a>
                </div>
                <input type="text" name="name" placeholder="Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit" name="register">Sign Up</button>
            </form>

        </div>
        <div class="form-container sign-in">
            <form method="POST">
                <h1>Sign In</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g" style="color: #F72D73;"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f" style="color: #F72D73;"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-twitter" style="color: #F72D73;"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-apple" style="color: #F72D73;"></i></a>
                </div>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <a href="#">Forget Your Password?</a>
                <button type="submit" name="login">Sign In</button>
            </form>

        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Halo lagi!</h1>
                    <p>Kalo udah, silahkan login</p>
                    <img src="assets/img/pexels-jonathanborba-3763583-removebg-preview.png" alt="ibu dan bayi" class="toggle-image-right">
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Halo, Moms!</h1>
                    <p>Kalo belum punya akun nya, bikin dulu yuk!</p>
                    <img src="assets/img/pexels-jonathanborba-3763583-removebg-preview.png" alt="ibu dan bayi" class="toggle-image-left">
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/script.js"></script>
</body>

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
                <li><a href="aboutus.html" class="footer__link">About Us</a></li>
                <li><a href="delivery.html" class="footer__link">Delivery Information</a></li>
                <li><a href="" class="footer__link">Privacy Policy</a></li>
                <li><a href="" class="footer__link">Terms & Conditions</a></li>
                <li><a href="contact.html" class="footer__link">Contact Us</a></li>
                <li><a href="review.html" class="footer__link">Customer Review</a></li>
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

</html>
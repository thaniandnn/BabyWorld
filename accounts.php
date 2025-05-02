<?php
session_start();

// Cek apakah sudah login dan role-nya admin
if (!isset($_SESSION['email']) || $_SESSION['role'] !== 'user') {
    header("Location: ../login-register.php");
    exit();
}
?>
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
    <title>My Account | Baby World</title>
</head>

<body>
    <!--============ PHP ==============-->
    <?php
    // Pesan feedback dari URL
    $success = $_GET['success'] ?? '';
    $error = $_GET['error'] ?? '';
    ?>

    <?php if ($success): ?>
        <div style="background-color: #d4edda; color: #155724; padding: 1rem; text-align: center; margin: 1rem auto; width: 90%; max-width: 600px; border-radius: 5px;">
            ✅ Update berhasil!
        </div>
    <?php elseif ($error === 'wrong_password'): ?>
        <div style="background-color: #f8d7da; color: #721c24; padding: 1rem; text-align: center; margin: 1rem auto; width: 90%; max-width: 600px; border-radius: 5px;">
            ❌ Password lama salah. Silakan coba lagi.
        </div>
    <?php elseif ($error === 'confirm_mismatch'): ?>
        <div style="background-color: #f8d7da; color: #721c24; padding: 1rem; text-align: center; margin: 1rem auto; width: 90%; max-width: 600px; border-radius: 5px;">
            ❌ Konfirmasi password baru tidak cocok.
        </div>
    <?php endif; ?>

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
                    <?php if (isset($_SESSION['email'])): ?>
                        <span><a href="logout.php" class="logout-link"> Logout</a></span>
                    <?php else: ?>
                        <span><a href="login-register.php"> Log In / Sign Up</a></span>
                    <?php endif; ?>
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
                    <?php if (isset($_SESSION['email'])): ?>
                        <span><a href="logout.php"> Logout</a></span>
                    <?php else: ?>
                        <span><a href="login-register.php"> Log In / Sign Up</a></span>
                    <?php endif; ?>
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
            <li><span class="breadcrumb__link">Account</span></li>
        </ul>
    </section>

    <!--============ ACCOUNTS  ==============-->
    <section class="accounts section--lg">
        <div class="accounts__container container grid">
            <div class="account__tabs">
                <p class="account__tab active-tab" data-target="#dashboard">
                    <i class="fi fi-rs-settings-sliders"></i> Dashboards
                </p>

                <p class="account__tab" data-target="#orders">
                    <i class="fi fi-rs-shopping-bag"></i> Orders
                </p>

                <p class="account__tab" data-target="#update-profile">
                    <i class="fi fi-rs-user"></i> Update Profile
                </p>

                <p class="account__tab" data-target="#address">
                    <i class="fi fi-rs-marker"></i> My Address
                </p>

                <p class="account__tab" data-target="#change-password">
                    <i class="fi fi-rs-user"></i> Change Passwords
                </p>

                <p class="account__tab">
                    <i class="fi fi-rs-exit"></i> Logout
                </p>
            </div>

            <div class="tabs__content">
                <div class="tab__content active-tab" content id="dashboard">
                    <h3 class="tab__header">Hello Dian!</h3>

                    <div class="tab__body">
                        <p class="tab__description">
                            From your account dashboard. You can easily check & view your
                            recent orders, manage your shipping and billing addresses and
                            edit your password and account details.
                        </p>
                    </div>
                </div>

                <div class="tab__content" content id="orders">
                    <h3 class="tab__header">Your Orders</h3>

                    <div class="tab__body">
                        <table class="placed__order-table">
                            <tr>
                                <th>Orders</th>
                                <th>Dates</th>
                                <th>Status</th>
                                <th>Total</th>
                                <th>Actions</th>
                            </tr>

                            <tr>
                                <td>#2363</td>
                                <td>March 12, 2024</td>
                                <td>Processing</td>
                                <td>Rp347.350,00</td>
                                <td><a href="" class="view__order">View</a></td>
                            </tr>

                            <tr>
                                <td>#2363</td>
                                <td>March 12, 2024</td>
                                <td>Processing</td>
                                <td>Rp347.350,00</td>
                                <td><a href="" class="view__order">View</a></td>
                            </tr>

                            <tr>
                                <td>#2363</td>
                                <td>March 12, 2024</td>
                                <td>Processing</td>
                                <td>Rp347.350,00</td>
                                <td><a href="" class="view__order">View</a></td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="tab__content" content id="update-profile">
                    <h3 class="tab__header">Update Profile</h3>

                    <div class="tab__body">
                        <form action="update_account.php" method="POST" class="form grid">
                            <input type="hidden" name="action" value="update_profile">
                            <input type="text" name="username" placeholder="Username" class="form__input">
                            <div class="form__btn">
                                <button type="submit">Save</button>
                            </div>
                        </form>

                    </div>
                </div>

                <div class="tab__content" content id="address">
                    <h3 class="tab__header">Shipping Address</h3>

                    <div class="tab__body">
                        <form action="update_account.php" method="POST" class="form grid">
                            <input type="hidden" name="action" value="update_address">

                            <textarea name="address" class="form__input" rows="4" placeholder="Enter your shipping address">Jl. Telekomunikasi, No 73. Bandung, Jawa Barat, 453661, Indonesia</textarea>

                            <div class="form__btn">
                                <button type="submit">Save</button>
                            </div>
                        </form>

                    </div>
                </div>

                <div class="tab__content" content id="change-password">
                    <h3 class="tab__header">Change Password</h3>

                    <div class="tab__body">
                        <form action="update_account.php" method="POST" class="form grid">
                            <input type="hidden" name="action" value="change_password">

                            <input type="password" name="current_password" placeholder="Current Password" class="form__input" required>
                            <input type="password" name="new_password" placeholder="New Password" class="form__input" required>
                            <input type="password" name="confirm_password" placeholder="Confirm Password" class="form__input" required>

                            <div class="form__btn">
                                <button type="submit">Save</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
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

    <script src="assets/js/accounts.js"></script>
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
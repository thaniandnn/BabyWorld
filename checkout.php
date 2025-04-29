<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="projectuid.js" defer></script>
</head>

<!--============ JS ==============-->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const cartData = JSON.parse(localStorage.getItem("cartItems")) || [];
        const tableBody = document.querySelector(".order__table");
        let subtotal = 0;

        const insertRow = (item) => {
            const row = document.createElement("tr");

            row.innerHTML = `
        <td><img src="${item.img}" class="order__img" alt=""></td>
        <td>
          <h3 class="table__title">${item.name}</h3>
          <p class="table__quantity">x ${item.qty}</p>
        </td>
        <td><span class="table__price">Rp${item.subtotal.toLocaleString('id-ID')}</span></td>
      `;
            tableBody.insertBefore(row, tableBody.children[tableBody.children.length - 6]); // insert before SubTotal row
        };

        cartData.forEach(item => {
            insertRow(item);
            subtotal += item.subtotal;
        });

        // Update subtotal and total
        const formattedSubtotal = "Rp" + subtotal.toLocaleString("id-ID");
        document.querySelectorAll(".table__price")[cartData.length].textContent = formattedSubtotal;

        const totalWithShipping = subtotal; // add 0 for free shipping, adjust if needed
        document.querySelector(".order__grand-total").textContent = "Rp" + totalWithShipping.toLocaleString("id-ID");
    });
</script>

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
            <li><span class="breadcrumb__link"><a href="cart.html" class="breadcrumb__link">Cart</a></span></li>
            <li><span class="breadcrumb__link">></span></li>
            <li><span class="breadcrumb__link">Checkout</span></li>
        </ul>
    </section>

    <!--============ CHECKOUT ==============-->
    <section class="checkout section--lg">
        <div class="checkout__container container grid">
            <div class="checkout__group">
                <h3 class="section__title">Billing Details</h3>

                <form action="" class="form grid">
                    <input type="text" placeholder="Name" class="form__input">
                    <input type="text" placeholder="Address" class="form__input">
                    <input type="text" placeholder="City" class="form__input">
                    <input type="text" placeholder="Country" class="form__input">
                    <input type="text" placeholder="Post Code" class="form__input">
                    <input type="text" placeholder="Phone" class="form__input">
                    <input type="email" placeholder="Email" class="form__input">

                    <h3 class="checkout__title">Additional Information</h3>

                    <textarea name="" placeholder="Order note" id="" cols="30" rows="10"
                        class="form__input textarea"></textarea>
                </form>
            </div>

            <div class="checkout__group">
                <h3 class="section__title">Cart Totals</h3>

                <table class="order__table" id="checkout-table">
                    <tr>
                        <th colspan="2">Products</th>
                        <th>Price</th>
                    </tr>
                    <!-- Product rows will be inserted here dynamically by JS -->
                </table>

                <table class="order__table">
                    <tr>
                        <td><span class="order__subtitle">SubTotal</span></td>
                        <td colspan="2"><span class="table__price" id="checkout-subtotal">Rp0</span></td>
                    </tr>
                    <tr>
                        <td><span class="order__subtitle">Shipping</span></td>
                        <td colspan="2"><span class="table__price">Free Shipping</span></td>
                    </tr>
                    <tr>
                        <td><span class="order__subtitle">Total</span></td>
                        <td colspan="2"><span class="order__grand-total" id="checkout-total">Rp0</span></td>
                    </tr>
                </table>


                <div class="payment__methods">
                    <h3 class="checkout__title payment__title">Payment</h3>

                    <div class="payment__option flex">
                        <input type="radio" name="radio" checked class="payment__input">
                        <label class="payment__label">Direct Bank Transfer</label>
                    </div>

                    <div class="payment__option flex">
                        <input type="radio" name="radio" class="payment__input">
                        <label class="payment__label">Check Payment</label>
                    </div>

                    <div class="payment__option flex">
                        <input type="radio" name="radio" class="payment__input">
                        <label class="payment__label">Paypal</label>
                    </div>
                </div>

                <form method="post">
                    <div class="checkout__btn">
                        <button type="submit" name="place_order">Place Order</button>
                    </div>
                </form>

            </div>


        </div>
    </section>

    <!--============ NEWSLETTER ==============-->
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

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const cartItems = JSON.parse(localStorage.getItem("cartItems")) || [];
        const table = document.getElementById("checkout-table");
        const subtotalSpan = document.getElementById("checkout-subtotal");
        const totalSpan = document.getElementById("checkout-total");

        let subtotal = 0;

        cartItems.forEach(item => {
            const row = document.createElement("tr");

            row.innerHTML = `
            <td><img src="${item.img}" class="order__img" alt=""></td>
            <td>
                <h3 class="table__title">${item.name}</h3>
                <p class="table__quantity">x ${item.qty}</p>
            </td>
            <td><span class="table__price">Rp${item.price.toLocaleString('id-ID')}</span></td>
        `;

            table.appendChild(row);
            subtotal += item.price * item.qty;
        });

        subtotalSpan.textContent = `Rp${subtotal.toLocaleString('id-ID')}`;
        totalSpan.textContent = `Rp${subtotal.toLocaleString('id-ID')}`;
    });
</script>


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

<?php
if (isset($_POST['place_order'])) {
    echo "<script>alert('Order Placed! Thank you for your purchase.');</script>";
}
?>
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

  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <title>Baby World </title>
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
      <li><span class="breadcrumb__link">Shop</span></li>
    </ul>
  </section>

  <!--============ SIDEBAR ==============-->
  <div class="shop__container">
    <aside class="sidebar">
      <div class="sidebar-category">
        <div class="sidebar-top">
          <h3 class="sidebar-title">Category</h3>
        </div>

        <ul class="sidebar-menu-category-list">
          <li class="sidebar-menu-category">
            <label class="menu-title-flex"><input type="checkbox" /> Accessories</label>
          </li>
          <li class="sidebar-menu-category">
            <label class="menu-title-flex"><input type="checkbox" /> Bottoms</label>
          </li>
          <li class="sidebar-menu-category">
            <label class="menu-title-flex"><input type="checkbox" /> Denim</label>
          </li>
          <li class="sidebar-menu-category">
            <label class="menu-title-flex"><input type="checkbox" /> Leggings</label>
          </li>
          <li class="sidebar-menu-category">
            <label class="menu-title-flex"><input type="checkbox" /> Short</label>
          </li>
          <li class="sidebar-menu-category">
            <label class="menu-title-flex"><input type="checkbox" /> Sets</label>
          </li>
        </ul>
      </div>

      <div class="sidebar-bestsellers">
        <h3 class="sidebar-title">Best sellers</h3>
        <ul class="bestseller-list">
          <li class="bestseller-item">
            <img src="assets/img/10.jpg" alt="Strip Legging" class="bestseller-img" />
            <div class="bestseller-info">
              <p class="bestseller-name">Strip Legging</p>
              <div class="bestseller-rating">★★★★★</div>
              <div class="bestseller-price">
                <span class="old-price">Rp 350.000</span>
                <span class="new-price">Rp 250.000</span>
              </div>
            </div>
          </li>

          <li class="bestseller-item">
            <img src="assets/img/2.jpg" alt="Cute Pink Skirt" class="bestseller-img" />
            <div class="bestseller-info">
              <p class="bestseller-name">Cute Pink Skirt</p>
              <div class="bestseller-rating">★★★★★</div>
              <div class="bestseller-price">
                <span class="old-price">Rp 105.000</span>
                <span class="new-price">Rp 99.000</span>
              </div>
            </div>
          </li>

          <li class="bestseller-item">
            <img src="assets/img/2.jpg" alt="Cute Pink Skirt" class="bestseller-img" />
            <div class="bestseller-info">
              <p class="bestseller-name">Cute Pink Skirt</p>
              <div class="bestseller-rating">★★★★★</div>
              <div class="bestseller-price">
                <span class="old-price">Rp 105.000</span>
                <span class="new-price">Rp 99.000</span>
              </div>
            </div>
          </li>

          <li class="bestseller-item">
            <img src="assets/img/2.jpg" alt="Cute Pink Skirt" class="bestseller-img" />
            <div class="bestseller-info">
              <p class="bestseller-name">Cute Pink Skirt</p>
              <div class="bestseller-rating">★★★★★</div>
              <div class="bestseller-price">
                <span class="old-price">Rp 105.000</span>
                <span class="new-price">Rp 99.000</span>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </aside>

    <!--============ PRODUCT ==============-->
    <section class="products section container">
      <div class="tab__items">
        <div class="tab__item active-tab" content id="featured">
          <div class="products_shop__container grid">
            <div class="product__item">
              <div class="product__banner">
                <a href="details.html" class="product__images">
                  <img src="assets/img/1.jpg" alt="" class="product__img default" />

                  <img src="assets/img/1.jpg" alt="" class="product__img hover" />
                </a>

                <div class="product__actions">
                  <a href="#" class="action__btn" aria-label="Quick View">
                    <i class="fi fi-rs-eye"></i>
                  </a>

                  <a href="#" class="action__btn" aria-label="Add to Wishlist">
                    <i class="fi fi-rs-heart"></i>
                  </a>

                  <a href="#" class="action__btn" aria-label="Compare">
                    <i class="fi fi-rs-shuffle"></i>
                  </a>
                </div>

                <div class="product__badge light-pink">Hot</div>
              </div>

              <div class="product__content">
                <span class="product__category">Clothing</span>
                <a href="details.html">
                  <h3 class="product__title">Ice Cream Shirt</h3>
                </a>
                <div class="product__rating">
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                </div>

                <div class="product__price flex">
                  <span class="new__price">Rp238.000</span>
                  <span class="old__price">Rp138.000</span>
                </div>

                <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                  <i class="fi fi-rs-shopping-bag-add"></i>
                </a>
              </div>
            </div>

            <div class="product__item">
              <div class="product__banner">
                <a href="details.html" class="product__images">
                  <img src="assets/img/2.jpg" alt="" class="product__img default" />

                  <img src="assets/img/2.jpg" alt="" class="product__img hover" />
                </a>

                <div class="product__actions">
                  <a href="#" class="action__btn" aria-label="Quick View">
                    <i class="fi fi-rs-eye"></i>
                  </a>

                  <a href="#" class="action__btn" aria-label="Add to Wishlist">
                    <i class="fi fi-rs-heart"></i>
                  </a>

                  <a href="#" class="action__btn" aria-label="Compare">
                    <i class="fi fi-rs-shuffle"></i>
                  </a>
                </div>

                <div class="product__badge light-green">Hot</div>
              </div>

              <div class="product__content">
                <span class="product__category">Clothing</span>
                <a href="details.html">
                  <h3 class="product__title">Circle Shirt</h3>
                </a>
                <div class="product__rating">
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                </div>

                <div class="product__price flex">
                  <span class="new__price">Rp138.000</span>
                  <span class="old__price">Rp88.000</span>
                </div>

                <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                  <i class="fi fi-rs-shopping-bag-add"></i>
                </a>
              </div>
            </div>

            <div class="product__item">
              <div class="product__banner">
                <a href="details.html" class="product__images">
                  <img src="assets/img/3.jpg" alt="" class="product__img default" />

                  <img src="assets/img/3.jpg" alt="" class="product__img hover" />
                </a>

                <div class="product__actions">
                  <a href="#" class="action__btn" aria-label="Quick View">
                    <i class="fi fi-rs-eye"></i>
                  </a>

                  <a href="#" class="action__btn" aria-label="Add to Wishlist">
                    <i class="fi fi-rs-heart"></i>
                  </a>

                  <a href="#" class="action__btn" aria-label="Compare">
                    <i class="fi fi-rs-shuffle"></i>
                  </a>
                </div>

                <div class="product__badge light-orange">Hot</div>
              </div>

              <div class="product__content">
                <span class="product__category">Clothing</span>
                <a href="details.html">
                  <h3 class="product__title">Bundle Baby Shirt</h3>
                </a>
                <div class="product__rating">
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                </div>

                <div class="product__price flex">
                  <span class="new__price">Rp250.000</span>
                  <span class="old__price">Rp150.000</span>
                </div>

                <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                  <i class="fi fi-rs-shopping-bag-add"></i>
                </a>
              </div>
            </div>

            <div class="product__item">
              <div class="product__banner">
                <a href="details.html" class="product__images">
                  <img src="assets/img/4.jpg" alt="" class="product__img default" />

                  <img src="assets/img/4.jpg" alt="" class="product__img hover" />
                </a>

                <div class="product__actions">
                  <a href="#" class="action__btn" aria-label="Quick View">
                    <i class="fi fi-rs-eye"></i>
                  </a>

                  <a href="#" class="action__btn" aria-label="Add to Wishlist">
                    <i class="fi fi-rs-heart"></i>
                  </a>

                  <a href="#" class="action__btn" aria-label="Compare">
                    <i class="fi fi-rs-shuffle"></i>
                  </a>
                </div>

                <div class="product__badge light-blue">Hot</div>
              </div>

              <div class="product__content">
                <span class="product__category">Clothing</span>
                <a href="details.html">
                  <h3 class="product__title">Buy 2 Get 1</h3>
                </a>
                <div class="product__rating">
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                </div>

                <div class="product__price flex">
                  <span class="new__price">Rp300.000</span>
                  <span class="old__price">Rp200.000</span>
                </div>

                <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                  <i class="fi fi-rs-shopping-bag-add"></i>
                </a>
              </div>
            </div>

            <div class="product__item">
              <div class="product__banner">
                <a href="details.html" class="product__images">
                  <img src="assets/img/5.jpg" alt="" class="product__img default" />

                  <img src="assets/img/5.jpg" alt="" class="product__img hover" />
                </a>

                <div class="product__actions">
                  <a href="#" class="action__btn" aria-label="Quick View">
                    <i class="fi fi-rs-eye"></i>
                  </a>

                  <a href="#" class="action__btn" aria-label="Add to Wishlist">
                    <i class="fi fi-rs-heart"></i>
                  </a>

                  <a href="#" class="action__btn" aria-label="Compare">
                    <i class="fi fi-rs-shuffle"></i>
                  </a>
                </div>

                <div class="product__badge light-orange">-30%</div>
              </div>

              <div class="product__content">
                <span class="product__category">Clothing</span>
                <a href="details.html">
                  <h3 class="product__title">Green Jumper</h3>
                </a>
                <div class="product__rating">
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                </div>

                <div class="product__price flex">
                  <span class="new__price">Rp188.000</span>
                  <span class="old__price">Rp138.000</span>
                </div>

                <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                  <i class="fi fi-rs-shopping-bag-add"></i>
                </a>
              </div>
            </div>

            <div class="product__item">
              <div class="product__banner">
                <a href="details.html" class="product__images">
                  <img src="assets/img/6.jpg" alt="" class="product__img default" />

                  <img src="assets/img/6.jpg" alt="" class="product__img hover" />
                </a>

                <div class="product__actions">
                  <a href="#" class="action__btn" aria-label="Quick View">
                    <i class="fi fi-rs-eye"></i>
                  </a>

                  <a href="#" class="action__btn" aria-label="Add to Wishlist">
                    <i class="fi fi-rs-heart"></i>
                  </a>

                  <a href="#" class="action__btn" aria-label="Compare">
                    <i class="fi fi-rs-shuffle"></i>
                  </a>
                </div>

                <div class="product__badge light-pink">-22%</div>
              </div>

              <div class="product__content">
                <span class="product__category">Clothing</span>
                <a href="details.html">
                  <h3 class="product__title">Buy 1 Get 1 Jumper</h3>
                </a>
                <div class="product__rating">
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                </div>

                <div class="product__price flex">
                  <span class="new__price">Rp245.000</span>
                  <span class="old__price">Rp145.000</span>
                </div>

                <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                  <i class="fi fi-rs-shopping-bag-add"></i>
                </a>
              </div>
            </div>

            <div class="product__item">
              <div class="product__banner">
                <a href="details.html" class="product__images">
                  <img src="assets/img/7.jpg" alt="" class="product__img default" />

                  <img src="assets/img/7.jpg" alt="" class="product__img hover" />
                </a>

                <div class="product__actions">
                  <a href="#" class="action__btn" aria-label="Quick View">
                    <i class="fi fi-rs-eye"></i>
                  </a>

                  <a href="#" class="action__btn" aria-label="Add to Wishlist">
                    <i class="fi fi-rs-heart"></i>
                  </a>

                  <a href="#" class="action__btn" aria-label="Compare">
                    <i class="fi fi-rs-shuffle"></i>
                  </a>
                </div>

                <div class="product__badge light-pink">-22%</div>
              </div>

              <div class="product__content">
                <span class="product__category">Clothing</span>
                <a href="details.html">
                  <h3 class="product__title">Bear Jumper</h3>
                </a>
                <div class="product__rating">
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                </div>

                <div class="product__price flex">
                  <span class="new__price">Rp100.000</span>
                  <span class="old__price">Rp75.000</span>
                </div>

                <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                  <i class="fi fi-rs-shopping-bag-add"></i>
                </a>
              </div>
            </div>

            <div class="product__item">
              <div class="product__banner">
                <a href="details.html" class="product__images">
                  <img src="assets/img/8.jpg" alt="" class="product__img default" />

                  <img src="assets/img/8.jpg" alt="" class="product__img hover" />
                </a>

                <div class="product__actions">
                  <a href="#" class="action__btn" aria-label="Quick View">
                    <i class="fi fi-rs-eye"></i>
                  </a>

                  <a href="#" class="action__btn" aria-label="Add to Wishlist">
                    <i class="fi fi-rs-heart"></i>
                  </a>

                  <a href="#" class="action__btn" aria-label="Compare">
                    <i class="fi fi-rs-shuffle"></i>
                  </a>
                </div>

              </div>

              <div class="product__content">
                <span class="product__category">Clothing</span>
                <a href="details.html">
                  <h3 class="product__title">Bear Jumper</h3>
                </a>
                <div class="product__rating">
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                </div>

                <div class="product__price flex">
                  <span class="new__price">Rp238.000</span>
                  <span class="old__price">Rp138.000</span>
                </div>

                <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                  <i class="fi fi-rs-shopping-bag-add"></i>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="tab__item" content id="popular">
          <div class="products__container grid">
            <div class="product__item">
              <div class="product__banner">
                <a href="details.html" class="product__images">
                  <img src="assets/img/10.jpg" alt="" class="product__img default" />

                  <img src="assets/img/10.jpg" alt="" class="product__img hover" />
                </a>

                <div class="product__actions">
                  <a href="#" class="action__btn" aria-label="Quick View">
                    <i class="fi fi-rs-eye"></i>
                  </a>

                  <a href="#" class="action__btn" aria-label="Add to Wishlist">
                    <i class="fi fi-rs-heart"></i>
                  </a>

                  <a href="#" class="action__btn" aria-label="Compare">
                    <i class="fi fi-rs-shuffle"></i>
                  </a>
                </div>

                <div class="product__badge light-pink">Hot</div>
              </div>

              <div class="product__content">
                <span class="product__category">Clothing</span>
                <a href="details.html">
                  <h3 class="product__title">Colorful Pattern Shirt</h3>
                </a>
                <div class="product__rating">
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                </div>

                <div class="product__price flex">
                  <span class="new__price">Rp238.000</span>
                  <span class="old__price">Rp138.000</span>
                </div>

                <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                  <i class="fi fi-rs-shopping-bag-add"></i>
                </a>
              </div>
            </div>

            <div class="product__item">
              <div class="product__banner">
                <a href="details.html" class="product__images">
                  <img src="assets/img/9.jpg" alt="" class="product__img default" />

                  <img src="assets/img/9.jpg" alt="" class="product__img hover" />
                </a>

                <div class="product__actions">
                  <a href="#" class="action__btn" aria-label="Quick View">
                    <i class="fi fi-rs-eye"></i>
                  </a>

                  <a href="#" class="action__btn" aria-label="Add to Wishlist">
                    <i class="fi fi-rs-heart"></i>
                  </a>

                  <a href="#" class="action__btn" aria-label="Compare">
                    <i class="fi fi-rs-shuffle"></i>
                  </a>
                </div>

                <div class="product__badge light-green">Hot</div>
              </div>

              <div class="product__content">
                <span class="product__category">Clothing</span>
                <a href="details.html">
                  <h3 class="product__title">Elephant Shirt</h3>
                </a>
                <div class="product__rating">
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                </div>

                <div class="product__price flex">
                  <span class="new__price">Rp138.000</span>
                  <span class="old__price">Rp100.000</span>
                </div>

                <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                  <i class="fi fi-rs-shopping-bag-add"></i>
                </a>
              </div>
            </div>

            <div class="product__item">
              <div class="product__banner">
                <a href="details.html" class="product__images">
                  <img src="assets/img/8.jpg" alt="" class="product__img default" />

                  <img src="assets/img/8.jpg" alt="" class="product__img hover" />
                </a>

                <div class="product__actions">
                  <a href="#" class="action__btn" aria-label="Quick View">
                    <i class="fi fi-rs-eye"></i>
                  </a>

                  <a href="#" class="action__btn" aria-label="Add to Wishlist">
                    <i class="fi fi-rs-heart"></i>
                  </a>

                  <a href="#" class="action__btn" aria-label="Compare">
                    <i class="fi fi-rs-shuffle"></i>
                  </a>
                </div>

                <div class="product__badge light-orange">Hot</div>
              </div>

              <div class="product__content">
                <span class="product__category">Clothing</span>
                <a href="details.html">
                  <h3 class="product__title">Bear Pattern Shirt</h3>
                </a>
                <div class="product__rating">
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                </div>

                <div class="product__price flex">
                  <span class="new__price">Rp100.000</span>
                  <span class="old__price">Rp85.000</span>
                </div>

                <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                  <i class="fi fi-rs-shopping-bag-add"></i>
                </a>
              </div>
            </div>

            <div class="product__item">
              <div class="product__banner">
                <a href="details.html" class="product__images">
                  <img src="assets/img/7.jpg" alt="" class="product__img default" />

                  <img src="assets/img/7.jpg" alt="" class="product__img hover" />
                </a>

                <div class="product__actions">
                  <a href="#" class="action__btn" aria-label="Quick View">
                    <i class="fi fi-rs-eye"></i>
                  </a>

                  <a href="#" class="action__btn" aria-label="Add to Wishlist">
                    <i class="fi fi-rs-heart"></i>
                  </a>

                  <a href="#" class="action__btn" aria-label="Compare">
                    <i class="fi fi-rs-shuffle"></i>
                  </a>
                </div>

                <div class="product__badge light-blue">Hot</div>
              </div>

              <div class="product__content">
                <span class="product__category">Clothing</span>
                <a href="details.html">
                  <h3 class="product__title">Bear Shirt</h3>
                </a>
                <div class="product__rating">
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                </div>

                <div class="product__price flex">
                  <span class="new__price">Rp85.000</span>
                  <span class="old__price">Rp50.000</span>
                </div>

                <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                  <i class="fi fi-rs-shopping-bag-add"></i>
                </a>
              </div>
            </div>

            <div class="product__item">
              <div class="product__banner">
                <a href="details.html" class="product__images">
                  <img src="assets/img/6.jpg" alt="" class="product__img default" />

                  <img src="assets/img/6.jpg" alt="" class="product__img hover" />
                </a>

                <div class="product__actions">
                  <a href="#" class="action__btn" aria-label="Quick View">
                    <i class="fi fi-rs-eye"></i>
                  </a>

                  <a href="#" class="action__btn" aria-label="Add to Wishlist">
                    <i class="fi fi-rs-heart"></i>
                  </a>

                  <a href="#" class="action__btn" aria-label="Compare">
                    <i class="fi fi-rs-shuffle"></i>
                  </a>
                </div>

                <div class="product__badge light-green">-30%</div>
              </div>

              <div class="product__content">
                <span class="product__category">Clothing</span>
                <a href="details.html">
                  <h3 class="product__title">Buy 1 Get 1</h3>
                </a>
                <div class="product__rating">
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                </div>

                <div class="product__price flex">
                  <span class="new__price">Rp238.000</span>
                  <span class="old__price">Rp138.000</span>
                </div>

                <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                  <i class="fi fi-rs-shopping-bag-add"></i>
                </a>
              </div>
            </div>

            <div class="product__item">
              <div class="product__banner">
                <a href="details.html" class="product__images">
                  <img src="assets/img/5.jpg" alt="" class="product__img default" />

                  <img src="assets/img/5.jpg" alt="" class="product__img hover" />
                </a>

                <div class="product__actions">
                  <a href="#" class="action__btn" aria-label="Quick View">
                    <i class="fi fi-rs-eye"></i>
                  </a>

                  <a href="#" class="action__btn" aria-label="Add to Wishlist">
                    <i class="fi fi-rs-heart"></i>
                  </a>

                  <a href="#" class="action__btn" aria-label="Compare">
                    <i class="fi fi-rs-shuffle"></i>
                  </a>
                </div>

                <div class="product__badge light-green">-22%</div>
              </div>

              <div class="product__content">
                <span class="product__category">Clothing</span>
                <a href="details.html">
                  <h3 class="product__title">Green Shirt</h3>
                </a>
                <div class="product__rating">
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                </div>

                <div class="product__price flex">
                  <span class="new__price">Rp138.000</span>
                  <span class="old__price">Rp115.000</span>
                </div>

                <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                  <i class="fi fi-rs-shopping-bag-add"></i>
                </a>
              </div>
            </div>

            <div class="product__item">
              <div class="product__banner">
                <a href="details.html" class="product__images">
                  <img src="assets/img/4.jpg" alt="" class="product__img default" />

                  <img src="assets/img/4.jpg" alt="" class="product__img hover" />
                </a>

                <div class="product__actions">
                  <a href="#" class="action__btn" aria-label="Quick View">
                    <i class="fi fi-rs-eye"></i>
                  </a>

                  <a href="#" class="action__btn" aria-label="Add to Wishlist">
                    <i class="fi fi-rs-heart"></i>
                  </a>

                  <a href="#" class="action__btn" aria-label="Compare">
                    <i class="fi fi-rs-shuffle"></i>
                  </a>
                </div>

                <div class="product__badge light-green">-22%</div>
              </div>

              <div class="product__content">
                <span class="product__category">Clothing</span>
                <a href="details.html">
                  <h3 class="product__title">Buy 2 Get 1</h3>
                </a>
                <div class="product__rating">
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                </div>

                <div class="product__price flex">
                  <span class="new__price">Rp250.000</span>
                  <span class="old__price">Rp150.000</span>
                </div>

                <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                  <i class="fi fi-rs-shopping-bag-add"></i>
                </a>
              </div>
            </div>

            <div class="product__item">
              <div class="product__banner">
                <a href="details.html" class="product__images">
                  <img src="assets/img/3.jpg" alt="" class="product__img default" />

                  <img src="assets/img/3.jpg" alt="" class="product__img hover" />
                </a>

                <div class="product__actions">
                  <a href="#" class="action__btn" aria-label="Quick View">
                    <i class="fi fi-rs-eye"></i>
                  </a>

                  <a href="#" class="action__btn" aria-label="Add to Wishlist">
                    <i class="fi fi-rs-heart"></i>
                  </a>

                  <a href="#" class="action__btn" aria-label="Compare">
                    <i class="fi fi-rs-shuffle"></i>
                  </a>
                </div>

              </div>

              <div class="product__content">
                <span class="product__category">Clothing</span>
                <a href="details.html">
                  <h3 class="product__title">Buy 2 Get 1</h3>
                </a>
                <div class="product__rating">
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                </div>

                <div class="product__price flex">
                  <span class="new__price">Rp245.000</span>
                  <span class="old__price">Rp145.000</span>
                </div>

                <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                  <i class="fi fi-rs-shopping-bag-add"></i>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="tab__item" content id="new-added">
          <div class="products__container grid">
            <div class="product__item">
              <div class="product__banner">
                <a href="details.html" class="product__images">
                  <img src="assets/img/1.jpg" alt="" class="product__img default" />

                  <img src="assets/img/1.jpg" alt="" class="product__img hover" />
                </a>

                <div class="product__actions">
                  <a href="#" class="action__btn" aria-label="Quick View">
                    <i class="fi fi-rs-eye"></i>
                  </a>

                  <a href="#" class="action__btn" aria-label="Add to Wishlist">
                    <i class="fi fi-rs-heart"></i>
                  </a>

                  <a href="#" class="action__btn" aria-label="Compare">
                    <i class="fi fi-rs-shuffle"></i>
                  </a>
                </div>

                <div class="product__badge light-pink">Hot</div>
              </div>

              <div class="product__content">
                <span class="product__category">Clothing</span>
                <a href="details.html">
                  <h3 class="product__title">Colorful Pattern Shirt</h3>
                </a>
                <div class="product__rating">
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                </div>

                <div class="product__price flex">
                  <span class="new__price">Rp238.000</span>
                  <span class="old__price">Rp138.000</span>
                </div>

                <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                  <i class="fi fi-rs-shopping-bag-add"></i>
                </a>
              </div>
            </div>

            <div class="product__item">
              <div class="product__banner">
                <a href="details.html" class="product__images">
                  <img src="assets/img/2.jpg" alt="" class="product__img default" />

                  <img src="assets/img/2.jpg" alt="" class="product__img hover" />
                </a>

                <div class="product__actions">
                  <a href="#" class="action__btn" aria-label="Quick View">
                    <i class="fi fi-rs-eye"></i>
                  </a>

                  <a href="#" class="action__btn" aria-label="Add to Wishlist">
                    <i class="fi fi-rs-heart"></i>
                  </a>

                  <a href="#" class="action__btn" aria-label="Compare">
                    <i class="fi fi-rs-shuffle"></i>
                  </a>
                </div>

                <div class="product__badge light-green">Hot</div>
              </div>

              <div class="product__content">
                <span class="product__category">Clothing</span>
                <a href="details.html">
                  <h3 class="product__title">Colorful Pattern Shirt</h3>
                </a>
                <div class="product__rating">
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                </div>

                <div class="product__price flex">
                  <span class="new__price">Rp238.000</span>
                  <span class="old__price">Rp138.000</span>
                </div>

                <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                  <i class="fi fi-rs-shopping-bag-add"></i>
                </a>
              </div>
            </div>

            <div class="product__item">
              <div class="product__banner">
                <a href="details.html" class="product__images">
                  <img src="assets/img/3.jpg" alt="" class="product__img default" />

                  <img src="assets/img/3.jpg" alt="" class="product__img hover" />
                </a>

                <div class="product__actions">
                  <a href="#" class="action__btn" aria-label="Quick View">
                    <i class="fi fi-rs-eye"></i>
                  </a>

                  <a href="#" class="action__btn" aria-label="Add to Wishlist">
                    <i class="fi fi-rs-heart"></i>
                  </a>

                  <a href="#" class="action__btn" aria-label="Compare">
                    <i class="fi fi-rs-shuffle"></i>
                  </a>
                </div>

                <div class="product__badge light-orange">Hot</div>
              </div>

              <div class="product__content">
                <span class="product__category">Clothing</span>
                <a href="details.html">
                  <h3 class="product__title">Colorful Pattern Shirt</h3>
                </a>
                <div class="product__rating">
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                </div>

                <div class="product__price flex">
                  <span class="new__price">Rp238.000</span>
                  <span class="old__price">Rp138.000</span>
                </div>

                <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                  <i class="fi fi-rs-shopping-bag-add"></i>
                </a>
              </div>
            </div>

            <div class="product__item">
              <div class="product__banner">
                <a href="details.html" class="product__images">
                  <img src="assets/img/4.jpg" alt="" class="product__img default" />

                  <img src="assets/img/4.jpg" alt="" class="product__img hover" />
                </a>

                <div class="product__actions">
                  <a href="#" class="action__btn" aria-label="Quick View">
                    <i class="fi fi-rs-eye"></i>
                  </a>

                  <a href="#" class="action__btn" aria-label="Add to Wishlist">
                    <i class="fi fi-rs-heart"></i>
                  </a>

                  <a href="#" class="action__btn" aria-label="Compare">
                    <i class="fi fi-rs-shuffle"></i>
                  </a>
                </div>

                <div class="product__badge light-blue">Hot</div>
              </div>

              <div class="product__content">
                <span class="product__category">Clothing</span>
                <a href="details.html">
                  <h3 class="product__title">Colorful Pattern Shirt</h3>
                </a>
                <div class="product__rating">
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                </div>

                <div class="product__price flex">
                  <span class="new__price">Rp238.000</span>
                  <span class="old__price">Rp138.000</span>
                </div>

                <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                  <i class="fi fi-rs-shopping-bag-add"></i>
                </a>
              </div>
            </div>

            <div class="product__item">
              <div class="product__banner">
                <a href="details.html" class="product__images">
                  <img src="assets/img/5.jpg" alt="" class="product__img default" />

                  <img src="assets/img/5.jpg" alt="" class="product__img hover" />
                </a>

                <div class="product__actions">
                  <a href="#" class="action__btn" aria-label="Quick View">
                    <i class="fi fi-rs-eye"></i>
                  </a>

                  <a href="#" class="action__btn" aria-label="Add to Wishlist">
                    <i class="fi fi-rs-heart"></i>
                  </a>

                  <a href="#" class="action__btn" aria-label="Compare">
                    <i class="fi fi-rs-shuffle"></i>
                  </a>
                </div>

                <div class="product__badge light-green">-30%</div>
              </div>

              <div class="product__content">
                <span class="product__category">Clothing</span>
                <a href="details.html">
                  <h3 class="product__title">Colorful Pattern Shirt</h3>
                </a>
                <div class="product__rating">
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                </div>

                <div class="product__price flex">
                  <span class="new__price">Rp238.000</span>
                  <span class="old__price">Rp138.000</span>
                </div>

                <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                  <i class="fi fi-rs-shopping-bag-add"></i>
                </a>
              </div>
            </div>

            <div class="product__item">
              <div class="product__banner">
                <a href="details.html" class="product__images">
                  <img src="assets/img/6.jpg" alt="" class="product__img default" />

                  <img src="assets/img/6.jpg" alt="" class="product__img hover" />
                </a>

                <div class="product__actions">
                  <a href="#" class="action__btn" aria-label="Quick View">
                    <i class="fi fi-rs-eye"></i>
                  </a>

                  <a href="#" class="action__btn" aria-label="Add to Wishlist">
                    <i class="fi fi-rs-heart"></i>
                  </a>

                  <a href="#" class="action__btn" aria-label="Compare">
                    <i class="fi fi-rs-shuffle"></i>
                  </a>
                </div>

                <div class="product__badge light-green">-22%</div>
              </div>

              <div class="product__content">
                <span class="product__category">Clothing</span>
                <a href="details.html">
                  <h3 class="product__title">Colorful Pattern Shirt</h3>
                </a>
                <div class="product__rating">
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                </div>

                <div class="product__price flex">
                  <span class="new__price">Rp238.000</span>
                  <span class="old__price">Rp138.000</span>
                </div>

                <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                  <i class="fi fi-rs-shopping-bag-add"></i>
                </a>
              </div>
            </div>

            <div class="product__item">
              <div class="product__banner">
                <a href="details.html" class="product__images">
                  <img src="assets/img/7.jpg" alt="" class="product__img default" />

                  <img src="assets/img/7.jpg" alt="" class="product__img hover" />
                </a>

                <div class="product__actions">
                  <a href="#" class="action__btn" aria-label="Quick View">
                    <i class="fi fi-rs-eye"></i>
                  </a>

                  <a href="#" class="action__btn" aria-label="Add to Wishlist">
                    <i class="fi fi-rs-heart"></i>
                  </a>

                  <a href="#" class="action__btn" aria-label="Compare">
                    <i class="fi fi-rs-shuffle"></i>
                  </a>
                </div>

                <div class="product__badge light-green">-22%</div>
              </div>

              <div class="product__content">
                <span class="product__category">Clothing</span>
                <a href="details.html">
                  <h3 class="product__title">Colorful Pattern Shirt</h3>
                </a>
                <div class="product__rating">
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                </div>

                <div class="product__price flex">
                  <span class="new__price">Rp238.000</span>
                  <span class="old__price">Rp138.000</span>
                </div>

                <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                  <i class="fi fi-rs-shopping-bag-add"></i>
                </a>
              </div>
            </div>

            <div class="product__item">
              <div class="product__banner">
                <a href="details.html" class="product__images">
                  <img src="assets/img/8.jpg" alt="" class="product__img default" />

                  <img src="assets/img/8.jpg" alt="" class="product__img hover" />
                </a>

                <div class="product__actions">
                  <a href="#" class="action__btn" aria-label="Quick View">
                    <i class="fi fi-rs-eye"></i>
                  </a>

                  <a href="#" class="action__btn" aria-label="Add to Wishlist">
                    <i class="fi fi-rs-heart"></i>
                  </a>

                  <a href="#" class="action__btn" aria-label="Compare">
                    <i class="fi fi-rs-shuffle"></i>
                  </a>
                </div>

              </div>

              <div class="product__content">
                <span class="product__category">Clothing</span>
                <a href="details.html">
                  <h3 class="product__title">Colorful Pattern Shirt</h3>
                </a>
                <div class="product__rating">
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                  <i class='fi fi-rs-star'></i>
                </div>

                <div class="product__price flex">
                  <span class="new__price">Rp238.000</span>
                  <span class="old__price">Rp138.000</span>
                </div>

                <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                  <i class="fi fi-rs-shopping-bag-add"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
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
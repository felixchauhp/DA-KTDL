<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--=============== FLATICON ===============-->
    <link
      rel="stylesheet"
      href="https://cdn-uicons.flaticon.com/2.0.0/uicons-regular-straight/css/uicons-regular-straight.css"
    />
    <!-- Bootstrap JS (for dropdown functionality) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!--=============== SWIPER CSS ===============-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/styles.css" />

    <title>MotorCycle Store</title>
  </head>
  <body>
   <!--=============== HEADER ===============-->
   <header class="header">
    <div class="header__top">
      <div class="header__container container">
        <div class="header__contact">
          <span>Gọi đặt hàng:</span>
          <span>+84 001 929 992</span>
        </div>
        <p class="header__alert-news">
          Dịch vụ giao hàng và lắp ráp tận nơi !
        </p>
        <a href="login.html" class="header__top-action">
          Đăng nhập ngay để mua hàng!
        </a>
      </div>
    </div>

    <nav class="nav container">
      <a href="index.html" class="nav__logo">
        <img
          class="nav__logo-img"
          src="assets/img/logo.png"
          alt="website logo"
        />
      </a>
      <div class="nav__menu" id="nav-menu">
        <div class="nav__menu-top">
          <a href="index.html" class="nav__menu-logo">
            <img src="./assets/img/logo.png" alt="">
          </a>
          <div class="nav__close" id="nav-close">
            <i class="fi fi-rs-cross-small"></i>
          </div>
        </div>
        <ul class="nav__list">
          <li class="nav__item">
            <a href="index.html" class="nav__link active-link">Trang chủ</a>
          </li>
          <li class="nav__item">
            <a href="shop.html" class="nav__link">Sản phẩm</a>
          </li>
          <li class="nav__item">
            <a href="about.html" class="nav__link">Giới thiệu</a>
          </li>
          <li class="nav__item">
            <a href="Blog.html" class="nav__link">Tin tức</a>
          </li>
        </ul>
        <div class="header__search">
          <input
            type="text"
            placeholder="Tìm kiếm..."
            class="form__input"
          />
          <button class="search__btn">
            <img src="assets/img/search.png" alt="search icon" />
          </button>
        </div>
      </div>
      <div class="header__user-actions">
        <a href="wishlist.html" class="header__action-btn" title="Wishlist">
          <img src="assets/img/icon-heart.svg" alt="" />
          <span class="count">3</span>
        </a>
        <a href="cart.html" class="header__action-btn" title="Cart">
          <img src="assets/img/icon-cart.svg" alt="" />
          <span class="count">3</span>
        </a>
      <div class="dropdown w-100 mt-2">
        <a
          href="#"
          class="header__action-btn dropdown-toggle"
          id="userDropdown"
          data-toggle="dropdown"
          aria-haspopup="true"
          aria-expanded="false"
          title="User"
        >
          <img src="assets/img/icon-user.svg" alt=""/>
        </a>
        
        <ul class="dropdown-menu dropdown-menu-right text-center p-2" style="width: 150px;" aria-labelledby="userDropdown">
          <li>
            <a class="dropdown-item d-flex align-items-center justify-content-center" href="accounts.html">
              <i class="fi fi-rs-settings mr-2"></i> Cá nhân
            </a>
          </li>
          <li>
            <a class="dropdown-item d-flex align-items-center justify-content-center" href="login.html">
              <i class="fi fi-rs-user mr-2"></i> Đăng nhập
            </a>
          </li>
          <li>
            <a class="dropdown-item d-flex align-items-center justify-content-center" href="register.html">
              <i class="fi fi-rs-user-add mr-2"></i> Đăng ký
            </a>
          </li>
        </ul>
      </div>
             
        <div class="header__action-btn nav__toggle" id="nav-toggle">
          <img src="./assets//img/menu-burger.svg" alt="">
        </div>
      </div>
    </nav>
  </header>

    <!--=============== MAIN ===============-->
    <main class="main">
      <!--=============== HOME ===============-->
      <section class="home section--lg">
        <div class="home__container container grid">
          <div class="home__content">
            <span class="home__subtitle">Siêu ưu đãi Phượt Hè</span>
            <h1 class="home__title">
              Your Motor <span>Your Way</span>
            </h1>
            <p class="home__description">
              Mã giảm giá lên đến 99%
            </p>
            <a href="shop.html" class="btn">Mua ngay kẽo lỡ!</a>
          </div>
          <img src="assets/img/bannerindex.png" class="home__img" alt="hats" />
        </div>
      </section>

      <!--=============== CATEGORIES ===============-->
      <section class="categories container section">
        <h3 class="section__title"><span>Danh mục</span> Sản phẩm</h3>
        <div class="categories__container swiper">
          <div class="swiper-wrapper">
            <a href="shop.html" class="category__item swiper-slide">
              <img
                src="assets/img/cat1.jpg"
                alt=""
                class="category__img"
              />
              <h3 class="category__title">Nhớt</h3>
            </a>
            <a href="shop.html" class="category__item swiper-slide">
              <img
                src="assets/img/cat2.jpg"
                alt=""
                class="category__img"
              />
              <h3 class="category__title">Lốp xe</h3>
            </a>
            <a href="shop.html" class="category__item swiper-slide">
              <img
                src="assets/img/cat3.jpg"
                alt=""
                class="category__img"
              />
              <h3 class="category__title">Gương</h3>
            </a>
            <a href="shop.html" class="category__item swiper-slide">
              <img
                src="assets/img/cat4.jpg"
                alt=""
                class="category__img"
              />
              <h3 class="category__title">Nón bảo hiểm</h3>
            </a>
            <a href="shop.html" class="category__item swiper-slide">
              <img
                src="assets/img/cat5.jpg"
                alt=""
                class="category__img"
              />
              <h3 class="category__title">Đồ chơi xe</h3>
            </a>
            <a href="shop.html" class="category__item swiper-slide">
              <img
                src="assets/img/cat6.jpg"
                alt=""
                class="category__img"
              />
              <h3 class="category__title">Phụ tùng khác</h3>
            </a>
            <a href="shop.html" class="category__item swiper-slide">
              <img
                src="assets/img/cat7.jpg"
                alt=""
                class="category__img"
              />
              <h3 class="category__title">Decal</h3>
            </a>
            <a href="shop.html" class="category__item swiper-slide">
              <img
                src="assets/img/cat8.png"
                alt=""
                class="category__img"
              />
              <h3 class="category__title">Dịch vụ bão dưỡng</h3>
            </a>
          </div>

          <div class="swiper-button-prev">
            <i class="fi fi-rs-angle-left"></i>
          </div>
          <div class="swiper-button-next">
            <i class="fi fi-rs-angle-right"></i>
          </div>
        </div>
      </section>

      <!--=============== PRODUCTS ===============-->
      <section class="products container section">
        <div class="tab__btns">
          <span class="tab__btn active-tab" data-target="#featured"
            >Nổi bật</span
          >
          <span class="tab__btn" data-target="#popular">Yêu thích</span>
          <span class="tab__btn" data-target="#new-added">Mới về</span>
        </div>

        <div class="tab__items">
          <div class="tab__item active-tab" content id="featured">
            <div class="products__container grid">
              <div class="product__item">
                <div class="product__banner">
                  <a href="details.html" class="product__images">
                    <img
                      src="assets/img/product-1-1.jpg"
                      alt=""
                      class="product__img default"
                    />
                    <img
                      src="assets/img/product-1-2.jpg"
                      alt=""
                      class="product__img hover"
                    />
                  </a>
                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a
                      href="#"
                      class="action__btn"
                      aria-label="Add to Wishlist"
                    >
                      <i class="fi fi-rs-heart"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>
                  <div class="product__badge light-pink">Hot</div>
                </div>
                <div class="product__content">
                  <span class="product__category">Phụ kiện khác</span>
                  <a href="details.html">
                    <h3 class="product__title">Tên Sản Phẩm</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">999.999 VNĐ</span>
                    <span class="old__price">1.000.000 VNĐ</span>
                  </div>
                  <a
                    href="#"
                    class="action__btn cart__btn"
                    aria-label="Add To Cart"
                  >
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>
              <div class="product__item">
                <div class="product__banner">
                  <a href="details.html" class="product__images">
                    <img
                      src="assets/img/product-2-1.jpg"
                      alt=""
                      class="product__img default"
                    />
                    <img
                      src="assets/img/product-2-2.jpg"
                      alt=""
                      class="product__img hover"
                    />
                  </a>
                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a
                      href="#"
                      class="action__btn"
                      aria-label="Add to Wishlist"
                    >
                      <i class="fi fi-rs-heart"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>
                  <div class="product__badge light-green">Hot</div>
                </div>
                <div class="product__content">
                  <span class="product__category">Phụ kiện khác</span>
                  <a href="details.html">
                    <h3 class="product__title">Tên Sản Phẩm</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">999.999 VNĐ</span>
                    <span class="old__price">1.000.000 VNĐ</span>
                  </div>
                  <a
                    href="#"
                    class="action__btn cart__btn"
                    aria-label="Add To Cart"
                  >
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>
              <div class="product__item">
                <div class="product__banner">
                  <a href="details.html" class="product__images">
                    <img
                      src="assets/img/product-3-1.jpg"
                      alt=""
                      class="product__img default"
                    />
                    <img
                      src="assets/img/product-3-2.jpg"
                      alt=""
                      class="product__img hover"
                    />
                  </a>
                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a
                      href="#"
                      class="action__btn"
                      aria-label="Add to Wishlist"
                    >
                      <i class="fi fi-rs-heart"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>
                  <div class="product__badge light-orange">Hot</div>
                </div>
                <div class="product__content">
                  <span class="product__category">Phụ kiện khác</span>
                  <a href="details.html">
                    <h3 class="product__title">Tên Sản Phẩm</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">999.999 VNĐ</span>
                    <span class="old__price">1.000.000 VNĐ</span>
                  </div>
                  <a
                    href="#"
                    class="action__btn cart__btn"
                    aria-label="Add To Cart"
                  >
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>
              <div class="product__item">
                <div class="product__banner">
                  <a href="details.html" class="product__images">
                    <img
                      src="assets/img/product-4-1.jpg"
                      alt=""
                      class="product__img default"
                    />
                    <img
                      src="assets/img/product-4-2.jpg"
                      alt=""
                      class="product__img hover"
                    />
                  </a>
                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a
                      href="#"
                      class="action__btn"
                      aria-label="Add to Wishlist"
                    >
                      <i class="fi fi-rs-heart"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>
                  <div class="product__badge light-blue">Hot</div>
                </div>
                <div class="product__content">
                  <span class="product__category">Phụ kiện khác</span>
                  <a href="details.html">
                    <h3 class="product__title">Tên Sản Phẩm</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">999.999 VNĐ</span>
                    <span class="old__price">1.000.000 VNĐ</span>
                  </div>
                  <a
                    href="#"
                    class="action__btn cart__btn"
                    aria-label="Add To Cart"
                  >
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>
              <div class="product__item">
                <div class="product__banner">
                  <a href="details.html" class="product__images">
                    <img
                      src="assets/img/product-5-1.jpg"
                      alt=""
                      class="product__img default"
                    />
                    <img
                      src="assets/img/product-5-2.jpg"
                      alt=""
                      class="product__img hover"
                    />
                  </a>
                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a
                      href="#"
                      class="action__btn"
                      aria-label="Add to Wishlist"
                    >
                      <i class="fi fi-rs-heart"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>
                  <div class="product__badge light-blue">-30%</div>
                </div>
                <div class="product__content">
                  <span class="product__category">Phụ kiện khác</span>
                  <a href="details.html">
                    <h3 class="product__title">Tên Sản Phẩm</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">999.999 VNĐ</span>
                    <span class="old__price">1.000.000 VNĐ</span>
                  </div>
                  <a
                    href="#"
                    class="action__btn cart__btn"
                    aria-label="Add To Cart"
                  >
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>
              <div class="product__item">
                <div class="product__banner">
                  <a href="details.html" class="product__images">
                    <img
                      src="assets/img/product-6-1.jpg"
                      alt=""
                      class="product__img default"
                    />
                    <img
                      src="assets/img/product-6-2.jpg"
                      alt=""
                      class="product__img hover"
                    />
                  </a>
                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a
                      href="#"
                      class="action__btn"
                      aria-label="Add to Wishlist"
                    >
                      <i class="fi fi-rs-heart"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>
                  <div class="product__badge light-blue">-22%</div>
                </div>
                <div class="product__content">
                  <span class="product__category">Phụ kiện khác</span>
                  <a href="details.html">
                    <h3 class="product__title">Tên Sản Phẩm</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">999.999 VNĐ</span>
                    <span class="old__price">1.000.000 VNĐ</span>
                  </div>
                  <a
                    href="#"
                    class="action__btn cart__btn"
                    aria-label="Add To Cart"
                  >
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>
              <div class="product__item">
                <div class="product__banner">
                  <a href="details.html" class="product__images">
                    <img
                      src="assets/img/product-7-1.jpg"
                      alt=""
                      class="product__img default"
                    />
                    <img
                      src="assets/img/product-7-2.jpg"
                      alt=""
                      class="product__img hover"
                    />
                  </a>
                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a
                      href="#"
                      class="action__btn"
                      aria-label="Add to Wishlist"
                    >
                      <i class="fi fi-rs-heart"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>
                  <div class="product__badge light-green">-22%</div>
                </div>
                <div class="product__content">
                  <span class="product__category">Phụ kiện khác</span>
                  <a href="details.html">
                    <h3 class="product__title">Tên Sản Phẩm</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">999.999 VNĐ</span>
                    <span class="old__price">1.000.000 VNĐ</span>
                  </div>
                  <a
                    href="#"
                    class="action__btn cart__btn"
                    aria-label="Add To Cart"
                  >
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>
              <div class="product__item">
                <div class="product__banner">
                  <a href="details.html" class="product__images">
                    <img
                      src="assets/img/product-8-1.jpg"
                      alt=""
                      class="product__img default"
                    />
                    <img
                      src="assets/img/product-8-2.jpg"
                      alt=""
                      class="product__img hover"
                    />
                  </a>
                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a
                      href="#"
                      class="action__btn"
                      aria-label="Add to Wishlist"
                    >
                      <i class="fi fi-rs-heart"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>
                </div>
                <div class="product__content">
                  <span class="product__category">Phụ kiện khác</span>
                  <a href="details.html">
                    <h3 class="product__title">Tên Sản Phẩm</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">999.999 VNĐ</span>
                    <span class="old__price">1.000.000 VNĐ</span>
                  </div>
                  <a
                    href="#"
                    class="action__btn cart__btn"
                    aria-label="Add To Cart"
                  >
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
                    <img
                      src="assets/img/product-9-1.jpg"
                      alt=""
                      class="product__img default"
                    />
                    <img
                      src="assets/img/product-9-2.jpg"
                      alt=""
                      class="product__img hover"
                    />
                  </a>
                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a
                      href="#"
                      class="action__btn"
                      aria-label="Add to Wishlist"
                    >
                      <i class="fi fi-rs-heart"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>
                  <div class="product__badge light-pink">Hot</div>
                </div>
                <div class="product__content">
                  <span class="product__category">Phụ kiện khác</span>
                  <a href="details.html">
                    <h3 class="product__title">Tên Sản Phẩm</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">999.999 VNĐ</span>
                    <span class="old__price">1.000.000 VNĐ</span>
                  </div>
                  <a
                    href="#"
                    class="action__btn cart__btn"
                    aria-label="Add To Cart"
                  >
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>
              <div class="product__item">
                <div class="product__banner">
                  <a href="details.html" class="product__images">
                    <img
                      src="assets/img/product-2-1.jpg"
                      alt=""
                      class="product__img default"
                    />
                    <img
                      src="assets/img/product-2-2.jpg"
                      alt=""
                      class="product__img hover"
                    />
                  </a>
                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a
                      href="#"
                      class="action__btn"
                      aria-label="Add to Wishlist"
                    >
                      <i class="fi fi-rs-heart"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>
                  <div class="product__badge light-green">Hot</div>
                </div>
                <div class="product__content">
                  <span class="product__category">Phụ kiện khác</span>
                  <a href="details.html">
                    <h3 class="product__title">Tên Sản Phẩm</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">999.999 VNĐ</span>
                    <span class="old__price">1.000.000 VNĐ</span>
                  </div>
                  <a
                    href="#"
                    class="action__btn cart__btn"
                    aria-label="Add To Cart"
                  >
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>
              <div class="product__item">
                <div class="product__banner">
                  <a href="details.html" class="product__images">
                    <img
                      src="assets/img/product-10-1.jpg"
                      alt=""
                      class="product__img default"
                    />
                    <img
                      src="assets/img/product-10-2.jpg"
                      alt=""
                      class="product__img hover"
                    />
                  </a>
                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a
                      href="#"
                      class="action__btn"
                      aria-label="Add to Wishlist"
                    >
                      <i class="fi fi-rs-heart"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>
                  <div class="product__badge light-orange">Hot</div>
                </div>
                <div class="product__content">
                  <span class="product__category">Phụ kiện khác</span>
                  <a href="details.html">
                    <h3 class="product__title">Tên Sản Phẩm</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">999.999 VNĐ</span>
                    <span class="old__price">1.000.000 VNĐ</span>
                  </div>
                  <a
                    href="#"
                    class="action__btn cart__btn"
                    aria-label="Add To Cart"
                  >
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>
              <div class="product__item">
                <div class="product__banner">
                  <a href="details.html" class="product__images">
                    <img
                      src="assets/img/product-4-1.jpg"
                      alt=""
                      class="product__img default"
                    />
                    <img
                      src="assets/img/product-4-2.jpg"
                      alt=""
                      class="product__img hover"
                    />
                  </a>
                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a
                      href="#"
                      class="action__btn"
                      aria-label="Add to Wishlist"
                    >
                      <i class="fi fi-rs-heart"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>
                  <div class="product__badge light-blue">Hot</div>
                </div>
                <div class="product__content">
                  <span class="product__category">Phụ kiện khác</span>
                  <a href="details.html">
                    <h3 class="product__title">Tên Sản Phẩm</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">999.999 VNĐ</span>
                    <span class="old__price">1.000.000 VNĐ</span>
                  </div>
                  <a
                    href="#"
                    class="action__btn cart__btn"
                    aria-label="Add To Cart"
                  >
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>
              <div class="product__item">
                <div class="product__banner">
                  <a href="details.html" class="product__images">
                    <img
                      src="assets/img/product-5-1.jpg"
                      alt=""
                      class="product__img default"
                    />
                    <img
                      src="assets/img/product-5-2.jpg"
                      alt=""
                      class="product__img hover"
                    />
                  </a>
                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a
                      href="#"
                      class="action__btn"
                      aria-label="Add to Wishlist"
                    >
                      <i class="fi fi-rs-heart"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>
                  <div class="product__badge light-blue">-30%</div>
                </div>
                <div class="product__content">
                  <span class="product__category">Phụ kiện khác</span>
                  <a href="details.html">
                    <h3 class="product__title">Tên Sản Phẩm</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">999.999 VNĐ</span>
                    <span class="old__price">1.000.000 VNĐ</span>
                  </div>
                  <a
                    href="#"
                    class="action__btn cart__btn"
                    aria-label="Add To Cart"
                  >
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>
              <div class="product__item">
                <div class="product__banner">
                  <a href="details.html" class="product__images">
                    <img
                      src="assets/img/product-11-1.jpg"
                      alt=""
                      class="product__img default"
                    />
                    <img
                      src="assets/img/product-11-2.jpg"
                      alt=""
                      class="product__img hover"
                    />
                  </a>
                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a
                      href="#"
                      class="action__btn"
                      aria-label="Add to Wishlist"
                    >
                      <i class="fi fi-rs-heart"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>
                  <div class="product__badge light-blue">-22%</div>
                </div>
                <div class="product__content">
                  <span class="product__category">Phụ kiện khác</span>
                  <a href="details.html">
                    <h3 class="product__title">Tên Sản Phẩm</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">999.999 VNĐ</span>
                    <span class="old__price">1.000.000 VNĐ</span>
                  </div>
                  <a
                    href="#"
                    class="action__btn cart__btn"
                    aria-label="Add To Cart"
                  >
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>
              <div class="product__item">
                <div class="product__banner">
                  <a href="details.html" class="product__images">
                    <img
                      src="assets/img/product-7-1.jpg"
                      alt=""
                      class="product__img default"
                    />
                    <img
                      src="assets/img/product-7-2.jpg"
                      alt=""
                      class="product__img hover"
                    />
                  </a>
                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a
                      href="#"
                      class="action__btn"
                      aria-label="Add to Wishlist"
                    >
                      <i class="fi fi-rs-heart"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>
                  <div class="product__badge light-green">-22%</div>
                </div>
                <div class="product__content">
                  <span class="product__category">Phụ kiện khác</span>
                  <a href="details.html">
                    <h3 class="product__title">Tên Sản Phẩm</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">999.999 VNĐ</span>
                    <span class="old__price">1.000.000 VNĐ</span>
                  </div>
                  <a
                    href="#"
                    class="action__btn cart__btn"
                    aria-label="Add To Cart"
                  >
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>
              <div class="product__item">
                <div class="product__banner">
                  <a href="details.html" class="product__images">
                    <img
                      src="assets/img/product-8-1.jpg"
                      alt=""
                      class="product__img default"
                    />
                    <img
                      src="assets/img/product-8-2.jpg"
                      alt=""
                      class="product__img hover"
                    />
                  </a>
                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a
                      href="#"
                      class="action__btn"
                      aria-label="Add to Wishlist"
                    >
                      <i class="fi fi-rs-heart"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>
                </div>
                <div class="product__content">
                  <span class="product__category">Phụ kiện khác</span>
                  <a href="details.html">
                    <h3 class="product__title">Tên Sản Phẩm</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">999.999 VNĐ</span>
                    <span class="old__price">1.000.000 VNĐ</span>
                  </div>
                  <a
                    href="#"
                    class="action__btn cart__btn"
                    aria-label="Add To Cart"
                  >
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
                    <img
                      src="assets/img/product-1-1.jpg"
                      alt=""
                      class="product__img default"
                    />
                    <img
                      src="assets/img/product-1-2.jpg"
                      alt=""
                      class="product__img hover"
                    />
                  </a>
                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a
                      href="#"
                      class="action__btn"
                      aria-label="Add to Wishlist"
                    >
                      <i class="fi fi-rs-heart"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>
                  <div class="product__badge light-pink">Hot</div>
                </div>
                <div class="product__content">
                  <span class="product__category">Phụ kiện khác</span>
                  <a href="details.html">
                    <h3 class="product__title">Tên Sản Phẩm</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">999.999 VNĐ</span>
                    <span class="old__price">1.000.000 VNĐ</span>
                  </div>
                  <a
                    href="#"
                    class="action__btn cart__btn"
                    aria-label="Add To Cart"
                  >
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>
              <div class="product__item">
                <div class="product__banner">
                  <a href="details.html" class="product__images">
                    <img
                      src="assets/img/product-12-1.jpg"
                      alt=""
                      class="product__img default"
                    />
                    <img
                      src="assets/img/product-12-2.jpg"
                      alt=""
                      class="product__img hover"
                    />
                  </a>
                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a
                      href="#"
                      class="action__btn"
                      aria-label="Add to Wishlist"
                    >
                      <i class="fi fi-rs-heart"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>
                  <div class="product__badge light-green">Hot</div>
                </div>
                <div class="product__content">
                  <span class="product__category">Phụ kiện khác</span>
                  <a href="details.html">
                    <h3 class="product__title">Tên Sản Phẩm</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">999.999 VNĐ</span>
                    <span class="old__price">1.000.000 VNĐ</span>
                  </div>
                  <a
                    href="#"
                    class="action__btn cart__btn"
                    aria-label="Add To Cart"
                  >
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>
              <div class="product__item">
                <div class="product__banner">
                  <a href="details.html" class="product__images">
                    <img
                      src="assets/img/product-13-1.jpg"
                      alt=""
                      class="product__img default"
                    />
                    <img
                      src="assets/img/product-13-2.jpg"
                      alt=""
                      class="product__img hover"
                    />
                  </a>
                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a
                      href="#"
                      class="action__btn"
                      aria-label="Add to Wishlist"
                    >
                      <i class="fi fi-rs-heart"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>
                  <div class="product__badge light-orange">Hot</div>
                </div>
                <div class="product__content">
                  <span class="product__category">Phụ kiện khác</span>
                  <a href="details.html">
                    <h3 class="product__title">Tên Sản Phẩm</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">999.999 VNĐ</span>
                    <span class="old__price">1.000.000 VNĐ</span>
                  </div>
                  <a
                    href="#"
                    class="action__btn cart__btn"
                    aria-label="Add To Cart"
                  >
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>
              <div class="product__item">
                <div class="product__banner">
                  <a href="details.html" class="product__images">
                    <img
                      src="assets/img/product-4-1.jpg"
                      alt=""
                      class="product__img default"
                    />
                    <img
                      src="assets/img/product-4-2.jpg"
                      alt=""
                      class="product__img hover"
                    />
                  </a>
                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a
                      href="#"
                      class="action__btn"
                      aria-label="Add to Wishlist"
                    >
                      <i class="fi fi-rs-heart"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>
                  <div class="product__badge light-blue">Hot</div>
                </div>
                <div class="product__content">
                  <span class="product__category">Phụ kiện khác</span>
                  <a href="details.html">
                    <h3 class="product__title">Tên Sản Phẩm</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">999.999 VNĐ</span>
                    <span class="old__price">1.000.000 VNĐ</span>
                  </div>
                  <a
                    href="#"
                    class="action__btn cart__btn"
                    aria-label="Add To Cart"
                  >
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>
              <div class="product__item">
                <div class="product__banner">
                  <a href="details.html" class="product__images">
                    <img
                      src="assets/img/product-10-1.jpg"
                      alt=""
                      class="product__img default"
                    />
                    <img
                      src="assets/img/product-10-2.jpg"
                      alt=""
                      class="product__img hover"
                    />
                  </a>
                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a
                      href="#"
                      class="action__btn"
                      aria-label="Add to Wishlist"
                    >
                      <i class="fi fi-rs-heart"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>
                  <div class="product__badge light-blue">-30%</div>
                </div>
                <div class="product__content">
                  <span class="product__category">Phụ kiện khác</span>
                  <a href="details.html">
                    <h3 class="product__title">Tên Sản Phẩm</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">999.999 VNĐ</span>
                    <span class="old__price">1.000.000 VNĐ</span>
                  </div>
                  <a
                    href="#"
                    class="action__btn cart__btn"
                    aria-label="Add To Cart"
                  >
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>
              <div class="product__item">
                <div class="product__banner">
                  <a href="details.html" class="product__images">
                    <img
                      src="assets/img/product-6-1.jpg"
                      alt=""
                      class="product__img default"
                    />
                    <img
                      src="assets/img/product-6-2.jpg"
                      alt=""
                      class="product__img hover"
                    />
                  </a>
                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a
                      href="#"
                      class="action__btn"
                      aria-label="Add to Wishlist"
                    >
                      <i class="fi fi-rs-heart"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>
                  <div class="product__badge light-blue">-22%</div>
                </div>
                <div class="product__content">
                  <span class="product__category">Phụ kiện khác</span>
                  <a href="details.html">
                    <h3 class="product__title">Tên Sản Phẩm</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">999.999 VNĐ</span>
                    <span class="old__price">1.000.000 VNĐ</span>
                  </div>
                  <a
                    href="#"
                    class="action__btn cart__btn"
                    aria-label="Add To Cart"
                  >
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>
              <div class="product__item">
                <div class="product__banner">
                  <a href="details.html" class="product__images">
                    <img
                      src="assets/img/product-9-1.jpg"
                      alt=""
                      class="product__img default"
                    />
                    <img
                      src="assets/img/product-9-2.jpg"
                      alt=""
                      class="product__img hover"
                    />
                  </a>
                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a
                      href="#"
                      class="action__btn"
                      aria-label="Add to Wishlist"
                    >
                      <i class="fi fi-rs-heart"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>
                  <div class="product__badge light-green">-22%</div>
                </div>
                <div class="product__content">
                  <span class="product__category">Phụ kiện khác</span>
                  <a href="details.html">
                    <h3 class="product__title">Tên Sản Phẩm</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">999.999 VNĐ</span>
                    <span class="old__price">1.000.000 VNĐ</span>
                  </div>
                  <a
                    href="#"
                    class="action__btn cart__btn"
                    aria-label="Add To Cart"
                  >
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>
              <div class="product__item">
                <div class="product__banner">
                  <a href="details.html" class="product__images">
                    <img
                      src="assets/img/product-8-1.jpg"
                      alt=""
                      class="product__img default"
                    />
                    <img
                      src="assets/img/product-8-2.jpg"
                      alt=""
                      class="product__img hover"
                    />
                  </a>
                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>
                    <a
                      href="#"
                      class="action__btn"
                      aria-label="Add to Wishlist"
                    >
                      <i class="fi fi-rs-heart"></i>
                    </a>
                    <a href="#" class="action__btn" aria-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>
                </div>
                <div class="product__content">
                  <span class="product__category">Phụ kiện khác</span>
                  <a href="details.html">
                    <h3 class="product__title">Tên Sản Phẩm</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">999.999 VNĐ</span>
                    <span class="old__price">1.000.000 VNĐ</span>
                  </div>
                  <a
                    href="#"
                    class="action__btn cart__btn"
                    aria-label="Add To Cart"
                  >
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--=============== DEALS ===============-->
      <section class="deals section">
        <div class="deals__container container grid">
          <div class="deals__item">
            <div class="deals__group">
              <h3 class="deals__brand">Deal sốc tri ân</h3>
              <span class="deals__category">Đồng giá giới hạn</span>
            </div>
            <h4 class="deals__title">Dầu nhớt Honda cao cấp</h4>
            <div class="deals__price flex">
              <span class="new__price">99.000 VNĐ</span>
              <span class="old__price">200.000 VNĐ</span>
            </div>
            <div class="deals__group">
              <p class="deals__countdown-text">Mua ngay kẻo lỡ!</p>
              <div class="countdown">
                <div class="countdown__amount">
                  <p class="countdown__period">02</p>
                  <span class="unit">Ngày</span>
                </div>
                <div class="countdown__amount">
                  <p class="countdown__period">22</p>
                  <span class="unit">Giờ</span>
                </div>
                <div class="countdown__amount">
                  <p class="countdown__period">57</p>
                  <span class="unit">Phút</span>
                </div>
                <div class="countdown__amount">
                  <p class="countdown__period">28</p>
                  <span class="unit">Giây</span>
                </div>
              </div>
            </div>
            <div class="deals__btn">
              <a href="details.html" class="btn btn--md">Mua ngay</a>
            </div>
          </div>
          <div class="deals__item">
            <div class="deals__group">
              <h3 class="deals__brand">Deal sốc tri ân</h3>
              <span class="deals__category">Đồng giá giới hạn</span>
            </div>
            <h4 class="deals__title">Nón bảo hiểm Royal</h4>
            <div class="deals__price flex">
              <span class="new__price">499.000 VNĐ</span>
              <span class="old__price">999.999 VNĐ</span>
            </div>
            <div class="deals__group">
              <p class="deals__countdown-text">Mua ngay kẻo lỡ!</p>
              <div class="countdown">
                <div class="countdown__amount">
                  <p class="countdown__period">02</p>
                  <span class="unit">Ngày</span>
                </div>
                <div class="countdown__amount">
                  <p class="countdown__period">22</p>
                  <span class="unit">Giờ</span>
                </div>
                <div class="countdown__amount">
                  <p class="countdown__period">57</p>
                  <span class="unit">Phút</span>
                </div>
                <div class="countdown__amount">
                  <p class="countdown__period">28</p>
                  <span class="unit">Giây</span>
                </div>
              </div>
            </div>
            <div class="deals__btn">
              <a href="details.html" class="btn btn--md">Mua ngay</a>
            </div>
          </div>
        </div>
      </section>
    </main>

    <!--=============== FOOTER ===============-->
    <footer class="footer container">
      <div class="footer__container grid">
        <div class="footer__content">
          <a href="index.html" class="footer__logo">
            <img src="./assets/img/logo.png" alt="" class="footer__logo-img" />
          </a>
          <h4 class="footer__subtitle">Thông tin liên hệ</h4>
          <p class="footer__description">
            <span>Địa chỉ:</span> Công ty CP-TM-DV Xe Gắn Máy, 100 phường Đông Hòa, TP. Dĩ An, tỉnh Bình Dương, Việt Nam.
          </p>
          <p class="footer__description">
            <span>Hotline:</span> +84 001 929 992
          </p>
          <p class="footer__description">
            <span>Email:</span> contact@motorcycle.vn
          </p>
          <div class="footer__social">
            <h4 class="footer__subtitle">MotorCycle đã có mặt trên:</h4>
            <div class="footer__links flex">
              <a href="#">
                <img
                  src="./assets/img/icon-facebook.svg"
                  alt=""
                  class="footer__social-icon"
                />
              </a>
              <a href="#">
                <img
                  src="./assets/img/icon-twitter.svg"
                  alt=""
                  class="footer__social-icon"
                />
              </a>
              <a href="#">
                <img
                  src="./assets/img/icon-instagram.svg"
                  alt=""
                  class="footer__social-icon"
                />
              </a>
              <a href="#">
                <img
                  src="./assets/img/icon-pinterest.svg"
                  alt=""
                  class="footer__social-icon"
                />
              </a>
              <a href="#">
                <img
                  src="./assets/img/icon-youtube.svg"
                  alt=""
                  class="footer__social-icon"
                />
              </a>
            </div>
          </div>
        </div>
        <div class="footer__content">
          <h3 class="footer__title">Thông tin chi tiết</h3>
          <ul class="footer__links">
            <li><a href="about.html" class="footer__link">Về chúng tôi</a></li>
            <li><a href="shipping_policy.html" class="footer__link">Chính sách giao hàng</a></li>
            <li><a href="paying-policy.html" class="footer__link">Chính sách thanh toán</a></li>
            <li><a href="policy.html" class="footer__link">Điều khoản bảo mật</a></li>
            <li><a href="service_policy.html" class="footer__link">Điều khoản dịch vụ</a></li>
          </ul>
        </div>
        <div class="footer__content">
          <h3 class="footer__title">Tải khoản của tôi</h3>
          <ul class="footer__links">
            <li><a href="#" class="footer__link">Đăng nhập</a></li>
            <li><a href="#" class="footer__link">Xem giỏ hàng</a></li>
            <li><a href="#" class="footer__link">Danh sách sản phẩm yêu thích</a></li>
            <li><a href="#" class="footer__link">Tra cứu đơn hàng</a></li>
          </ul>
        </div>
        <div class="footer__content">
          <h3 class="footer__title">Đối tác thanh toán</h3>
          <img
            src="./assets/img/payment-method.png"
            alt=""
            class="payment__img"
          />
        </div>
      </div>
      <div class="footer__bottom">
        <p class="copyright">&copy; 2024. All right reserved</p>
        <span class="designer">Website created by Group 4</span>
      </div>
    </footer>

    <!--=============== SWIPER JS ===============-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>
  </body>
</html>
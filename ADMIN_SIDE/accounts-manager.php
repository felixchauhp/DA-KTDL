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
    <link rel="stylesheet" href="./assets/css/styles.css" />

    <title>MotorCycle Store</title>
  </head>
  <body>
    <!--=============== HEADER ===============-->
    <header>
      <nav class="nav container">
          <a href="index-manage.html" class="nav__logo">
              <img class="nav__logo-img" src="assets/img/logo.png" alt="website logo" />
          </a>
          <div class="nav__menu" id="nav-menu">
              <div class="nav__menu-top">
                  <a href="index-manage.html" class="nav__menu-logo">
                      <img src="./assets/img/logo.png" alt="">
                  </a>
                  <div class="nav__close" id="nav-close">
                      <i class="fi fi-rs-cross-small"></i>
                  </div>
              </div>
              <ul class="nav__list">
                  <li class="nav__item">
                      <a href="productManage.html" class="nav__link">Sản phẩm</a>
                  </li>
                  <li class="nav__item">
                      <a href="quanlydonhang.html" class="nav__link">Đơn hàng</a>
                  </li>
                  <li class="nav__item">
                      <a href="discount.html" class="nav__link active-link">Khuyến mãi</a>
                  </li>
              </ul>
              <div class="header__user-actions">
                  <a href="#" class="header__action-btn" title="Notification">
                      <img src="assets/img/bell.svg" alt="" />
                      <span class="count">3</span>
                  </a>
                  <a href="accounts-manager.html" class="header__action-btn" id="user-icon" title="User">
                      <img src="assets/img/icon-user.svg" alt="" />
                  </a>
              </div>
          </div>
      </nav>
  </header>

    <!--=============== MAIN ===============-->
    <main class="main">
      <!--=============== BREADCRUMB ===============-->

      <!--=============== ACCOUNTS ===============-->
      <section class="accounts section--lg">
        <div class="accounts__container container grid">
          <div class="account__tabs">
            <p class="account__tab active-tab" data-target="#dashboard">
              <i class="fi fi-rs-settings-sliders"></i> Bảng điều khiển
            </p>
            <p class="account__tab" data-target="#address">
              <i class="fi fi-rs-marker"></i> Thông tin cá nhân
            </p>
            <p class="account__tab" data-target="#change-password">
              <i class="fi fi-rs-settings-sliders"></i> Thay đổi mật khẩu
            </p>
            <p class="account__tab"><i class="fi fi-rs-exit"></i> Đăng xuất</p>
          </div>
          <div class="tabs__content">
            <div class="tab__content active-tab" content id="dashboard">
              <h3 class="tab__header">Xin chào Nguyễn Văn A</h3>
              <div class="tab__body">
                <p class="tab__description">
                  Bạn được phân quyền là: Nhân viên
                </p>
              </div>
            </div>
            <div class="tab__content" content id="update-profile">
              <h3 class="tab__header">Update Profile</h3>
              <div class="tab__body">
                <form class="form grid">
                  <input
                    type="text"
                    placeholder="Username"
                    class="form__input"
                  />
                  <div class="form__btn">
                    <button class="btn btn--md">Save</button>
                  </div>
                </form>
              </div>
            </div>
            <div class="tab__content" content id="address">
              <h3 class="tab__header">Thông tin cá nhân</h3>
              <div class="tab__body">
                <address class="address">
                  Họ và tên: Nguyễn Văn A <br />
                  MSNV: 2218299 <br />
                  SĐT: 0919191919 <br />
                  Địa chỉ: 09 Đồng Hới, Quảng Bình.
                </address>
              </div>
            </div>
            <div class="tab__content" content id="change-password">
              <h3 class="tab__header">Change Password</h3>
              <div class="tab__body">
                <form class="form grid">
                  <input
                    type="password"
                    placeholder="Current Password"
                    class="form__input"
                  />
                  <input
                    type="password"
                    placeholder="New Password"
                    class="form__input"
                  />
                  <input
                    type="password"
                    placeholder="Confirm Password"
                    class="form__input"
                  />
                  <div class="form__btn">
                    <button class="btn btn--md">Save</button>
                  </div>
                </form>
              </div>
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
            <div class="footer__social">
                <h4 class="footer__subtitle">MotorCycle đã có mặt trên:</h4>
                <div class="footer__links flex">
                    <a href="#"><img src="./assets/img/icon-facebook.svg" alt="" class="footer__social-icon" /></a>
                    <a href="#"><img src="./assets/img/icon-twitter.svg" alt="" class="footer__social-icon" /></a>
                    <a href="#"><img src="./assets/img/icon-instagram.svg" alt="" class="footer__social-icon" /></a>
                    <a href="#"><img src="./assets/img/icon-pinterest.svg" alt="" class="footer__social-icon" /></a>
                    <a href="#"><img src="./assets/img/icon-youtube.svg" alt="" class="footer__social-icon" /></a>
                </div>
              </div>
      </div> 
      <div class="footer__content">
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
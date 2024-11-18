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
    <link rel="stylesheet" href="./assets/css/styles2.css" />

    <title>Ecommerce Website</title>
  </head>
  <body>


<!--=============== HEADER ===============-->
<header>
  <nav class="nav container">
    <a href="index-manage.php" class="nav__logo">
      <img class="nav__logo-img" src="assets/img/logo.png" alt="website logo" />
    </a>
    <div class="nav__menu" id="nav-menu">
      <div class="nav__menu-top">
        <a href="index-manage.php" class="nav__menu-logo">
          <img src="./assets/img/logo.png" alt="">
        </a>
        <div class="nav__close" id="nav-close">
          <i class="fi fi-rs-cross-small"></i>
        </div>
      </div>
      <ul class="nav__list">
        <li class="nav__item">
          <a href="productManage.php" class="nav__link">Sản phẩm</a>
        </li>
        <li class="nav__item">
          <a href="quanlydonhang.php" class="nav__link">Đơn hàng</a>
        </li>
        <li class="nav__item">
          <a href="discount.php" class="nav__link active-link">Khuyến mãi</a>
        </li>
      </ul>
      <div class="header__user-actions">
        <a href="#" class="header__action-btn" title="Notification">
          <img src="assets/img/bell.svg" alt="" />
          <span class="count">3</span>
        </a>
        <a href="accounts-manager.php" class="header__action-btn" id="user-icon" title="User">
          <img src="assets/img/icon-user.svg" alt="" />
        </a>
      </div>
    </div>
  </nav>
</header>

    <!--=============== MAIN ===============-->
    <main class="main">
      <!--=============== Promotion Management ===============-->
      <section class="products container section--lg">
          <div class="search-container">
            <a href="add-Discount.php" class="btn flex btn__md">
        <i class="fi fi-rs-plus"></i> Thêm 1 mã khuyến mãi mới
    </a>
    <div class="right-actions">
            <input type="text" id="search-input" placeholder="Tìm kiếm...">
            <select id="filter-input">
              <option value="" disabled selected>Lọc...</option>
            </select>
            <button id="apply-button" class="btn flex btn__md">Áp dụng</button>
            <button id="reset-button" class="btn flex btn__md">Nhập lại</button>
        </div>
    </div>
        <table class="discount-table">
          <thead>
            <tr>
              <th>Tên mã</th>
              <th>Mã khuyến mãi</th>
              <th>Số lượng</th>
              <th>Giảm theo phần trăm</th>
              <th>Giảm theo vnđ</th>
              <th>Giá trị đơn hàng tối thiểu</th>
              <th>Số tiền giảm tối đa</th>
              <th>Khoảng thời gian áp dụng</th>
              <th>Thao tác</th>
            </tr>
          </thead>
          <tbody id="promo-table-body">
            <!-- Nội dung sẽ được thêm bằng JavaScript -->
          </tbody>
        </table>

        <ul class="pagination" id="pagination">
          <!-- Nội dung sẽ được thêm bằng JavaScript -->
        </ul>
      </section>
    </main>

  <!--=============== FOOTER ===============-->
  <footer class="footer container">
    <div class="footer__container grid">
      <div class="footer__content">
            <a href="index.php" class="footer__logo">
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
<script src="assets/js/manage.js"></script>
  </body>
</html>
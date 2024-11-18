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

  <style>
    /* Đặt toàn bộ trang với Flexbox để căn giữa nội dung */
    body {
      font-family: Arial, sans-serif;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      margin: 0;
      background-color: #f9f9f9;
    }

    /* Đảm bảo nội dung nằm giữa header và footer */
    .content {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    /* Container bảng */
    .dashboard {
      width: 100%;
      max-width: 900px;
      padding: 20px;
      background: white;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      box-sizing: border-box;
    }

    /* Tiêu đề */
    .dashboard h2 {
      font-size: 1.2em;
      color: #054c2a;
      margin-bottom: 10px;
    }

    /* Layout dạng grid */
    .grid-container {
      display: grid;
      gap: 15px;
      grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    }

    /* Ô thông tin */
    .info-box {
      padding: 15px;
      text-align: center;
      background: #f3f3f3;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    /* Style cho số liệu */
    .info-box h3 {
      font-size: 1.5em;
      color: #054c2a;
      margin: 5px 0;
    }

    .info-box p {
      font-size: 0.9em;
      color: #666;
      margin: 0;
    }
  </style>

  <title>MotorCycle Manager</title>
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
  <div class="content">
    <div class="dashboard">
      <!-- Danh sách cần làm -->
      <h2>Danh sách cần làm</h2>
      <div class="grid-container">
        <div class="info-box">
          <h3>0</h3>
          <p>Chờ Xác Nhận</p>
        </div>
        <div class="info-box">
          <h3>0</h3>
          <p>Chờ Lấy Hàng</p>
        </div>
        <div class="info-box">
          <h3>0</h3>
          <p>Đã Xử Lý</p>
        </div>
        <div class="info-box">
          <h3>0</h3>
          <p>Đơn Hủy</p>
        </div>
        <div class="info-box">
          <h3>0</h3>
          <p>Trả Hàng / Hoàn Tiền</p>
        </div>
        <div class="info-box">
          <h3>0</h3>
          <p>Sản Phẩm Bị Tạm Khóa</p>
        </div>
        <div class="info-box">
          <h3>0</h3>
          <p>Sản Phẩm Hết Hàng</p>
        </div>
        <div class="info-box">
          <h3>0</h3>
          <p>Chương Trình Khuyến Mãi</p>
        </div>
      </div>

      <!-- Phân Tích Bán Hàng -->
      <br>
      <h2>Phân Tích Bán Hàng</h2>
      <div class="grid-container">
        <div class="info-box">
          <h3>0</h3>
          <p>Doanh số</p>
        </div>
        <div class="info-box">
          <h3>0</h3>
          <p>Lượt truy cập</p>
        </div>
        <div class="info-box">
          <h3>0</h3>
          <p>Lượt xem</p>
        </div>
        <div class="info-box">
          <h3>0</h3>
          <p>Đơn hàng</p>
        </div>
        <div class="info-box">
          <h3>0,00%</h3>
          <p>Tỷ lệ chuyển đổi</p>
        </div>
      </div>
    </div>
  </div>

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
</body>
</html>
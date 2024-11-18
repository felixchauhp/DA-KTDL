<?php
// Kết nối cơ sở dữ liệu
include 'db_connection.php';

// Khởi tạo các biến rỗng cho dữ liệu và lỗi
$promo_name = $promo_code = $start_date = $end_date = "";
$percent_discount = $min_order = $max_discount = $quantity = "";
$errors = [];

// Xử lý dữ liệu khi biểu mẫu được gửi
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Kiểm tra tên mã khuyến mãi
    $promo_name = trim($_POST["promo-name"]);
    if (empty($promo_name)) {
        $errors['promo_name'] = "Vui lòng nhập tên mã khuyến mãi.";
    }

    // Kiểm tra mã khuyến mãi
    $promo_code = trim($_POST["promo-code"]);
    if (empty($promo_code)) {
        $errors['promo_code'] = "Vui lòng nhập mã khuyến mãi.";
    }

    // Kiểm tra ngày bắt đầu
    $start_date = $_POST["promotion-start-date"];
    if (empty($start_date)) {
        $errors['start_date'] = "Vui lòng chọn ngày bắt đầu.";
    }

    // Kiểm tra ngày kết thúc
    $end_date = $_POST["promotion-end-date"];
    if (empty($end_date)) {
        $errors['end_date'] = "Vui lòng chọn ngày kết thúc.";
    } elseif (strtotime($end_date) < strtotime($start_date)) {
        $errors['end_date'] = "Ngày kết thúc phải sau ngày bắt đầu.";
    }

    // Kiểm tra giảm giá theo phần trăm
    $percent_discount = $_POST["percent-discount"];
    if (empty($percent_discount) || !is_numeric($percent_discount) || $percent_discount <= 0 || $percent_discount > 100) {
        $errors['percent_discount'] = "Giá trị giảm phải là số hợp lệ từ 1 đến 100.";
    }

    // Kiểm tra giá trị đơn hàng tối thiểu
    $min_order = $_POST["discount"];
    if (empty($min_order) || !is_numeric($min_order) || $min_order <= 0) {
        $errors['min_order'] = "Giá trị đơn hàng tối thiểu phải là số hợp lệ lớn hơn 0.";
    }

    // Kiểm tra số tiền giảm tối đa
    $max_discount = $_POST["discount"];
    if (empty($max_discount) || !is_numeric($max_discount) || $max_discount <= 0) {
        $errors['max_discount'] = "Số tiền giảm tối đa phải là số hợp lệ lớn hơn 0.";
    }

    // Kiểm tra số lượng
    $quantity = $_POST["quantity"];
    if (empty($quantity) || !is_numeric($quantity) || $quantity <= 0) {
        $errors['quantity'] = "Số lượng phải là số hợp lệ lớn hơn 0.";
    }

    // Nếu không có lỗi, thêm vào cơ sở dữ liệu
    if (empty($errors)) {
      $query = "INSERT INTO promotion (PromoName, PromoCode, StartDate, EndDate, PromoRate, MinValue, MaxAmount, Quantity)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
      if ($stmt = mysqli_prepare($conn, $query)) {
          // Liên kết các giá trị với câu lệnh SQL
          mysqli_stmt_bind_param($stmt, "ssssidii", $promo_name, $promo_code, $start_date, $end_date, $percent_discount, $min_order, $max_discount, $quantity);
          if (mysqli_stmt_execute($stmt)) {
              // Thay thế alert bằng việc hiển thị popup
              echo '<script>
                      document.getElementById("successPopup").style.display = "block";
                      document.getElementById("closePopupBtn").addEventListener("click", function() {
                          document.getElementById("successPopup").style.display = "none";
                          window.location.href = "discount.php"; // Chuyển hướng đến trang danh sách mã khuyến mãi
                      });
                    </script>';
          } else {
              echo '<p class="text-danger">Đã xảy ra lỗi khi thêm mã khuyến mãi: ' . mysqli_error($conn) . '</p>';
          }
          mysqli_stmt_close($stmt);
      }
  }  
}
?>


    <!--========================================================================-->
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
    <style>
      #successPopup {
    display: none; 
    position: fixed;
    top: 0; 
    left: 0; 
    right: 0; 
    bottom: 0; 
    background: rgba(0, 0, 0, 0.5); 
    z-index: 9999;
}

#successPopup div {
    position: absolute; 
    top: 50%; 
    left: 50%; 
    transform: translate(-50%, -50%); 
    background: white; 
    padding: 20px; 
    border-radius: 10px; 
    text-align: center; 
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}

#successPopup button {
    padding: 10px 20px; 
    margin: 5px;
}

    </style>

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="./assets/css/styles.css" />
    <link rel="stylesheet" href="./assets/css/styles2.css" />
    <title>Ecommerce Website</title>
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

      <!--=============== Promotion Management ===============-->
      <section class="promotions container section--lg">
        <!-- Button to add a new promotion -->
        <div id="promotionForm">
          <h2 style="text-align: center;">Thêm mã khuyến mãi</h2>
          <br>
    <form id="add-promotion" method="POST" action="add-Discount.php">
    <label for="promo-name">Tên mã:</label>
    <input type="text" id="promo-name" name="promo-name" required />
    <p class="error"><?php echo $errors['promo_name'] ?? ''; ?></p>

    <label for="promo-code">Mã khuyến mãi:</label>
    <input type="text" id="promo-code" name="promo-code" required />
    <p class="error"><?php echo $errors['promo_code'] ?? ''; ?></p>

    <div id="promotion-dates">
        <div>
            <label for="promotion-start-date">Ngày bắt đầu:</label>
            <input type="date" id="promotion-start-date" name="promotion-start-date" required />
            <p class="error"><?php echo $errors['start_date'] ?? ''; ?></p>
        </div>
        <div>
            <label for="promotion-end-date">Ngày kết thúc:</label>
            <input type="date" id="promotion-end-date" name="promotion-end-date" required />
            <p class="error"><?php echo $errors['end_date'] ?? ''; ?></p>
        </div>
    </div>
    <div class="percent-input">
        <label for="percent-discount">Giá trị giảm (%):</label>
        <input type="number" id="percent-discount" name="percent-discount" />
        <p class="error"><?php echo $errors['percent_discount'] ?? ''; ?></p>
    </div>

    <label for="discount">Giá trị đơn hàng tối thiểu:</label>
    <input type="number" id="discount" name="discount" required />
    <p class="error"><?php echo $errors['min_order'] ?? ''; ?></p>

    <label for="discount">Số tiền giảm tối đa:</label>
    <input type="number" id="max-discount" name="max-discount" required />
    <p class="error"><?php echo $errors['max_discount'] ?? ''; ?></p>

    <label for="quantity">Số lượng:</label>
    <input type="number" id="quantity" name="quantity" required />
    <p class="error"><?php echo $errors['quantity'] ?? ''; ?></p>
    <br>
    <button>
        <input type="submit" value="Thêm">
    </button>
  </form>
  

        </div>
<!-- Popup thông báo thành công -->
<div id="successPopup" style="display:none; position: fixed; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0, 0, 0, 0.5); z-index: 9999;">
    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 20px; border-radius: 10px; text-align: center; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
        <p>Mã khuyến mãi đã được thêm thành công!</p>
        <button id="closePopupBtn" style="padding: 10px 20px; margin: 5px;">Đóng</button>
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

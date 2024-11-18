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
    <div class="product__content"> 
          <h1>Giới thiệu về Motor Cycle</h1>
          <br>
          <h2 class="product__title" >Đối tác tin cậy trong từng chuyến đi</h2>
          <p class="short__description">
              <strong>Công ty Cổ phần Thương mại Dịch vụ Phụ Tùng Xe Máy Motor Cycle</strong> được thành lập vào năm 2024 tại TP. Hồ Chí Minh, đánh dấu một cột mốc quan trọng cho ngành công nghiệp phụ tùng xe máy tại Việt Nam. Ra đời với sứ mệnh trở thành thương hiệu dẫn đầu trong lĩnh vực cung cấp và phân phối phụ tùng xe máy, Motor Cycle cam kết mang đến cho khách hàng những sản phẩm chất lượng cao và dịch vụ tận tâm, đáng tin cậy.
          </p>
      
          
      
          <h2 class="product__title">Khởi nguồn từ đam mê và cam kết với chất lượng</h2>
          <p class="short__description">
              Motor Cycle không chỉ đơn thuần là một doanh nghiệp, mà còn là kết quả của đam mê bất tận với ngành công nghiệp xe máy của đội ngũ sáng lập. Nhận thấy thị trường phụ tùng xe máy tại Việt Nam còn thiếu vắng một thương hiệu có thể đáp ứng đủ tiêu chí về <strong>chất lượng</strong>, <strong>giá thành hợp lý</strong>, và <strong>sự an toàn tuyệt đối</strong> cho người sử dụng, Motor Cycle ra đời với khát vọng thay đổi điều đó.
          </p>
      
          
      
          <h2 class="product__title">Đối tác và khách hàng là trọng tâm phát triển</h2>
          <p>
              Chúng tôi luôn tin rằng sự phát triển bền vững của Motor Cycle gắn liền với mối quan hệ đối tác bền vững và sự hài lòng của khách hàng. Motor Cycle đã xây dựng được mạng lưới đối tác đa dạng với các nhà sản xuất phụ tùng xe máy uy tín hàng đầu từ Nhật Bản, Thái Lan, và nhiều quốc gia khác. Từ đó, chúng tôi cam kết cung cấp các sản phẩm đa dạng và chất lượng, phù hợp với nhiều dòng xe máy phổ biến tại thị trường Việt Nam.
          </p>
      
        
      
          <h2 class="product__title">Chất lượng dịch vụ tận tâm</h2>
          <p class="short__description">
              Bên cạnh chất lượng sản phẩm, Motor Cycle tự hào với dịch vụ chăm sóc khách hàng tận tâm và chuyên nghiệp. Motor Cycle không ngừng đầu tư vào dịch vụ hỗ trợ và tư vấn chuyên sâu, giúp khách hàng dễ dàng tìm được phụ tùng phù hợp và giải pháp tối ưu cho mọi vấn đề kỹ thuật.
          </p>
      
          
      
          <h2 class="product__title">Hướng tới tương lai – Phát triển bền vững</h2>
          <p class="short__description">
              Với tầm nhìn dài hạn, Motor Cycle cam kết phát triển bền vững, luôn tìm kiếm các giải pháp xanh và thân thiện với môi trường. Chúng tôi tin rằng trách nhiệm của doanh nghiệp không chỉ là phát triển mà còn góp phần bảo vệ môi trường, đặc biệt trong ngành công nghiệp xe máy.
          </p>
      
          <h2 class="product__title">Motor Cycle – Người bạn đồng hành tin cậy trên mọi cung đường</h2>
          <p class="short__description">
              Với tất cả tâm huyết và sứ mệnh mang lại những giải pháp phụ tùng xe máy chất lượng, Motor Cycle mong muốn trở thành người bạn đồng hành đáng tin cậy cho tất cả khách hàng. Chúng tôi không chỉ là nhà cung cấp phụ tùng mà còn là đối tác đồng hành, sẵn sàng cùng bạn khám phá mọi hành trình.
          </p>
      
    </div>

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
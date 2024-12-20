<?php
session_start();
include 'db_connection.php';
?>
<!DOCTYPE html>
<html lang="en">
  <!--=============== DOCUMENT HEAD ===============-->
  <?php include 'head.php'; ?>

<body>
<div id="snow-container"></div>
<script src="snow.js"></script>
<script>window.$zoho=window.$zoho || {};$zoho.salesiq=$zoho.salesiq||{ready:function(){}}</script><script id="zsiqscript" src="https://salesiq.zohopublic.com/widget?wc=siq2a126d8e3efac1df3644686aad71544687ff5251fc8a8c1812c388df1999baf7" defer></script>
   <!--=============== HEADER ===============-->
    <?php include 'header.php'; ?>
    <!--=============== MAIN ===============-->
    <main class="main">
      <!--=============== BREADCRUMB ===============-->
      <section class="breadcrumb">
        <ul class="breadcrumb__list flex container">
          <li><a href="index.php" class="breadcrumb__link">Trang chủ</a></li>
          <li><span class="breadcrumb__link">></span></li>
          <li><span class="breadcrumb__link">Sản phẩm</span></li>
        </ul>
      </section>

      <!--=============== CATEGORIES ===============-->
      <?php include 'category.php' ?>

       <!--=============== PRODUCTS ===============-->


      <section class="products container section--lg">
      <div class="search-container">
            <form method="GET" action="shop.php" class="right-actions">
                <input type="text" id="search-input" name="search" placeholder="Tên sản phẩm" value="<?= htmlspecialchars($search) ?>" />
                <select id="filter-input" name="filter" style="font-family: inherit; font-size: inherit;">
                    <option value="" <?= !isset($_GET['filter']) ? 'selected' : '' ?>>Tất cả danh mục</option>
                    <option value="Ắc quy" <?= isset($_GET['filter']) && $_GET['filter'] === 'Ắc quy' ? 'selected' : '' ?>>Ắc quy</option>
                    <option value="Bạc đạn" <?= isset($_GET['filter']) && $_GET['filter'] === 'Bạc đạn' ? 'selected' : '' ?>>Bạc đạn</option>   
                    <option value="Bố đĩa và bố thắng" <?= isset($_GET['filter']) && $_GET['filter'] === 'Bố đĩa và bố thắng' ? 'selected' : '' ?>>Bố đĩa và bố thắng</option>
                    <option value="Nhông sên dĩa" <?= isset($_GET['filter']) && $_GET['filter'] === 'Nhông sên dĩa' ? 'selected' : '' ?>>Nhông sên dĩa</option>
                    <option value="Nhớt" <?= isset($_GET['filter']) && $_GET['filter'] === 'Nhớt' ? 'selected' : '' ?>>Nhớt</option>
                    <option value="Vỏ xe và ruột xe" <?= isset($_GET['filter']) && $_GET['filter'] === 'Vỏ xe và ruột xe' ? 'selected' : '' ?>>Vỏ xe và ruột xe</option>
                    <option value="Các phụ kiện khác" <?= isset($_GET['filter']) && $_GET['filter'] === 'Các phụ kiện khác' ? 'selected' : '' ?>>Các phụ kiện khác</option>
                </select>
                <button type="submit" class="btn flex btn__md" style="cursor: pointer; ">Tìm kiếm</button>
            </form>
        </div>
      </section>
  <section class="products container section--lg">
      <div class="products__container grid">
        <?php if (empty($products)): ?>
        <div style="text-align: center; padding: 20px; font-weight: bold; color: #888;">
        Không tồn tại sản phẩm bạn đang tìm "<?= htmlspecialchars($search) ?>"
        </div>
        <?php else: ?>
        <?php foreach ($products as $productlist):?>
            <div class="product__item">
              <div class="product__banner">
                <a href="details.php?id=<?= htmlspecialchars($productlist['ProductID']) ?>" class="product__images" style ="width: 100%; height: 300px; object-fit: cover;">
                  <img
                    src="<?=  htmlspecialchars($productlist['Image']) ?>"
                    alt="Product Image"
                    class="product__img default"
                    style ="max-width: 100%;
                    object-fit: cover;
                    width: 100%;  "
                    />
                  <img
                    src="<?=  htmlspecialchars($productlist['Image']) ?>"
                    alt="Product Image"
                    class="product__img hover"
                  />
                </a> 
              </div>
              <div class="product__content" style="max-width: 304px;">
              <span class="product__category"><?= htmlspecialchars($productlist['Category']) ?></span>
              <a href="details.php?id=<?= htmlspecialchars($productlist['ProductID']) ?>">
                <h3 class="product__title" style="display: block; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; "><?= htmlspecialchars($productlist['ProductName']) ?></h3>
              </a>
              <div class="product__price flex">
                <span class="new__price"><?= number_format($productlist['SalePrice'], 0, ',', '.') ?> VNĐ</span>
              </div>
              <a
                href="cart.php?action=add&ProductID=<?= htmlspecialchars($productlist['ProductID']) ?>"
                class="action__btn cart__btn"
                aria-label="Add To Cart"
              >
                <i class="fi fi-rs-shopping-bag-add"></i>
              </a>
              </div>
            </div>  
        <?php endforeach; ?>
      <?php endif; ?>
    </div>

    <ul class="pagination">
    <?php
    // Cơ sở URL cho phân trang
    $queryParams = $_GET;
    unset($queryParams['page']);

    $baseUrl = 'shop.php?' . http_build_query($queryParams);
    ?>
    <!-- Nút trang trước -->
    <?php  if ($currentPage > 1): ?>
        <li><a href="<?= $baseUrl ?>&page=<?= $currentPage - 1 ?>" class="pagination__link">«</a></li>
    <?php else: ?>
        <li><a href="#" class="pagination__link disabled">«</a></li>
    <?php endif; ?>

    <?php
    // Hiển thị các trang xung quanh trang hiện tại
    for ($i = 1; $i <= $totalPages; $i++) {
        if ($i == $currentPage) {
            echo "<li><a href='#' class='pagination__link active'>$i</a></li>";
        } elseif ($i <= 2 || $i > $totalPages - 2 || abs($i - $currentPage) <= 2) {
            echo "<li><a href='{$baseUrl}&page=$i' class='pagination__link'>$i</a></li>";
        } elseif ($i == 3 || $i == $totalPages - 2) {
            echo "<li class='pagination__dots'>...</li>";
        }
    }
    ?>

    <!-- Nút "trang sau" -->
    <?php if ($currentPage < $totalPages): ?>
        <li><a href="<?= $baseUrl ?>&page=<?= $currentPage + 1 ?>" class="pagination__link">»</a></li>
    <?php else: ?>
        <li><a href="#" class="pagination__link disabled">»</a></li>
    <?php endif; ?>
        </ul>
  </section>
    </main>

    <!--=============== FOOTER ===============-->
    <?php include 'footer.php'; ?>

    <!--=============== SWIPER JS ===============-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>
  </body>
</html>
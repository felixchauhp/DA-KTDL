<?php
session_start();
include 'db_connection.php';
date_default_timezone_set('Asia/Ho_Chi_Minh'); // Đặt múi giờ Việt Nam (GMT+7)
$current_date = date('Y-m-d');

// Xác nhận id người đăng nhập
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

// Khởi tạo giỏ hàng nếu chưa tồn tại
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}
// Kiểm tra xem người dùng có nhấn "Cập nhật giỏ hàng" không
if (isset($_POST['update_cart'])) {
    // Lấy giỏ hàng hiện tại từ session
    $cart = $_SESSION['cart'] ?? [];

    // Lấy dữ liệu số lượng từ form
    $quantities = $_POST['quantity'];

    foreach ($quantities as $id => $quantity) {
        if (isset($cart[$id])) {
            // Cập nhật số lượng (đảm bảo không thấp hơn 1)
            $cart[$id]['quantity'] = max(1, intval($quantity));
        }
    }

    // Lưu giỏ hàng đã cập nhật vào session
    $_SESSION['cart'] = $cart;

    // Chuyển hướng về trang giỏ hàng
    header("Location: cart.php");
    exit();
}
// Xử lý thêm sản phẩm vào giỏ
if (isset($_GET['action']) && $_GET['action'] === 'add' && isset($_GET['ProductID'])) {
    $productID = $_GET['ProductID'];
    // Truy vấn thông tin sản phẩm từ database
    $stmt = $conn->prepare("SELECT * FROM products WHERE ProductID = ?");
    $stmt->bind_param("s", $productID);
    $stmt->execute();
    $result = $stmt->get_result();
    $product = $result->fetch_assoc();
    if ($product) {
        // Nếu sản phẩm đã tồn tại trong giỏ hàng, tăng số lượng
        if (array_key_exists($productID, $_SESSION['cart'])) {
            $_SESSION['cart'][$productID]['quantity'] += 1;
        } else {
            // Thêm sản phẩm mới vào giỏ hàng
            $_SESSION['cart'][$productID] = [
                'name' => $product['ProductName'],
                'price' => $product['SalePrice'],
                'image' => $product['Image'],
                'quantity' => 1
            ];
        }
    } else {
        echo "Sản phẩm không tồn tại trong cơ sở dữ liệu.";
    }

    // Chuyển hướng lại trang cart.php
    header('Location: cart.php');
    exit();
}

// Xử lý xóa sản phẩm khỏi giỏ
if (isset($_GET['action']) && $_GET['action'] === 'remove' && isset($_GET['ProductID'])) {
    $productID =$_GET['ProductID'];
    if (isset($_SESSION['cart'][$productID])) {
        unset($_SESSION['cart'][$productID]);
    }

    // Chuyển hướng lại trang cart.php
    header('Location: cart.php');
    exit();
}


// xử lý mã giảm giá
$discount = 0;
$totalbefore = 0;
// Tính tổng số tiền trong giỏ hàng
foreach ($_SESSION['cart'] as $item) {
    $totalbefore += $item['price'] * $item['quantity'];}


if (isset($_POST['apply_promo'])) {
    $promo_code = trim($_POST['promo_code']);

    // Truy vấn mã giảm giá từ cơ sở dữ liệu
    $stmt = $conn->prepare(query: "SELECT * FROM promotion WHERE PromoCode = ? AND Quantity > 0 AND StartDate <= ? AND EndDate >= ?");
    $stmt->bind_param("sss", $promo_code, $current_date, $current_date); 
    $prepared_query = sprintf(
      "SELECT * FROM promotion WHERE PromoCode = '%s' AND Quantity > 0 AND StartDate <= '%s' AND EndDate >= '%s'",
      $promo_code,
      $current_date,
      $current_date
  );
  echo "<pre>Prepared Query: $prepared_query</pre>";
    $stmt->execute();
    $result = $stmt->get_result();
    $promo = $result->fetch_assoc();

    if ($promo) {
        // Mã giảm giá hợp lệ, lưu vào session
        $_SESSION['promo'] = $promo;
        $message = "Mã giảm giá đã được áp dụng.";

        // Kiểm tra điều kiện giảm giá
        $min_value = $promo['MinValue'];
        $max_amount = $promo['MaxAmount'];

        if ($totalbefore >= $min_value) {
            $discount = min($totalbefore * ($promo['PromoRate'] / 100), $max_amount);
            $_SESSION['discount'] = $discount;   

        }
        
    //     // Cập nhật lại số lượng mã giảm giá trong cơ sở dữ liệu (giảm đi 1)
    //     $new_quantity = $promo['Quantity'] - 1;
    //     if ($new_quantity >= 0) {
    //         // Cập nhật số lượng mã giảm giá trong bảng promotion
    //         $update_stmt = $conn->prepare("UPDATE promotion SET Quantity = ? WHERE PromoCode = ?");
    //         $update_stmt->bind_param("is", $new_quantity, $promo_code);
    //         $update_stmt->execute();
    // } else {
    //   $message = "Mã giảm giá này đã hết lượt sử dụng.";
    // }
  } else {
        // Mã giảm giá không hợp lệ
        $message = "Mã giảm giá không hợp lệ hoặc đã hết hạn.";
    }
}
$total = $totalbefore - $discount;
$_SESSION['total'] = $total;   
 
?>
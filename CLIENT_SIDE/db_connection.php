<?php
// Cấu hình kết nối tới cơ sở dữ liệu MySQL trên Aiven
$host = 'motorcycle-da-ktdl.j.aivencloud.com:17160';
$dbname = 'motorcycle';
$user = 'caotuan';
$password = 'AVNS_hti9_ONmu8qTVi8uTAl';


// Kết nối với MySQL
$conn = new mysqli($host, $username, $password, $database, $port);

//Kiểm tra kết nối
// if ($conn->connect_error) {
//     die("Kết nối thất bại: " . $conn->connect_error);
// }
// echo "Kết nối thành công!";
$current_page = basename($_SERVER['PHP_SELF']); // Lấy tên file hiện tại
if (!isset($_SESSION['customer_id'])) {
    // Nếu chưa đăng nhập và không phải đang ở trang login.php, chuyển hướng về login.php
     if ($current_page !== 'login.php') {
        header("Location: login.php");
        exit;
    }
} else {
    // Nếu đã đăng nhập và đang ở trang login.php, chuyển hướng đến index.php
    if ($current_page === 'login.php') {
        header("Location: index.php");
        exit;
    }
}

  
// Truy vấn 10 sản phẩm có InStock cao nhất trong bảng products
$topInStockQuery = "SELECT ProductID FROM products ORDER BY InStock DESC LIMIT 10";
$topInStockResult = $conn->query($topInStockQuery);
$topInStockProducts = [];
if ($topInStockResult && $topInStockResult->num_rows > 0) {
    while ($row = $topInStockResult->fetch_assoc()) {
        $topInStockProducts[] = $row['ProductID'];
    }
}

// Truy vấn 10 sản phẩm có tổng InStock cao nhất trong bảng products_in_orders
$topInStockQuery2 = "
    SELECT p.ProductID, SUM(p.InStock) AS totalInStock
    FROM products_in_orders p
    GROUP BY p.ProductID
    ORDER BY totalInStock DESC
    LIMIT 10
";
$topInStockResult2 = $conn->query($topInStockQuery2);
$topInStockProducts2 = [];
if ($topInStockResult2 && $topInStockResult2->num_rows > 0) {
    while ($row = $topInStockResult2->fetch_assoc()) {
        $topInStockProducts2[] = $row['ProductID'];
    }
}

// Cấu hình phân trang
$itemsPerPage = 20;
$currentPage = $_GET['page'] ?? 1;
$start = ($currentPage - 1) * $itemsPerPage;

// Bộ lọc tìm kiếm và phân trang
$search = $_GET['search'] ?? '';
$filter = $_GET['filter'] ?? '';
$featured = isset($_GET['featured']) ? true : false;
$popular = isset($_GET['popular']) ? true : false;

$whereClauses = [];
if ($search) {
    $search = $conn->real_escape_string($search);
    $whereClauses[] = "(p.ProductID LIKE '%$search%' OR p.ProductName LIKE '%$search%')";
}
if ($filter === 'out_of_stock') {
    $whereClauses[] = "p.InStock = 0";
} elseif ($filter) {
    $filter = $conn->real_escape_string($filter);
    $whereClauses[] = "c.Category = '$filter'";
}
if ($featured && !empty($topInStockProducts)) {
    $whereClauses[] = "p.ProductID IN ('" . implode("','", $topInStockProducts) . "')";
}
if ($popular && !empty($topInStockProducts2)) {
    $whereClauses[] = "p.ProductID IN ('" . implode("','", $topInStockProducts2) . "')";
}

$whereSQL = $whereClauses ? 'WHERE ' . implode(' AND ', $whereClauses) : '';

// Tổng số sản phẩm
$totalQuery = "SELECT COUNT(*) as total FROM products p LEFT JOIN products_in_category c ON p.ProductID = c.ProductID $whereSQL";
$totalItemsResult = $conn->query($totalQuery);
$totalItems = $totalItemsResult ? $totalItemsResult->fetch_assoc()['total'] : 0;
$totalPages = ceil($totalItems / $itemsPerPage);

// Lấy sản phẩm theo điều kiện tìm kiếm và phân trang
$query = "
    SELECT p.ProductID, p.ProductName, p.InStock, p.BasePrice, p.SalePrice, p.Notes, c.Category, p.Image, p.Supplier
    FROM products p
    LEFT JOIN products_in_category c ON p.ProductID = c.ProductID
    $whereSQL
    LIMIT $start, $itemsPerPage
";


$products = $conn->query($query)->fetch_all(MYSQLI_ASSOC);







// 2. Phân trang cho bảng đơn hàng
// Lấy giá trị từ GET
$search = $_GET['search'] ?? '';
$startDate = $_GET['start_date'] ?? '';
$endDate = $_GET['end_date'] ?? '';
$statusFilter = $_GET['status'] ?? '';
$paymentFilter = $_GET['payment'] ?? '';


$whereClauses = [];
if ($search) {
    $whereClauses[] = "(OrderID LIKE '%$search%' OR CustomerID LIKE '%$search%')";
}
if ($startDate) $whereClauses[] = "OrderDate >= '{$conn->real_escape_string($startDate)}'";
if ($endDate) $whereClauses[] = "OrderDate <= '{$conn->real_escape_string($endDate)}'";
if ($statusFilter) $whereClauses[] = "OrderStatus = '{$conn->real_escape_string($statusFilter)}'";
if ($paymentFilter) $whereClauses[] = "PaymentStatus = '{$conn->real_escape_string($paymentFilter)}'";

$whereSQL = $whereClauses ? 'WHERE ' . implode(' AND ', array: $whereClauses) : '';

// Truy vấn tổng số đơn hàng
$totalOrdersQuery = "SELECT COUNT(*) as total FROM orders $whereSQL";
$totalOrders = $conn->query($totalOrdersQuery)->fetch_assoc()['total'];
$totalOrderPages = ceil($totalOrders / $itemsPerPage);

// Truy vấn đơn hàng
$orderQuery = "SELECT * FROM orders $whereSQL ORDER BY OrderDate DESC LIMIT $start, $itemsPerPage";
$orderResults = $conn->query($orderQuery);

$orders = [];
if ($orderResults->num_rows > 0) {
    while ($row = $orderResults->fetch_assoc()) {
        $orders[] = $row;
    }
} else {
    $orders = [];
}





// 3. Phân trang cho bảng khuyến mãi
// Lấy giá trị từ GET
$startDate = $_GET['start_date'] ?? '';
$endDate = $_GET['end_date'] ?? '';
$customVar = $_GET['custom_var'] ?? '';

// Điều kiện WHERE SQL
$whereClauses = [];
if ($search) {
    // Tìm kiếm theo tên khuyến mãi và mã khuyến mãi
    $whereClauses[] = "(PromoName LIKE '%$search%' OR PromoCode LIKE '%$search%')";
}
if ($startDate && $endDate && $customVar) {
    // Áp dụng bộ lọc đặc biệt cho ngày hôm nay
    $whereClauses[] = "StartDate <= '{$conn->real_escape_string($startDate)}'"; // Bắt đầu <= hôm nay
    $whereClauses[] = "EndDate >= '{$conn->real_escape_string($endDate)}'"; // Kết thúc >= hôm nay
} else {
    // Nếu không có start_date và end_date từ liên kết, dùng các ô lọc thông thường
    if ($startDate) {
        $whereClauses[] = "StartDate >= '{$conn->real_escape_string($startDate)}'"; // Bắt đầu >= ngày bắt đầu
    }
    if ($endDate) {
        $whereClauses[] = "EndDate <= '{$conn->real_escape_string($endDate)}'"; // Kết thúc <= ngày kết thúc
    }
}
$whereSQL = $whereClauses ? 'WHERE ' . implode(' AND ', $whereClauses) : '';

// Tổng số khuyến mãi
$totalPromotionsQuery = "SELECT COUNT(*) as total FROM promotion $whereSQL";
$totalPromotions = $conn->query($totalPromotionsQuery)->fetch_assoc()['total'];
$totalPromotionPages = ceil($totalPromotions / $itemsPerPage);

// Truy vấn khuyến mãi
$promotionQuery = "SELECT * FROM promotion $whereSQL ORDER BY StartDate DESC LIMIT $start, $itemsPerPage";
$promotionResults = $conn->query($promotionQuery);

$promotions = [];
if ($promotionResults->num_rows > 0) {
    while ($row = $promotionResults->fetch_assoc()) {
        $promotions[] = $row;
    }
} else {
    $promotions = [];
}
?>
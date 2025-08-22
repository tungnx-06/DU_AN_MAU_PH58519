<?php 
// Require toàn bộ các file khai báo môi trường, thực thi,...(không require view)
session_start();
// Require file Common
require_once './commons/env.php'; // Khai báo biến môi trường
require_once './commons/function.php'; // Hàm hỗ trợ

// Require toàn bộ file Controllers
require_once './controllers/ProductController.php';
require_once './controllers/HomeController.php';
require_once './controllers/CategoryController.php';
require_once './controllers/UserController.php';
require_once './controllers/DashboarbController.php';

// Require toàn bộ file Models
require_once './models/ProductModel.php';
require_once './models/CategoryModel.php';
require_once './models/UserModel.php';
require_once './models/CartModel.php';

// Route
$mode = $_GET['mode'] ?? '/';
if(isset($_GET['mode'])&& $mode=='admin'){
    require_once './route/admin.php';
}else{
    require_once './route/client.php';
}
// $act = $_GET['act'] ?? '/';


// // Để bảo bảo tính chất chỉ gọi 1 hàm Controller để xử lý request thì mình sử dụng match

// match ($act) {
//     // Trang chủ
//     '/'=>(new ProductController())->Home(),

// };
<?php
$act = $_GET['act'] ?? '/';


// Để bảo bảo tính chất chỉ gọi 1 hàm Controller để xử lý request thì mình sử dụng match

match ($act) {
    // Trang chủ
    '/'=>(new HomeController())->index(),
    'register'=>(new UserController())->Register(),
    'login'=>(new UserController())->Login(),
    'logout'=> (new UserController())->Logout(),
    'detail'=> (new ProductController())->ProductDetail(),
    'addtocart'=> (new ProductController())->AddToCart(),
    default=>(new HomeController())->index(),

};
?>
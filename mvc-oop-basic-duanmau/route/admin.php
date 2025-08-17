<?php
$act = $_GET['act'] ?? '/';
if(isset($_SESSION['user'])){
    // print_r($_SESSION['user']);
    if($_SESSION['user']['role']!='admin'){
        echo "Ban khong co quyen truy cap";
    }else{
        match ($act) {
    // Trang chủ
    '/'=>(new DashboarbController())->index(),
    'addcategory'=>(new CategoryController())->addCategory(),
    'category'=>(new CategoryController())->Viewcat(),
    'addproduct'=>(new ProductController())->addProduct(),
    'delete' => (new CategoryController())->delete(),
    'deletete' => (new ProductController())->delete(),
    'product'=>(new ProductController())->ViewPro(),
    'logout'    => (new UserController())->LogoutAdmin(),
    default => (new HomeController())->index(),
};
    }
}



// Để bảo bảo tính chất chỉ gọi 1 hàm Controller để xử lý request thì mình sử dụng match
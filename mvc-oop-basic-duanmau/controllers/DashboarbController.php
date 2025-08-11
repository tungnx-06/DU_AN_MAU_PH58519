<?php
// có class chứa các function thực thi xử lý logic 
class DashboarbController
{
    // public $modelProduct;

    // public function __construct()
    // {
    //     $this->modelProduct = new ProductModel();
    // }

    public function index()
    {
        require_once './views/admin/index.php';
    }
}

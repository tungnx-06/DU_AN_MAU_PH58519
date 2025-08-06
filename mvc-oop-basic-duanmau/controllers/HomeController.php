<?php
// có class chứa các function thực thi xử lý logic 
class HomeController
{
    // public $modelProduct;

    // public function __construct()
    // {
    //     $this->modelProduct = new ProductModel();
    // }

    public function index()
    {
        require_once './views/client/index.php';
    }
}

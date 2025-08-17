<?php
// có class chứa các function thực thi xử lý logic 
class HomeController
{
    private $modelProduct;

    public function __construct()
    {
        $this->modelProduct = new ProductModel();
    }

    public function index()
    {
        $products = $this->modelProduct->getAllProduct();
        require_once './views/client/index.php';
    }
}

<?php
// có class chứa các function thực thi xử lý logic 
class ProductController
{
    public $modelCategory;
    public $modelProduct;
    private $cartModel;
    public function __construct()
    {
        $this->modelCategory = new CategoryModel();
        $this->modelProduct = new ProductModel();
        $this->cartModel = new CartModel();
    }

    public function addProduct()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // print_r($_FILES['image']);
            $path = uploadFile($_FILES['image'],'uploads/imgproduct/');
            // echo $path;
            // print_r($_POST);
            $data['image'] = $path;
            $data = [
            "name" => $_POST['name'] ?? '',
            "price" => $_POST['price'] ?? 0,
            "category_id" => $_POST['category_id'] ?? 0,
            "description" => $_POST['description'] ?? '',
            "image" => $path
        ];
           $id = $this->modelProduct->AddProduct($data);
        //    echo "san pham vua them la: $id";
        header("Location: ?mode=admin&act=product");
        }else{

        
        $title ="them moi san pham";
        $category = $this->modelCategory->getAllCategory(1);//lay ra danh sach danh muc co kieu san pham
        // print_r($category);
        require_once './views/admin/product/add.php';
        }   
    }
    public function ViewPro(){
        $title = "danh sach danh San Pham";
        $result = $this->modelProduct->getAllProduct();
        require_once './views/admin/product/listproduct.php';
    }
public function delete()
    {
        $id = $_GET['id'];
        $this->modelProduct->delete($id);
        header("Location: ?mode=admin&act=product");
    }
    public function list() {
    $products = $this->modelProduct->getAllProduct();
    require_once "views/client/product/list.php";
}
public function ProductDetail(){
    $id = $_GET['id']??0;
    if($id>0){
        $result = $this->modelProduct->getAllProductById($id);
        if(empty($result)){
            header('Location: /');
        }else{
            extract($result);
            require_once './views/client/productDetail.php';
        }
        
    }else{
        header('Location: /');
    }
    
}
public function AddToCart(){
    $userid = $_SESSION['user']['id']??0;
     header('Content-type:appication/json');
    if($userid==0){
        $result = array(
            "status"=>false,
            "message"=>"ban can phai dang nhap"
        );
        echo json_encode($result);
        return;
    }
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $productid = $_POST['productid'];
        $quantity = $_POST['quantity'];
        $this->cartModel->addTocart($userid,$productid,$quantity);
        $data = $this->cartModel->getAllProductIncart($userid);
        $result = array(
            "status"=>true,
            "message"=>"them gio hang thanh cong",
            "data"=>$data
        );
        echo json_encode($result);
    }
}
}

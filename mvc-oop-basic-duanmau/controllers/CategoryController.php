<?php
// có class chứa các function thực thi xử lý logic 
class CategoryController
{
    public $modelCategory;

    public function __construct()
    {
        $this->modelCategory = new CategoryModel();
    }

    public function addCategory()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // print_r($_POST);
           $id =  $this->modelCategory->Add($_POST);
        //    echo "id vua them la $id";
        header("Location: ?mode=admin&act=category");
        }else{

        
        $title ="them moi danh muc";
        require_once './views/admin/addcategory.php';
        }
    }
    public function Viewcat(){
        $title = "danh sach danh muc";
        $result = $this->modelCategory->getAllCategory();
        require_once './views/admin/listcategory.php';
    }
public function delete()
    {
        $id = $_GET['id'];
        $this->modelCategory->delete($id);
        header("Location: ?mode=admin&act=category");
    }
}

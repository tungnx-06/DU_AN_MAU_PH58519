<?php
// có class chứa các function thực thi xử lý logic 
class UserController
{
    public $modelUser;

    public function __construct()
    {
        $this->modelUser = new UserModel();
    }

    public function Register()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // print_r($_POST);
           $id = $this->modelUser->Register($_POST);
           if($id>0){
            echo "Dang ki thanh cong";
           }
        }else{

        
        $title ="Dang ki";
        require_once './views/client/register.php';
        }
    }
    public function Login()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // print_r($_POST);
            // goi model kiem tra dang nhap
            $result = $this->modelUser->Login($_POST);
            // print_r($result);
            if($result==null){
                echo "Sai ten dang nhap hoac mat khau";
            }else{
                print_r($result);
                $user = array("id"=>$result['id'],"username" => $result['username'],"role"=>$result['role'],"fullname"=>$result['fullname']);
                $_SESSION['user'] = $user;
                $_SESSION['user'] = $user;

            // Chuyển hướng theo quyền
            if($result['role'] == 'admin'){
                header("Location: ?mode=admin"); // Trang admin dashboard
                exit;
            } else {
                header("Location: index.php"); // Trang client
                exit;
            }
            }
        }else{
        require_once './views/client/login.php';
        }
    }
    public function Logout()
{
    // Hủy toàn bộ session
    session_unset();
    session_destroy();

    // Chuyển về trang đăng nhập
    header("Location: ?act=login");
    exit;
}
public function LogoutAdmin()
{
    session_unset();
    session_destroy();
    header("Location: ?act=login"); 
    exit;
}
}


<?php 
// Có class chứa các function thực thi tương tác với cơ sở dữ liệu 
class UserModel 
{
    public $conn;
    public function __construct()
    {
        $this->conn = connectDB();
    }

    public function Register($data){
        $sql = "insert into user (username,password,fullname,birth) values (:username,:password,:fullname,:birth)";
        $stmt = $this->conn-> prepare($sql);
        $stmt->execute([
            "username"=>$data['username'],
            "password"=>md5($data['password']),
            "fullname"=>$data['fullname'],
            "birth"=>$data['birth'],
            
        ]);
        return $this->conn->lastInsertId();
    }
    public function Login($data){
        $sql = "select * from user where username = :username and password = :password limit 1";
        $stmt = $this->conn-> prepare($sql);
        $stmt->execute([
            "username"=>$data['username'],
            "password"=>md5($data['password']),
        ]);
        return $stmt->fetch();
    }

}



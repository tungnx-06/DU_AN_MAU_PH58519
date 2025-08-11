<?php 
// Có class chứa các function thực thi tương tác với cơ sở dữ liệu 
class CategoryModel 
{
    public $conn;
    public function __construct()
    {
        $this->conn = connectDB();
    }

    // Viết truy vấn danh sách sản phẩm 
    public function getAllCategory($type = null)
    {
        $sql = "select * from category";
        if($type!==null){
            $sql .=' where type = :type';
        }
        $stmt = $this->conn->prepare($sql);
        if($type!==null){
        $stmt->execute([
            "type"=>$type
        ]);
    }else{
        $stmt->execute();
    }
        return $stmt->fetchAll();
    }
    // viet lenh luu data
    public function Add($data){
        $sql = "insert into category(name,type) values (:name,:type)";
        $stmt = $this->conn-> prepare($sql);
        $stmt->execute([
            "name"=>$data['name'],
            "type"=>$data['type'] ?? 0
        ]);
        return $this->conn->lastInsertId();
    }
     public function delete($id)
    {
        $sql = "DELETE FROM `category` WHERE `category`.`id` = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}



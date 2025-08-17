<?php 
// Có class chứa các function thực thi tương tác với cơ sở dữ liệu 
class ProductModel 
{
    public $conn;
    public function __construct()
    {
        $this->conn = connectDB();
    }

    // Viết truy vấn danh sách sản phẩm 
    public function getAllProduct()
    {
        $sql = "select * from product";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function getAllProductById($id)
    {
        $sql = "select * from product where id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(array('id'=>$id));
        return $stmt->fetch();
    }
    // viet lenh luu data
    public function AddProduct($data){
        $sql = "insert into product(name,image,price,category_id,description) values (:name,:image,:price,:category_id,:description)";
        $stmt = $this->conn-> prepare($sql);
        $stmt->execute([
            "name"=>$data['name'],
            "image"=>$data['image'],
            "price"=>$data['price'],
            "category_id"=>$data['category_id'],
            "description"=>$data['description'],
            
        ]);
        return $this->conn->lastInsertId();
    }
    public function delete($id)
    {
        $sql = "DELETE FROM `product` WHERE `product`.`id` = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}



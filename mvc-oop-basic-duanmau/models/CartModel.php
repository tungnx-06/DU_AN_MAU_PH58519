<?php 
// Có class chứa các function thực thi tương tác với cơ sở dữ liệu 
class CartModel 
{
    public $conn;
    public function __construct()
    {
        $this->conn = connectDB();
    }
    
    public function findCartByUser($userid){
        $sql = "select * from carts where userid = :userid";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(array('userid'=>$userid));
        $result = $stmt->fetch();
        if(empty($result)){
            return 0;
        }else{
            return $result['id'];
        }
    }

    public function addTocart($userid,$productid,$quantity=1){
        // Kiem tra user co gio hang chua
        $cartid = $this->findCartByUser($userid);
        if($cartid==0){
            $sql = "insert into carts(userid) value (:userid)";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute(array('userid'=>$userid));
            $cartid = $this->conn->lastInsertId();
        }
        if($cartid>0){
            $sql = "select * from cartdetail where cartid=:cartid and productid = :productid";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute(array('cartid'=>$cartid,'productid'=>$productid));
            $result = $stmt->fetch();
            if(empty($result)){
                $sqlinsert = "insert into cartdetail(cartid,productid,quantity) values 
                (:cartid,:productid,:quantity)";
                $stmtinsert = $this->conn->prepare($sqlinsert);
                $stmtinsert->execute(array('cartid'=>$cartid,'productid'=>$productid,'quantity'=>$quantity));
            }else{
                // cap nhap so luong cho san pham
                $idcartdetail = $result['id'];
                $sqlud = "update cartdetail set quantity = :quantity where id=:id";
                $stmtud = $this->conn->prepare($sqlud);
                $stmtud->execute(array('id'=>$idcartdetail,'quantity'=>$result['quantity']+$quantity));
            }   

        }
    }
    public function getAllProductIncart($userid){
        $sql = "select c.cartid,p.name,p.image,p.price,c.quantity from cartdetail c 
        left join product p on p.id=c.productid
        left join carts on carts.id = c.cartid
        where carts.userid = :userid";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(array('userid'=>$userid));
        return $stmt->fetchAll();
    }
}
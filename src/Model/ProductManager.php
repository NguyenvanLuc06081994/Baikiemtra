<?php


namespace App\Model;


class ProductManager
{
    protected $database;

    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }

    public function getAllProduct()
    {
        $sql = "SELECT * FROM `tbl_products`";
        $stmt = $this->database->query($sql);
        $data = $stmt->fetchAll();
        $products = [];
        foreach ($data as $key => $item){
            $product = new Product($item['name'],$item['category'],$item['price'],$item['quantity'],$item['date'],$item['description']);
            $product->setId($item['id']);
            array_push($products,$product);
        }
        return $products;
    }

    public function addProduct($product)
    {
        $sql = "INSERT INTO `tbl_products`(`name`, `category`, `price`, `quantity`, `date`, `description`) VALUES (:name,:category,:price,:quantity,:date,:description)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':name',$product->getName());
        $stmt->bindParam(':category',$product->getCategory());
        $stmt->bindParam(':price',$product->getPrice());
        $stmt->bindParam(':quantity',$product->getQuantity());
        $stmt->bindParam(':date',$product->getDate());
        $stmt->bindParam(':description',$product->getDescription());
        $stmt->execute();
    }

    public function getProductId($id)
    {
        $sql = "SELECT * FROM `tbl_products` WHERE id =:id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':id',$id);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function updateProduct($product)
    {
        $sql = "UPDATE `tbl_products` SET `name`=:name,`category`=:category,`price`=:price,`quantity`=:quantity,`date`=:date,`description`=:description WHERE id =:id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':id',$product->getId());
        $stmt->bindParam(':name',$product->getName());
        $stmt->bindParam(':category',$product->getCategory());
        $stmt->bindParam(':price',$product->getPrice());
        $stmt->bindParam(':quantity',$product->getQuantity());
        $stmt->bindParam(':date',$product->getDate());
        $stmt->bindParam(':description',$product->getDescription());
        $stmt->execute();
    }

    public function deleteProduct($id)
    {
        $sql = "DELETE FROM `tbl_products` WHERE id =:id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    public function searchProduct($keyword)
    {
        $sql = "SELECT * FROM tbl_products Where name Like :keyword";
        $stmt = $this->database->prepare($sql);
        $stmt->bindValue(':keyword', '%' . $keyword . '%');
        $stmt->execute();
        $data = $stmt->fetchAll();
        $products = [];
        foreach ($data as $key => $item) {
            $product = new Product($item['name'],$item['category'],$item['price'],$item['quantity'],$item['date'],$item['description']);
            $product->setId($item['id']);
            array_push($products, $product);
        }
        return $products;
    }

    public function searchABC()
    {
        return 'abc';
    }
}
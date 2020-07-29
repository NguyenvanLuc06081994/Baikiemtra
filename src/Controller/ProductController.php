<?php

namespace App\Controller;

use App\Model\Product;
use App\Model\ProductManager;

class ProductController
{
    protected $productController;

    public function __construct()
    {
        $this->productController = new ProductManager();
    }

    public function getAllProduct()
    {
        $products = $this->productController->getAllProduct();
        include('src/View/list.php');
    }

    public function addProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include('src/View/add.php');
        } else {
            $name = $_REQUEST['name'];
            $category = $_REQUEST['category'];
            $price = $_REQUEST['price'];
            $quantity = $_REQUEST['quantity'];
            $date = $_REQUEST['date'];
            $description = $_REQUEST['description'];
            $product = new Product($name, $category, $price, $quantity, $date, $description);
            $this->productController->addProduct($product);
            header("location:index.php");
        }
    }

    public function updateProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $id = $_REQUEST['id'];
            $product = $this->productController->getProductId($id);
            include('src/View/update.php');
        } else {
            $id = $_REQUEST['id'];
            $name = $_REQUEST['name'];
            $category = $_REQUEST['category'];
            $price = $_REQUEST['price'];
            $quantity = $_REQUEST['quantity'];
            $date = $_REQUEST['date'];
            $description = $_REQUEST['description'];
            $product = new Product($name, $category, $price, $quantity, $date, $description);
            $product->setId($id);
            $this->productController->updateProduct($product);
            header("location:index.php");
        }
    }

    public function deleteProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $id = $_REQUEST['id'];
            $this->productController->deleteProduct($id);
            header('location:index.php');
        }
    }

    public function searchProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $keyword = $_REQUEST['keyword'];
            $products = $this->productController->searchProduct($keyword);
            include('src/View/list.php');
        }
    }
}
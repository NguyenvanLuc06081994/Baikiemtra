<?php

use App\Controller\ProductController;

require __DIR__ . "/vendor/autoload.php";

$products = new ProductController();

$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : "";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
          integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>
<?php switch ($page) {
    case 'list-product':
        $products->getAllProduct();
        break;
    case 'add-product':
        $products->addProduct();
        break;
    case 'update-product':
        $products->updateProduct();
        break;
    case 'delete-product':
        $products->deleteProduct();
        break;
    case 'search-product':
        $products->searchProduct();
        break;
    default:
        $products->getAllProduct();
} ?>
</body>
</html>

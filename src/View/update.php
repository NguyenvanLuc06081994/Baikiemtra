<a href="index.php?page=list-product " class=" btn btn-primary mt-3 mb-3">Cancel</a>
<form action="" method="post" class="form-control">
    Product Name: <input type="text" name="name" placeholder="Name" value="<?php echo $product['name'] ?>" class="form-control">
    <br>
    Category: <select name="category" id="" >
        <option value="Phone">Phone</option>
        <option value="AirCondition">AirCondition</option>
        <option value="TeleVision">TeleVision</option>
    </select>
    <br>
    Price : <input type="text" name="price" placeholder="Price" value="<?php echo $product['price'] ?>" class="form-control">
    <br>
    Quantity: <input type="text" name="quantity" placeholder="Quantity" value="<?php echo $product['quantity'] ?>" class="form-control">
    <br>
    Date: <input type="text" name="date" placeholder="Date" value="<?php echo $product['date'] ?>" class="form-control">
    <br>
    Description: <input type="text" name="description" placeholder="Description"
                        value="<?php echo $product['description'] ?>" class="form-control">
    <br>
    <input type="submit" value="UPDATE" class="btn btn-primary">
</form>


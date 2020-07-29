<a href="index.php?page=list-product" class="btn btn-primary mt-3 mb-3">Cancel</a>
<form action="" method="post" class="form-control">
  Product Name:  <input type="text" name="name" placeholder="Name" class="form-control" required>
    <br>
   Category :
    <select name="category" id="">
        <option value="Phone">Phone</option>
        <option value="AirCondition">AirCondition</option>
        <option value="TeleVision">TeleVision</option>
    </select>
    <br>
  Price : <input type="text" name="price" placeholder="Price" class="form-control" required>
    <br>
  Quantity:  <input type="text" name="quantity" placeholder="Quantity" class="form-control" required>
    <br>
   Date: <input type="text" name="date" placeholder="Date" value="<?php echo date('yy-m-d')?>" required>
    <br>
   Description: <input type="text" name="description" placeholder="Description" class="form-control" required>
    <br>
    <input type="submit" value="ADD" class="btn-primary">
</form>


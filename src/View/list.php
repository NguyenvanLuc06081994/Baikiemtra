
        <a href="index.php?page=add-product" class="btn btn-primary mt-3 mb-3">ADD NEW PRODUCT</a>
        <a href="index.php?page=list-product" class="btn btn-primary mt-3 mb-3">View All Product</a>
        <form action="index.php?page=search-product" method="post">
            <input type="text" name="keyword" placeholder="search product" >
            <input type="submit"  value="Search" class="btn btn-primary">
        </form>
        <table  class="table table-striped text-center ">
            <thead class="badge-info">
            <tr>
                <th>STT</th>
                <th>Name</th>
                <th>Category</th>
                <th colspan="2">Action</th>
            </tr>
            </thead>
            <?php if (empty($products)): ?>
                <tr>
                    <td>No data</td>
                </tr>
            <?php else: ?>
                <?php foreach ($products as $key => $product) : ?>
                    <tr>
                        <td><?php echo ++$key ?></td>
                        <td><?php echo $product->getName() ?></td>
                        <td><?php echo $product->getCategory() ?></td>
                        <td><a href="index.php?page=update-product&id=<?php echo $product->getId() ?>"
                               class="btn btn-primary">Update</a></td>
                        <td><a onclick="return confirm('Are You Sure?')" href="index.php?page=delete-product&id=<?php echo $product->getId() ?>"
                               class="btn btn-danger">Delete</a></td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </table>

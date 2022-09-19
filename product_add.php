<html>
    <head>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>
    <body>

    <div class="col-lg-3">

    <form action="product_insert.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name" name="name">
    <select name="category_id">
    <?php
    include_once 'models/categories.php';
$category = new categories();
$conn = $category->connect();
$result=$category->get_all($conn);

while ($row=mysqli_fetch_assoc($result)) { ?>
    

      <option value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>
      <?php }?>
    </select>
    <input type="submit" class="btn btn-primary">
  </div>
</form>
    </div>
    </body>
</html>
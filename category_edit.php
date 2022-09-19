<html>
    <head>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>
    <body>

    <div class="col-lg-3">
<?php

include_once 'models/categories.php';
$category = new categories();
$conn = $category->connect();
$result=$category->get_once($conn,$_GET['id']);

while ($row=mysqli_fetch_assoc($result)) { 

$name=$row['name'];
$image=$row['image'];
$id=$row['id'];


 }?>

    <form action="category_update.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name" name="name" value="<?php echo $name;?>">
    <input type="hidden" class="form-control" id="exampleInputEmail1" placeholder="Name" name="id" value="<?php echo $id;?>">
    <input type="file" name="image">
    <input type="submit" class="btn btn-primary">
  </div>
</form>
    </div>
    </body>
</html>
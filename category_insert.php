<?php
include_once 'models/categories.php';
$category = new categories();
$conn = $category->connect();

if (isset($_POST['name'])&&!empty($_POST['name'])&&$_POST['name']!=='') {

   $add_catgeory=$category->add($conn,$_POST['name']);

}else{
   header('location:category_add.php?data=0');
}

if ($add_catgeory) {
     header('location:category_index.php?data=1');
} else {
    header('location:category_index.php?data=0');
}


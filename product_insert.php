<?php

include_once 'models/products.php';
$product = new products();
$conn = $product->connect();


if (isset($_POST['name'])&&!empty($_POST['name'])&&$_POST['name']!=='') {

   $add_catgeory=$product->add($conn,$_POST['name'],$_POST['category_id']);

}else{
   header('location:product_add.php?data=0');
}

if ($add_catgeory) {
     header('location:product_index.php?data=1');
} else {
    header('location:product_index.php?data=0');
}
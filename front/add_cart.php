 <?php
 session_start();
include_once '../models/products.php';
$category = new products();
$conn = $category->connect();

$result = $category->add_cart($conn,$_SESSION['id_session'],$_GET['product_id']);

if ($result) {
     header('location:category_product.php?id='.$_GET['product_id'].'&data=1');
} else {
     header('location:category_product.php?id='.$_GET['product_id'].'&data=0');
}
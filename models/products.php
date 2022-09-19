<?php
include_once "database.php";

class products extends database{

    public function add($c,$name,$category_id){
        $sql="insert into products (name,category_id) values('".$name."','".$category_id."')";
        return  mysqli_query($c,$sql);
    }


    public function get_All($c){
        $sql="select * from  products";
        return  mysqli_query($c,$sql);
    }

     public function get_once($c,$id){
        $sql="select * from  products where id=".$id;
        return  mysqli_query($c,$sql);
    }

    public function get_products_catgeory($c,$category_id){
        $sql="select * from   products where products.category_id=".$category_id;
        return  mysqli_query($c,$sql);
    }

    public function remove(){
// query  connection , id  // get $_GET['']
    }

    public function update($c,$name,$id,$image=null){
        if ($image!=null) {
            $sql="update  categories  set name='".$name."' , image='".$image."' where id=".$id;
            
        }else{
        $sql="update  categories  set name='".$name."' where id=".$id;
        // die($sql);
        }
        return  mysqli_query($c,$sql);
    }

public function add_cart($c,$user_id,$product_id){
        $sql="insert into carts (user_id,product_id) values(".$user_id.",".$product_id.")";
        return  mysqli_query($c,$sql);
    }


    public function get_carts($c,$user_id){
        $sql="select * from  products, carts where carts.product_id= products.id and carts.user_id=".$user_id;
        return  mysqli_query($c,$sql);
    }

}
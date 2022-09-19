<?php
include_once "database.php";

class categories extends database{

    public function add($c,$name){
        $sql="insert into categories (name) values('".$name."')";
        return  mysqli_query($c,$sql);
    }


    public function get_All($c){
        $sql="select * from  categories";
        return  mysqli_query($c,$sql);
    }

    public function remove(){
// query  connection , id  // get $_GET['']
    }

    public function edit(){

    }

}
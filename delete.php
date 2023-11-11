<?php 
require "db.php";



if($_SERVER['REQUEST_METHOD']==="GET" && isset($_GET['id'])){

    $del = new Database();
    $id = ($_GET['id']);
    $key =$del->selectAll('posts',['id'=>$id]);
 
}

if($_SERVER['REQUEST_METHOD']==="GET" && isset($_GET['destroy'])){
    $del = new Database();
    $id = ($_GET['destroy']);
   $del->delete('posts',$id);
   header('Location: index.php');
   
 
}




?>
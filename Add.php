<?php 
require 'db.php';

if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['add']){

    $name = trim($_POST['name']);
    $title = trim($_POST['title']);


    $date = [
        'name'=> $_POST['name'],
        'title'=> $_POST['name']
    ];




    $post =  new Database();
    var_dump(  $post->insert("posts", $date));
    header("location: index.php");
    
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>


<div class="container mt-5">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            

<form action="" method="post">
    name : <input type="text" name="name" id=""><br><br>
   title: <input type="text" name="title" id=""><br><br><br>
    <input type="submit" name = "add" value="Add">
</form>
        </div>
        <div class="col-4"></div>
    </div>
</div>
    
</body>
</html>
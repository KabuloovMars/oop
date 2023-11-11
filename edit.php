<?php 
require "db.php";
if($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['edit']){

    $id = $_POST['id'];
    $title = $_POST['title'];
    $name = $_POST['name'];
    $date = [
        'id'=>$id,
        'name'=> $name,
        'title'=> $title
    ];
    
    
    
    $post = new Database();
    $update = $post->update('posts',$id, $date);
    header('Location: index.php');
    
    
}
$id = $_GET['id'];
$sel = new Database();
$posts = $sel->selectAll('posts',['id'=>$id])




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="table.css">
    <link rel="stylesheet" href="sytle.css">

</head>
<body style="
background: #de6161;  /* fallback for old browsers */
background: -webkit-linear-gradient(to left, #2657eb, #de6161);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to left, #2657eb, #de6161); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */">
    
</body>
</html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<div class="container mt-5">

<div class="row">
    <div class="col-4"></div>
    <div class="col-4">
        <form action="" method="post">
            <?php foreach($posts as $key => $value): ?>
            <input type="hidden" name="id" value="<?=$value->{'id'}?>"  >
            <label for="name">name</label>
            <input type="text" name="name" id="" value="<?=$value->{'name'}?>"><br><br>
            <label for="title">title</label>
            <input type="text" name="title" id="" value="<?=$value->{'title'}?>"><br><br>
            <input type="submit" name ="edit" value="OK">
            <?php endforeach;?>
            <?php 
    ?>
        </form>
    </div>
    <div class="col-4"></div>
</div>
</div>

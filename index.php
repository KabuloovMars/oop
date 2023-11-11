<?php 

require 'db.php';



$all =  new Database();
$post = $all->selectAll("posts");




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="style.php">
    <link rel="stylesheet" href="table.css">

</head>
<body style="
background: #de6161;  /* fallback for old browsers */
background: -webkit-linear-gradient(to left, #2657eb, #de6161);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to left, #2657eb, #de6161); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    
    <div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-9">
                            <!-- <button type="button" class="btn btn-btn-white add-new"><i class="fa fa-plus"></i> </button> -->
                            <button class="button-85" role="button"><a href="add.php">Add New</a></button>
                            <!-- HTML !-->
                            <div class="col-sm-9"><h2><b>Table</b></h2></div>


                        </div>
                    </div>
                </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>title</th>
                        <th>date</th>
                        <th>Crud</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  foreach($post as $key => $value): ?>
                        <tr>
                            
                            <td><?=  $value->{'name'};?></td>
                            <td><?=$value->{'title'};?></td>
                            <td><?=$value->{'date'};?></td>
                            <td>
                                <a class="edit" title="Edit" href="edit.php?id=<?=$value->{'id'}?>" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                <a class="delete" title="Delete" href="delete.php?destroy=<?= $value->{'id'};?>" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                            </td>
                            <?php endforeach;?>
                        </tr>
                        
                    </tbody>
                </table>
        </div>
    </div>
</div>     



</body>
</html>
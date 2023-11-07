<?php 
require 'db.php';

$post = new Database();

var_dump($post->insert('posts'));

?>
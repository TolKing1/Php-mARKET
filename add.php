<?php 
$data = [
    'title' => $_POST['title'],
    'content' => $_POST['content']
];
require_once './functions.php';
add($data);
header('Location:./index.php');

?>
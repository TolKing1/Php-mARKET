<?php 
$data = [
    'title'=> htmlspecialchars($_POST['title']),
    'content' => $_POST['content'],
    'id' => $_GET['id'],
];
require_once './functions.php';
update($data);

    header('Location: ./index.php');
?>
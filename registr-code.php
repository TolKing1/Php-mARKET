<?php 
$data = [
    'name' => htmlspecialchars($_POST['name']),
    'email' => ($_POST['email']),
    'password' => hash('md5',$_POST['password']),
];
require_once 'functions.php';
regist($data);
header('Location:./index.php');

?>
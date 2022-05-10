<?php 
$data = [
    'title'=$_POST['title'],
    'content' = $_POST['content']
];
$pdo = new PDO('mysql:host=localhost;dbname=newss','root','');
$sql = 'INSERT INTO `tanki`(`title`, `content`) VALUES (:title,:content)';
$query = $pdo->prepare($sql);
$query->execute($data);
$array = $query->fetch(PDO::FETCH_ASSOC);
header('Location:./index.php');

?>
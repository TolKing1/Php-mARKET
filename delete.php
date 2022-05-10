<?php 
$pdo = new PDO('mysql:host=localhost;dbname=newss','root','');
$sql = 'DELETE  FROM tanki WHERE id=:id';
$query = $pdo->prepare($sql);
$query->bindParam(':id',$_GET['id']);
$query->execute();
$array = $query->fetch(PDO::FETCH_ASSOC);
header('Location:./index.php');
?>
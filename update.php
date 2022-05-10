<?php 
$data = [
    'title'=> htmlspecialchars($_POST['title']),
    'content' => $_POST['content'],
    'id' => $_GET['id'],
];

$pdo = new PDO('mysql:host=localhost;dbname=newss','root','');
$sql = "UPDATE `tanki` SET title=:title , content = :content WHERE id=:id";
$query = $pdo->prepare($sql);
$query->execute($data);
$arrays = $query->fetch(PDO::FETCH_ASSOC);

    header('Location: ./index.php');
?>
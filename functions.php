<?php 
//get
function getAll(){
    $pdo = new PDO('mysql:host=localhost;dbname=newss','root','');
    $sql = 'SELECT * FROM tanki';
    $query = $pdo->prepare($sql);
    $query->execute();
    $arrays = $query->fetchALL(PDO::FETCH_ASSOC);
    return $arrays;
};
// Create
function add($data){
    $pdo = new PDO('mysql:host=localhost;dbname=newss','root','');
    $sql = 'INSERT INTO `tanki`(`title`, `content`) VALUES (:title,:content)';
    $query = $pdo->prepare($sql);
    $query->execute($data);
    $array = $query->fetch(PDO::FETCH_ASSOC);
};
//Delete
function delete(){
    $pdo = new PDO('mysql:host=localhost;dbname=newss','root','');
    $sql = 'DELETE  FROM tanki WHERE id=:id';
    $query = $pdo->prepare($sql);
    $query->bindParam(':id',$_GET['id']);
    $query->execute();
    $array = $query->fetch(PDO::FETCH_ASSOC);
};
//Select
function select(){
    $pdo = new PDO('mysql:host=localhost;dbname=newss','root','');
    $sql = 'SELECT * FROM tanki WHERE id=:id';
    $query = $pdo->prepare($sql);
    $query->bindParam(':id',$_GET['id']);
    $query->execute();
    $array = $query->fetch(PDO::FETCH_ASSOC);
    return $array;
};
//Update
function update($data){
    $pdo = new PDO('mysql:host=localhost;dbname=newss','root','');
    $sql = "UPDATE `tanki` SET title=:title , content = :content WHERE id=:id";
    $query = $pdo->prepare($sql);
    $query->execute($data);
    $arrays = $query->fetch(PDO::FETCH_ASSOC);
};
//Registration
function regist($data){
    $pdo = new PDO('mysql:host=localhost;dbname=newss','root','');
    $sql = 'INSERT INTO `reg`(`name`, `email`,`password`) VALUES (:name,:email,:password)';
    $query = $pdo->prepare($sql);
    $query->execute($data);
    $array = $query->fetch(PDO::FETCH_ASSOC);
};
//Log check
function login($name,$password){
    $pdo = new PDO('mysql:host=localhost;dbname=newss','root','');
    $sql = 'SELECT * FROM reg WHERE name=:name AND password=:password';
    $query = $pdo->prepare($sql);
    $query->bindParam(':name',$name);
    $query->bindParam(':password',$password);
    $query->execute();
    $users = $query->fetch(PDO::FETCH_ASSOC);
    
    if($users){
        $_SESSION['logged'] = $users;
    }
    
};
?>
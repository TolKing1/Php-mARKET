<?php 
    $pdo = new PDO('mysql:host=localhost;dbname=newss','root','');
    $sql = 'SELECT * FROM tanki WHERE id=:id';
    $query = $pdo->prepare($sql);
    $query->bindParam(':id',$_GET['id']);
    $query->execute();
    $arrays = $query->fetch(PDO::FETCH_ASSOC);
    
    
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/bootstrap.css">
    <link rel="stylesheet" href="style/style.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan+2&display=swap" rel="stylesheet"> 
    <title>РЕДАКТИРОВАТЬ</title>
</head>
<body>
    

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>РЕДАКТИРОВАТЬ БЛОК</h1>
            <form action="./update.php?id=<?= $arrays['id']?>" method="post">
                <div class="form-group">
                    <input type="text" name="title" class="form-control" value="<?= $arrays['title']?>">
                </div>

                <div class="form-group">
                    <textarea name="content" class="form-control"><?= $arrays['content'] ?></textarea>
                </div>

                <div class="form-group">
                    <button class="btn btn-warning" type="submit">Редактировать</button>
                </div>
            </form>
        </div>
        
    </div>
</div>

<script src="libs/jquery/jquery-3.3.1.min.js"></script>
    <script src="libs/bootstrap-4.0.0-dist/js/popper.min.js"></script>
    <script src="libs/bootstrap-4.0.0-dist/js/bootstrap.min.js"></script>

</body>
</html>
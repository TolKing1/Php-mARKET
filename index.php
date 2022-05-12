<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/bootstrap.css">
    <link rel="stylesheet" href="style/style.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan+2&display=swap" rel="stylesheet"> 
    <title>Shop</title>
</head>
<body>
    <?php 
    session_start();
    require_once './functions.php';
    $arrays = getAll();

    if(isset($_POST)){
        $name = $_POST['name'];
        $password = hash('md5',$_POST['password']);
        login($name,$password);
    }
    echo "<pre>"; print_r($_SESSION['logged']);echo "</pre>";
    session_destroy();
        ?>
    <header>
        <div class="header_top">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="/">PHP</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="ml-auto form-inline">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                                    Войти
                                </button>
                                <div class="dropdown-menu p-3 mt-3">
                                    <form action="" method="post">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Name" name="name">
                                        </div>
                                        <div class="form-group my-3">
                                            <input type="password" class="form-control" placeholder="Password" name="password">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Войти</button>
                                    </form>
                                </div>
                            </div>
                            
                            <a href="./registr.php" class="btn btn-success ml-4">Зарегистрироватся</a>
                            <?php if(isset($_SESSION['logged'])): ?>
                            <span  class="nav_hello">Привет :<?= $_SESSION['logged']['name'] ?> </span>
                            <a href="./logout.php"  class="btn btn-secondary ml-4">Выйти</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <section class="shop" id="shop">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="news">
                        <h2>НОВОСТИ И ТОВОРАЫ : </h2>
                        <?php if(isset($_SESSION['logged'])): ?>
                        <a href="./create.php" class="btn btn-success ">ДОБАВИТЬ</a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-12">
                    <ul class="shop_actions">
                        <li>id</li>
                        <li>Описание</li>
                        <li>Настройки</li>
                    </ul>
                </div>
                <div class="col-12">
                    <?php foreach($arrays as $array): ?>
                    <ul class="shop_edit">
                        <li><?= $array['id'] ?></li>
                        <li><?= $array['title'] ?></li>
                        <li>
                            
                            <a href="./show.php?id=<?= $array['id'] ?>" class="btn btn btn-warning">Показать</a>
                            <?php if(isset($_SESSION['logged'])): ?>
                            <a href="./edit.php?id=<?= $array['id'] ?>" class="btn btn btn-secondary">Редактировать</a>
                            <a href="./delete.php?id=<?= $array['id'] ?>" class="btn btn btn-danger">Удалить</a>
                            <?php endif; ?>
                        </li>
                    </ul>
                    <?php endforeach ?>
                </div>
            </div>
        </div>

    </section>

    <script src="libs/jquery/jquery-3.3.1.min.js"></script>
    <script src="libs/bootstrap-4.0.0-dist/js/popper.min.js"></script>
    <script src="libs/bootstrap-4.0.0-dist/js/bootstrap.min.js"></script>
    
</body>
</html>
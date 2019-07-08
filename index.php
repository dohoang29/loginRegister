<?php
    ob_start();
    session_start();
    include('library/autoload.php');
    include('library/database.php');  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Management</title>
</head>
<body>
    <?php
    if(isset($_SESSION['email'])){
        echo "<h1 style='text-align:center'>".$_SESSION['email']." is Login !!!</h1>";
        echo "<p style='text-align:center'><a href='index.php?controller=user&action=logout'>Log out</a></p>";
    }
    if(isset($_GET['controller'])){
        switch($_GET['controller']){
            case "user" : include('controller/user/controller.php');
            break;
        }
    }
    else{
        header("location:index.php?controller=user&action=login");
    }
    ?>
</body>
</html>
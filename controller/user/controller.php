<?php
    if(isset($_GET['action'])){
        switch($_GET['action']){
            case "login" : include('controller/user/login.php');
            break;
            case "logout" : include('controller/user/logout.php');
            break;
            case "list" : include('controller/user/listUser.php');
            break;
            case "userPage" : include('view/user/userPage.php');
            break;
            case "register" : include('controller/user/register.php');
            break;
            
        }
    }
?>
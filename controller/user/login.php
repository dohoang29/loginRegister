<?php
if(empty($_SESSION['userLevel'])){
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        if($email && $pass){
            $user = new user();
            $user->setEmail($email);
            $user->setUserPass($pass);
            if($user->login() == "success"){
                if($_SESSION['userLevel'] == 2){
                    //echo "admin";
                    header("Location:index.php?controller=user&action=list");
                    
                }
                else{
                    //echo "user";
                    header("Location:index.php?controller=user&action=userPage");
                }

            }
            else{
                $err = "Email or password is wrong";
            }
        }
    }
}
else{
    if($_SESSION['userLevel']==2){
        header("Location:index.php?controller=user&action=list");
    }
    else{
        header("Location:index.php?controller=user&action=userPage");
    }
    
}
include("view/user/login.php");
?>
<?php
if(isset($_SESSION['userLevel'])&& $_SESSION['userLevel'] == 2){
    $user = new user();
    $result = $user->listUser();
    include('view/user/listUser.php');
}
else{
    header("location:index.php");
}
?>
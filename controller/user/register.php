<?php
if(empty($_SESSION['userLevel'])){
    if(isset($_POST['submit'])){
        $fName = $_POST['firstName'];
        $lName = $_POST['lastName'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $role = $_POST['userLevel'];
        if($email && $pass && $role){
            $user = new user();
            $user->setName($fName,$lName);
            $user->setEmail($email);
            $user->setUserPass($pass);
            $user->setUserLevel($role);

            if($user->addUser() == "fail"){
                $log = "<span>User exist</span>";
            }
            else{
                $log = "<span>Successfull</span>";
                //header("location:index.php?controller=user&&action=list");
            }
        }
    }
}
else{
    header("location:index.php");
}
    include('view/user/register.php');
?>
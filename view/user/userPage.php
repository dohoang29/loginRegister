<?php
    if(isset($_SESSION['userLevel'])){
        echo "<h1 style='text-align:center'>HELLO USER</h1>";
    }
    else{
        header("location:index.php?controller=user&&action=login");
    }
?>

<?php
if(isset($_SESSION['userLevel'])){
    session_destroy();
    header("location:index.php");
}
else{
    echo "<h1>Error</h1>";
}

?>
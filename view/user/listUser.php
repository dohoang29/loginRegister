<?php
if(isset($_SESSION['userLevel'])== 2){
    if(isset($result)){
?>
    <form method="post">
        <table border="1" align="center">
            <tr>
                <td colspan="5" style="text-align:center">
                    Member list
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>Password</td>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Level</td>
            </tr>
            <?php
            foreach($result as $row){
                echo "<tr>";
                    echo "<td>".$row['email']."</td>";
                    echo "<td>".$row['userPass']."</td>";
                    echo "<td>".$row['firstName']."</td>";
                    echo "<td>".$row['lastName']."</td>";
                    echo "<td>".$row['userLevel']."</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </form>
<?php
    }
}
else{
    header("location:index.php");
}
?>

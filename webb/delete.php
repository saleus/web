<?php
if(isset($_POST["delete"]))
{
    include('bd.php');
    $userid = $_POST["delete"];
    $result = mysqli_query($link, "DELETE FROM news WHERE id = $userid");
    if($result = true){
         
        header("Location:новости_admin.php");
    }
}
?>
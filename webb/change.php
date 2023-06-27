<?php
if(isset($_POST["text"]) and isset($_POST["id"]))
{
    include('bd.php');
    $text = $_POST["text"];
	$userid = $_POST["id"];
    $result = mysqli_query($link, "UPDATE news SET novosti = '$text' WHERE id = $userid");
    if($result = true){
         
        header("Location:новости_admin.php");
    }
}
?>
<?php
if (isset($_POST["text"])) {
    include("bd.php");
    $text = $_POST["text"];
    $result = mysqli_query($link, "INSERT INTO news VALUES (default, '$text')");
	if ($result = true)
		header('Location:новости_admin.php');
}
?>
<?php
    //  вся процедура работает на сессиях. Именно в ней хранятся данные  пользователя, пока он находится на сайте. Очень важно запустить их в  самом начале странички!!!
    session_start();
    ?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="style.css">
<title>Контакты</title>
</head>
<body>
<div id="container">
	<div id="header">
		
		<?php include('header.php')?>

	</div>
	<div id="content2">
	<div class='contact_div'><img src="гео.png" class='contact'>Г. Тимберсов ул. лесозаводская, 35</div>
	<div class='contact_div'><img src="телефон.png" class='contact'>8-800-322-22-80</div>
	<div class='contact_div'><img src="факс.png" class='contact'>treant-protector@mail.ru</div>
	
	</div>
	<div id="footer">
	<?php include('footer.php') ?>
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="burger.js"></script> 
</body>
</html>
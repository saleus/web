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
<title>Новости</title>
</head>
<body>

<div id="container">
	<div id="header">
		<div id="header">
		<?php include('header.php')?>
	</div>
	</div>
	<div id="content">
		<?php
			include ("bd.php");
            
			$query = 'select * from news order by id desc';
			$result = mysqli_query($link, $query);
			while ($data = mysqli_fetch_assoc($result)) {
		?>
		<div id="item"><?php echo $data['novosti'] ?></div>	
		<?php 
			}
		?>
	</div>
	<div id="footer">
	<?php include('footer.php') ?>
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="burger.js"></script> 
</body>
</html>
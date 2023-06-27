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
<title>Каталог</title>
</head>
<body>
<div id="container">
	<div id="header">
		<div id="header">
		<?php include('header.php')?>
	</div>
		
	</div>
	<div id="content">
		<table  width="90%" align="center" cellpadding="1%" cellspacing="1%">
			<tr>
				<th width="25%">Наименование единицы</th>
				<th width="25%">Наименование древисины</th>
				<th width="25%">Размер(мм)</th>
				<th width="25%">Стоимость(за куб.м.)</th>
			</tr>
		</table>
		<?php
			include ("bd.php");
            
			$query = 'select * from catalog';
			$result = mysqli_query($link, $query);
			while ($data = mysqli_fetch_assoc($result)) {
		?>
		<table border="1" width="90%" align="center" cellpadding="15px">
			<tr>
				<td width="25%"><?php echo $data['name']?></th>
				<td width="25%"><?php echo $data['type']?></th>
				<td width="25%"><?php echo $data['size']?></th>
				<td width="25%"><?php echo $data['cost']?></th>
			</tr>
			
		
					
			</table>
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
<?php
    //  вся процедура работает на сессиях. Именно в ней хранятся данные  пользователя, пока он находится на сайте. Очень важно запустить их в  самом начале странички!!!
    session_start();
    ?>
    <html>
    <head>
    <title>Главная страница</title>
	<link rel="stylesheet" href="index.css">
	<link rel="stylesheet" href="style.css">
    </head>
    <body>
	<div id="container">
	<div id="header">
		<div id="header">
		<?php include('header.php')?>
	</div>
	</div>
	<div id="content">
	 <h2>Вход</h2>
    <form action="testreg.php" method="post">

    <!--****  testreg.php - это адрес обработчика. То есть, после нажатия на кнопку  "Войти", данные из полей отправятся на страничку testreg.php методом  "post" ***** -->
 <p>
    <label>Ваш логин:<br></label>
    <input name="login" type="text" size="15" maxlength="15">
    </p>


    <!--**** В текстовое поле (name="login" type="text") пользователь вводит свой логин ***** -->
 
    <p>

    <label>Ваш пароль:<br></label>
    <input name="password" type="password" size="15" maxlength="15">
    </p>

    <!--**** В поле для паролей (name="password" type="password") пользователь вводит свой пароль ***** --> 

    <p>
    <input type="submit" name="submit" value="Войти">

    <!--**** Кнопочка (type="submit") отправляет данные на страничку testreg.php ***** --> 
<br>
 <!--**** ссылка на регистрацию, ведь как-то же должны гости туда попадать ***** --> 
<a href="reg.php">Зарегистрироваться</a> 
    </p></form>
    <br>
	</div>
	<div id="footer">
		<?php include('footer.php') ?>
	</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="burger.js"></script> 
    </body>
    </html>
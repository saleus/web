<header class = "header">
	<div class="container header__container">
        <div class="menu-burger__header">
            <span></span>
        </div>
		<nav class="header__nav">
            <ul class="menu header__menu">
				<img class="axe" src="Топорик.jpg">
                <li><a href="index.php" class="button">Главная</a></li>
					<li><?php 
						if ($_SESSION['login'] === 'admin') {echo '<a href="новости_admin.php" class="button">Новости</a>';}
						else {echo '<a href="новости.php" class="button">Новости</a>';}
					?>
				</li>
                <li><a href="каталог.php" class="button">Каталог</a></li>
                <li><a href="контакты.php" class="button">Контакты</a></li>
                <li><?php if (isset ($_SESSION['login']) ){echo '<a href="exit.php" class="buttonreg">Выход</a>';}
							else {echo '<a href="reg_main.php" class="buttonreg">Вход</a>';}
					?>
				</li
            </ul>
        </nav>
</div>
</header>		
		
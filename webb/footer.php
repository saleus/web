<div id="current_date_time_block2"></div>

		<script type="text/javascript">
			
			/* функция добавления ведущих нулей */
			/* (если число меньше десяти, перед числом добавляем ноль) */
			function zero_first_format(value)
			{
				if (value < 10)
				{
					value='0'+value;
				}
				return value;
			}

			/* функция получения текущей даты и времени */
			function date_time()
			{
				var current_datetime = new Date();
				var day = zero_first_format(current_datetime.getDate());
				var month = zero_first_format(current_datetime.getMonth()+1);
				var year = current_datetime.getFullYear();
				var hours = zero_first_format(current_datetime.getHours());
				var minutes = zero_first_format(current_datetime.getMinutes());
				var seconds = zero_first_format(current_datetime.getSeconds());

				return day+"."+month+"."+year+" "+hours+":"+minutes+":"+seconds;
			}
	
			/* каждую секунду получаем текущую дату и время */
			/* и вставляем значение в блок с id "current_date_time_block2" */
			setInterval(function () {
				document.getElementById('current_date_time_block2').innerHTML = date_time();
			}, 1);
		</script>
		<div id="reg"><?php
    // Проверяем, пусты ли переменные логина и id пользователя
    if (empty($_SESSION['login']) or empty($_SESSION['id']))
    {
    // Если пусты, то мы не выводим ссылку
    echo "Вы вошли на сайт, как гость";
    }
    else
    {

    // Если не пусты, то мы выводим ссылку
    echo "Вы вошли на сайт, как ".$_SESSION['login']."<br>";
    }
    ?>
	</div>
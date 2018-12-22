<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Регистрация</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<div class="header">
		<h2>Логин</h2>
	</div>
	
	<form method="post" action="login.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Пользователь</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Пароль</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn">Войти</button>
		</div>
		<p>
			Вы еще не пользователь? <a href="register.php">Зарегистрироватся</a>
		</p>
	</form>


</body>
</html>
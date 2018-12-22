<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Регистрация</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Регистрация</h2>
	</div>
	
	<form method="post" action="register.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Пользователь</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Пароль</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Подтвердить пароль</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="register_btn">Зарегистрироватся</button>
		</div>
		<p>
			Вы пользователь? <a href="login.php">Войти</a>
		</p>
	</form>
</body>
</html>
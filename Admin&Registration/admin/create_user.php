<?php include('../functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>создать пользователя</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<style>
		.header {
			background: #003366;
		}
		button[name=register_btn] {
			background: #003366;
		}
	</style>
</head>
<body>
	<div class="header">
		<h2>Администратор - создать пользователя</h2>
	</div>
	
	<form method="post" action="create_user.php">

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
			<label>Тип пользователя</label>
			<select name="user_type" id="user_type" >
				<option value=""></option>
				<option value="admin">Админ</option>
				<option value="user">Пользователь</option>
			</select>
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
			<button type="submit" class="btn" name="register_btn"> + Создать пользователя</button>
		</div>
	</form>
</body>
</html>
<?php
session_start();
$connect = new PDO("mysql:host=localhost; dbname=laratry; charset=utf8",'root','');
if ($_SESSION['userid']){
    header("location: page.php");
    echo "Да";
} else {

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,500;1,100&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<title>Laratry</title>
</head>
<body>

	<header>
		<img src="img/logo.png" alt="logo">
	</header>

	<div class="container">
		<div class="index_form">
	        <div class="login form">
	            <h2>Вход</h2>

	            <form action="system/login.php" method="POST">
	                <p>Никнейм</p>
	                <input type="text" name="log_nick">
	                <p>Пароль</p>
	                <input type="password" name="log_password">
	                <input type="submit" value="Войти" class="submit">
	            </form>

	        </div>

	        <div class="regis form">
	            <h2>Регистрация</h2>

	            <form action="system/signup.php" method="POST">
	                <p>Никнейм</p>
	                <input type="text" name="reg_nick">
	                <p>Имя</p>
	                <input type="text" name="reg_name">
	                <p>Фамилия</p>
	                <input type="text" name="reg_surname">
	                <p>Пароль</p>
	                <input type="password" name="reg_password">
	                <p>Подтвердите пароль</p>
                    <input type="password" name="reg_password_confirm">
                    <p>Аватарка</p>
                    <input type="text" name="avatar" placeholder="Введите ссылку">
	                <input type="submit" value="Начать!" class="submit">
	            </form>

	        </div>
		</div>
	</div>
	
</body>
</html>
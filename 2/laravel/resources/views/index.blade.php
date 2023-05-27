@extends('layouts.app')
@section('title', 'laratry')
@section('content')
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
@endsection
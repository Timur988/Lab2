<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style>

</style>
<link rel="stylesheet" href="field.css">
</head>
<body>
<p><a href="index.php" class="btn btn-lg btn-block btn-primary">Главная страница</a></p>
<?php
             session_start();
			 if(empty ($_COOKIE['user'])):		
			?>
			<p align="center"><font size="16" color="blue"> <b><i>Авторизация</i></font></p></b>
			<?php endif;?>
			
		</div>
			<?php
			 if(empty ($_COOKIE['user'])):		
			?>
		<div class="container mt-4">
			<form action="php/auth.php" method="post">
				<input type="text" class="form-control" name="login"
				id="login" placeholder="Введите логин"><br>	
				<input type="password" class="form-control" name="pass"
				id="pass" placeholder="Введите пароль"><br>
				<button class="btn btn-success" type="submit">Войти</button>
			</form>
		</div>
			<?php endif;?>
			
			<?php
			 if(empty ($_COOKIE['user'])):	
			?>
           <p align="center"><font size="16" color="blue"> <b><i>Регистрация</i></font></p></b>
           <div class="container mt-4" align="center">
           <form action="php/check.php" method="post">
           <input type="text" class="form-control" name="login"
            id="login" placeholder="Введите логин"><br>
           <input type="text" class="form-control" name="name"
            id="name" placeholder="Введите имя"><br> 
           <input type="password" class="form-control" name="pass"
            id="pass" placeholder="Введите пароль"><br>
           <button class="btn btn-success" type="submit">Зарегистрировать</button>
           </form>
		   <?php endif;?>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
<?php
 
 session_start();



 $login = filter_var(trim($_POST['login']),
 FILTER_SANITIZE_STRING);
 $pass = filter_var(trim($_POST['pass']),
 FILTER_SANITIZE_STRING);



$pass = md5($pass."gdgdsdgetgetgot45588");//хеширование пароля

$mysql = new mysqli('localhost','root','','register-bd');

$result = $mysql->query("SELECT * FROM `users` WHERE `login` = 
	'$login' AND `pass`='$pass'");
	$user = $result->fetch_assoc();
	$_SESSION['user'] = [
            "id" => $user['id'],
            "name" => $user['name'],
        ];
	if (mysqli_num_rows($user) > 0) {

        $user = mysqli_fetch_assoc($user);

        $_SESSION['user'] = [
            "id" => $user['id'],
            "name" => $user['name'],
        ];

        header('Location: /');

    } else {
        $_SESSION['message'] = 'Не верный логин или пароль';
        header('Location: ../index.php');
    }
    ?>
		exit();
	}
	
	$mysql->close();
	
	header('Location: /index.php');

?>
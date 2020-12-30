<?php
 session_start();

 
$login = filter_var(trim($_POST['login']),
FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']),
FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),
FILTER_SANITIZE_STRING);

if(mb_strlen($login) < 5 || mb_strlen($login)>50)
{
echo "Недопустимая длина логина (от 5 до 50 символов)";
exit();
}else if(mb_strlen($name) < 3 || mb_strlen($name)>30)
{
echo "Недопустимая длина имени(от 3 до 30 символов)";
exit();
}else if(mb_strlen($pass) < 4 || mb_strlen($pass)>32)
{
echo "Недопустимая длина пароля(от 4 до 32 символов)";
exit();
}

$pass = md5($pass."gdgdsdgetgetgot45588");//хеширование пароля

$mysql = new mysqli('localhost','root','','register-bd');
$mysql->query("INSERT INTO `users` (`login`, `pass`, `name`)
VALUES('$login', '$pass', '$name')");

$_SESSION['message'] = 'Регистрация прошла успешно!';
        header('Location: ../good.html');


?>

$mysql->close();

header('Location: /');
?>
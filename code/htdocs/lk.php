<?php
    session_start();
			 ?>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="MAINframe1.css">
<link rel="stylesheet" href="indexcss.css">
</head>
<body>
<p><a href="index.php" class="btn btn-lg btn-block btn-primary">Главная страница</a></p>
<style>
   body {
    background-image: linear-gradient(to top, #ff9a9e 0%, #fecfef 99%, #fecfef 100%);
    color: black;
  }
  </style>
</div>

			<br><font size="+3" face="segoe UI black">Ваш любимый воспитатель:<br> <?=$_COOKIE['lk']?> </font>
			
		

		<div id="txt2">
			<br><font size="+3" face="segoe UI black">Изменить выбор</font>
		</div>

		<div id="lk" class="container mt-4">
			<form action="php/lk1.php" method="post">
				<input type="text" class="form-control" name="best"
				id="best" placeholder="Введите имя своего любимого воспитателя"><br>
				<button class="btn btn-success" type="submit">Подтверждаю</button>
			</form>
		</div>	
<script type="text/javascript">

</script>


<span id="doc_time">

</span>

<script type="text/javascript">
 clock();
</script>

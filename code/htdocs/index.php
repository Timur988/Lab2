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
  <style>
    body {
      background-image: linear-gradient(to top, #ff9a9e 0%, #fecfef 99%, #fecfef 100%);
      color: black;
    }
  </style>

  <script type="text/javascript">

  </script>


  <span id="doc_time">

  </span>

  <script type="text/javascript">
    clock();
  </script>


  <!--<div align="center" style='font-size:40px'>В котором МОЖНО НАУЧИТЬСЯ....</div>
<div align="center" style='font-size:35px'>ОЧЕНЬ МНОГОМУ</div>
<div align="center" style='font-size:40px'>В БУДУЩЕМ ВАМ РЕБЕНОК СКАЖЕТ СПАСИБО ЗА ТО, ЧТО ОТДАЛИ РЕБЕНКА ИМЕННО В НАШ ДЕТСКИЙ САД</div>!-->


  <div class="row">
    <div class="col-sm-4">

    </div>
    <div class="col-sm-4">
      <div align="center" style='font-size:50px' 'color:#0000ff'>Дендрарий</div>
      <div align="center" style='font-size:45px'>Самый лучший садик</div>
      <?php
      if (empty($_SESSION['user'])) :
      ?>
        <p><a href="reg.php" class="btn btn-lg btn-block btn-primary">Войти/зарегистрироваться</a></p>
      <?php else : ?>
        
        <a href="lk.php">Личный кабинет </a> &nbsp;<a href="php/exit.php">Выход</a></font></u></a>
      <?php endif; ?>

      <p><a href="vosp.HTML" class="btn btn-lg btn-block btn-primary">Наши воспитатели</a></p>
      <p><a href="VeryTXT.html" class="btn btn-lg btn-block btn-primary">Немного о нас</a></p>
      <p><a href="anchor.php" class="btn btn-lg btn-block btn-primary">Работа с детьми</a></p>
      <p><a href="give-me-your-son.php" class="btn btn-lg btn-block btn-primary">Отдай нам своего сына</a></p>

      <h1 id="jopa">ВЛАДЕЛЬЦЫ:</h1>
      <div class="photo" data-title="Тимур"><img src="Timur.jpg" alt=""></div>
      <div class="photo" data-title="Тимур"><img src="bnv1.jpg" alt=""></div>
      <div class="col-sm-4"></div>




      <style>
        .photo {
          padding: 100px;
          display: inline-block;
          position: relative;
        }

        .photo:hover::after {
          content: attr(data-title);
          position: absolute;
          left: 0;
          right: 0;
          bottom: 5px;
          z-index: 1;
          background: rgba(0, 42, 167, 0.6);
          color: #fff;
          text-align: center;
          font-family: Arial, sans-serif;
          font-size: 11px;
          padding: 5px 10px;
          border: 1px solid #333;
        }
      </style>






      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </div>
  </div>
</body>

</html>
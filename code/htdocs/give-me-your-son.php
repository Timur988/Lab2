<html>

<head>
    <title>Дети</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="MST.css">
    <script src="jquery.js"></script>
    <script src="validate.js"></script>
</head>

<body>
    <p><a href="index.php" class="btn btn-lg btn-block btn-primary">Главная страница</a></p>
    <div id="container">
        <div id="header">
            <h3>Все что нужно знать о наших якорях:)</h3>
        </div>

        <div id="navigation">
            <h2><img src="чап3.jpg" width="384" height="216"> </h2>
        </div>
        <div id="sidebar">
            <h2>Приколюхи в садике</h2>
            <ul>
                <li><strong>Питание</strong> - 5 раз в день</li>
                <li><strong>Игрушки</strong> - Самые разные и самые крутые</li>
                <li><strong>Двор</strong> - Самый большой и самый равзлекательный</li>
                <li><strong>Воспитатели</strong> - Самые-самые</li>
                <li><strong>Конфетки</strong> - Самые вкусные</li>
                <li><strong>Санузлы</strong> - Самые чистые</li>
                <img src="чап.jpg">
                <img src="чап2.jpg">
                <audio controls>

                    <source src="Бременские музыканты - Ничего на свете лучше нету.mp3" type="audio/mpeg">

                </audio>

            </ul>
        </div>


        <div id="content">
            <?if($_COOKIE["request"]):?>
                <h2>Очередь заявок:</h2><hr>
                <table align="center" border="1px">
                    <tr>
                        <td>Имя ребенка</td>
                        <td>Возраст ребенка</td>
                        <td>Пол ребенка</td>
                        <td>Краткое описание</td>
                    </tr>
                    <?foreach($_COOKIE["request"] as $request):?>
                        <tr>
                            <?foreach($request as $value):?>
                                <td><?=$value?></td>
                            <?endforeach;?>
                        </tr>
                    <?endforeach;?>
                </table>
            <?endif;?>
        
            <hr>
            <div>
                <form method="POST" id="give">
                    Оформить заявку на поступление в наш садик: <hr>
                    <input type="text" name="name" placeholder="ФИО ребенка" class="area">
                    <input type="text" name="age" placeholder="Возраст" class="area">
                    <p><input type="radio" name="sex" id="sex-1" value="Мальчик"><label for="sex-1">Мальчик</label>
                    <input type="radio" name="sex" id="sex-2" value="Девочка"><label for="sex-2">Девочка</label></p>
                    <textarea name="description" placeholder="Описание ребенка" class="area"></textarea>
                    <button type="submit">Отправить заявку</button>
                </form>
                <div class="res"></div>
            </div>
        </div>


        <div id="clear"></div>
        <div id="footer">
            <h2></h2>
        </div>
    </div>
</body>

</html>
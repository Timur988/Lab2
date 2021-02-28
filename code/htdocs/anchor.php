<?function cut(string $text)
{
    $title=array();
    $anchor = array();
    $cutText = explode('id="', $text);
    for($i=1; $i<count($cutText); $i++) {
        $tit = stristr($cutText[$i], ">");
        $tit = stristr($tit, "<", true);
        $title[] = $tit;

        $anchor[] = stristr($cutText[$i], '"', true);
    }
    $result = "";
    foreach($title as $i => $tit) {
        $result .= '<a href="#' . $anchor[$i] . '">' . $tit . '</a><br>';
    }
    $result .= '<hr>' . $text;
    return $result;
}?>
<html>

<head>
    <title>Работа с детьми</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="MST.css">
</head>

<body>
    <p><a href="index.php" class="btn btn-lg btn-block btn-primary">Главная страница</a></p>
    <div id="container">
        <div id="header">
            <h3>Все что нужно знать о нашем садике</h3>
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
            <?$text = '<u id="message">По сообщению пресс-службы правительства Кузбасса </u>для детей раннего возраста созданы центры активности,
             в которых они смогут играть с песком и водой, рисовать, рассматривать иллюстрации, заниматься музыкой или чтением.
              В группах от 3 до 7 лет есть зона познавательного развития для изучения математики и грамоты, конструирования,
               исследования окружающей среды. В групповых комнатах для детей старшего дошкольного возраста много свободного
                пространства, установлены столы для самостоятельных занятий и контейнеры с разным игровым материалом.
                <br>
                <u id="created">В детсаду создана соляная комната</u>, физкультурный и музыкальный залы. Также в детсаду оборудован мини-музей, посвященный
             работникам шахты «Ягуновская».
                <br>
             <u id="but">Несмотря</u> на все эти нововведения, в нашем детском саду всё остается по-прежнему прекрасно, изменения нам не нужны.
             Воспитатели - молодцы, воспитательницы - красивые, дети - ... Ну, идеал недостижим.';
            ?>
            <?= cut($text)?>
        </div>
        <div id="clear"></div>
        <div id="footer">
            <h2></h2>
        </div>
    </div>
</body>

</html>
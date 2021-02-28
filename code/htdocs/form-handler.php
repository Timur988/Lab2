<?if(!empty($_POST)) {
    if(count($_POST) == 4)
    {
        $count = count($_COOKIE["request"]);
        foreach($_POST as $key => $post) {
            setcookie("request[".$count."][".$key."]", $post);
        }
    }
    $result = array(
        'hasError' => false,
        'msg' => "Спасибо! Ваша заявка отправлена",
    );
    echo json_encode($result);
}?>
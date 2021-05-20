<?php
    $msg_box = ""; // в этой переменной будем хранить сообщения формы
    $errors = array(); // контейнер для ошибок
    $phone = $_POST['phone'];
    // проверяем корректность полей
    if($phone == "")
    {
        $errors[] = "Поле 'Номер телефона' не заполнено!";
    }elseif(!validPhone($phone)){
        $errors[] = "Телефон введен не корректно!";
    }


    // если форма без ошибок
    if(empty($errors)){
        // собираем данные из формы
        $message  = "Номер телефона: " . $_POST['phone'] . "<br/>";
        send_mail($message); // отправим письмо
        // выведем сообщение об успехе
        $msg_box = "<span style='color: green;'>Сообщение успешно отправлено!</span>";
    }else{
        // если были ошибки, то выводим их
        $msg_box = "";
        foreach($errors as $one_error){
            $msg_box .= "<span style='color: red;'>$one_error</span><br/>";
        }
    }

    // делаем ответ на клиентскую часть в формате JSON
    echo json_encode(array(
        'result' => $msg_box
    ));


    // функция отправки письма
    function send_mail($message){
        // почта, на которую придет письмо
        $mail_to = "ivan5420@yandex.ru";
        // тема письма
        $subject = "Письмо с обратной связи";

        // заголовок письма
        $headers= "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=utf-8\r\n"; // кодировка письма
        $headers .= "From: Тестовое письмо <no-reply@test.com>\r\n"; // от кого письмо

        // отправляем письмо
        mail($mail_to, $subject, $message, $headers);
    }


    function validPhone($phone)
    {
        if (preg_match("/^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/", $phone)) {
    	return true;
        } else {
    	      return false;
          }
    }

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Обратная связь. Ajax</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"  type="text/javascript"></script>
    <script>
        $(document).ready(function(){
            $('#btn_submit').click(function(){
                // собираем данные с формы
                var user_name    = $('#user_name').val();
                var user_email   = $('#user_email').val();
                var text_comment = $('#text_comment').val();
                // отправляем данные
                $.ajax({
                    url: "action.php", // куда отправляем
                    type: "post", // метод передачи
                    dataType: "json", // тип передачи данных
                    data: { // что отправляем
                        "user_name":    user_name,
                        "user_email":   user_email,
                        "text_comment": text_comment
                    },
                    // после получения ответа сервера
                    success: function(data){
                        $('.messages').html(data.result); // выводим ответ сервера
                    }
                });
            });
        });
    </script>
</head>
<body>
    <br/>
    <div class="messages"></div>
    <br/>
    <label>Ваше имя:</label><br/>
    <input type="text" id="user_name" value="" /><br/>

    <label>Ваш e-mail:</label><br/>
    <input type="text" id="user_email" value="" /><br/>

    <label>Текст сообщения:</label><br/>
    <textarea id="text_comment"></textarea>

    <br/>
    <input type="button" value="Отправить" id="btn_submit" />
</body>
</html>

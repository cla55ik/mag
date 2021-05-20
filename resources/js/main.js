



$(document).ready(function(){

  alert("aaa");
        $('#cta-form').submit(function(event){
          alert("ssss");
          event.preventDefault();
          // собираем данные с формы
          var phone = $('#phone').val();
          alert(phone);
          // отправляем данные
         $.ajax({
              url: "/resources/mail.php", // куда отправляем
              type: "post", // метод передачи
              dataType: "json", // тип передачи данных
              data: { // что отправляем
                  "phone": phone,
              },
              // после получения ответа сервера
              success: function(data){
                  $('.messages').html(data.result); // выводим ответ сервера
              }
          });
      });
  });

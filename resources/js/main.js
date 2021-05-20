



$(document).ready(function(){


        $('#cta-form').submit(function(event){

          event.preventDefault();
          // собираем данные с формы
          var phone = $('#phone').val();
          
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




  function headerPopup(){

    document.getElementById('header-popup').classList.remove('hide');
    document.getElementById('header-popup').classList.add('popup-visible');


  }

  function popupClose(){
    document.getElementById('header-popup').classList.remove('popup-visible');
    document.getElementById('header-popup').classList.add('hide');
  }





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



  let offset = 0;

  document.addEventListener("DOMContentLoaded", ready);

  function ready() {

    document.querySelector('.slider-line').style.left = '0px';
    const sliderLine = document.querySelector('.slider-line');
    var next = document.querySelector('.btn-next');
    next.addEventListener('click', offsetFunc);
  }





  function offsetFunc(){

    offset -= 150;
    if(offset < -750){
      offset = 0;
    }
    document.querySelector('.slider-line').style.left = offset + 'px';
  }

  document.addEventListener("DOMContentLoaded", cutReview);

  function cutReview(){
  let limit = 350
  var texts = document.getElementsByClassName('review-text');

  i=0;
  for(text of texts){
    let t = text.innerHTML;

    let l = t.length;

    if(l>limit){
      let textVis = t.slice(0,limit)
      let textHid = t.slice(limit, l)
      //textVis = textVis + '...'
      current = document.getElementsByClassName('review-text')[i]
      current.classList.add('hide');
      current.insertAdjacentHTML('afterend', '<p class="m-0">' + textVis + '<span id="dots' + i + '" class="visible">...</span><span id="hide' + i + '" class="hide">' + textHid + '</span></p><a class="show-text" id=showButton' + i + ' onclick="showText(' + i + ')">Далее</a>')

    }



    i++
  }
};



function showText(i){

  let elem = document.getElementById('hide' + i)
  let dots = document.getElementById('dots' + i)
  let btn = document.getElementById('showButton' + i)
  currentClass = elem.classList.item(0)

  if(currentClass === 'hide'){
    elem.classList.remove('hide')
    elem.classList.add('visible')
    dots.classList.remove('visible')
    dots.classList.add('hide')
    btn.innerHTML = 'Скрыть'
  }else if(currentClass === 'visible'){
    elem.classList.remove('visible')
    elem.classList.add('hide')
    dots.classList.remove('hide')
    dots.classList.add('visible')
    btn.innerHTML = 'Далее'

  }

}

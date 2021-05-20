<div class="header-popup hide" id="header-popup">
  <div class="text-right btn_close">
    <a onclick="popupClose()"><span class="text-right p-3">x</span></a>
  </div>
  <div class="popup-title text-center font-weight-bold">
    Оставьте свой номер телефона
  </div>
  <div class="popup-description text-center">
    перезвоним в течении 30 минут
  </div>
  <div class="row cta-form ">
    <div class="messages" id="result">
    </div>
  <div class="text-center pt-5">
    <form class="cta-form-popup" action="/resources/mail.php" method="post" id="cta-form">
      <input type="text" id="phone" name="phone" value="" placeholder="+7 --- --- -- --" required>
      <input type="submit" name="btn_submit" value="Отправить">
    </form>
  </div>
</div>
</div>

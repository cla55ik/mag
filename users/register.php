<?php

include_once ($_SERVER['DOCUMENT_ROOT']. "/controller/userController.php");

?>

<form method="POST">
  Логин <input name="login" type="text" required><br>
  Пароль <input name="password" type="password" required><br>
  <input name="register" type="submit" value="Зарегистрироваться">
</form>

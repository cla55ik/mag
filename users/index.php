<?php

include_once ($_SERVER['DOCUMENT_ROOT']. "/controller/userController.php");

?>




<h1>Users INDEX</h1>







<form method="POST">
Логин <input name="login" type="text" required><br>
Пароль <input name="password" type="password" required><br>

<input name="submit" type="submit" value="Войти">
</form>


<div class="">
  <form method="POST">
  <input name="logout" type="submit" value="Logout">
  </form>
  
</div>

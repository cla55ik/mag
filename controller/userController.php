<?php

include_once ($_SERVER['DOCUMENT_ROOT']. "/objects/user.php");
include_once ($_SERVER['DOCUMENT_ROOT']. "/config/database.php");



$database = new my_DB();
$db = $database->getConnect();

$user = new User($db);





if(isset($_POST['register'])){
  $login = $_POST['login'];
  $pass = $_POST['pass'];

  echo "POST";
  if($user->loginValidation($login)){
    echo "Valid";
    if($user->isUnique($login)){
      echo "UNIQUE";
      $user->createUser($login, $pass);
      header("Location: index.php"); exit();
    }else{
      echo "NOT";
    }
  }else{
    echo "NOT valid";
  }


}elseif(isset($_POST['login'])){
  echo "string";
  $login = $_POST['login'];
  $pass = $_POST['pass'];
  $user->loginnUser($login, $pass);
  echo "NOT POST";
}elseif(isset($_POST['logout'])){
  $user->userLogout();
}





/*

if(isset($_POST['register']))
{
  $err = [];
  if(!preg_match("/^[a-zA-Z0-9]+$/"), $_POST['login'])
  {
    $err[] = "Логин может состоять только из букв английского алфавита и цифр";
  }
  if(strlen($_POST['login']) < 3 or strlen($_POST['login']) > 30)
    {
        $err[] = "Логин должен быть не меньше 3-х символов и не больше 30";
    }

    $login = $_POST['login'];


}
*/

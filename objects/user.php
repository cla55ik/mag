<?php

  class User{
    private $conn;
    private $table_name = "users";


    public function __construct($db)
    {
      $this->conn = $db;
    }

    public function createUser($login, $pass)
    {
      $pass = md5(md5(trim($pass)));
      $login = trim($login);
      $sql = "INSERT INTO " . $this->table_name . " (login, pass) VALUES (:login, :pass)";
      $stmt = $this->conn->prepare($sql);
      $stmt->bindParam(':login', $login);
      $stmt->bindParam(':pass', $pass);
      $stmt->execute();
    }

    public function loginUser()
    {

    }

    public function isUnique($login){
      $login = trim($login);
      $sql = "SELECT COUNT(id) FROM " . $this->table_name . " WHERE login = :login";
      $stmt = $this->conn->prepare($sql);
      $stmt->bindParam(':login', $login);
      $stmt->execute();
      $count = $stmt->fetchColumn();


      if($count > 0){
        return false;
      }else{
        return true;
      }
    }

    public function loginValidation($login)
    {
      $login = trim($login);
      $err = [];

      if(strlen($login) < 3 or strlen($login) > 30)
        {
            $err[] = "Логин должен быть не меньше 3-х символов и не больше 30";
        }
      if($err){
        return false;

      }else{
        return true;
      }

    }





    private function generateCode($length)
    {
      $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHI JKLMNOPRQSTUVWXYZ0123456789";
      $code = "";
      $clen = strlen($chars) - 1;
      while (strlen($code) < $length) {
              $code .= $chars[mt_rand(0,$clen)];
    }
      return $code;
    }

    public function loginnUser($login, $pass)
    {
      $login = trim($login);
      $pass = md5(md5(trim($pass)));


      $sql = "SELECT login, pass FROM " .$this->table_name . " WHERE login = :login";

      $stmt = $this->conn->prepare($sql);
      $stmt->bindParam(':login', $login);
      $stmt->execute();
      $data = $stmt->fetch();

      if($data['pass'] == $pass)
      {

        $hash = md5($this->generateCode(10));
        $sqlupdate = "UPDATE " . $this->table_name . " SET hash = :hash WHERE id = :id";
        $stmt = $this->conn->prepare($sqlupdate);
        $stmt->bindParam(':hash', $hash);
        $stmt->bindParam(':id', $data['id']);
        $stmt->execute();

        // Ставим куки
        setcookie("id", $data['id'], time()+60*60*24*30, "/");
        setcookie("hash", $hash, time()+60*60*24*30, "/", null, null, true); // httponly !!!

        // Переадресовываем браузер на страницу проверки нашего скрипта

        //header("Location: index.php");
        print "Вы авторизовались ";
        echo $data['login'];
        exit();

      }else
        {
          print "Вы ввели неправильный логин/пароль";
        }
    }

    public function userLogout(){
      setcookie("id", "", time() - 3600*24*30*12, "/");
      setcookie("hash", "", time() - 3600*24*30*12, "/",null,null,true); // httponly !!!

      header("Location: /"); exit;
    }


  }

<?php
class my_DB {
  private $host="localhost";
  private $user="u193192659_mag";
  private $password="yRe]tWLu6]";
  private $db_name="u193192659_mag";
  public $conn;


  public function getConnect(){
    $this->conn = null;


    try {
      $this->conn=new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->user, $this->password);

    } catch(PDOException $exception) {
      echo "Ошибка соединения: " . $exception->getMessage();
    }
    echo ('Соединение установлено');
    return $this->conn;

  }

  public function closeConnect(){
    $this->conn = null;
    return $this->conn;
    echo "Соедининие закрыто";
  }



}

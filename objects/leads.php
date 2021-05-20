<?php

class Leads{
  private $conn;
  private $table_name = "leads";

  public function __construct($db)
  {
    $this->conn = $db;
  }

  public function leadCreate($phone){
    $date = time();
    $sql = "INSERT INTO " . $this->table_name . " (phone, date) VALUES (:phone, :date)";
    $stmt = $this->conn->prepare($sql);
    $stmt->bindParam(':phone', $phone);
    $stmt->bindParam(':date', $date);
    $stmt->execute();
  }

  public function getDate($date){
    echo ('grtDate Start');
    $format_date  = date('d.m.Y', $date);
    return $format_date;
  }

  public function getAllLeads(){
    $sql = "SELECT * FROM " . $this->table_name;
    $stmt = $this->conn->query($sql);
    $leads_array = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $leads_array;
  }


}

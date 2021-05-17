<?php


class MaterialCat{
  private $conn;
  private $table_name = "materials_cat";

  public $id;
  public $name;


  public function __construct($db){
    $this->conn = $db;
  }


  public function getAll(){
    $query = "SELECT * FROM " . $this->table_name;
    $stmt = $this->conn->query($query);
    $array_cat_mat = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $array_cat_mat;
  }
  


}

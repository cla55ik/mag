<?php


class Category{
  private $conn;
  private $table_name = "category";

  public $id;
  public $cat_name;
  public $cat_img;
  public $cat_url;
  public $max_price;
  public $sub_1;
  public $sub_2;
  public $sub_3;

  public function __construct($db)
  {
    $this->conn = $db;

  }

public function getAll()
{
  
  $query = "SELECT * FROM category";

  $stmt = $this->conn->query("SELECT * FROM category");

  $array_cat = $stmt->fetchAll(PDO::FETCH_ASSOC);


  return $array_cat;
}







  public function getSimilar()
  {
    $query = "SELECT
                id,
                cat_name,
                cat_img,
                cat_url,
                FROM " . $this->table_name ."
                WHERE
                  cat_id != ?
                  LIMIT 4";

    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(1, $this->id);
    $stmt->execute();

    return $stmt;
  }

  public function getOne(){
    $query = "SELECT
                id,
                cat_name,
                cat_img,
                cat_url,
                FROM " . $this->table_name ."
                WHERE
                  cat_id = ?";

    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(1, $this->id);
    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    $this->id = $row['id'];
    $this->cat_name = $row['cat_name'];
    $this->cat_img = $row['cat_img'];
    $this->cat_url = $row['cat_url'];

  }


}

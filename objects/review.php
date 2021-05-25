<?php

class Review {
  private $conn;
  private $table_name = 'review';


  public function __construct($db)
  {
    $this->conn = $db;
  }



  public function getAll(){
    $sql = "SELECT * FROM " . $this->table_name;
    $stmt = $this->conn->query($sql);
    $all_reviews = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($all_reviews as $review) {
      getType($review['type']);
      $this->type = $type;
    }

    return $all_reviews;
  }

  public function getOne($id)
  {
    $sql = "SELECT * FROM review WHERE id = ?";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute([$id]);

    $one_review = $stmt->fetch();

    return $one_review;
  }

  public function createReview($name, $text, $type, $price, $img)

  {
      $sql = "INSERT INTO review (name, text, type, price, img) VALUES(?,?,?,?,?)";
      $query = $this->conn->prepare($sql);
      $query->execute([$name, $text, $type, $price, $img]);

  }

  public function updateReview($name, $text, $type, $price, $img, $id)
  {
    $sql = "UPDATE review SET name = ?, text = ?, type = ?, price = ?, img = ? WHERE id=? ";
    $query = $this->conn->prepare($sql);
    $query->execute([$name, $text, $type, $price, $img, $id]);

  }


  public function deleteReview($id)
  {
    $sql = "DELETE FROM review WHERE id=:id";

  	$query = $this->conn->prepare($sql);
  	$query->bindParam(':id', $id);
  	$query->execute();
  }

  private function getType($type)
  {
    switch ($type) {
      case 1:
        $type = "Диван";
        break;
      case 2:
        $type = "Кухня";
        break;
      case 3:
        $type = "Шкаф-купе";
        break;
    }
    return $type;
  }




}

<?php

  class Material {
    private $conn;
    private $table_name = "materials";

    public function __constract($db){
      $this->conn = $db;

    }

    public function getAll()
    {
      $query = "SELECT * FROM " . $this->table_name;
      $stmt = $this->conn->query($query);
      $array_material = $stmt->fetchAll(PDO::FETCH_ASSOC);

      return $array_material;
    }
/*
    public function getAllFromCategory($cat_id){
      //$query = "SELECT * FROM " . $this->table_name . " WHERE cat_id = ?";
    //  echo "$''{query}";
    //  $stmt = $this->conn->prepare($query);
    //  echo "$stmt";

      $stmt = $this->conn->prepare('SELECT * FROM materials WHERE cat_id = ?')
      $stmt->execute(array($cat_id))
      $array = $stmt->fetchAll(PDO::FETCH_ASSOC);

      return $array;
    }


*/
  };

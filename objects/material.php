<?php

  class Material {
    private $conn;
    private $table_name = "materials";

    public $id;
    public $cat_id;
    public $name;
    public $img;


    public function __construct($db){
      $this->conn = $db;

    }

    public function getAll()
    {
      $query = "SELECT * FROM " . $this->table_name;
      $stmt = $this->conn->query($query);
      $array_material = $stmt->fetchAll(PDO::FETCH_ASSOC);

      return $array_material;
    }


    public function getAllFromCat($cat_id){
      $query = "SELECT * FROM " . $this->table_name . " WHERE cat_id = :cat_id";
      $stmt = $this->conn->prepare($query);
      $stmt->bindParam(':cat_id', $cat_id);
      $stmt->execute();

      $array_material = $stmt->fetchAll();
      return $array_material;
    }


  };

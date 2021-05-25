<?php

include_once ($_SERVER['DOCUMENT_ROOT']. "/config/database.php");
include_once ($_SERVER['DOCUMENT_ROOT']. "/objects/review.php");



$database = new my_DB();
$db = $database->getConnect();

$model = new Review($db);

$all_review = $model->getAll();


if (isset($_POST['create_review'])) {
  $name = $_POST['name'];
  $text = $_POST['text'];
  $type = $_POST['type'];
  $price = $_POST['price'];
  $img = $_POST['img'];




  $model->createReview($name, $text, $type, $price, $img);

	header('Location: /crud/review.php/?status=success');
	exit;
}elseif(isset($_POST['update_submit'])){
  $id = $_GET['id'];
  $name = $_POST['name'];
  $text = $_POST['text'];
  $type = $_POST['type'];
  $price = $_POST['price'];
  $img = $_POST['img'];

  $current_review = $model->getOne($id);
  if($name == ''){
    $name = $current_review['name'];
  }
  if($text == ''){
    $text = $current_review['text'];
  }
  if(!$type){
    $type = $current_review['type'];
  }
  if (!$price) {
    $price = $current_review['price'];
  }
  if(!$img){
    $img = $current_review['img'];
  }

  $model->updateReview($name, $text, $type, $price, $img, $id);
  header('Location: /crud/review.php/?status=success');
	exit;
}elseif(isset($_POST['delete_submit'])){
  $id = $_GET['id'];
  $model->deleteReview($id);
  header('Location: /crud/review.php/?status=success');
	exit;
}

<?php


include_once ($_SERVER['DOCUMENT_ROOT']. "/config/database.php");
include_once ($_SERVER['DOCUMENT_ROOT']. "/objects/category.php");



$database = new my_DB();
$db = $database->getConnect();


$cat = new Category($db);


$alltest = $cat->getAll();

$database->closeConnect();

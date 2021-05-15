<?php

include_once($_SERVER['DOCUMENT_ROOT']. "/config/database.php");

include_once($_SERVER['DOCUMENT_ROOT']. "/objects/material.php");



$database = new my_DB();
$db = $database->getConnect();


$cat_id = 2;
$materials = new Material($db);

echo "cat_id = " . $cat_id;



$allMaterial = $materials->getAll();
echo "string";
//$allInCat = $materials->getAllFromCategory($cat_id);

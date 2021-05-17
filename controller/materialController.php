<?php

include_once ($_SERVER['DOCUMENT_ROOT']. "/config/database.php");
include_once ($_SERVER['DOCUMENT_ROOT']. "/objects/material.php");
include_once ($_SERVER['DOCUMENT_ROOT']. "/objects/material_cat.php");


$database = new my_DB();
$db = $database->getConnect();

$materials_cat = new MaterialCat($db);

$all_material_cat = $materials_cat->getAll();


$materials = new Material($db);


$all_materials = $materials->getAll();

$materials_from_cat = $materials->getAllFromCat($cat_id);


$database->closeConnect();

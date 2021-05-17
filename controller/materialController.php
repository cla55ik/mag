<?php

include_once ($_SERVER['DOCUMENT_ROOT']. "/config/database.php");
include_once ($_SERVER['DOCUMENT_ROOT']. "/objects/material.php");



$database = new my_DB();
$db = $database->getConnect();


$materials = new Material($db);


$all_materials = $materials->getAll();


$database->closeConnect();

<?php


include_once ($_SERVER['DOCUMENT_ROOT']. "/config/database.php");
include_once ($_SERVER['DOCUMENT_ROOT']. "/objects/leads.php");



$database = new my_DB();
$db = $database->getConnect();


$leads = new Leads($db);


$all_leads = $leads->getAllLeads();

<?php

include_once ($_SERVER['DOCUMENT_ROOT']. "/config/database.php");
$name = $_POST['name'];
$cat_id = $_POST['cat_id'];
$img = $_POST['img'];
// Create

$database = new my_DB();
$db = $database->getConnect();


if (isset($_POST['create_submit'])) {


	$sql = ("INSERT INTO materials (name, cat_id, img) VALUES(?,?,?)");
	$query = $db->prepare($sql);
	$query->execute([$name, $cat_id, $img]);

	header('Location: /crud/?status=success');
	exit;
}elseif (isset($_POST['delete_submit'])) {
	$get_id = $_GET['id'];

	$sql = "DELETE FROM materials WHERE id=:id";

	$query = $db->prepare($sql);
	$query->bindParam(':id', $get_id);
	$query->execute();

	header('Location: /crud/?status=success');
	exit;
}

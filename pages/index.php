


<h1> CNHFYBWF </h1>

<?= "до подключения Контроллера";?><br>
 <?php include_once($_SERVER['DOCUMENT_ROOT']. "/controller/materialController.php"); ?>
<?php include_once($_SERVER['DOCUMENT_ROOT']. "/controller/categoryController.php"); ?>

<p> <br> material Array =  <?php print_r($all_materials); ?>
</p>

<p> <br> category Array =  <?php print_r($alltest); ?>
</p>

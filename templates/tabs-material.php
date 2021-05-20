
<?php include_once($_SERVER['DOCUMENT_ROOT']. "/layouts/header.php"); ?>

 <?php include_once($_SERVER['DOCUMENT_ROOT']. "/controller/materialController.php"); ?>
<?php include_once($_SERVER['DOCUMENT_ROOT']. "/controller/categoryController.php"); ?>






<div class="container tabs">
  <h2>МАТЕРИАЛЫ</h2>
  <div class="tabs-nav">
    <ul class="nav nav-tab">
      <?php foreach ($all_material_cat as $material_cat) : ?>
        <li class="nav-items">
           <a class="nav-tabs-link" onclick="openTab(event,'tab<?=$material_cat['id'];?>')"><?=$material_cat['name'];?></a>
        </li>

      <?php endforeach; ?>

    </ul>
  </div>

  <?php foreach ($all_material_cat as $material): ?>
    <?php

      $cat_id=$material['id'];

      $materials_from_cat = $materials->getAllFromCat($cat_id);


    ?>

      <div class="tabs-content" id="tab<?=$cat_id;?>">
        <?php foreach ($materials_from_cat as $mat): ?>
          <div class="card-material">
            <span> <img class="img-fluid img-material" src="/resources/img/<?=$mat['img'];?>.jpg" alt="" loading="lazy"> </span>
            <div class="text-uppercase ml-3 w-100 material-title font-weight-bold"><?=$mat['name'];?></div>
          </div>

        <?php endforeach; ?>
      </div>

  <?php endforeach; ?>

</div>



</div>

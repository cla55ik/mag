
<?php include_once($_SERVER['DOCUMENT_ROOT']. "/layouts/header.php"); ?>

<h1> CNHFYBWF </h1>


 <?php include_once($_SERVER['DOCUMENT_ROOT']. "/controller/materialController.php"); ?>
<?php include_once($_SERVER['DOCUMENT_ROOT']. "/controller/categoryController.php"); ?>




<div class="container">
  <?php foreach ($materials_from_cat as $material) : ?>

    <div class="">
       cat_id =  <?=$material['cat_id'];?>
    </div>
    <div class="">
       id =  <?=$material['id'];?>
    </div>
    <div class="">
       name =  <?=$material['name'];?>
    </div>

  <?php endforeach; ?>

<p>Categories of Materials</p>

</div>

<div class="container tabs">
  <div class="tabs-nav">
    <ul class="nav nav-tabs">
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
          <span> <img class="img-fluid img-material" src="/resources/img/<?=$mat['img'];?>.jpg" alt=""> </span>
        <?php endforeach; ?>
      </div>

  <?php endforeach; ?>

</div>





</div>






<script type="text/javascript">




  function openTab(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabs-content");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("nav-tabs-link");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" operativen", "");
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>




<?php include_once($_SERVER['DOCUMENT_ROOT']. "/layouts/footer.php"); ?>

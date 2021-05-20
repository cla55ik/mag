<?php

include_once ($_SERVER['DOCUMENT_ROOT']. "/controller/leadsController.php");
include_once ($_SERVER['DOCUMENT_ROOT']. "/layouts/header.php");
?>


<div class="container mt-90">

  <div class="">
    <h1>Заявки</h1>
  </div>
  <div class="">
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Дата заявки</th>
          <th>Телефон</th>
        </tr>
      </thead>

      <?php foreach ($all_leads as $leads): ?>
        <tr>
          <td><?= $leads['id'] ; ?></td>
          <td><?= date('d.m.Y', $leads['date']) ; ?></td>
          <td><?= $leads['phone'] ; ?></td>
        </tr>
      <?php endforeach; ?>
    </table>

  </div>


</div>

<?php
include_once($_SERVER['DOCUMENT_ROOT']. "/layouts/header.php");
include_once($_SERVER['DOCUMENT_ROOT']. "/controller/materialController.php");
//include_once($_SERVER['DOCUMENT_ROOT']. "/templates/crudModal.php");

if(isset($_GET['status'])){
  $status = $_GET['status'];
  if ($status == 'success'){
    $message = 'Операция выполнена успешно';
  }else{
    $message = 'Возникла ошибка';
  }
}

?>


<div class="container mt-90">
  <div class="row mb-50">
    <h1>Управление Материалами</h1>
  </div>
  <div class="row mb-90">
    <div class="col-5 mb-3">
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalCreate">
        Добавить новый
      </button>
    </div>
    <div class="col-7">
      <?=$message;  ?>
    </div>
    <div class="col-12">
      <table class="table shadow">
        <thead class="thead-dark">
          <tr>
            <th>id</th>
            <th>id Категории</th>
            <th>Название</th>
            <th>Картинка</th>
            <th>Управление</th>
          </tr>
        </thead>
        <tbody>
            <?php foreach ($all_materials as $mat): ?>
              <tr>
                <th><?=$mat['id'];?></th>
                <th><?=$mat['cat_id'];?></th>
                <th><?=$mat['name'];?></th>
                <th><?=$mat['img'];?></th>
                <th>
                  <a href="?edit=<?=$mat['id'] ?>" class="btn btn-success btn-sm" data-toggle="modal" data-target="#editModal<?=$mat['id'] ?>"><i class="fa fa-edit"></i></a>
                  <a href="?delete=<?=$mat['id'] ?>" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal<?=$mat['id'] ?>"><i class="fa fa-trash"></i></a>
                  <?php require($_SERVER['DOCUMENT_ROOT']. "/templates/crudModal.php"); ?>
                </th>
              </tr>
            <?php endforeach; ?>
        </tbody>
      </table>
    </div>

  </div>

<!-- CREATE MATERIAL -->
  <div class="modal fade" id="modalCreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Добавить материал</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="/controller/materialCRUD.php" method="post">
            <div class="form-group">
              <input type="text" class="form-control" name="name" value="" placeholder="Название"/>
            </div>
            <div class="form-group">
              <input type="number" class="form-control" name="cat_id" value="" placeholder="1"/>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="img" value="" placeholder="Картинка"/>
            </div>
            <div class="form-group">
              <input type="textarea" class="form-control" name="description" value="" placeholder="Описание"/>
            </div>
            <button type="submit" name="create_submit" class="btn btn-primary">Добавить</button>
          </form>
        </div>

      </div>
    </div>
  </div>




</div>


<?php include_once($_SERVER['DOCUMENT_ROOT']. "/layouts/footer.php"); ?>

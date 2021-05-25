<?php

include_once($_SERVER['DOCUMENT_ROOT']. "/layouts/header.php");
include_once($_SERVER['DOCUMENT_ROOT']. "/controller/reviewController.php");

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
    <h1>Управление Отзывами</h1>
  </div>
  <div class="row mb-90">
    <div class="col-5 mb-3">
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalCreateReview">
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
            <th>Имя</th>
            <th>Текст</th>
            <th>Тип изделия</th>
            <th>Цена</th>
            <th>Картинка</th>
            <th>Управление</th>
          </tr>
        </thead>
        <tbody>
            <?php foreach ($all_review as $review): ?>
              <tr>
                <th><?=$review['id'];?></th>
                <th><?=$review['name'];?></th>
                <th><?=$review['text'];?></th>
                <th><?=$review['type'];?></th>
                <th><?=$review['price'];?></th>
                <th><?=$review['img'];?></th>
                <th>
                  <a href="?edit=<?=$review['id'] ?>" class="btn btn-success btn-sm" data-toggle="modal" data-target="#editModal<?=$review['id'] ?>"><i class="fa fa-edit"></i></a>
                  <a href="?delete=<?=$review['id'] ?>" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal<?=$review['id'] ?>"><i class="fa fa-trash"></i></a>
                  <?php require($_SERVER['DOCUMENT_ROOT']. "/templates/crudModalReview.php"); ?>
                </th>
              </tr>
            <?php endforeach; ?>
        </tbody>
      </table>
    </div>

  </div>

<!-- CREATE MATERIAL -->
  <div class="modal fade" id="modalCreateReview" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Добавить отзыв</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="/controller/reviewController.php" method="post">
            <div class="form-group">
              <input type="text" class="form-control" name="name" value="" placeholder="Имя"/>
            </div>
            <div class="form-group">
              <input type="textarea" class="form-control" name="text" value="" placeholder="Текст отзыва"/>
            </div>
            <div class="form-group">
              <input type="number" class="form-control" name="type" value="" placeholder="Тип изделия"/>
            </div>
            <div class="form-group">
              <input type="number" class="form-control" name="price" value="" placeholder="Стоимость"/>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="img" value="" placeholder="Картинка"/>
            </div>
            <button type="submit" name="create_review" class="btn btn-primary">Добавить</button>
          </form>
        </div>

      </div>
    </div>
  </div>




</div>


<?php include_once($_SERVER['DOCUMENT_ROOT']. "/layouts/footer.php"); ?>

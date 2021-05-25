<!-- Modal Edit-->
<div class="modal fade" id="editModal<?=$review['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content shadow">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Редактировать отзыв от <?=$review['name'] ?></h5>
        <p><?=$review['text']  ?></p>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/controller/reviewController.php?id=<?=$review['id'] ?>" method="post">
        	<div class="form-group">
        		<input type="text" class="form-control" name="name" label="Имя" placeholder="<?= $review['name'];  ?>">
        	</div>
        	<div class="form-group">
        		<input type="textarea" class="form-control" name="text" placeholder="<?= $review['text'];  ?>">
        	</div>
        	<div class="form-group">
        		<input type="number" class="form-control" name="type" placeholder="<?= $review['type'];?>">
        	</div>
          <div class="form-group">
        		<input type="number" class="form-control" name="price" placeholder="<?= $review['price'];  ?>">
        	</div>
          <div class="form-group">
        		<input type="text" class="form-control" name="img" placeholder="<?= $review['img'];  ?>">
        	</div>
        	<div class="modal-footer">
        		<button type="submit" name="update_submit" class="btn btn-primary">Обновить</button>
        	</div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- DELETE MODAL -->
<div class="modal fade" id="deleteModal<?=$review['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content shadow">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Удалить запись № <?=$review['id'] ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
        <form action="/controller/reviewController.php?id=<?=$review['id'] ?>" method="post">
        	<button type="submit" name="delete_submit" class="btn btn-danger">Удалить</button>
    	</form>
      </div>
    </div>
  </div>
</div>

<!-- Modal Edit-->
<div class="modal fade" id="editModal<?=$mat['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content shadow">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Редактировать запись № <?=$mat['id'] ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/controller/materialCRUD.php?id=<?=$mat['id'] ?>" method="post">
        	<div class="form-group">
        		<input type="text" class="form-control" name="name" mat="<?=$mat['name'] ?>" placeholder="Название">
        	</div>
        	<div class="form-group">
        		<input type="number" class="form-control" name="cat_id" mat="<?=$mat['cat_id'] ?>" placeholder="Категория">
        	</div>
        	<div class="form-group">
        		<input type="text" class="form-control" name="img" mat="<?=$mat['img'] ?>" placeholder="Картинка">
        	</div>
          <div class="form-group">
        		<input type="textarea" class="form-control" name="description" mat="<?=$mat['description'] ?>" placeholder="Описание">
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
<div class="modal fade" id="deleteModal<?=$mat['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content shadow">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Удалить запись № <?=$mat['id'] ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
        <form action="/controller/materialCRUD.php?id=<?=$mat['id'] ?>" method="post">
        	<button type="submit" name="delete_submit" class="btn btn-danger">Удалить</button>
    	</form>
      </div>
    </div>
  </div>
</div>

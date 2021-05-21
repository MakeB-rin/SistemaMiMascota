<div class="modal modal-danger fade in" id="DeleteCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
          <?php 
              if (isset($_POST['delete_category_id_btn'])) {
                $delete_category_id_input = $_POST['category_id_delete'];
                $sql_delete_category_id = "DELETE FROM  categories WHERE id ={$delete_category_id_input}";
                $result_sql_delete_category_id = mysqli_query($dbconnection, $sql_delete_category_id);
                header("Location: category_admin.php");
              }
           ?>
    <div class="modal-content">
      <form method="post" action="">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" align="center">Eliminar categoria</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <input type="hidden" class="form-control" id="category_id_delete" name="category_id_delete">
            <p align="center"><img src="admin-template/images/delete.png" width="25" align="middle">
            ¿Está seguro de que desea eliminar esta categoría?</p>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><span class="glyphicon glyphicon-name"></span>Cerrar</button>
        <button type="submit" name="delete_category_id_btn" class="btn btn-warning"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Eliminar</button>
      </div>
      </form>
    </div>
  </div>
</div>
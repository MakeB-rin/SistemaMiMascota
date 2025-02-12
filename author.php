<?php 
  include "admin/db_connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<?php include "layout/head.php"; ?>

<body>

  <!-- Navigation -->
 <?php include "layout/topnavigation.php"; ?>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">
        <?php 
        if (isset($_GET['auth'])) 
        {
          $selected_auth_id= $_GET['auth'];
          $sql_select_auth_posts = "SELECT * FROM users WHERE id = {$selected_auth_id}";
          $result_sql_select_auth_post = mysqli_query($dbconnection, $sql_select_auth_posts);
                while ($row_auth_post = mysqli_fetch_assoc($result_sql_select_auth_post))
                {
                  $view_user_id = $row_auth_post['id'];
                  $view_user_name = $row_auth_post['name'];
                  $view_user_image = $row_auth_post['image'];
                }
        }

         ?>
         <br>
         <div class="card-footer text-muted">
            <img src="admin/images/users/<?php echo $view_user_image; ?>" class="zoom3" alt="User Image" width="50" align="left" hspace="5">
            <h3><?php echo $view_user_name; ?></h3>
            Usuario <a href="#"></a><br>
            <a href="https://mail.google.com/"> <i class="fas fa-envelope"></i></a>&nbsp;&nbsp;<a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
          </div> <div class="card-footer text-muted"></div>

        <h3 class="my-4">Aviso de  <?php echo $view_user_name; ?>
          <!-- <small>Secondary Text</small>-->
        </h1>
        <?php 
                $sql_select_post_auth = "SELECT * FROM posts WHERE post_status = 1 AND post_autor = {$selected_auth_id} ORDER BY id desc";
                $result_sql_select_post_auth = mysqli_query($dbconnection, $sql_select_post_auth);
                $post_counter_for_category = 0;

                while ($rowpost = mysqli_fetch_assoc($result_sql_select_post_auth))
                {
                  $post_counter_for_category++;
                  $view_post_id = $rowpost['id'];
                  $view_post_category = $rowpost['post_category'];
                  $view_post_title = $rowpost['post_title'];
                  $view_post_autor = $rowpost['post_autor'];
                  $view_post_date = $rowpost['post_date'];
                  $view_post_edit_date = $rowpost['post_edit_date'];
                  $view_post_image = $rowpost['post_image'];
                  $view_post_text = $rowpost['post_text'];
                  $view_post_tag = $rowpost['post_tag'];
                  $view_post_visit_counter = $rowpost['post_visit_counter'];
                  $view_post_status = $rowpost['post_status'];
                  $view_post_priority = $rowpost['post_priority'];
             ?>

        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top" src="admin/images/blog/<?php  echo $view_post_image; ?>" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title"><?php echo $view_post_title; ?></h2>
            <p class="card-text">
              <?php //echo $view_post_text; 
              echo substr($view_post_text, 0, 400) . "...";?>
            </p>
            <a href="#" class="btn btn-primary">Detalles &rarr;</a>
          </div>
       
        </div>
      <?php
       }

       if ($post_counter_for_category==0) {
         echo "<h1>Lo siento. ¡No hay publicaciones de este usuario!</h1>";
       }
       ?>


        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Anteriores</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Nuevos &rarr;</a>
          </li>
        </ul>

      </div>

      <!-- Sidebar Widgets Column -->
      <?php include "layout/sidebar.php"; ?>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <?php include "layout/footer.php"; ?>

  <!-- Bootstrap core JavaScript -->
  <script src="blog-template/vendor/jquery/jquery.min.js"></script>
  <script src="blog-template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          
          <img src="images/users/<?php echo $success_login_image_admin; ?>" class="zoom3" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $success_login_name_admin; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> En linea </a>
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        
        <li >
          <a href="index.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
        </li>
        <li><a href="post_admin.php"><i class="fa fa-file"></i><span> Avisos</span></a></li>
        <li><a href="users_admin.php"><i class="fa fa-users"></i> <span>Usuarios</span></a></li>
        <li><a href="comment_admin.php"><i class="fa fa-comments"></i><span>Comentarios </span></a></li>
        <li><a href="category_admin.php"><i class="fa fa-server"></i></i><span> Categoria</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

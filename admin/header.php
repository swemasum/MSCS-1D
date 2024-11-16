<header class="main-header">
  <!-- Logo -->
  <a href="index.php" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>SCIEN</b>TIST</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>SCIENTIST</b></span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- Messages: style can be found in dropdown.less-->

        <!-- Notifications: style can be found in dropdown.less -->

        <!-- Tasks: style can be found in dropdown.less -->

        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="scientist_image/admin.jpg" class="user-image" alt="User Image">
            <span class="hidden-xs">Admin</span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="scientist_image/admin.jpg" class="img-circle" alt="User Image">

              <p>
                Admin
              </p>
            </li>
            <!-- Menu Body -->

            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a href="index.php" class="btn btn-default btn-flat">Profile</a>
              </div>
              <div class="pull-right">
                <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
              </div>
            </li>
          </ul>
        </li>
        <!-- Control Sidebar Toggle Button -->
        <li>
          <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
        </li>
      </ul>
    </div>
  </nav>
</header>

<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="scientist_image/admin.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $_SESSION['admin_name']; ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <li class="active">
        <a href="index.php">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>

        </a>

      </li>
      <li class="treeview">
        <a href="">
          <i class="fa fa-picture-o" aria-hidden="true"></i>
          <span>About</span>
        </a>
        <ul class="treeview-menu">
          <li><a href="view_overview.php"><i class="fa fa-circle-o"></i>Overview</a></li>
          <li><a href="scientist_list.php"><i class="fa fa-circle-o"></i>scientist list</a></li>
        <!--  <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Add Scientist</a></li>
          <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
          <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
      -->  </ul>
      </li>
      <li class="treeview">
        <a href="">
          <i class="fa fa-files-o" aria-hidden="true"></i>

          <span>Publications</span>
        </a>
        <ul class="treeview-menu">
          <li><a href="publication_list.php"><i class="fa fa-circle-o"></i>All Publications list</a></li>
        <!--  <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Add Scientist</a></li>
          <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
          <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
      -->  </ul>
      </li>

      <li class="treeview">
        <a href="">
          <i class="fa fa-files-o" aria-hidden="true"></i>

          <span>Simulator</span>
        </a>
        <ul class="treeview-menu">
          <li><a href="simulator_list.php"><i class="fa fa-circle-o"></i>All about simulator </a></li>
        <!--  <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Add Scientist</a></li>
          <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
          <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
      -->  </ul>
      </li>
      <li>
            <a href="new_password.php">
              <i class="glyphicon glyphicon-lock"></i> <span href="add_student.php">Change Password</span>

            </a>
          </li>

    </ul>
  </section>
  <!-- /.sidebar -->
</aside>


<?php

include_once "login_check.php";
include_once "connection.php";




  $sql = "SELECT * FROM `overview` ";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
  $headline=$row['headline'];
  $description=$row['description'];
    }
  } else {

  //  header ('Location: index.php');
  }

 ?>
 <!DOCTYPE html>
 <html>
 <head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>AdminLTE 2 | General Form Elements</title>
   <!-- Tell the browser to be responsive to screen width -->
   <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
   <!-- Bootstrap 3.3.7 -->
   <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
   <!-- Ionicons -->
   <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
   <!-- Theme style -->
   <link rel="stylesheet" href="dist/css/AdminLTE.min.css">

    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
   <!-- AdminLTE Skins. Choose a skin from the css/skins
        folder instead of downloading all of them to reduce the load. -->
   <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

   <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
   <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
   <![endif]-->

   <!-- Google Font -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
 </head>

 </style>
 <body class="hold-transition skin-blue sidebar-mini">
 <div class="wrapper">

  <?php include_once "header.php"; ?>

   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
       <h1>
         General Form Elements
         <small>Preview</small>
       </h1>
       <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="#">Forms</a></li>
         <li class="active">General Elements</li>
       </ol>
     </section>

     <!-- Main content -->
     <section class="content">

       <div class="row">
         <!-- left column -->
         <div class="col-md-12">
           <!-- general form elements -->
           <div class="box box-primary">
             <div class="box-header with-border">
               <h3 class="box-title">View & EDIT overview</h3> <a CLASS="btn btn-danger" href="index.php"><i class="glyphicon glyphicon-arrow-left"></i>GO BACK</a>
             </div>
             <!-- /.box-header -->
             <!-- form start -->
             <form role="form" action="edit_overview.php" method="post" enctype="multipart/form-data">
               <div class="box-body">
                 <div class="row">
                   <div class="col-md-12">
                     <div class="form-group">
                       <label for="exampleInputEmail1">Title</label>
                       <input type="text" name="headline" value="<?php echo $headline; ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter name">
                     </div>
                     <div class="form-group">
                       <label for="exampleInputPassword1">Description</label>
                       <div class="box-body pad">
                       <textarea id="editor1" name="description" rows="20" cols="80">
                       <?php echo $description; ?>
                       </textarea>
                       </div>
                     </div>


                   </div>

                 </div>





               </div>
               <!-- /.box-body -->

               <div class="box-footer">

                <input type="submit" class="btn btn-primary" name="submit" value="EDIT">
               </div>
             </form>
           </div>
           <!-- /.box -->



         </div>
         <!--/.col (left) -->
         <!-- right column -->

         <!--/.col (right) -->
       </div>
       <!-- /.row -->
     </section>
     <!-- /.content -->
   </div>
   <!-- /.content-wrapper -->
  
   <!-- Control Sidebar -->
   <aside class="control-sidebar control-sidebar-dark">
     <!-- Create the tabs -->
     <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
       <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
       <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
     </ul>
     <!-- Tab panes -->
     <div class="tab-content">
       <!-- Home tab content -->
       <div class="tab-pane" id="control-sidebar-home-tab">
         <h3 class="control-sidebar-heading">Recent Activity</h3>
         <ul class="control-sidebar-menu">
           <li>
             <a href="javascript:void(0)">
               <i class="menu-icon fa fa-birthday-cake bg-red"></i>

               <div class="menu-info">
                 <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                 <p>Will be 23 on April 24th</p>
               </div>
             </a>
           </li>
           <li>
             <a href="javascript:void(0)">
               <i class="menu-icon fa fa-user bg-yellow"></i>

               <div class="menu-info">
                 <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                 <p>New phone +1(800)555-1234</p>
               </div>
             </a>
           </li>
           <li>
             <a href="javascript:void(0)">
               <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

               <div class="menu-info">
                 <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                 <p>nora@example.com</p>
               </div>
             </a>
           </li>
           <li>
             <a href="javascript:void(0)">
               <i class="menu-icon fa fa-file-code-o bg-green"></i>

               <div class="menu-info">
                 <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                 <p>Execution time 5 seconds</p>
               </div>
             </a>
           </li>
         </ul>
         <!-- /.control-sidebar-menu -->

         <h3 class="control-sidebar-heading">Tasks Progress</h3>
         <ul class="control-sidebar-menu">
           <li>
             <a href="javascript:void(0)">
               <h4 class="control-sidebar-subheading">
                 Custom Template Design
                 <span class="label label-danger pull-right">70%</span>
               </h4>

               <div class="progress progress-xxs">
                 <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
               </div>
             </a>
           </li>
           <li>
             <a href="javascript:void(0)">
               <h4 class="control-sidebar-subheading">
                 Update Resume
                 <span class="label label-success pull-right">95%</span>
               </h4>

               <div class="progress progress-xxs">
                 <div class="progress-bar progress-bar-success" style="width: 95%"></div>
               </div>
             </a>
           </li>
           <li>
             <a href="javascript:void(0)">
               <h4 class="control-sidebar-subheading">
                 Laravel Integration
                 <span class="label label-warning pull-right">50%</span>
               </h4>

               <div class="progress progress-xxs">
                 <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
               </div>
             </a>
           </li>
           <li>
             <a href="javascript:void(0)">
               <h4 class="control-sidebar-subheading">
                 Back End Framework
                 <span class="label label-primary pull-right">68%</span>
               </h4>

               <div class="progress progress-xxs">
                 <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
               </div>
             </a>
           </li>
         </ul>
         <!-- /.control-sidebar-menu -->

       </div>
       <!-- /.tab-pane -->
       <!-- Stats tab content -->
       <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
       <!-- /.tab-pane -->
       <!-- Settings tab content -->
       <div class="tab-pane" id="control-sidebar-settings-tab">
         <form method="post">
           <h3 class="control-sidebar-heading">General Settings</h3>

           <div class="form-group">
             <label class="control-sidebar-subheading">
               Report panel usage
               <input type="checkbox" class="pull-right" checked>
             </label>

             <p>
               Some information about this general settings option
             </p>
           </div>
           <!-- /.form-group -->

           <div class="form-group">
             <label class="control-sidebar-subheading">
               Allow mail redirect
               <input type="checkbox" class="pull-right" checked>
             </label>

             <p>
               Other sets of options are available
             </p>
           </div>
           <!-- /.form-group -->

           <div class="form-group">
             <label class="control-sidebar-subheading">
               Expose author name in posts
               <input type="checkbox" class="pull-right" checked>
             </label>

             <p>
               Allow the user to show his name in blog posts
             </p>
           </div>
           <!-- /.form-group -->

           <h3 class="control-sidebar-heading">Chat Settings</h3>

           <div class="form-group">
             <label class="control-sidebar-subheading">
               Show me as online
               <input type="checkbox" class="pull-right" checked>
             </label>
           </div>
           <!-- /.form-group -->

           <div class="form-group">
             <label class="control-sidebar-subheading">
               Turn off notifications
               <input type="checkbox" class="pull-right">
             </label>
           </div>
           <!-- /.form-group -->

           <div class="form-group">
             <label class="control-sidebar-subheading">
               Delete chat history
               <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
             </label>
           </div>
           <!-- /.form-group -->
         </form>
       </div>
       <!-- /.tab-pane -->
     </div>
   </aside>
   <!-- /.control-sidebar -->
   <!-- Add the sidebar's background. This div must be placed
        immediately after the control sidebar -->
   <div class="control-sidebar-bg"></div>
 </div>
 <!-- ./wrapper -->

 <!-- jQuery 3 -->
 <script src="bower_components/jquery/dist/jquery.min.js"></script>
 <!-- Bootstrap 3.3.7 -->
 <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
 <!-- FastClick -->
 <script src="bower_components/fastclick/lib/fastclick.js"></script>
 <!-- AdminLTE App -->
 <script src="dist/js/adminlte.min.js"></script>
 <!-- AdminLTE for demo purposes -->
 <script src="dist/js/demo.js"></script>
 <script src="bower_components/ckeditor/ckeditor.js"></script>
 <script>
   $(function () {
     // Replace the <textarea id="editor1"> with a CKEditor
     // instance, using default configuration.
     CKEDITOR.replace('editor1')
     //bootstrap WYSIHTML5 - text editor
     $('.textarea').wysihtml5()
   })
 </script>
 <script>
   $(function () {
     // Replace the <textarea id="editor1"> with a CKEditor
     // instance, using default configuration.
     CKEDITOR.replace('editor2')
     //bootstrap WYSIHTML5 - text editor
     $('.textarea').wysihtml5()
   })
 </script>
 <script>
   $(function () {
     // Replace the <textarea id="editor1"> with a CKEditor
     // instance, using default configuration.
     CKEDITOR.replace('editor3')
     //bootstrap WYSIHTML5 - text editor
     $('.textarea').wysihtml5()
   })
 </script>
 <script>
   $(function () {
     // Replace the <textarea id="editor1"> with a CKEditor
     // instance, using default configuration.
     CKEDITOR.replace('editor4')
     //bootstrap WYSIHTML5 - text editor
     $('.textarea').wysihtml5()
   })
 </script>
 <script>
   $(function () {
     // Replace the <textarea id="editor1"> with a CKEditor
     // instance, using default configuration.
     CKEDITOR.replace('editor5')
     //bootstrap WYSIHTML5 - text editor
     $('.textarea').wysihtml5()
   })
 </script>
 <script>
   $(function () {
     // Replace the <textarea id="editor1"> with a CKEditor
     // instance, using default configuration.
     CKEDITOR.replace('editor6')
     //bootstrap WYSIHTML5 - text editor
     $('.textarea').wysihtml5()
   })
 </script>
 <script src="image_preview/js/scripts.min.js"></script>
<script src="image_preview/js/main.min.js"></script>
<script src="image_preview/js/custom.js"></script>
 </body>
 </html>

<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()?>aset/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
<link rel="stylesheet" href="<?php echo base_url()?>aset/video-js.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url()?>aset/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url()?>aset/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>aset/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url()?>aset/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url()?>aset/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url()?>aset/plugins/summernote/summernote-bs4.min.css">
  
  <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url()?>aset/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url()?>aset/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url()?>aset/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url()?>aset/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url()?>aset/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url()?>aset/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url()?>aset/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url()?>aset/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url()?>aset/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo base_url()?>aset/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url()?>aset/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url()?>aset/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url()?>aset/favicon/favicon-16x16.png">
<link rel="manifest" href="<?php echo base_url()?>aset/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="aset/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
</head>
<body class="hold-transition sidebar-mini layout-fixed">  


<div style="margin-top:5%;">
<center>
<table border="">
<td>
<form method="post" action="<?=base_url('admin/register')?>" id="quickForm">
                <div class="card-body" >
                <div class="text-center">
                <img class="" src="aset/gambar/logo.png"   height="100" width="180">
                </div>
                <br><br>
                <div class="form-group">
                    <label for="exampleInput">Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" id="exampleInput" placeholder="Username" style="width:400px">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" width="500px">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    <br>
                    <input type="checkbox" onclick="myFunction()"> &nbsp;Show Password
                    
                    <script>
                        function myFunction() {
                        var x = document.getElementById("exampleInputPassword1");
                        if (x.type === "password") {
                            x.type = "text";
                        } else {
                            x.type = "password";
                        }
                        }
                    </script>
                  </div>
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer ">
                <button type="submit" class="btn btn-primary btn-lg btn-block rounded">Daftar</button>
               
                </div>
              </form>
</td>
            
</table>
</center>
</div>
<!-- jQuery -->
<script src="<?php echo base_url()?>aset/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url()?>aset/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url()?>aset/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
 
<!-- Sparkline -->
<script src="<?php echo base_url()?>aset/plugins/sparklines/sparkline.js"></script>
 
 <!-- daterangepicker -->
<script src="<?php echo base_url()?>aset/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url()?>aset/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url()?>aset/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo base_url()?>aset/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url()?>aset/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>aset/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url()?>aset/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url()?>aset/dist/js/pages/dashboard.js"></script>
<script src="<?php echo base_url()?>aset/video-js.js"></script>
</body>
</html>

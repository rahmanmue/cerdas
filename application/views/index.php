 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title id="tittle">Cerdas Belajar</title>

  <?php $this->load->view('src/head');?>

  <!-- Google Font: Source Sans Pro -->
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <!-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="<?=base_url()?>aset/gambar/logo.png"   height="120" width="200">
  </div> -->



  	<?php $this->load->view('src/top-nav');?>
    <!-- Left navbar-header -->
	<?php $this->load->view('src/menu');?>
 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <?php 
        if(!empty($contentHeader)){
            $this->load->view($contentHeader);
        }else{
            echo" ";
        }
    ?>


    <!-- Main content -->
    <section class="content">
      <div class="container">
        <!-- Small boxes (Stat box) -->
		<?php 
        if($content){
            $this->load->view($content);
        }else{
            echo"<h1>Web Masih Kosong...</h1>";
        }
    	?>

        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
 
  <?php $this->load->view('src/footer');?>


</div>
<!-- ./wrapper -->

<?php $this->load->view('src/bottom');?>
</body>
</html>

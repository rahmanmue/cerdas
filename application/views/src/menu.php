<?php 	$level = $this->M_User->detail($this->session->userdata('user_id'))->status; ?>

<!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="<?=base_url()?>aset/gambar/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Salam!!</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?=base_url()?>aset/dist/img/momo.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Momo</a>
        </div>
      </div>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <?php if ($level == 'admin'){  ?>
          <li class="nav-item">
            <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-swatchbook"></i>
               <p>
			          	Materi Pembelajaran
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="<?=base_url()?>materi" class="nav-link ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Materi</p>
                      </a>
                    </li>
              </ul>
          </li>

          <?php } ?>
          
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-photo-video"></i>    
              <p>
                Video Pembelajaran
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <?php
               if ($level == 'admin'){ ?>

              <li class="nav-item active" >
                <a href="<?=base_url()?>video" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Video</p>
                  </a>
              </li>

               <?php } else { 
                 for ($i=1; $i<=6; $i++) {
                ?>
                <li class="nav-item active" >
                  <a href="<?=base_url('siswa/video/'.$i)?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kelas <?= $i; ?></p>
                  </a>
                </li>
    
              <?php } }?>

            </ul>
          </li>

         
          
            <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-book"></i>  
              <p>
                Pembahasan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

            <?php
               if ($level == 'admin'){ ?>

              <li class="nav-item active" >
                <a href="<?=base_url()?>mapel" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mata Pelajaran</p>
                  </a>
                </li>

                <li class="nav-item active" >
                <a href="<?=base_url()?>pembahasan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pembahasan</p>
                  </a>
                </li>

                

               <?php } else { 
                 for ($i=1; $i<=6; $i++) {
                ?>
                 <li class="nav-item active" >
                <a href="<?=base_url('siswa/pembahasan/'.$i)?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kelas <?= $i; ?></p>
                  </a>
                </li>
    
              <?php } }?>



            </ul>

          </li>

            <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class=" nav-icon fas fa-tasks"></i>  
              <p>
                Latihan Soal
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

            <?php
               if ($level == 'admin'){ ?>

                <li class="nav-item active" >
                <a href="<?=base_url()?>soal" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Soal</p>
                  </a>
                </li>

               <?php } else { 
                 for ($i=1; $i<=6; $i++) {
                ?>
                 <li class="nav-item active" >
                <a href="<?=base_url('siswa/soal/'.$i)?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kelas <?= $i; ?></p>
                  </a>
                </li>
    
              <?php } }?>

          

            </ul>
          </li>

		  <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-gamepad"></i>    
              <p>
			          	Games
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
			<ul class="nav nav-treeview">
        <?php
            if ($level == 'admin'){ ?>

            <li class="nav-item">
                <a href="<?=base_url('games')?>" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Aritmatika</p>
                </a>
              </li>

            <?php } else { ?>
              
             <li class="nav-item">
                <a href="<?=base_url('siswa/games')?>" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Aritmatika</p>
                </a>
              </li>

          <?php } ?>
             
			  </ul>
			</li>
           
        </ul>
      </nav>
    </div>
    <!-- /.sidebar -->
  </aside>

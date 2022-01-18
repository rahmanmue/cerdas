<div class="row mt-3">

    <?php for ($i= 1; $i<=6; $i++) { 
            if ($i == 1){
                $color = 'info';
            } else if ($i == 2){
                $color = 'success';
            } else if ($i == 3) {
                $color = 'primary';
            } else if ($i == 4) {
                $color = 'secondary';
            } else if ($i == 5) {
                $color = 'danger';
            } else if ($i == 6) {
                $color = 'warning';
            }   
        
        ?>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-<?=$color?>">
              <div class="inner">
                <h3><a href="videokelas1.html" style="color:white;">Kelas <?=$i?></a></h3>
              </div>
              <div class="icon">
                <i class="ion-clipboard"></i>
              </div>
              <a href="<?=base_url('siswa/video/'.$i)?>" class="small-box-footer">Selengkapnya<i class="fas fa-arrow-circle-right"></i></a> 
            </div>
          </div>
    <?php } ?>

           
</div>
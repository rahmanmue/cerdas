<!-- <?php print_r($listMateri); 
  
?>
 -->

<div class="row">

<?php  
foreach($listMateri as $m) {
?>
<div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner"> 
          <!-- Trigger/Open The Modal -->
                <h6> Tema <?= $m->tema ?> Subtema <?= $m->subtema?> Pembelajaran <?=$m->pembelajaran?></h6> 
                <div id="myModal" class="modal modal_multi"> 
                  <!-- Modal content -->
                  <div class="modal-content" style="color: black">
                  <span class="close close_multi">&times;</span> 
                  <p> 
                      <ol style="text-align: left;"> 
                          
                          <?php $no = 1;
                            foreach ($listSoal as $ls ) {
                              if ($m->id_materi == $ls->id_materi) { ?>
                              <li>
                                <?= ($ls->gambar == '') ? '' : '<img src="'.base_url('aset/gambar/'.$ls->gambar).'" width="100px" > <br>' ?> 
                                  <?=$ls->soal?>  <br>
                                   <!--gambar  -->
                                  <?=$ls->pilihan_A?> <br>   
                                  <?=$ls->pilihan_B?>  <br>
                                  <?=$ls->pilihan_C?> <br>
                                  <?=$ls->pilihan_D?>
                                    

                              <div id="info<?=$no?>" style="visibility:hidden;"><?php $j = $ls->jawaban; echo $ls->$j?></div> 
                              <button id="<?=$no?>" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
                            </li>
                              

                              <?php }
                          $no++;}?>
                          
                        </ol> 
                    </p>
                  </div> 
                </div> 

              </div>
              <div class="icon">
                <i class="ion-clipboard"></i>
              </div>
              <a href="#" id="myBtn" class="small-box-footer myBtn_multi"> <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
  <?php  } ?>  

  
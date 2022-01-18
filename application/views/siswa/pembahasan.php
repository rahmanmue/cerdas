<!-- <?php print_r($listMapel); 
  
  ?>
  -->
 
 <div class="row">
 
 <?php  
 foreach($listMapel as $m) {
 ?>
 <div class="col-lg-3 col-6 mt-3">
             <!-- small box -->
             <div class="small-box bg-info">
               <div class="inner"> 
           <!-- Trigger/Open The Modal -->
                 <h6 class="text-center"> <?= $m->nama_mapel ?></h6> 
                 <div id="myModal" class="modal modal_multi"> 
                   <!-- Modal content -->
                   <div class="modal-content" style="color: black">
                   <span class="close close_multi">&times;</span> 
                   <p> 
                       <ol style="text-align: left;"> 
                           
                           <?php $no = 1;
                             foreach ($listSoalPembahasan as $ls ) {
                               if ($m->id_mapel == $ls->id_mapel) { ?>
                               <li>
                                  <?= ($ls->gambar == '') ? '' : '<img src="'.base_url('aset/gambar/'.$ls->gambar).'" width="100px" > <br>' ?> 
                                   <?=$ls->soal?>  <br>
                                    <!--gambar  -->
                                   <?=$ls->pilihan_A?> <br>   
                                   <?=$ls->pilihan_B?>  <br>
                                   <?=$ls->pilihan_C?>
                                  
                               <div id="info<?=$no?>" style="visibility:hidden;">
                               <?php $j = $ls->jawaban; echo $ls->$j?> 

                               <?php if($ls->pembahasan != '') { 
                                    echo '<br><strong>Pembahasan</strong><br>'.$ls->pembahasan;      
                               }?>
                            
                                </div> 
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
 
   
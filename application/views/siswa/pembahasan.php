<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 2000; /* Sit on top */
  padding-top: 100px; /* Location of the box */
 
  width: 100%;
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  
 
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
 
  position: relative;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

 
  
</style>
 <div class="row">
 
 <?php  $i = 1;
 foreach($listMapel as $m) {
   if ($i % 2 == 0){
     $bg = 'success';
   }else{
     $bg = 'info';
   }
 ?>
 <div class="col-lg-3 col-6 mt-3">
             <!-- small box -->
             <div class="small-box bg-<?=$bg?>">
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
   <?php $i++;  } ?>  
 
   
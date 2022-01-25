<div class="row">

<?php $no=1; 

foreach($listVideo as $lv) { 
    if ($no % 2 == 0){
        $bg = 'success';
      }else{
        $bg = 'info';
    }    
?>
<div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-<?=$bg?>">
        <div class="inner"> 
        <!-- Trigger/Open The Modal -->
        <h6>Tema <?=$lv['tema']?> Subtema <?=$lv['subtema']?> Pembelajaran <?=$lv['pembelajaran']?></h6> 

        </div>
        <div class="icon">
        <i class="ion-clipboard"></i>
        </div>
        <a href="#" data-toggle="modal" data-target="#exampleModalCenter<?=$no?>" class="small-box-footer myBtn_multi"> <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>

        <div class="modal fade" id="exampleModalCenter<?=$no?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Video Tema <?=$lv['tema']?> Subtema <?=$lv['subtema']?> Pembelajaran <?=$lv['pembelajaran']?> </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body" >
                <iframe width="100%" height="300px" src="<?=$lv['link_video']?>" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                </div>
            </div>
            </div>
        </div>

<?php $no++; } ?>

</div>
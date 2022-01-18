<div class="mr-5 ml-5">
      <br>
      <h3>Video Pembelajaran</h3>
      <a href="<?=base_url('video/tambah')?>" class="btn btn-primary float-right"><i class="fas fa-plus"></i> <strong>Tambah Video</strong></a>
      <br>
      <br>
      <table class="table">
        <thead class="thead-dark">
          <tr>
          <th scope="col">No</th>
          <th scope="col">Judul</th>
          <th scope="col">Kelas</th>
          <th scope="col">Materi</th>
          <th scope="col"><center>Aksi</center></th>
          </tr>
        </thead>
        <tbody>

        <?php 
        $this->load->Model('M_Materi');
        $no=1; 
        foreach($listVideo as $v){ 
            $materi = $this->M_Materi->detail($v->id_materi);
        ?>

          <tr>
          <th scope="row"><?= $no; ?></th>
          <td><?= $v->judul; ?></td>
          <td><?= $v->kelas; ?></td>
          <td>Tema <?= $materi->tema ?> Subtema <?= $materi->subtema ?> Pembelajaran <?= $materi->pembelajaran ?></td>
          <td>
              <center>
              <button type="button" data-toggle="modal" data-target="#exampleModalCenter<?=$no?>" class="btn btn-info"><i class="fas fa-info-circle"></i></button>

            <form action="<?=base_url('video/edit')?>" method="post" style="display: inline-block;">
               <input type="hidden" name="id_video" value="<?=$v->id_video?>">
               <button type="submit" class="btn btn-warning mr-2 ml-2"><i class="fa fa-edit"></i></button>
            </form> 
              
              <a href="<?=base_url('video/hapus/'.$v->id_video)?>" onclick="return confirm('Apa Anda Yakin Ingin Menghapus ini')" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a></center>
            </td>
          </tr>

          <div class="modal fade" id="exampleModalCenter<?=$no?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Video Pembelajaran </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <iframe width="467" height="315" src="<?=$v->link_video?>" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="modal-footer">
                </div>
            </div>
            </div>
        </div>

        <?php $no++; } ?>
       
        </tbody>
        </table>
        
        
      
    </div>
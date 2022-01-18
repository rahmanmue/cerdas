<div class="mr-5 ml-5">
      <br>
      <h3>Soal</h3>
      <a href="<?=base_url('soal/tambah')?>" class="btn btn-primary float-right"><i class="fas fa-plus"></i> <strong>Tambah Soal</strong></a>
      <br>
      <br>
      <table class="table">
        <thead class="thead-dark">
          <tr>
          <th scope="col">No</th>
          <th scope="col">Materi</th>
          <th scope="col">Kelas</th>
          <th scope="col"><center>Aksi</center></th>
          </tr>
        </thead>
        <tbody>

        <?php $no=1; 
        $this->load->Model('M_Materi');
        foreach($listSoal as $s){ 
          $materi = $this->M_Materi->detail($s->id_materi);
          ?>

          <tr>
          <th scope="row"><?= $no; ?></th>
          <td>Tema <?= $materi->tema ?> Subtema <?= $materi->subtema ?> Pembelajaran <?= $materi->pembelajaran ?></td>
          <td><?= $s->kelas; ?></td>

          <td>
              <center>
              <button type="button" data-toggle="modal" data-target="#exampleModalCenter<?=$no?>" class="btn btn-info"><i class="fas fa-info-circle"></i></button>

            <form action="<?=base_url('soal/edit')?>" method="post" style="display: inline-block;">
               <input type="hidden" name="id_soal" value="<?=$s->id_soal?>">
               <button type="submit" class="btn btn-warning mr-2 ml-2"><i class="fa fa-edit"></i></button>
            </form> 
              
              <a href="<?=base_url('soal/hapus/'.$s->id_soal)?>" onclick="return confirm('Apa Anda Yakin Ingin Menghapus ini')" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a></center>
            </td>
          </tr>

          <div class="modal fade" id="exampleModalCenter<?=$no?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"> Soal </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">

                  <?= ($s->gambar == '') ? '' : '<img src="'.base_url('aset/gambar/'.$s->gambar).'" width="100px" > <br>' ?> 
                  <?= $s->soal; ?> <br>
                  <?= $s->pilihan_A; ?> <br>
                  <?= $s->pilihan_B; ?> <br>
                  <?= $s->pilihan_C; ?> <br>
                  <?= $s->pilihan_D; ?> <br>
                  <strong>Jawaban</strong>  <br>
                  <?php $j = $s->jawaban; echo $s->$j?>
               
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
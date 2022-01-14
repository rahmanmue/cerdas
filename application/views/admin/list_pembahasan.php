<?php $this->load->Model('M_Mapel');
    function namaMapel($id_mapel){
        
    }
?>

<div class="mr-5 ml-5">
      <br>
      <h3>Pembahasan</h3>
      <a href="<?=base_url('pembahasan/tambah')?>" class="btn btn-primary float-right"><i class="fas fa-plus"></i> <strong>Tambah Pembahasan</strong></a>
      <br>
      <br>
      <table class="table">
        <thead class="thead-dark">
          <tr>
          <th scope="col">No</th>
          <th scope="col">Mata Pelajaran</th>
          <th scope="col">Kelas</th>
          <th scope="col">Tema</th>
          <th scope="col">Sub Tema</th>
          <th scope="col">Pembelajaran</th>
          <th scope="col"><center>Aksi</center></th>
          </tr>
        </thead>
        <tbody>

        <?php $no=1; 
        foreach($listPembahasan as $p){ ?>

          <tr>
          <th scope="row"><?= $no; ?></th>
          <td><?= $this->M_Mapel->detail($p->id_mapel)->nama_mapel; ?></td>
          <td><?= $p->kelas; ?></td>
          <td><?= $p->tema; ?></td>
          <td><?= $p->subtema; ?></td>
          <td><?= $p->pembelajaran; ?></td>
          <td>
              <center>
              <button type="button" data-toggle="modal" data-target="#exampleModalCenter<?=$no?>" class="btn btn-info"><i class="fas fa-info-circle"></i></button>

            <form action="<?=base_url('pembahasan/edit')?>" method="post" style="display: inline-block;">
               <input type="hidden" name="id_pembahasan" value="<?=$p->id_pembahasan?>">
               <button type="submit" class="btn btn-warning mr-2 ml-2"><i class="fa fa-edit"></i></button>
            </form> 
              
              <a href="<?=base_url('pembahasan/hapus/'.$p->id_pembahasan)?>" onclick="return confirm('Apa Anda Yakin Ingin Menghapus ini')" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a></center>
            </td>
          </tr>

          <div class="modal fade" id="exampleModalCenter<?=$no?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"> Pembahasan </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
               
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
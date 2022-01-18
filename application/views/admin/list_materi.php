<div class="mr-5 ml-5">
      <br>
      <h3>Materi Pembelajaran</h3>
      <a href="<?=base_url('materi/tambah')?>" class="btn btn-primary float-right"><i class="fas fa-plus"></i> <strong>Tambah Materi</strong></a>
      <br>
      <br>
      <table class="table">
        <thead class="thead-dark">
          <tr>
          <th scope="col">No</th>
          <th scope="col">Tema</th>
          <th scope="col">subtema</th>
          <th scope="col">Pembelajaran</th>
          <th scope="col"><center>Aksi</center></th>
          </tr>
        </thead>
        <tbody>

        <?php $no=1; 
        foreach($listMateri as $m){ ?>

          <tr>
          <th scope="row"><?= $no; ?></th>
          <td><?= $m->tema; ?></td>
          <td><?= $m->subtema; ?></td>
          <td><?= $m->pembelajaran; ?></td>
          <td>
              <center>
             
            <form action="<?=base_url('materi/edit')?>" method="post" style="display: inline-block;">
               <input type="hidden" name="id_materi" value="<?=$m->id_materi?>">
               <button type="submit" class="btn btn-warning mr-2 ml-2"><i class="fa fa-edit"></i></button>
            </form> 
              
              <a href="<?=base_url('materi/hapus/'.$m->id_materi)?>" onclick="return confirm('Apa Anda Yakin Ingin Menghapus ini')" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a></center>
            </td>
          </tr>


        <?php $no++; } ?>
       
        </tbody>
        </table>
        
        
      
    </div>
<div class="mr-5 ml-5">
      <br>
      <h3>Mata Pelajaran</h3>
      <a href="<?=base_url('mapel/tambah')?>" class="btn btn-primary float-right"><i class="fas fa-plus"></i> <strong>Tambah Mapel</strong></a>
      <br>
      <br>
      <table class="table">
        <thead class="thead-dark">
          <tr>
          <th scope="col">No</th>
          <th scope="col">Mata Pelajaran</th>
          <th scope="col"><center>Aksi</center></th>
          </tr>
        </thead>
        <tbody>

        <?php $no=1; 
        foreach($listMapel as $m){ ?>

          <tr>
          <th scope="row"><?= $no; ?></th>
          <td><?= $m->nama_mapel; ?></td>
          <td>
              <center>

            <form action="<?=base_url('mapel/edit')?>" method="post" style="display: inline-block;">
               <input type="hidden" name="id_mapel" value="<?=$m->id_mapel?>">
               <button type="submit" class="btn btn-warning mr-2 ml-2"><i class="fa fa-edit"></i></button>
            </form> 
              
              <a href="<?=base_url('mapel/hapus/'.$m->id_mapel)?>" onclick="return confirm('Apa Anda Yakin Ingin Menghapus ini')" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a></center>
            </td>
          </tr>

        <?php $no++; } ?>
       
        </tbody>
        </table>
        
        
      
    </div>
<?php  if($this->session->flashdata('gagal')){
        echo 
        '<div class="alert alert-danger alert-dismissible fade show" role="alert">'. 
        $this->session->flashdata('gagal'). '
        <button type="button" class="close" data-dismiss="alert" onclick="myfunction()" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>';
} ?>

<script>
    myfunction(){
        <?php  unset($_SESSION['gagal']); ?>
    }
</script>

<div class="mr-5 ml-5">
      <br>
      <h3>Pengguna</h3>
      <br>
      <table class="table">
        <thead class="thead-dark">
          <tr>
          <th scope="col">No</th>
          <th scope="col">Nama</th>
          <th scope="col">Email</th>
          <th scope="col"><center>Aksi</center></th>
          </tr>
        </thead>
        <tbody>

        <?php $no=1; 
        foreach($listUser as $u){ ?>

          <tr>
          <th scope="row"><?= $no; ?></th>
          <td><?= $u->nama; ?></td>
          <td><?= $u->email; ?></td>
          <td>
              <center>

            <form action="<?=base_url('admin/edit')?>" method="post" style="display: inline-block;">
               <input type="hidden" name="id_user" value="<?=$u->id_user?>">
               <button type="submit" class="btn btn-warning mr-2 ml-2"><i class="fa fa-edit"></i></button>
            </form> 
              
              <a href="<?=base_url('admin/hapus/'.$u->id_user)?>" onclick="return confirm('Apa Anda Yakin Ingin Menghapus ini')" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a></center>
            </td>
          </tr>

        <?php $no++; } ?>
       
        </tbody>
        </table>
        
        
      
    </div>
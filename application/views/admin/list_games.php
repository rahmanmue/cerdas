<div class="mr-5 ml-5">
      <br>
      <h3>Detail Skor</h3>
      <table class="table">
        <thead class="thead-dark">
          <tr>
          <th scope="col">No</th>
          <th scope="col">Nama User</th>
          <th scope="col">Level</th>
          <th scope="col">Skor</th>
          <th scope="col">Lama Pengerjaan</th>
          <th scope="col">Waktu Pengerjaan</th>
          <th scope="col"><center>Aksi</center></th>
          </tr>
        </thead>
        <tbody>

        <?php $no=1; 
        $this->load->Model('M_User');
        foreach($listGames as $s){ 
          $games = $this->M_User->detail($s->id_user);
          ?>

          <tr>
          <th scope="col"><?=$no?></th>
          <th scope="col"><?=$games->nama?></th>
          <th scope="col"><?=$s->level?></th>
          <th scope="col"><?=$s->skor?></th>
          <th scope="col"><?=$s->lama_pengerjaan?> Detik</th>
          <th scope="col"><?=$s->waktu_pengerjaan?></th>

          <td>
          <a href="<?=base_url('games/hapus/'.$s->id)?>" onclick="return confirm('Apa Anda Yakin Ingin Menghapus ini')" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a></center>
           
            </td>
          </tr>

          
     

        <?php $no++; } ?>
       
        </tbody>
        </table>
        
        
      
    </div>
  <!-- Awal Card Form -->
 <div class="card mt-3">
      <div class="card-header bg-dark text-white">
        Form Input Mata Pelajaran
      </div>
      <div class="card-body">
        <form method="post" action="<?=$action?>">
          <div class="form-group">
            <label>Nama Mata Pelajaran</label>
            <input type="text" name="nama_mapel" value="<?= set_value('nama_mapel', $mapel->nama_mapel ?? '');?>" class="form-control" placeholder="Masukan Mata Pelajaran disini ..." required>
          </div>
          
          <input type="hidden" name='id_mapel' value="<?= $mapel->id_mapel ?? '';?>"> 
          <br>
  
          <button type="submit" class="btn btn-success" name="bsimpan"><?= $button ?></button>
          <button type="reset" class="btn btn-danger" name="breset">Kosongkan</button>
  
        </form>
      </div>
    </div>
    <!-- Akhir Card Form -->
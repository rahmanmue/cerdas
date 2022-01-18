 <!-- Awal Card Form -->
 <div class="card mt-3">
      <div class="card-header bg-dark text-white">
        Form Input Materi
      </div>
      <div class="card-body">
        <form method="post" action="<?=$action?>">
          
          <div class="form-group">
            <label>Tema</label>
            <input type="number" min="1" name="tema" value="<?= set_value('tema', $materi->tema ?? '');?>" class="form-control" placeholder="Masukan Angka ..." required>
          </div>
        <div class="form-group">
            <label>Subtema</label>
            <input type="number" min="1" name="subtema" value="<?= set_value('subtema', $materi->subtema ?? '');?>" class="form-control" placeholder="Masukan Angka ..." required>
          </div>
        <div class="form-group">
            <label>Pembelajaran</label>
            <input type="number" min="1" name="pembelajaran" value="<?= set_value('pembelajaran', $materi->pembelajaran ?? '');?>" class="form-control" placeholder="Masukan Angka ..." required>
          </div>
       
          <input type="hidden" name='id_materi' value="<?= $materi->id_materi ?? '';?>"> 
          <br>
  
          <button type="submit" class="btn btn-success" name="bsimpan"><?= $button ?></button>
          <button type="reset" class="btn btn-danger" name="breset">Kosongkan</button>
  
        </form>
      </div>
    </div>
    <!-- Akhir Card Form -->
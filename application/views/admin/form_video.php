 <!-- Awal Card Form -->
 <div class="card mt-3">
      <div class="card-header bg-dark text-white">
        Form Input Video
      </div>
      <div class="card-body">
        <form method="post" action="<?=$action?>">
          <div class="form-group">
            <label>Judul Video</label>
            <input type="text" name="judul" value="<?= set_value('judul', $video->judul ?? '');?>" class="form-control" placeholder="Masukan judul video disini ..." required>
          </div>
          <div class="form-group">
            <label>Kelas</label>
            <input type="number" min="1" max="6" name="kelas" value="<?= set_value('kelas', $video->kelas ?? '');?>" class="form-control" placeholder="Masukan kelas ..." required>
          </div>

          <div class="form-group ">
            <label>Materi Pembelajaran</label>
            <select class="form-control" name="id_materi">
              <?php foreach ($listMateri as $m) { ?>
                <option value="<?=$m->id_materi?>"
                <?php if ($button == "Edit"){
                      echo ($video->id_materi == $m->id_materi ) ? "selected": '';
                }?>>
                
                Tema <?=$m->tema?> Subtema <?=$m->subtema?> Pembelajaran <?=$m->pembelajaran?>
              
              </option>
              <?php } ?>
            </select>
          </div>


          <!-- <div class="form-group">
            <label>Tema</label>
            <input type="number" min="1" name="tema" value="<?= set_value('tema', $video->tema ?? '');?>" class="form-control" placeholder="Masukan kelas ..." required>
          </div>
        <div class="form-group">
            <label>Subtema</label>
            <input type="number" min="1" name="subtema" value="<?= set_value('subtema', $video->subtema ?? '');?>" class="form-control" placeholder="Masukan kelas ..." required>
          </div>
        <div class="form-group">
            <label>Pembelajaran</label>
            <input type="number" min="1" name="pembelajaran" value="<?= set_value('pembelajaran', $video->pembelajaran ?? '');?>" class="form-control" placeholder="Masukan kelas ..." required>
          </div> -->


        <div class="form-group">
            <label>Link Video Pembelajaran</label>
            <textarea class="form-control" name="linkvideo"  placeholder="Masukan Link pembelajaran ..."><?= $video->link_video ?? '';?></textarea>
          </div>
          <input type="hidden" name='id_video' value="<?= $video->id_video ?? '';?>"> 
          <br>
  
          <button type="submit" class="btn btn-success" name="bsimpan"><?= $button ?></button>
          <button type="reset" class="btn btn-danger" name="breset">Kosongkan</button>
  
        </form>
      </div>
    </div>
    <!-- Akhir Card Form -->

 
 <!-- Awal Card Form -->
 <div class="card mt-3">
      <div class="card-header bg-dark text-white">
        Form Soal
      </div>
      <div class="card-body">
          <form method="post" action="<?=$action?>" enctype="multipart/form-data">
            <div class="row">
          <div class="form-group col-md-12">
            <label>Kelas</label>
            <input type="number" min="1" max="6" name="kelas" value="<?= set_value('kelas', $soal->kelas ?? '');?>" class="form-control" placeholder="Masukan kelas ..." required>
          </div>
          <div class="form-group col-md-12">
            <label>Materi Pembelajaran</label>
            <select class="form-control" name="id_materi">
              <?php foreach ($listMateri as $m) { ?>
                <option value="<?=$m->id_materi?>"
                <?php if ($button == "Edit"){
                     echo ($soal->id_materi == $m->id_materi ) ? "selected": '';
                }?>>
                
                Tema <?=$m->tema?> Subtema <?=$m->subtema?> Pembelajaran <?=$m->pembelajaran?>
              
              </option>
              <?php } ?>
            </select>
          </div>
        

          <?php if($button == "Edit") {

              if($soal->gambar == ''){
                echo"
                <div class='col-md-4'>
                    <h3>Gambar Kosong</h3>
                </div>";
              }else{
                echo"
                <div class='col-md-4'>
                    <img src='".base_url('aset/gambar/'.$soal->gambar)."' width='250px'>
                </div>";
              }
           

                echo "
                <div class='col-md-8'>
                <div class='form-group'>
                    <label for='keterangan'class='font-weight-bold'>Upload Gambar </label><small> (Ukuran dibawah 2mb) </small>
                    <div class='custom-file'>
                        <input type='file' class='custom-file-input' id='customFile' name='gambar'>
                        <label class='custom-file-label' for='customFile'>Pilih Gambar minimal ukuran (600 x 400)</label>
                    </div>
                    <small class='text-info'> Biarkan Jika tidak Ada & Jika tidak sesuai dengan format atau Ukuran Gambar maka gambar di set ke sebelumnya </small>
                </div>
                </div>";
            }else{
                echo"
                <div class='form-group col-md-12'>
              <div class='form-group'>
                  <label for='keterangan'class='font-weight-bold'>Upload Gambar</label><small> (Ukuran dibawah 1mb) </small>
                  <div class='custom-file'>
                      <input type='file' class='custom-file-input' id='customFile' name='gambar'>
                      <label class='custom-file-label' for='customFile'>Rekomendasi ukuran gambar (...)</label>
                    </div>
                </div>
            </div>";
}?>

          
          

            <div class="form-group col-md-12">
              <label>Soal</label>
              <textarea class="form-control" id="soal" rows="7" name="soal"  placeholder="Masukan Soal"><?= $soal->soal ?? '';?></textarea>
            </div>

          <div class="form-group col-md-12">
            <label>Pilihan A</label>
            <input type="text" name="pilihan_A" value="<?= set_value('pilihan_A', $soal->pilihan_A ?? '');?>" class="form-control" placeholder=" Masukan Pilhan A" required>
          </div>
          <div class="form-group col-md-12">
            <label>Pilihan B</label>
            <input type="text" name="pilihan_B" value="<?= set_value('pilihan_B', $soal->pilihan_B ?? '');?>" class="form-control" placeholder=" Masukan Pilhan C" required>
          </div>
          <div class="form-group col-md-12">
            <label>Pilihan C</label>
            <input type="text" name="pilihan_C" value="<?= set_value('pilihan_C', $soal->pilihan_C ?? '');?>" class="form-control" placeholder=" Masukan Pilhan C" required>
          </div>
          <div class="form-group col-md-12">
            <label>Pilihan D</label>
            <input type="text" name="pilihan_D" value="<?= set_value('pilihan_D', $soal->pilihan_D ?? '');?>" class="form-control" placeholder=" Masukan Pilhan D" required>
          </div>

          <div class="form-group col-md-12">
         
            <label>Jawaban</label>
            <select class="form-control" name="jawaban">
                <option value="pilihan_A" <?= $button == 'Edit' ? ($soal->jawaban == 'pilihan_A') ? 'selected' : '' : ''; ?>>A</option>
                <option value="pilihan_B"   <?=  $button == 'Edit' ? ($soal->jawaban == 'pilihan_B') ? 'selected' : '' : ''; ?>>B</option>
                <option value="pilihan_C"  <?=  $button == 'Edit' ? ($soal->jawaban == 'pilihan_C') ? 'selected' : '' : ''; ?> >C</option>
                <option value="pilihan_D"  <?=  $button == 'Edit' ? ($soal->jawaban == 'pilihan_D') ? 'selected' : '' : ''; ?>>D</option>
            </select>
          </div>

          <input type='hidden' name ='gambarLama' value="<?=$soal->gambar??''?>">
          <input type="hidden" name='id_soal' value="<?= $soal->id_soal ?? '';?>"> 
          <br>

  
          <button type="submit" class="btn btn-success mr-2" name="bsimpan"><?= $button ?></button>
          <button type="reset" class="btn btn-danger" name="breset">Kosongkan</button>
        </div>
        </form>
      </div>
    </div>
    <!-- Akhir Card Form -->
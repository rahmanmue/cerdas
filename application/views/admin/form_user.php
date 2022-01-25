  <!-- Awal Card Form -->
  <div class="card mt-3">
      <div class="card-header bg-dark text-white">
        Form User
      </div>
      <div class="card-body">
        <form method="post" action="<?=$action?>">
          <div class="form-group">
            <label>Nama </label>
            <input type="text" name="nama" value="<?= set_value('nama', $user->nama ?? '');?>" class="form-control" required>
          </div>

          <div class="form-group">
            <label>Email </label>
            <input type="email" name="email" value="<?= set_value('email', $user->email ?? '');?>" class="form-control" required>
          </div>

          <div class="form-group">
            <label>Password </label>
            <input type="text" class="form-control" placeholder="Ketik password baru jika ingin diganti atau biarkan kosong password harus lebih dari 3 karakter" name="password" >
          </div>

          <div class="form-group">
            <label>Level </label>
            <select class="form-control" name="status">
                <option value="admin"  <?= ($user->status == 'admin') ? 'selected' : ''; ?>>Admin</option>
                <option value="siswa"  <?= ($user->status == 'siswa') ? 'selected' : ''; ?>>Siswa</option>
            </select>
          </div>
          
          <input type="hidden" name='id_user' value="<?= $user->id_user ?? '';?>"> 
          <input type="hidden" name='passwordLama' value="<?= $user->password ?? '';?>"> 
          <br>
  
          <button type="submit" class="btn btn-success" name="bsimpan"><?= $button ?></button>
          <button type="reset" class="btn btn-danger" name="breset">Reset</button>
  
        </form>
      </div>
    </div>
    <!-- Akhir Card Form -->
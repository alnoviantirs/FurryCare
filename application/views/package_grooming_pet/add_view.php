<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Tambah Harga Paket Grooming</h1>
</div>

<div class="card shadow">
  <div class="card-body">
    <form action="<?= base_url('package_grooming_pet/save_add') ?>" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label>Paket Grooming</label>
        <select name="id_package_grooming" id="" required class="form-control">
          <option value="">--- Pilih Paket Grooming ---</option>
          <?php
          foreach ($package_grooming as $key) { ?>
            <option value="<?= $key->id_package_grooming ?>"><?= $key->title ?></option>
          <?php }
          ?>
        </select>
      </div>
      <div class="form-group">
        <label>Hewan Peliharaan</label>
        <select name="id_pet" id="" required class="form-control">
          <option value="">--- Pilih Hewan Peliharaan ---</option>
          <?php
          foreach ($pet as $key) { ?>
            <option value="<?= $key->id_pet ?>"><?= $key->name ?></option>
          <?php }
          ?>
        </select>
      </div>
      <div class="form-group">
        <label>Harga</label>
        <input type="number" min="0" name="price" class="form-control " required>
      </div>
      <div class="form-action">
        <a href="<?= base_url('package_grooming_pet') ?>" class="btn btn-warning">Batalkan</a>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
  </div>
</div>
<?= $this->include('Views/template/header') ?>

<body>
  <main>
    <!-- navbar -->
    <?= $this->include('Views/template/navbar') ?>
    <!-- end navabr -->
    <div class="layout">
      <!-- navigation -->
      <?= $this->include('Views/template/navigation') ?>
      <!-- end -->
      <!-- sidebar -->

      <!-- end -->
      <div class="container">
        <!-- card from -->
        <div class="container">
          <div class="col-md-12">
            <div class="card mt-3">
              <div class="card-header bg-primary text-white">
                Form input data
              </div>
              <div class="card-body">
                <form method="POST" action="">
                  <div class="from group col-md-12">
                    <label>Nama</label>
                    <input type="text" name="tNama" class="form-control" placeholder="Input Nama anda disini" required>
                  </div>
                  <div class="from group">
                    <label>Tanggal Lahir</label>
                    <input type="text" name="tTanggal lahir" class="form-control" placeholder="Input Tanggal Lahir anda disini" required>
                  </div>
                  <div class="from group">
                    <label>Jenis Kelamin</label>
                    <input type="text" name="tJenis Kelamin" class="form-control" placeholder="Input Jenis Kelamin anda disini" required>
                  </div>
                  <div class="from group">
                    <label>No Handphone</label>
                    <input type="text" name="tNo Handphone" class="form-control" placeholder="Input No Handphone anda disini" required>
                  </div>
                  <div class="from group">
                    <label>Provinsi</label>
                    <select class="form-control" name="tKota">
                      <option></option>
                      <option value="Jawa Barat">Jawa Barat</option>
                      <option value="DKI Jakarta">DKI Jakarta</option>
                      <option value="Jawa Tengah">Jawa Tengah </option>
                    </select>
                  </div>
                  <div class="from group">
                    <label>Kota</label>
                    <select class="form-control" name="tKota">
                      <option></option>
                      <option value="Jakarta Utara">Jakarta Utara</option>
                      <option value="Jakarta Timur">Jakarta Timur</option>
                      <option value="Jakarta Selatan">Jakarta Selatan</option>
                      <option value="Jakarta Pusat">Jakarta Pusat</option>
                      <option value="Jakarta Barat">Jakarta Barat</option>
                    </select>
                  </div>
                  <button type="submit" class="btn btn-success" name="bsimpan">Simpan</button>

                </form>
              </div>
            </div>
            <!-- close card form -->

            <!-- card  table-->
            <div class="container">
              <div class="col-md-12">
                <div class="card text-center">
                  <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                      <li class="nav-item">
                        <a class="nav-link active" href="data/user">From Data User</a>
                      </li>
                      <!-- <li class="nav-item">
                  <a class="nav-link" href="data/from">Tambah Data User</a>
                </li> -->
                    </ul>
                  </div>
                  <div class="card-body">
                    <div class="card-header bg-success text-white">
                      Daftar user
                    </div>
                    <div class="card-body">

                      <table class="table table-bordered table-striped">
                        <tr>
                          <th>NO</th>
                          <th>Nama</th>
                          <th>Jenis Kelamin</th>
                          <th>No Handphone</th>
                          <th>Provinsi</th>
                          <th>Kota</th>
                          <th>Aksi</th>


                        </tr>
                        <tr>
                          <td>1</td>
                          <td>jhon</td>
                          <td>Laki-Laki</td>
                          <td>081344446666</td>
                          <td>Jawa Barat</td>
                          <td>Bandung</td>
                          <td>
                            <a href="#" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">Edit</a>
                            <a href="#" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Hapus</a>

                          </td>
                        </tr>
                      </table>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- close card table -->
          </div>

        </div>
  </main>
  <?= $this->include('Views/template/footer') ?>
</body>

</html>
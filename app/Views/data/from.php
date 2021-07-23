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
                                    <div class="from group">
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


                    </div>

    </main>
    <?= $this->include('Views/template/footer') ?>
</body>

</html>
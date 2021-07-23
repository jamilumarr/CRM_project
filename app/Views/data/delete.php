<?= $this->include('template/header') ?>

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

            <div id="content-page" class="content-page">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="iq-card">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Add User</h4>
                                    </div>
                                </div>
                                <form action="/data/save" method="post" enctype="multipart/form-data">
                                    <div class="iq-card-body">
                                        <div class="new-user-info">

                                            <div class="row">
                                                <div class="from group col-md-12">
                                                    <label>Nama</label>
                                                    <input type="text" name="tNama" class="form-control" id="Nama" autofocus>
                                                </div>
                                                <div class="from group col-md-12">
                                                    <label>Tanggal Lahir</label>
                                                    <input type="text" name="tTanggal lahir" class="form-control" id="tgl_lahir">
                                                </div>
                                                <div class="from group col-md-12">
                                                    <label>Jenis Kelamin</label>
                                                    <input type="text" name="tJenis Kelamin" class="form-control" id="Jenis_kelamin">
                                                </div>
                                                <div class="from group col-md-12">
                                                    <label>No Handphone</label>
                                                    <input type="text" name="tNo Handphone" class="form-control" id="No_Handphone">
                                                </div>
                                                <div class="from group col-md-12">
                                                    <label>Provinsi</label>
                                                    <input type="text" name="tProvinsi" class="form-control" id="Provinsi">
                                                </div>
                                                <div class="from group col-md-12">
                                                    <label>Kota</label>
                                                    <input type="text" name="tKota" class="form-control" id="Kota">
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-success">Simpan</button>

                                            <!-- <button type="submit" onclick="CreateUser()" id="createUser" class="btn btn-custom" style="float: right;">Submit</button><br> -->

                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>
    <?= $this->include('Views/template/footer') ?>
</body>

</html>
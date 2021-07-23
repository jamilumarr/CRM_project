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
                <!--  Content  -->
                <div id="content-page" class="content-page">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="iq-card">
                                    <div class="iq-card-header d-flex justify-content-between">
                                        <div class="iq-header-title">
                                            <h4 class="card-title mt-3">Data User</h4>
                                        </div>
                                        <a href="<?= base_url("/data/create") ?>" class="btn mb-3 btn-primary" style="margin-top: 15px;"></i>Add</a>
                                    </div>
                                    <div class="iq-card-body">
                                        <div class="table-responsive">
                                            <table id="data" class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">No</th>
                                                        <th scope="col">Nama</th>
                                                        <th scope="col">Tanggal Lahir</th>
                                                        <th scope="col">Jenis Kelamin</th>
                                                        <th scope="col">No_handphone</th>
                                                        <th scope="col">Provinsi</th>
                                                        <th scope="col">Kota</th>
                                                        <th scope="col">&emsp;Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $no = 1; ?>
                                                    <?php if ($user != "") { ?>
                                                        <?php foreach ($user as $row) : ?>
                                                            <tr>
                                                                <td><?= $no++ ?></td>
                                                                <td><?= $row->Nama ?></td>
                                                                <td><?= $row->Tgl_lahir ?></td>
                                                                <td><?= $row->Jenis_kelamin ?></td>
                                                                <td><?= $row->No_Handphone ?></td>
                                                                <td><?= $row->Provinsi ?></td>
                                                                <td><?= $row->Kota ?></td>
                                                                <td>
                                                                    <a href="/edit?id=<?= $row->Id_user ?>" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">Edit</a>
                                                                    <a href="/delete/<?= $row->Id_user ?>" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Hapus</a>

                                                                </td>
                                                            </tr>
                                                        <?php endforeach; ?>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Content  -->

            </div>
    </main>
    <?= $this->include('Views/template/footer') ?>
</body>

</html>
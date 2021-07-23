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
            <?= $this->include('Views/template/sidebar') ?>
            <!-- end -->


        </div>
    </main>
    <?= $this->include('Views/template/footer') ?>
</body>

</html>
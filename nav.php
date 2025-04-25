<?php if (basename($_SERVER['PHP_SELF']) != 'riwayat.php') { ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Aktivitas Selama PKL</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAddTodo">
                        Add Activity
                    </button>
                </li>
                <li class="nav-item ms-3">
                    <a href="riwayat.php" class="btn btn-outline-secondary">
                        Riwayat
                    </a>
                </li>
                <li class="nav-item ms-3">
                    <a href="ukk-f/index.php" class="btn btn-outline-secondary">
                        Data Siswa
                    </a>
                </li>
        </div>
    </div>
</nav><br>
<?php } ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Perpustakaan Digital - Dashboard</title>

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <style>
        /* Menambah sedikit jarak halus dan hover effect pada card */
        .card-stat {
            transition: transform 0.2s ease-in-out;
        }
        .card-stat:hover {
            transform: translateY(-5px);
        }
    </style>
</head>

<body id="page-top">
    <div class="container-fluid">

        <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="cetak.php" target="_blank" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-download fa-sm text-white-50"></i> Generate Report
            </a>
        </div>

        <div class="row">
            
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card card-stat border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Kategori</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <?= mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM kategori")); ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-tags fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card card-stat border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Buku</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <?= mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM buku")); ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-book fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card card-stat border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Ulasan</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <?= mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM ulasan")); ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-comments fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card card-stat border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total User</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <?= mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM user")); ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row mt-2">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Informasi Sesi Pengguna</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" width="100%" cellspacing="0">
                                <tbody>
                                    <tr>
                                        <th style="width: 200px;" class="bg-light">Nama Lengkap</th>
                                        <td><?= $_SESSION['user']['nama']; ?></td>
                                    </tr>
                                    <tr>
                                        <th class="bg-light">Level Akses</th>
                                        <td><span class="badge badge-primary px-3"><?= $_SESSION['user']['level']; ?></span></td>
                                    </tr>
                                    <tr>
                                        <th class="bg-light">Tanggal Login</th>
                                        <td><?= date('d F Y'); ?> <small class="text-muted">(Pukul <?= date('H:i'); ?>)</small></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
</html>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/all.css')?>">

    <!-- My CSS -->

    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">

    <title>Mikrotik Academy - LP3I</title>
    <style>
    .jumbotron {
        background-image: url(<?php echo base_url("assets/img/kampus.jpg");
        ?>);
        background-size: cover;
        height: 570px;
        color: white;
        text-align: center;
        position: relative;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
        <div class="container"><img class="navbar-brand mb-2"
                src="<?php echo base_url('assets/img/logo-lp3i.png')?>"><button class="navbar-toggler" type="button"
                data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a class="nav-link" href="<?= base_url();?>">Home
                            <span class="sr-only">(current)</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url();?>Home/prog/">Program</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url();?>Home/kurikulum/">Kurikulum</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url();?>Home/trainer/">Trainer</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url();?>Home/peserta/">Peserta</a></li>
                    <li class="nav-item"><a class="nav-link mr-4" href="#">Dokumentasi</a></li>
                    <li class="nav-item"><a class="btn btn-primary tombol" href="#">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
<?php
if (!isset($_SESSION['Admin'])){
    header('location:http://admin.vitenetteservices.com/index.php?logout=true');
}?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Admin ViteNetteService</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="/public/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">

    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="/public/package/dist/sweetalert2.css">

    <link href="/public/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/public/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/public/css/bootstrap.min.css" rel="stylesheet">
    <link href="/public/css/font-awesome.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/public/css/style.css" rel="stylesheet">
</head>

<body>
<div class="container-fluid position-relative d-flex p-0">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Sidebar Start -->
    <div class="sidebar pe-4 pb-3">
        <nav class="navbar bg-secondary navbar-dark">
            <a href="index.html" class="navbar-brand mx-4 mb-3">
                <h3 class="text-primary"><i class="fa fa-dashboard me-2"></i>VNS</h3>
            </a>
            <div class="d-flex align-items-center ms-4 mb-4">
                <div class="ms-3">
                    <h6 class="mb-0"><?= $_SESSION['Admin']['np']?></h6>
                    <span><?= $_SESSION['Admin']['post']?></span>
                </div>
            </div>
            <div class="navbar-nav w-100">
                <a href="http://admin.vitenetteservices.com/dashboard/" class="nav-item nav-link active"><i class="fa fa-dashboard me-2"></i>Tableau de Bord</a>
            </div>
        </nav>
    </div>
    <!-- Sidebar End -->


    <!-- Content Start -->
    <div class="content">
        <!-- Navbar Start -->
        <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
            <a href="http://admin.vitenetteservices.com/dashboard/" class="navbar-brand d-flex d-lg-none me-4">
                <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
            </a>
            <a href="#" class="sidebar-toggler flex-shrink-0">
                <i class="fa fa-bars"></i>
            </a>
            <div class="navbar-nav align-items-center ms-auto">
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <span class="d-none d-lg-inline-flex"><?= $_SESSION['Admin']['np']?></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                        <a href="#" class="dropdown-item"><?= $_SESSION['Admin']['post']?></a>
                        <a href="/index.php?logout=true" class="dropdown-item">Deconnexion <i class="fa fa-sign-out"></i></a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->

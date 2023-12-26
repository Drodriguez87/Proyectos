<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Provispol S A es una empresa en Colombia, con sede principal en Bogotá D.C.. Opera en Fabricación de Materiales Plásticos y Resinas sector.">
    <!-- Twitter meta-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="David Rodriguez">
    <meta name="theme-color" content="#009688">
    <link rel="shortcut icon" href="<?= media();?>/images/uploads/favicon.png"> 
    <title><?= $data['page_tag'] ?></title>
    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/bootstrap-grid.min.css">
    <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/bootstrap-reboot.css">
    <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/bootstrap.min.css">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/style.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="<?= base_url(); ?>/dashboard">Provispol</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-bs-toggle="dropdown" aria-label="Open Profile Menu"><i class="bi bi-person fs-4"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="<?= base_url(); ?>/opciones"><i class="bi bi-gear me-2 fs-5"></i> Opciones</a></li>
            <li><a class="dropdown-item" href="<?= base_url(); ?>/perfil"><i class="bi bi-person me-2 fs-5"></i> Perfil</a></li>
            <li><a class="dropdown-item" href="<?= base_url(); ?>/logout"><i class="bi bi-box-arrow-right me-2 fs-5"></i> Cerrar Sesion</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <?php require_once("nav_admin.php"); ?>
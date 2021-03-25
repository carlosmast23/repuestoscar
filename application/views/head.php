<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>
    Repuestos Car
  </title>

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,700&display=swap" rel="stylesheet" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="<?=base_url()?>">
            <img src="images/logo.png" alt="" />
          </a>
          <span>Bienvenido/a de nuevo <?= $this->session->userdata('username') ?></span>
          <a href="<?= base_url() ?>admin">Menú</a>
          <a href="<?= base_url() ?>login/logout_ci">Salir del sistema</a>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <!-- contact section -->

  <section class="contact_section layout_padding-bottom layout_padding2-top">
    <div class="container container-bg">
      <div class="row">
        <div class="col-lg-10 col-md-10">

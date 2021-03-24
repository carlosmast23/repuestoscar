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
<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/bootstrap.css" />

<!-- Custom styles for this template -->
<link href="<?=base_url()?>css/style.css" rel="stylesheet" />
<!-- responsive style -->
<link href="<?=base_url()?>css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="<?=base_url()?>">
            <img src="<?=base_url()?>images/logo.png" alt="" />
        </a>
    </nav>
</div>
</header>
<!-- end header section -->
</div>
<!-- end hero area -->

<section class="contact_section layout_padding-bottom layout_padding2-top">
    <div class="container container-bg">
      <div class="row">
        <div class="col-lg-8 col-md-7 px-0">



            <?php
            $username = array('name' => 'username','class' => 'form-control');
            $password = array('name' => 'password','class' => 'form-control');
            $submit = array('name' => 'submit', 'value' => 'Iniciar sesión', 'title' => 'Iniciar sesión','class' => 'btn btn-success');
            ?>

            <div class="box">
               <div class="row alert alert-info" role="alert">
                <h5>Inicio de Sesión</h5>
            </div>
            <div class="row">

                <?= form_open(base_url() . 'login/new_user') ?>
                <label for="username" class="text-white">Nombre de usuario:</label>
                <?= form_input($username) ?><p><?= form_error('username') ?></p>
                <label for="password" class="text-white">Introduce tu password:</label>
                <?= form_password($password) ?><p><?= form_error('password') ?></p>
                <?= form_hidden('token', $token) ?>
                <?= form_submit($submit) ?>
                <?= form_close() ?>
                <?php
                if ($this->session->flashdata('usuario_incorrecto')) {
                    ?>
                    <p><?= $this->session->flashdata('usuario_incorrecto') ?></p>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>
</div>
</section>
<script type="text/javascript" src="<?=base_url()?>js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/bootstrap.js"></script>
</script>
</body>

</html>
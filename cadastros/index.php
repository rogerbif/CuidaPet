<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: /cuidapet/registration/login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: /cuidapet/registration/login.php");
  }
?>

<?php
require_once('functions.php');
require_once('../config.php');	
require_once(DBAPI);
?>
<?php include(HEADER_TEMPLATE); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-7">
			<div style="height: 530px;">
				<header>
					<div class="row">
					  <div class="col-sm-6">
						 <h2>Vacinas</h2>
					  </div>
					</div>
				</header>
				<embed id="embedlista_vacinas" type="text/html" src="lista_vacinas.php" width="600px" height="750px" />
			</div>
        </div>

        <div class="col-md-5">
			<div style="height: 530px;">
				<?php include('add_vacinas.php'); ?>
			</div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-7">
			<div style="height: 530px;">
				<header>
					<div class="row">
					  <div class="col-sm-8">
						 <h2>Profissionais</h2>
					  </div>
					</div>
				</header>
				<embed id="embedlista_profissionais" type="text/html" src="lista_profissionais.php" width="600px" height="750px" />
			</div>
        </div>

        <div class="col-md-5">
			<div style="height: 530px;">
				<?php include('add_profissionais.php'); ?>
			</div>
        </div>
    </div>
</div>
<?php include('modal.php'); ?>
<?php include(FOOTER_TEMPLATE); ?>
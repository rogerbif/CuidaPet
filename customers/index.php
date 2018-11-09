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
   add();
   index();
   ?>

<?php include(HEADER_TEMPLATE); ?>	

<div class="container-fluid">
    <div class="row">
        <div class="col-md-7">
			<div style="height: 950px;">
				<header>
				   <div class="row">
					  <div class="col-sm-6">
						 <h2>Clientes</h2>
				   </div>
				</header>
				<?php include('lista2.php'); ?>
			</div>
        </div>

        <div class="col-md-5">
			<div style="height: 950px;">
				<?php include('add2.php'); ?>
			</div>
        </div>
    </div>
</div>
<?php include('modal.php'); ?>
<?php include(FOOTER_TEMPLATE); ?>
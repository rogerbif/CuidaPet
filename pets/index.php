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
<?php 
require_once('../config.php');	
require_once(DBAPI);
$customers = null;	
$customer = null;
$customers = find_all('customers');
?>
<?php include(HEADER_TEMPLATE); ?>
<!--
Nome -name
Proprietario - owner
Especie - species
Raca - Breed
Pelo - fur
Cor - color
Sexo - sex
Nascimento - birthdate
Castrado - castrated
 -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-7">
			<div style="height: 950px;">
				<header>
					<div class="row">
					  <div class="col-sm-6">
						 <h2>Pets</h2>
					  </div>
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
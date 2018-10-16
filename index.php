<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: registration/login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: registration/login.php");
  }
?>

<?php require_once 'config.php'; ?>	
<?php require_once DBAPI; ?>	

<?php include(HEADER_TEMPLATE); ?>	
<?php $db = open_database(); ?>	

<!--<h1>Dashboard</h1>	-->
<hr />	

<?php if ($db) : ?>	

<div class="container">
    <div class="row">
        <div class="col-md-6">
			<div style="height: 950px;">
				<embed id="embedAgenda" type="text/html" src="agenda/dia.php" width="100%" height="100%" />
			</div>
        </div>

        <div class="col-md-6">
			<div style="height: 950px;">
				<embed id="embedAgenda" type="text/html" src="agenda/dia.php" width="100%" height="100%" />
			</div>
		</div>
    </div>
</div>

<?php else : ?>		
<div class="alert alert-danger" role="alert">			
<p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>		
</div>	
<?php endif; ?>	
<?php include(FOOTER_TEMPLATE); ?>
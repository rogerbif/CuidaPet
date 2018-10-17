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

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
			<div style="height: 950px;">
				<embed id="embedAgenda" type="text/html" src="agenda/dia.php" width="100%" height="100%" />
			</div>
        </div>

        <div class="col-md-6">
			<div style="height: 950px;">
				<div class="col-lg-10">
					<div class="panel-group" id="accordion">
						<!-- Clientes Panel -->
						<div class="panel panel-primary">
							<div class="panel-heading">
								 <h4 class="panel-title" data-toggle="collapse" data-target="#collapseZero" aria-expanded="true" style="color: #007bff">
									 <a href="#"><small><span class="glyphicon glyphicon-menu-right"></span></small></a>
									 <i class="fa fa-plus fa-1x"></i>
									Clientes
								 </h4>
							</div>
							<div id="collapseZero" class="panel-collapse collapse in" >
								<div class="panel-body">
									<embed id="embedCustomer" type="text/html" src="customers/lista.php" width="600px" height="450px" />
								</div>
							</div>
						</div>


						<!-- Pets Panel -->
						<div class="panel panel-primary">
							<div class="panel-heading">
								 <h4 class="panel-title" data-toggle="collapse" data-target="#collapseOne" style="color: #007bff">
									 <a href="#"><small><span class="glyphicon glyphicon-menu-right white"></span></small></a>
									 <i class="fa fa-plus fa-1x"></i>
									 Pets
								 </h4>
							</div>
							<div id="collapseOne" class="panel-collapse collapse in" >
								<div class="panel-body">
									<embed id="embedCustomer" type="text/html" src="customers/lista.php" width="600px" height="450px" />
								</div>
							</div>
						</div>
					</div>
				</div>

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
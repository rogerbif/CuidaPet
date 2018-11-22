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

<?php 
require_once 'config.php'; 
require_once DBAPI; 
?>

<?php include(HEADER_TEMPLATE); ?>	
<?php $db = open_database(); ?>	
<?php if ($db) : ?>	

<div class="container-fluid">
	<div class="row">
		<div class="col-md-6">
			<div style="height: 950px;">
				<embed id="embedAgenda" type="text/html" src="agenda/dia.php" width="100%" height="100%" />
			</div>
		</div>

		<div class="col-md-6">
			<div style="height: 950px; width: 630px;">
				<!--Accordion wrapper-->
				<div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
					<!-- Accordion card -->
					<div class="card">
						<!-- Card header -->
						<div class="card-header" role="tab" id="headingOne1" style="color: #007bff">
							<a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
								<h5 class="mb-0">
									<i class="fa fa-plus fa-1x"></i> Clientes
								</h5>
							</a>
						</div>
						<!-- Card body -->
						<div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordionEx">
							<div class="card-body">
								<embed id="embedCustomer" type="text/html" src="customers/lista.php" width="600px" height="505px" />
							</div>
						</div>
					</div>
					<!-- Accordion card -->
					<div class="card">
						<!-- Card header -->
						<div class="card-header" role="tab" id="headingTwo2" style="color: #007bff">
							<a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
								<h5 class="mb-0">
									<i class="fa fa-plus fa-1x"></i> Pets
								</h5>
							</a>
						</div>
						<!-- Card body -->
						<div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2" data-parent="#accordionEx">
							<div class="card-body">
								<embed id="embedPets" type="text/html" src="pets/lista.php" width="600px" height="505px" />
							</div>
						</div>
					</div>
					<!-- Accordion card -->
				</div>
				<!-- Accordion wrapper -->
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
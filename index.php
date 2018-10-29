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
<?php //require_once'inc/notifications.class.php'; ?>

<?php include(HEADER_TEMPLATE); ?>	
<?php $db = open_database(); ?>	

<!--<h1>Dashboard</h1>	-->
<?php //if (!empty($_SESSION['message'])) : ?>		
		<!--<div class="alert alert-<?php //echo $_SESSION['type']; ?> alert-dismissible" role="alert">			
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>			
			<?php //echo $_SESSION['message']; ?>		
		</div>	-->	
	<?php //clear_messages(); ?>	
<?php //endif; ?>

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
											<embed id="embedCustomer" type="text/html" src="customers/lista.php" width="600px" height="430px" />
									  </div>
								</div>
						  </div>
						  <!-- Accordion card -->

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
								<embed id="embedCustomer" type="text/html" src="pets/lista.php" width="600px" height="450px" />
							  </div>
							</div>

						  </div>
						  <!-- Accordion card -->

						  <!-- Accordion card
						  <div class="card">

							-- Card header --
							<div class="card-header" role="tab" id="headingThree3">
							  <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3">
								<h5 class="mb-0">
								  Collapsible Group Item #3 <i class="fa fa-angle-down rotate-icon"></i>
								</h5>
							  </a>
							</div>

							-- Card body --
							<div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3" data-parent="#accordionEx">
							  <div class="card-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							  </div>
							</div>

						  </div>
						  -- Accordion card -->

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
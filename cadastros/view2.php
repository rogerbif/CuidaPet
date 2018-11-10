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

<?php require_once('functions.php'); view($_GET['id']); ?>
<?php 
require_once('../config.php');	
require_once(DBAPI);
$customer = null;
$customer = find('customers', $pet['owner']);
?>
<?php include(HEADER_TEMPLATE); ?>

<div id="actions" class="row">
	<div class="col-md-10" style="position: relative;"> 
		<h2><?php echo $pet['name']; ?></h2>
	</div>
    <div class="col-md-2" style="position: relative;"> 
		<a href="edit.php?id=<?php echo $pet['id']; ?>" class="btn btn-primary">Editar</a> <a href="index.php" class="btn btn-default">Voltar</a> 
	</div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-5">
			<div style="height: 750px;">
				<hr/>
				<!-- card Dados Animal -->
				<div class="card">
					<div class="card-header" style="color: #007bff">
						<h5> Dados do Animal</h5>
					</div>
					<div class="row">		  
						<div class="form-group col-md-6">
							<p style="margin-left: 20px;"> Data de Nascimento: </br><?php echo date('d/m/Y', strtotime($pet['birthdate'])); ?></p>
						</div>
						<div class="form-group col-md-6">
							<p> Data de Cadastro: </br><?php echo date('d/m/Y', strtotime($pet['created'])); ?></p>
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-4">
							<p style="margin-left: 20px;"> Especie: </br><?php echo $pet['species']; ?></p>
						</div>
						<div class="form-group col-md-4">
							<p> Raça: </br><?php echo $pet['breed']; ?></p>
						</div>
						<div class="form-group col-md-4">
							<p> Pelo: </br><?php echo $pet['fur']; ?></p>
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-4">
							<p style="margin-left: 20px;"> Cor: </br><?php echo $pet['color']; ?></p>
						</div>
						<div class="form-group col-md-4">
							<p> Sexo: </br><?php echo $pet['sex']; ?></p>
						</div>
						<div class="form-group col-md-4">
							<p> Castrado: </br><?php echo $pet['castrated'] ? 'Sim' : 'Não' ?></p>
						</div>
					</div>
				</div>
				<!-- card Dados Proprietario -->
				<div class="card">
					<div class="card-header" style="color: #007bff">
						<h5> Dados do Proprietario</h5>
					</div>
					<div class="row">
						<div class="form-group col-md-12">
							<p style="margin-left: 20px;" > Proprietario: </br><?php echo $customer['name']; ?></p>
						</div>
					</div>
				</div>
				<!-- card Dados Contato -->
				<div class="card">
					<div class="card-header" style="color: #007bff">
						<h5>Dados para Contato</h5>
					</div>
					<div class="row">
						<div class="form-group col-md-6">
							<p style="margin-left: 20px;">Telefone: </br><?php echo $customer['phone']; ?></p>
						</div>
						<div class="form-group col-md-6">
							<p style="margin-left: 20px;">Celular: </br><?php echo $customer['mobile']; ?></p>
						</div>
					</div>
				</div>
			</div>
        </div>

        <div class="col-md-7">
			<div style="height: 750px;">
					<!--Accordion wrapper-->
						<div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
						  <!-- Accordion card 1 begin -->
						  <div class="card">
								<!-- Card header -->
								<div class="card-header" role="tab" id="headingOne1" style="color: #007bff">
									  <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
										<h5 class="mb-0"><i class="fa fa-plus fa-1x"></i>Registros Clinicos</h5>
									  </a>
								</div>
								<!-- Card body -->
								<div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordionEx">
									  <div class="card-body">
											<embed id="embedCustomer" type="text/html" src="../pets/lista_pep.php?customerId=<?php echo $customer['id']; ?>" width="100%" height="330px" />
									  </div>
								</div>
						  </div>
						  <!-- Accordion card 1 end -->

						  <!-- Accordion card 2 begin-->
						  <div class="card">
								<!-- Card header -->
								<div class="card-header" role="tab" id="headingTwo2" style="color: #007bff">
									  <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
											<h5 class="mb-0"><i class="fa fa-plus fa-1x"></i>Vacinas</h5>
									  </a>
								</div>
								<!-- Card body -->
								<div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2" data-parent="#accordionEx">
									  <div class="card-body">
											<embed id="embedCustomer" type="text/html" src="../pets/lista_pep.php?customerId=<?php echo $customer['id']; ?>" width="100%" height="330px" />
									  </div>
								</div>
						  </div>
						  <!-- Accordion card 1 end -->
						  
						  <!-- Accordion card 3 begin-->
						  <div class="card">
								<!-- Card header -->
								<div class="card-header" role="tab" id="headingThree3" style="color: #007bff">
									  <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3">
											<h5 class="mb-0"><i class="fa fa-plus fa-1x"></i>Notas</h5>
									  </a>
								</div>
								<!-- Card body -->
								<div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3" data-parent="#accordionEx">
									  <div class="card-body">
											<embed id="embedCustomer" type="text/html" src="../pets/lista_pep.php?customerId=<?php echo $customer['id']; ?>" width="100%" height="330px" />
									  </div>
								</div>
						  </div>
						  <!-- Accordion card 3 end-->
						  
						  <!-- Accordion card 4 begin-->
						  <div class="card">
								<!-- Card header -->
								<div class="card-header" role="tab" id="headingThree4" style="color: #007bff">
									  <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree4" aria-expanded="false" aria-controls="collapseThree4">
											<h5 class="mb-0"><i class="fa fa-plus fa-1x"></i>Exames</h5>
									  </a>
								</div>
								<!-- Card body -->
								<div id="collapseThree4" class="collapse" role="tabpanel" aria-labelledby="headingThree4" data-parent="#accordionEx">
									  <div class="card-body">
											<embed id="embedCustomer" type="text/html" src="../pets/lista_pep.php?customerId=<?php echo $customer['id']; ?>" width="100%" height="330px" />
									  </div>
								</div>
						  </div>
						  <!-- Accordion card 4 end-->
						</div>
					<!-- Accordion wrapper -->
			</div>
		</div>
    </div>
</div>

<!-- -->


<?php include(FOOTER_TEMPLATE); ?>
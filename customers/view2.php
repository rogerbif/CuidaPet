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

<?php require_once( 'functions.php'); view($_GET[ 'id']); ?>
<?php include(HEADER_TEMPLATE); ?>

<div id="actions" class="row">
	<div class="col-md-10" style="position: relative;"> 
		<h2>Cliente <?php echo $customer['name']; ?></h2>
	</div>
    <div class="col-md-2" style="position: relative;"> 
		<a href="edit.php?id=<?php echo $customer['id']; ?>" class="btn btn-primary">Editar</a> <a href="index.php" class="btn btn-default">Voltar</a> 
	</div>
</div>
<hr>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-5">
			<div style="height: 750px;">
				<hr />
				<h4>Dados Pessoais</h4>
					<div class="row">
						<div class="form-group col-md-12">
							<label for="name">Nome</label>
							<input type="text" class="form-control" name="customer['name']" disabled value="<?php echo $customer['name']; ?>"> </div>
					</div>
					<div class="row">
						<div class="form-group col-md-6">
							<label for="campo2">CPF</label>
							<input type="text" class="form-control" name="customer['cpf_cnpj']" disabled value="<?php echo $customer['cpf_cnpj']; ?>"> </div>
						<div class="form-group col-md-6">
							<label for="campo3">Data de Nascimento</label>
							<input type="text" class="form-control" name="customer['birthdate']" disabled value="<?php echo date("d/m/Y" , strtotime($customer['birthdate'])); ?>"> </div>
					</div>
				<h4>Endereço</h4>
					<div class="row">
						<div class="form-group col-md-6">
							<label for="campo1">Endereço</label>
							<input type="text" class="form-control" name="customer['address']" disabled value="<?php echo $customer['address']; ?>"> </div>
						<div class="form-group col-md-6">
							<label for="campo2">Bairro</label>
							<input type="text" class="form-control" name="customer['hood']" disabled value="<?php echo $customer['hood']; ?>"> </div>
					</div>
					<div class="row">
						<div class="form-group col-md-6">
							<label for="campo1">Município</label>
							<input type="text" class="form-control" name="customer['city']" disabled value="<?php echo $customer['city']; ?>"> </div>
						<div class="form-group col-md-2">
							<label for="campo3">UF</label>
							<input type="text" class="form-control" name="customer['state']" disabled value="<?php echo $customer['state']; ?>"> </div>
						<div class="form-group col-md-4">
							<label for="campo3">CEP</label>
							<input type="text" class="form-control" name="customer['zip_code']" disabled value="<?php echo $customer['zip_code']; ?>"> </div>
					</div>
					<h4>Dados para Contato</h4>
					<div class="row">
						<div class="form-group col-md-4">
							<label for="campo2">Telefone</label>
							<input type="text" class="form-control" name="customer['phone']" disabled value="<?php echo $customer['phone']; ?>"> </div>
						<div class="form-group col-md-4">
							<label for="campo3">Celular</label>
							<input type="text" class="form-control" name="customer['mobile']" disabled value="<?php echo $customer['mobile']; ?>"> </div>
						<div class="form-group col-md-4">
							<label for="campo3">Data de Cadastro</label>
							<input type="text" class="form-control" name="customer['created']" disabled value="<?php echo date("d/m/Y" , strtotime($customer['created'])); ?>"> </div>
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
										<h5 class="mb-0"><i class="fa fa-plus fa-1x"></i> Pets</h5>
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
											<h5 class="mb-0"><i class="fa fa-plus fa-1x"></i> Notas</h5>
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
											<h5 class="mb-0"><i class="fa fa-plus fa-1x"></i> Atividades Agendadas</h5>
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
						</div>
					<!-- Accordion wrapper -->
			</div>
		</div>
    </div>
</div>

<?php include(FOOTER_TEMPLATE); ?>
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
<h2>Cliente <?php echo $customer['name']; ?></h2>
<hr>

<!-- teste nova view -->
<?php //if (!empty($_SESSION[ 'message'])) : ?>
<!--<div class="alert alert-<?php //echo $_SESSION['type']; ?>">
    <?php //echo $_SESSION[ 'message']; ?>
</div>-->
<?php //endif; ?>

<hr />
<div class="row">
	<div class="form-group col-md-7">
		<label for="name">Nome / Razão Social</label>
		<input type="text" class="form-control" name="customer['name']" disabled value="<?php echo $customer['name']; ?>"> </div>
	<div class="form-group col-md-3">
		<label for="campo2">CNPJ / CPF</label>
		<input type="text" class="form-control" name="customer['cpf_cnpj']" disabled value="<?php echo $customer['cpf_cnpj']; ?>"> </div>
	<div class="form-group col-md-2">
		<label for="campo3">Data de Nascimento</label>
		<input type="text" class="form-control" name="customer['birthdate']" disabled value="<?php echo $customer['birthdate']; ?>"> </div>
</div>
<div class="row">
	<div class="form-group col-md-5">
		<label for="campo1">Endereço</label>
		<input type="text" class="form-control" name="customer['address']" disabled value="<?php echo $customer['address']; ?>"> </div>
	<div class="form-group col-md-3">
		<label for="campo2">Bairro</label>
		<input type="text" class="form-control" name="customer['hood']" disabled value="<?php echo $customer['hood']; ?>"> </div>
	<div class="form-group col-md-2">
		<label for="campo3">CEP</label>
		<input type="text" class="form-control" name="customer['zip_code']" disabled value="<?php echo $customer['zip_code']; ?>"> </div>
	<div class="form-group col-md-2">
		<label for="campo3">Data de Cadastro</label>
		<input type="text" class="form-control" name="customer['created']" disabled value="<?php echo $customer['created']; ?>"> </div>
</div>
<div class="row">
	<div class="form-group col-md-3">
		<label for="campo1">Município</label>
		<input type="text" class="form-control" name="customer['city']" disabled value="<?php echo $customer['city']; ?>"> </div>
	<div class="form-group col-md-2">
		<label for="campo2">Telefone</label>
		<input type="text" class="form-control" name="customer['phone']" disabled value="<?php echo $customer['phone']; ?>"> </div>
	<div class="form-group col-md-2">
		<label for="campo3">Celular</label>
		<input type="text" class="form-control" name="customer['mobile']" disabled value="<?php echo $customer['mobile']; ?>"> </div>
	<div class="form-group col-md-1">
		<label for="campo3">UF</label>
		<input type="text" class="form-control" name="customer['state']" disabled value="<?php echo $customer['state']; ?>"> </div>
	<div class="form-group col-md-2">
		<label for="campo3">Inscrição Estadual</label>
		<input type="text" class="form-control" name="customer['ie']" disabled value="<?php echo $customer['ie']; ?>"> </div>
</div>
<div id="actions" class="row">
    <div class="col-md-12"> <a href="edit.php?id=<?php echo $customer['id']; ?>" class="btn btn-primary">Editar</a> <a href="index.php" class="btn btn-default">Voltar</a> </div>
</div>

<?php include(FOOTER_TEMPLATE); ?>
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
<?php 
require_once('../config.php');	
require_once(DBAPI);
$customer = null;
$customer = find('customers', $pet['owner']);
?>
<?php include(HEADER_TEMPLATE); ?>
<h2>Cliente <?php echo $pet['name']; ?></h2>
<hr>

<!-- teste nova view -->
<?php //if (!empty($_SESSION[ 'message'])) : ?>
<!--<div class="alert alert-<?php //echo $_SESSION['type']; ?>">
    <?php //echo $_SESSION[ 'message']; ?>
</div>-->
<?php //endif; ?>
<!--
Nome -name -
Proprietario - owner -
Especie - species -
Raca - Breed -
Pelo - fur -
Cor - color -
Sexo - sex -
Nascimento - birthdate -
Castrado - castrated -
 -->
<hr />
<div class="row">
	<div class="form-group col-md-7">
		<label for="name">Nome</label>
		<input type="text" class="form-control" name="pet['name']" disabled value="<?php echo $pet['name']; ?>"> 
	</div>
	
	<div class="form-group col-md-3">
		<label for="campo2">Proprietario</label>
		<input type="text" class="form-control" name="pet['owner']" disabled value="<?php echo $customer['name']; ?>"> 
	</div>
	
	<div class="form-group col-md-2">
		<label for="campo3">Data de Nascimento</label>
		<input type="text" class="form-control" name="pet['birthdate']" disabled value="<?php echo date('d/m/Y', strtotime($pet['birthdate'])); ?>"> 
	</div>
</div>
<div class="row">
	<div class="form-group col-md-5">
		<label for="campo1">Especie</label>
		<input type="text" class="form-control" name="pet['species']" disabled value="<?php echo $pet['species']; ?>"> 
	</div>
	
	<div class="form-group col-md-3">
		<label for="campo2">Raça</label>
		<input type="text" class="form-control" name="pet['breed']" disabled value="<?php echo $pet['breed']; ?>"> 
	</div>
	
	<div class="form-group col-md-2">
		<label for="campo3">Pelo</label>
		<input type="text" class="form-control" name="pet['fur']" disabled value="<?php echo $pet['fur']; ?>">
	</div>
	
	<div class="form-group col-md-2">
		<label for="campo3">Data de Cadastro</label>
		<input type="text" class="form-control" name="pet['created']" disabled value="<?php echo date('d/m/Y', strtotime($pet['created'])); ?>"> 
	</div>
</div>
<div class="row">
	<div class="form-group col-md-3">
		<label for="campo1">Cor</label>
		<input type="text" class="form-control" name="pet['color']" disabled value="<?php echo $pet['color']; ?>"> 
	</div>
	
	<div class="form-group col-md-2">
		<label for="campo2">Sexo</label>
		<input type="text" class="form-control" name="pet['sex']" disabled value="<?php echo $pet['sex']; ?>"> 
	</div>
	
	<div class="form-group col-md-2">
		<label for="campo3">Castrado</label>
		<input type="text" class="form-control" name="pet['castrated']" disabled value="<?php echo $pet['castrated'] ? 'Sim' : 'Não' ?>"> 
	</div>
</div>
<div id="actions" class="row">
    <div class="col-md-12"> <a href="edit.php?id=<?php echo $pet['id']; ?>" class="btn btn-primary">Editar</a> <a href="index.php" class="btn btn-default">Voltar</a> </div>
</div>

<?php include(FOOTER_TEMPLATE); ?>
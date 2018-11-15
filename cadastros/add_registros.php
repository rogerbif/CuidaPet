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
$table = 'registros';
require_once( 'functions.php'); 
require_once('../config.php');	
require_once(DBAPI);
add($table); 
index($table);
?>
<head>
	<link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap.min.css">	
	<link rel="stylesheet" href="<?php echo BASEURL; ?>css/style.css">	    
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
</head>
<div style="width: 570px;">
	<h5>Novo Registro</h5>
	<form action="add_registros.php?customerId=<?php echo $_GET['customerId'];?>" method="post">
		<hr />
		
		<div>
			<input type="hidden" class="form-control" name="cadastro['data']" value="<?php echo date('d/m/Y', time()); ?>">
			<input type="hidden" class="form-control" name="cadastro['usuario']" value="<?php echo $_SESSION['username']; ?>">
			<input type="hidden" class="form-control" name="cadastro['customerId']" value="<?php echo $_GET['customerId']; ?>">
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<label for="data">Data</label>
					<input type="text" class="form-control" name="cadastro['data']" value="<?php echo date('d/m/Y', time()); ?>" disabled> 
				</div>
				<div class="col-sm-6">
					<label for="campo2">Usuario</label>
					<input type="text" class="form-control" name="cadastro['usuario']" value="<?php $cadastro['usuario'] = $_SESSION['username'];  echo $_SESSION['username']; ?>" disabled >
				</div>
			</div>

			<div class="row">
				<div class="form-group col-md-12">
					<label for="campo3">Observações</label>
					<textarea class="form-control" rows="2" name="cadastro['observacoes']"></textarea>
				</div>
			</div>
			
			<div class="row">
				<div class="form-group col-md-10">
					<label for="campo4">Diagnostico</label>
					<textarea class="form-control" rows="2" name="cadastro['diagnostico']"></textarea>
				</div>
			</div>

			<div id="actions" class="row">
				<div class="col-md-12">
					<button type="submit" class="btn btn-primary">Salvar</button> <a href="<?php echo BASEURL; ?>cadastros/lista_registros.php?customerId=<?php echo $_GET['customerId']; ?>" class="btn btn-default">Cancelar</a> </div>
			</div>
		</div>
	</form>
</div>
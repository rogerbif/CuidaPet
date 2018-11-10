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
<h2>Novo Registro</h2>
<form action="add_registros.php" method="post">
    <hr />
    <div class="row">
		<div class="form-group col-md-4">
            <label for="campo1">Data</label>
			<input type="text" class="form-control" name="cadastro['data']" value="<?php echo date('d/m/Y', time()); ?>" disabled> 
			<input type="hidden" name="cadastro['data']" value="<?php echo date('d/m/Y', time()); ?>">
		</div>
		
		<div class="form-group col-md-4 "></div>
		
		<div class="form-group col-md-4 ">
            <label for="campo2">Usuario</label>
			<?php $cadastro['usuario'] = $_SESSION['username']; ?>
            <input type="text" class="form-control" name="cadastro['usuario']" value="<?php echo $_SESSION['username']; ?>" disabled >
			<input type="hidden" name="cadastro['usuario']" value="<?php echo $_SESSION['username']?>">
		</div>
    </div>
	
	<div class="row">
        <div class="form-group col-md-12">
            <label for="campo3">Observações</label>
			<textarea class="form-control" rows="5" name="cadastro['observacoes']"></textarea>
		</div>
    </div>
	
    <div class="row">
        <div class="form-group col-md-12">
            <label for="campo4">Diagnostico</label>
			<textarea class="form-control" rows="5" name="cadastro['diagnostico']"></textarea>
			<input type="text" class="form-control" name="cadastro['customerId']" value="<?php echo $_GET['customerId']; ?>">
			<input type="hidden" class="form-control" name="cadastro['customerId']" value="<?php echo $_GET['customerId']; ?>">
		</div>
    </div>

    <div id="actions" class="row">
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Salvar</button> <a href="<?php echo BASEURL; ?>cadastros/lista_registros.php?customerId=<?php echo $_GET['customerId']; ?>" class="btn btn-default">Cancelar</a> </div>
    </div>
</form>
<?php include('modal.php'); ?>
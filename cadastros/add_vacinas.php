<?php 
$table = 'vacinas';
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
	<h5>Nova Vacina</h5>
	<form action="add_vacinas.php" method="post">
		<hr />
		<div>
			<input type="hidden" class="form-control" name="cadastro['data']" value="<?php echo date('d/m/Y', time()); ?>">
			<input type="hidden" class="form-control" name="cadastro['usuario']" value="<?php echo $_SESSION['username']; ?>">
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
					<label for="campo3"> Descricao</label>
					<input type="text" class="form-control" name="cadastro['descricao']">
				</div>
			</div>
			
			<div class="row">
				<div class="form-group col-md-12">
					<label for="campo4">Proxima Dose</label>
					<input type="text" class="form-control" name="cadastro['proxdose']">
				</div>
			</div>

			<div id="actions" class="row">
				<div class="col-md-12">
					<button type="submit" class="btn btn-primary">Salvar</button> <a href="<?php echo BASEURL; ?>cadastros/" class="btn btn-default">Cancelar</a> </div>
			</div>
		</div>
	</form>
</div>
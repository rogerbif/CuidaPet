<?php 
$table = 'profissionais';
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
<!--
idProfissional
Nome
Endereço
Telefone
CPF
CRMV
Data de Nascimento
	-->
<div style="width: 570px;">
	<h5>Novo Profissional</h5>
	<form action="add_profissionais.php" method="post">
		<hr />
		<div>
			<input type="hidden" class="form-control" name="cadastro['usuario']" value="<?php echo $_SESSION['username']; ?>">
		</div>
		<div class="container">
			
			<div class="row">
				<div class="col-sm-6">
					<label for="data">Data Nascimento</label>
					<input type="date" class="form-control" name="cadastro['datanasc']" > 
				</div>

				<div class="col-sm-6">
					<label for="usuario">Usuario</label>
					<input type="text" class="form-control" name="cadastro['usuario']" value="<?php $cadastro['usuario'] = $_SESSION['username'];  echo $_SESSION['username']; ?>" disabled >
				</div>
			</div>

			<div class="row">
				<div class="form-group col-md-12">
					<label for="nome"> Nome</label>
					<input type="text" class="form-control" name="cadastro['nome']">
				</div>
			</div>

			<div class="row">
				<div class="form-group col-md-12">
					<label for="endereco"> Endereco</label>
					<input type="text" class="form-control" name="cadastro['endereco']">
				</div>
			</div>

			<div class="row">
				<div class="form-group col-md-12">
					<label for="telefone"> Telefone</label>
					<input type="text" class="form-control" name="cadastro['telefone']">
				</div>
			</div>
			
			<div class="row">
				<div class="form-group col-md-6">
					<label for="cpf">CPF</label>
					<input type="text" class="form-control" name="cadastro['cpf']">
				</div>

				<div class="form-group col-md-6">
					<label for="crmv">CRMV</label>
					<input type="text" class="form-control" name="cadastro['crmv']">
				</div>
			</div>

			<div id="actions" class="row">
				<div class="col-md-12">
					<button type="submit" class="btn btn-primary">Salvar</button> <a href="<?php echo BASEURL; ?>cadastros/" class="btn btn-default">Cancelar</a> </div>
			</div>
		</div>
	</form>
</div>
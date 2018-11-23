<?php
   require_once('functions.php');
   require_once('../config.php');
   index();
   $customers = null;	
	$customer = $_GET['customerId'];
	$customers = find_all('customers');
	add(); 
?>
<head>
	<link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap.min.css">	
	<link rel="stylesheet" href="<?php echo BASEURL; ?>css/style.css">	    
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
</head>
<div style="width: 500px;">
<form action="add3.php?customerId=<?php echo $_GET['customerId'];?>" method="post">
	<!-- area de campos do form -->
	<div class="container">
		<div class="row">
			<div class="form-group col-sm-6">
				<label for="name">Nome</label>
				<input type="text" class="form-control" name="pet['name']"> 
			</div>
					
			<div class="form-group col-sm-6">
				<label for="campo2">Proprietario</label>
				<select class="form-control" id="campo2" name="pet['owner']"> 
					<?php foreach ($customers as $customer): 
						if($customer['id'] == $_GET['customerId']):
						?>  
						<option value="<?php echo $customer['id']; ?>"><?php echo $customer['id']; ?> - <?php echo $customer['name']; ?></option>
					<?php 
					endif;
				endforeach; ?>    
				</select>
			</div>
		</div>
		
		<div class="row">		
			<div class="form-group col-sm-6">
				<label for="campo3">Data de Nascimento</label>
				<input type="date" class="form-control" name="pet['birthdate']"> 
			</div>
			
			<div class="form-group col-sm-6">
				<label for="campo3">Data de Cadastro</label>
				<input type="text" class="form-control" name="pet['created']" disabled value="<?php echo date('d/m/Y',  time()); ?>"> 
			</div>
		</div>
		
		<div class="row">
			<div class="form-group col-sm-4">
				<label for="campo1">Especie</label>
				<input type="text" class="form-control" name="pet['species']"> 
			</div>
			
			<div class="form-group col-sm-4">
				<label for="campo2">Raça</label>
				<input type="text" class="form-control" name="pet['Breed']"> 
			</div>
			
			<div class="form-group col-sm-4">
				<label for="campo3">Pelo</label>
				<select class="form-control" id="campo3" name="pet['fur']">
				<option value="Curto">Curto</option>
				<option value="Longo">Longo</option>
				</select>
			</div>
		</div>
		
		<div class="row">
			<div class="form-group col-sm-4">
				<label for="campo1">Cor</label>
				<input type="text" class="form-control" name="pet['Color']"> 
			</div>
			
			<div class="form-group col-sm-4">
				<label for="campo2">Sexo</label>
				<select class="form-control" id="campo2" name="pet['sex']">
				<option value="Femea">Fêmea</option>
				<option value="Macho">Macho</option>
				</select>
			</div>
			
			<div class="form-group col-sm-4">
				<label for="campo3">Castrado</label>
				<select class="form-control" id="campo3" name="pet['castrated']">
				<option value="1">Sim</option>
				<option value="0">Não</option>
				</select>
			</div>
		</div>
		
		<div id="actions" class="row">
			<div class="col-sm-12">
				<button type="submit" class="btn btn-primary">Salvar</button>
				<a href="<?php echo BASEURL; ?>pets/lista_pep.php?customerId=<?php echo $_GET['customerId']; ?>" class="btn btn-default">Cancelar</a>
			</div>
		</div>
	</div>
</form>
</div>
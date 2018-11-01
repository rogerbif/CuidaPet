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

<?php require_once( 'functions.php'); add(); index(); ?>
<?php 
require_once('../config.php');	
require_once(DBAPI);
$customers = null;	
$customer = null;
$customers = find_all('customers');
?>
<?php include(HEADER_TEMPLATE); ?>
<h2>Novo Pet</h2>
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
<form action="add.php" method="post">
    <!-- area de campos do form -->
    <hr />
    <div class="row">
        <div class="form-group col-md-6">
            <label for="name">Nome</label>
            <input type="text" class="form-control" name="pet['name']"> 
		</div>
				
		<div class="form-group col-md-3">
            <label for="campo2">Proprietario</label>
			<select class="form-control" id="campo2" name="pet['owner']">
				<?php if ($pets): ?>    
				<?php foreach ($customers as $customer): ?>  
					<option value="<?php echo $customer['id']; ?>"><?php echo $customer['id']; ?> - <?php echo $customer['name']; ?></option>
				<?php endforeach; ?>    
				<?php else: ?>        
					  <tr>
						 <td colspan="6">Nenhum registro encontrado.</td>
					  </tr>
				  <?php endif; ?> 
			</select>
		</div>
						
        <div class="form-group col-md-3">
            <label for="campo3">Data de Nascimento</label>
            <input type="date" class="form-control" name="pet['birthdate']"> 
		</div>
    </div>
	
    <div class="row">
        <div class="form-group col-md-5">
            <label for="campo1">Especie</label>
            <input type="text" class="form-control" name="pet['species']"> 
		</div>
		
        <div class="form-group col-md-3">
            <label for="campo2">Raça</label>
            <input type="text" class="form-control" name="pet['Breed']"> 
		</div>
		
		<div class="form-group col-md-2">
			<label for="campo3">Pelo</label>
			<select class="form-control" id="campo3" name="pet['fur']">
			  <option value="Curto">Curto</option>
			  <option value="Longo">Longo</option>
			</select>
		</div>
				
        <div class="form-group col-md-2">
            <label for="campo3">Data de Cadastro</label>
            <input type="text" class="form-control" name="pet['created']" disabled> 
		</div>
    </div>
	
    <div class="row">
        <div class="form-group col-md-3">
            <label for="campo1">Cor</label>
            <input type="text" class="form-control" name="pet['Color']"> 
		</div>
		
		<div class="form-group col-md-2">
			<label for="campo2">Sexo</label>
			<select class="form-control" id="campo2" name="pet['sex']">
			  <option value="Femea">Fêmea</option>
			  <option value="Macho">Macho</option>
			</select>
		</div>
		
		<div class="form-group col-md-2">
			<label for="campo3">Castrado</label>
			<select class="form-control" id="campo3" name="pet['castrated']">
			  <option value="1">Sim</option>
			  <option value="0">Não</option>
			</select>
		 </div>
    </div>
	
    <div id="actions" class="row">
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Salvar</button> <a href="index.php" class="btn btn-default">Cancelar</a> </div>
    </div>
</form>
<?php include(FOOTER_TEMPLATE); ?>
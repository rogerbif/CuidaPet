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

<?php require_once( 'functions.php'); edit(); ?>
<?php include(HEADER_TEMPLATE); ?>
<h2>Atualizar Pet</h2>
<!--
Nome -name -
Proprietario - owner -
Especie - species -
Raca - Breed -
Pelo - fur -
Cor - color -
Sexo - sex -
Nascimento - birthdate -
Castrado - castrated 
 -->
<form action="edit.php?id=<?php echo $pet['id']; ?>" method="post">
    <hr />
    <div class="row">
        <div class="form-group col-md-7">
            <label for="name">Nome</label>
            <input type="text" class="form-control" name="pet['name']" value="<?php echo $pet['name']; ?>"> 
		</div>
		
        <div class="form-group col-md-3">
            <label for="campo2">Proprietario</label>
            <input type="text" class="form-control" name="pet['owner']" value="<?php echo $pet['owner']; ?>"> 
		</div>
		
        <div class="form-group col-md-2">
            <label for="campo3">Data de Nascimento</label>
            <input type="text" class="form-control" name="pet['birthdate']" value="<?php echo $pet['birthdate']; ?>"> 
		</div>
    </div>
    <div class="row">
        <div class="form-group col-md-5">
            <label for="campo1">Especie</label>
            <input type="text" class="form-control" name="pet['species']" value="<?php echo $pet['species']; ?>"> 
		</div>
		
        <div class="form-group col-md-3">
            <label for="campo2">Raça</label>
            <input type="text" class="form-control" name="pet['Breed']" value="<?php echo $pet['Breed']; ?>"> 
		</div>
		
        <div class="form-group col-md-2">
            <label for="campo3">Pelo</label>
            <input type="text" class="form-control" name="pet['fur']" value="<?php echo $pet['fur']; ?>"> 
		</div>
		
        <div class="form-group col-md-2">
            <label for="campo3">Data de Cadastro</label>
            <input type="text" class="form-control" name="pet['created']" disabled value="<?php echo $pet['created']; ?>"> 
		</div>
    </div>
    <div class="row">
        <div class="form-group col-md-3">
            <label for="campo1">Cor</label>
            <input type="text" class="form-control" name="pet['color']" value="<?php echo $pet['color']; ?>"> 
		</div>
		
        <div class="form-group col-md-2">
            <label for="campo2">Sexo</label>
            <input type="text" class="form-control" name="pet['sex']" value="<?php echo $pet['sex']; ?>"> 
		</div>
		
        <div class="form-group col-md-2">
            <label for="campo3">Castrado</label>
            <input type="text" class="form-control" name="pet['castrated']" value="<?php echo $pet['castrated']; ?>"> 
		</div>
    </div>
    <div id="actions" class="row">
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Salvar</button> <a href="index.php" class="btn btn-default">Cancelar</a> </div>
    </div>
</form>
<?php include(FOOTER_TEMPLATE); ?>
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
<h2>Atualizar Cliente</h2>
<form action="edit.php?id=<?php echo $customer['id']; ?>" method="post">
    <hr />
    <div class="row">
        <div class="form-group col-md-7">
            <label for="name">Nome / Razão Social</label>
            <input type="text" class="form-control" name="customer['name']" value="<?php echo $customer['name']; ?>"> </div>
        <div class="form-group col-md-3">
            <label for="campo2">CNPJ / CPF</label>
            <input type="text" class="form-control" name="customer['cpf_cnpj']" value="<?php echo $customer['cpf_cnpj']; ?>"> </div>
        <div class="form-group col-md-2">
            <label for="campo3">Data de Nascimento</label>
            <input type="text" class="form-control" name="customer['birthdate']" value="<?php echo $customer['birthdate']; ?>"> </div>
    </div>
    <div class="row">
        <div class="form-group col-md-5">
            <label for="campo1">Endereço</label>
            <input type="text" class="form-control" name="customer['address']" value="<?php echo $customer['address']; ?>"> </div>
        <div class="form-group col-md-3">
            <label for="campo2">Bairro</label>
            <input type="text" class="form-control" name="customer['hood']" value="<?php echo $customer['hood']; ?>"> </div>
        <div class="form-group col-md-2">
            <label for="campo3">CEP</label>
            <input type="text" class="form-control" name="customer['zip_code']" value="<?php echo $customer['zip_code']; ?>"> </div>
        <div class="form-group col-md-2">
            <label for="campo3">Data de Cadastro</label>
            <input type="text" class="form-control" name="customer['created']" disabled value="<?php echo $customer['created']; ?>"> </div>
    </div>
    <div class="row">
        <div class="form-group col-md-4">
            <label for="campo1">Município</label>
            <input type="text" class="form-control" name="customer['city']" value="<?php echo $customer['city']; ?>"> </div>
        <div class="form-group col-md-4">
            <label for="campo2">Telefone</label>
            <input type="text" class="form-control" name="customer['phone']" value="<?php echo $customer['phone']; ?>"> </div>
        <div class="form-group col-md-2">
            <label for="campo3">Celular</label>
            <input type="text" class="form-control" name="customer['mobile']" value="<?php echo $customer['mobile']; ?>"> </div>
        <div class="form-group col-md-2">
            <label for="campo3">UF</label>
            <input type="text" class="form-control" name="customer['state']" value="<?php echo $customer['state']; ?>"> </div>
    </div>
    <div id="actions" class="row">
        <div class="col-md-10">
            <button type="submit" class="btn btn-primary">Salvar</button> 
            <a href="index.php" class="btn btn-default">Cancelar</a> 
        </div>
        <div class="col-md-2" style="position: relative;"> 
            <a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-customer="<?php echo $customer['id']; ?>"><i class="fa fa-trash"></i> Excluir</a>
        </div>
    </div>
</form>
<?php include('modal.php'); ?>
<?php include(FOOTER_TEMPLATE); ?>
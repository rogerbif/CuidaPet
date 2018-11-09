<h2>Novo Cliente</h2>
<form action="add.php" method="post">
    <!-- area de campos do form -->
    <hr />
    <div class="row">
        <div class="form-group col-md-7">
            <label for="name">Nome / Razão Social</label>
            <input type="text" class="form-control" name="customer['name']"> </div>
        <div class="form-group col-md-5">
            <label for="campo2">CNPJ / CPF</label>
            <input type="text" class="form-control" name="customer['cpf_cnpj']"> </div>
    </div>
	
	<div class="row">
	    <div class="form-group col-md-6">
            <label for="campo3">Data de Nascimento</label>
            <input type="date" class="form-control" name="customer['birthdate']"> </div>
		<div class="form-group col-md-6">
            <label for="campo3">Data de Cadastro</label>
            <input type="text" class="form-control" name="customer['created']" disabled value="<?php echo date('d/m/Y',  time()); ?>"> </div>	
	</div>
	
    <div class="row">
        <div class="form-group col-md-12">
            <label for="campo1">Endereço</label>
            <input type="text" class="form-control" name="customer['address']"> </div>
    </div>
	
	<div class="row">
        <div class="form-group col-md-6">
            <label for="campo2">Bairro</label>
            <input type="text" class="form-control" name="customer['hood']"> </div>
		<div class="form-group col-md-6">
            <label for="campo1">Município</label>
            <input type="text" class="form-control" name="customer['city']"> </div>
	</div>
	
	<div class="row">
		<div class="form-group col-md-6">
            <label for="campo3">UF</label>
            <input type="text" class="form-control" name="customer['state']"> </div>
        <div class="form-group col-md-6">
            <label for="campo3">CEP</label>
            <input type="text" class="form-control" name="customer['zip_code']"> </div>
    </div>
	
    <div class="row">
        <div class="form-group col-md-6">
            <label for="campo2">Telefone</label>
            <input type="text" class="form-control" name="customer['phone']"> </div>
        <div class="form-group col-md-6">
            <label for="campo3">Celular</label>
            <input type="text" class="form-control" name="customer['mobile']"> </div>
    </div>
    <div id="actions" class="row">
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Salvar</button></div>
    </div>
</form>
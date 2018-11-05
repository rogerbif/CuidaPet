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
   require_once('functions.php');
   index();
   ?>

<?php include(HEADER_TEMPLATE); ?>	

<header>
   <div class="row">
      <div class="col-sm-6">
         <h2>Clientes</h2>
      </div>
		  <div class="col-sm-6 text-right h2">                
		  <a class="btn btn-primary" href="add.php"><i class="fa fa-plus"></i> Novo Cliente</a>                
		  <a class="btn btn-default" href="index.php"><i class="fa fa-refresh"></i> Atualizar</a>            
	  </div>
   </div>
</header>
<hr>
<table class="table table-hover">
   <thead>
      <tr>
         <th>ID</th>
         <th width="30%">Nome</th>
         <th>CPF/CNPJ</th>
         <th>Telefone</th>
         <th class="actions text-right">Opções</th>
      </tr>
   </thead>
   <tbody>
      <?php if ($customers): ?>    
	  <?php foreach ($customers as $customer): ?>        
		  <tr>
			 <td><?php
				echo $customer['id'];
				?></td>
			 <td><?php
				echo $customer['name'];
				?></td>
			 <td><?php
				echo $customer['cpf_cnpj'];
				?></td>
			 <td><?php
				echo $customer['modified'];
				?></td>
			 <td class="actions text-right">                
			 <a href="view2.php?id=<?php	echo $customer['id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a>
			 <a href="edit.php?id=<?php echo $customer['id']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>
			 <a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-customer="<?php echo $customer['id']; ?>"><i class="fa fa-trash"></i> Excluir</a>            
			</td>
		  </tr>
      <?php endforeach; ?>    
	  <?php else: ?>        
		  <tr>
			 <td colspan="6">Nenhum registro encontrado.</td>
		  </tr>
      <?php endif; ?>    
   </tbody>
</table>
<?php include('modal.php'); ?>
<?php include(FOOTER_TEMPLATE); ?>
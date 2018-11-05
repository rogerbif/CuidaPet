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
<?php 
require_once('../config.php');	
require_once(DBAPI);
$customers = null;	
$customer = null;
$customers = find_all('customers');
?>
<?php include(HEADER_TEMPLATE); ?>
<!--
Nome -name
Proprietario - owner
Especie - species
Raca - Breed
Pelo - fur
Cor - color
Sexo - sex
Nascimento - birthdate
Castrado - castrated
 -->
<header>
   <div class="row">
      <div class="col-sm-6">
         <h2>Pets</h2>
      </div>
		  <div class="col-sm-6 text-right h2">                
		  <a class="btn btn-primary" href="add.php"><i class="fa fa-plus"></i> Novo Pet</a>                
		  <a class="btn btn-default" href="index.php"><i class="fa fa-refresh"></i> Atualizar</a>            
	  </div>
   </div>
</header>
<hr>
<table class="table table-hover">
   <thead>
      <tr>
         <th>ID</th>
         <th width="25%">Nome</th>
		 <th>Proprietario</th>
		 <th>Especie</th>
		 <th>Raca</th>
		 <th>Pelo</th>
		 <th>Cor</th>
         <th>Sexo</th>
         <th>Nascimento</th>
		 <th>Castrado</th>
		 <th>Modificado</th>
         <th class="actions text-right">Opções</th>
      </tr>
   </thead>
   <tbody>
      <?php if ($pets): ?>    
	  <?php foreach ($pets as $pet): ?>        
		  <tr>
			 <td><?php echo $pet['id']; ?></td>
			 <td><?php echo $pet['name']; ?></td>
			 <td>
			 <?php if ($pets): ?>    
				<?php foreach ($customers as $customer): ?>  
				<?php echo $pet['owner']==$customer['id'] ? $customer['name'] : '' ?>
				<?php endforeach; ?>    
				<?php else: ?>        
					  <tr>
						 <td colspan="6">Nenhum registro encontrado.</td>
					  </tr>
			<?php endif; ?> 
			 </td>
			 <td><?php echo $pet['species']; ?></td>
			 <td><?php echo $pet['breed']; ?></td>
			 <td><?php echo $pet['fur']; ?></td>
			 <td><?php echo $pet['color']; ?></td>
			 <td><?php echo $pet['sex']; ?></td>
			 <td><?php echo date('d/m/Y', strtotime($pet['birthdate'])); ?></td>
			 <td><?php echo $pet['castrated'] ? 'Sim' : 'Não' ?></td>
			 <td><?php echo date('d/m/Y', strtotime($pet['modified'])); ?></td>
			 <td class="actions text-right">                
				 <a href="view.php?id=<?php	echo $pet['id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a>
				 <a href="edit.php?id=<?php echo $pet['id']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>
				 <a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-customer="<?php echo $pet['id']; ?>"><i class="fa fa-trash"></i> Excluir</a>            
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
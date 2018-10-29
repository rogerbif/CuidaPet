<?php
   require_once('functions.php');
   index();
?>

<head>
	<link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap.min.css">	
	<link rel="stylesheet" href="<?php echo BASEURL; ?>css/style.css">	    
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">	
</head>
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
<hr>
<table class="table table-hover">
   <thead>
      <tr>
         <th>ID</th>
         <th width="30%">Nome</th>
         <th>Proprietario</th>
		<!-- <th>Especie</th>
		 <th>Raça</th>
		 <th>Pelo</th>
		 <th>Cor</th>-->
		 <th>Sexo</th>
		 <th>Nascimento</th>
		 <!--<th>Castrado</th>-->
         <th>Opções</th>
      </tr>
   </thead>
   <tbody>
      <?php if ($pets): ?>    
	  <?php foreach ($pets as $pet): ?>        
		  <tr>
			<td><?php echo $pet['id']; ?></td>
			<td><?php echo $pet['name']; ?></td>
			<td><?php echo $pet['owner']; ?></td>
			<!--<td><?php //echo $pet['species']; ?></td>
			<td><?php //echo $pet['breed']; ?></td>
			<td><?php //echo $pet['fur']; ?></td>
			<td><?php //echo $pet['color']; ?></td>-->
			<td><?php echo $pet['sex']; ?></td>
			<td><?php echo $pet['birthdate']; ?></td>
			<!--<td><?php //echo $pet['castrated']; ?></td> -->
			<td class="actions text-right"> 
				 <a href="view.php?id=<?php echo $pet['id']; ?> " target="_top" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a>
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
<?php
   require_once('functions.php');index();
   $customers = null;	
	$customer = null;
	$customers = find_all('customers');
?>

<head>
	<link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap.min.css">	
	<link rel="stylesheet" href="<?php echo BASEURL; ?>css/style.css">	    
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">	
	
   <script src="<?php echo BASEURL; ?>js/jquery.min.js"></script> 
   <script src="<?php echo BASEURL; ?>js/jquery.dataTables.min.js"></script>  
   <script src="<?php echo BASEURL; ?>js/dataTables.bootstrap.min.js"></script>            
   <link rel="stylesheet" href="<?php echo BASEURL; ?>css/dataTables.bootstrap.min.css" />   
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
</head>
<table id="bootstrap-table" class="table table-hover">
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
		 <th>Nasc.</th>
		 <!--<th>Castrado</th>-->
         <th>Opções</th>
      </tr>
   </thead>
   <tbody>
      <?php if ($pets): ?>    
	  <?php foreach ($pets as $pet): ?> 
		<?php if ($pet['owner'] == $_GET['customerId'] ): ?>
		  <tr>
			<td><?php echo $pet['id']; ?></td>
			<td><?php echo $pet['name']; ?></td>
			<td>
			<?php if ($pets): ?>    
				<?php foreach ($customers as $customer): ?>  
					<?php echo $pet['owner'] == $customer['id'] ? $customer['name'] : '' ?>
				<?php endforeach; ?>
				<?php else: ?>
					  <tr>
						 <td colspan="6">Nenhum registro encontrado.</td>
					  </tr>
			<?php endif; ?></td>
			<!--<td><?php //echo $pet['species']; ?></td>
			<td><?php //echo $pet['breed']; ?></td>
			<td><?php //echo $pet['fur']; ?></td>
			<td><?php //echo $pet['color']; ?></td>-->
			<td><?php echo $pet['sex']; ?></td>
			<td><?php echo date("d/m/Y" , strtotime($pet['birthdate'])); ?></td>
			<!--<td><?php //echo $pet['castrated']; ?></td> -->
			<td class="actions text-right"> 
				 <a href="view.php?id=<?php echo $pet['id']; ?> " target="_top" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a>
			</td>
		  </tr>
		  <?php endif; ?></td>
      <?php endforeach; ?>    
	  <?php else: ?>        
		  <tr>
			 <td colspan="6">Nenhum registro encontrado.</td>
		  </tr>
      <?php endif; ?>    
   </tbody>
</table>
<script>
$(document).ready(function(){  
	$('#bootstrap-table').DataTable({
		"bInfo" : false,
		"bLengthChange" : false,
		dom: 'l<"toolbar">frtip',
		"order": [[ 1, "desc" ]],
		initComplete: function(){
			  $("div.toolbar")
				 .html('<div class="col-sm-6 text-right h5"><a class="btn btn-primary" href="<?php echo BASEURL; ?>pets/add3.php?customerId=<?php echo $_GET['customerId']; ?>"><i class="fa fa-plus"></i>Adicionar Registro</a></div>');
		   }     
	});  
 });  
</script>  
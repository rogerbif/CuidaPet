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
			<th width="15%">Nome</th>
			<th width="10%">Prop.</th>
			<th>Sexo</th>
			<th>Nasc.</th>
			<th>Opções</th>
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
			<td><?php echo $pet['sex']; ?></td>
			<td><?php echo date('d/m/Y', strtotime($pet['birthdate'])); ?></td>
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

<script>
$(document).ready(function(){  
	$('#bootstrap-table').DataTable({
		"bInfo" : false,
		"bLengthChange" : false,
		dom: 'l<"toolbar">frtip',
		"order": [[ 1, "asc" ]],    
	});  
 });  
</script>
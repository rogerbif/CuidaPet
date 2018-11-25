<?php
	require_once('../config.php');	
	require_once(DBAPI);
	$eventos = null;	
	$evento = null;
	$eventos = find_all('eventos');
?>

<head>
	<link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap.min.css">		    
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">	
	
   <script src="<?php echo BASEURL; ?>js/jquery.min.js"></script> 
   <script src="<?php echo BASEURL; ?>js/jquery.dataTables.min.js"></script>  
   <script src="<?php echo BASEURL; ?>js/dataTables.bootstrap.min.js"></script>            
   <link rel="stylesheet" href="<?php echo BASEURL; ?>css/dataTables.bootstrap.min.css" />   
   <link rel="stylesheet" href="<?php echo BASEURL; ?>css/3.3.6/bootstrap.min.css" />  
</head>
<!--	
id
title
body
url
class
start
end
inicio_normal
final_normal
owner -->
<table id="bootstrap-table" class="table table-hover">
   <thead>
      <tr>
         <th>ID</th>
         <th>Titulo</th>
         <th>Observações</th>
		 <th>Inicio</th>
		 <th>Fim</th>
      </tr>
   </thead>
   <tbody>
      <?php if ($eventos): ?>    
		  <?php foreach ($eventos as $evento): ?> 
			<?php if ($evento['owner'] == $_GET['customerId'] ): ?>
				<tr>
					<td><?php echo $evento['id']; ?></td>
					<td><?php echo $evento['title']; ?></td>
					<td><?php echo $evento['body']; ?></td>
					<td><?php echo $evento['inicio_normal']; ?></td>
					<td><?php echo $evento['final_normal']; ?></td>
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
		"order": [[ 0, "desc" ]], 
	});  
 });  
</script>  
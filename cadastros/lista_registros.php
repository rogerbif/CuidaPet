<?php
$table = 'registros';
require_once('functions.php');
require_once('../config.php');	
require_once(DBAPI);
index($table);
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
<div style="width: 570px;">
<header>

</header>
	<table id="bootstrap-table" class="table table-hover">
	   <thead>
		  <tr>
			 <th>ID</th>
			 <th width="15%">Data</th>
			 <th width="15%">Observações</th>
			 <th>Diagnostico</th>
			 <th>Usuario</th>
			 <!-- <th>Opções</th> -->
		  </tr>
	   </thead>
	   	</div>
	   <tbody>
		  <?php if ($cadastros):
			  foreach ($cadastros as $cadastro): 
				if ($cadastro['customerId'] == $_GET['customerId'] ): ?>
					<tr style="display: table-row;">
						<td><?php echo $cadastro['id']; ?></td>
						<td><?php echo date('d/m/Y H:i', strtotime($cadastro['created'])); ?></td>
						<td><?php echo $cadastro['observacoes']; ?></td>
						<td><?php echo $cadastro['diagnostico']; ?></td>
						<td><?php echo $cadastro['usuario']; ?></td>
						<!-- 
						<td class="actions text-right"> 
							 <a href="edit.php?id=<?php echo $cadastro['id']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></a>
							 <a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-customer="<?php echo $cadastro['id']; ?>"><i class="fa fa-trash"></i></a>   
						</td>
						-->
					 </tr>
				  <?php endif; ?>
				  </td>
			  <?php 
			  endforeach;
		  else: ?>        
			  <tr>
				 <td colspan="6">Nenhum registro encontrado.</td>
			  </tr>
		  <?php endif; ?>    
	   </tbody>
	</table>
</div>
<script>
$(document).ready(function(){  
	$('#bootstrap-table').DataTable({
		"bInfo" : false,
		"bLengthChange" : false,
		dom: 'l<"toolbar">frtip',
		"order": [[ 1, "desc" ]],
		initComplete: function(){
			  $("div.toolbar")
				 .html('<div class="col-sm-6 text-right h5"><a class="btn btn-primary" href="<?php echo BASEURL; ?>cadastros/add_registros.php?customerId=<?php echo $_GET['customerId']; ?>"><i class="fa fa-plus"></i>Adicionar Registro</a></div>');
		   }     
	});  
 });  
</script>  
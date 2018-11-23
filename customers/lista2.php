<?php
   require_once('functions.php');
   index();
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
         <th width="20%">Nome</th>
         <th>CPF/CNPJ</th>
		 <th width="20%">Endereço</th>
         <th>Opções</th>
      </tr>
   </thead>
   <tbody>
      <?php if ($customers): ?>    
	  <?php foreach ($customers as $customer): ?>        
		  <tr>
			<td><?php echo $customer['id']; ?></td>
			<td><?php echo $customer['name']; ?></td>
			<td><?php echo $customer['cpf_cnpj']; ?></td>
			<td><?php echo $customer['address']." ".$customer['hood']." ".$customer['city']." ".$customer['state']; ?></td>
			<td class="actions text-right"> 
				 <a href="view.php?id=<?php	echo $customer['id']; ?>" target="_top" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
				 <a href="edit.php?id=<?php echo $customer['id']; ?>" target="_top" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></a>
				 <!--<a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-customer="<?php //echo $customer['id']; ?>"><i class="fa fa-trash"></i></a>-->  
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
<script>
$(document).ready(function(){  
	$('#bootstrap-table').DataTable({
		"bInfo" : false,
		"iDisplayLength": 8,
		"bLengthChange" : false,
		dom: 'l<"toolbar">frtip',
		"order": [[ 1, "asc" ]],    
	});  
 });  
</script>

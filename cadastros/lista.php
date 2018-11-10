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
</head>
<hr>
<table class="table table-hover">
   <thead>
      <tr>
         <th>ID</th>
         <th width="15%">Data</th>
         <th width="15%">Observações</th>
		 <th>Diagnostico</th>
		 <th>Usuario</th>
         <th>Opções</th>
      </tr>
   </thead>
   <tbody>
      <?php if ($cadastros): ?>    
	  <?php foreach ($cadastros as $cadastro): ?>        
		  <tr>
			<td><?php echo $cadastro['id']; ?></td>
			<td><?php echo date('d/m/Y H:m', strtotime($cadastro['created'])); ?></td>
			<td><?php echo $cadastro['observacoes']; ?></td>
			<td><?php echo $cadastro['diagnostico']; ?></td>
			<td><?php echo $cadastro['usuario']; ?></td>
			<td class="actions text-right"> 
				 <a href="view.php?id=<?php echo $cadastro['id']; ?> " target="_top" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a>
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
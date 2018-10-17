<!DOCTYPE html>	
<html>	
<head>	    
<meta charset="utf-8">	    
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">	    
<title>Sistema CuidaPet</title>	    
<meta name="description" content="">	    
<meta name="viewport" content="width=960, initial-scale=1">
		
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap.min.css">	    
	<style>	        
	html, body {	
	width: 100%;
	height: 100%
	padding-top: 5px;
	padding-bottom: 20px;	        
	}	    </style>	    
	
	<link rel="stylesheet" href="<?php echo BASEURL; ?>css/style.css">	    
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">	
	
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	
</head>	
<body>	
	<div class="container">
		<div class="row">
			<div class="col-md-2">
				<div class="row">					
					<div class="col-md-12 text-center">						
						<img src="<?php echo BASEURL; ?>images/puppies.jpg" class="img-fluid" alt="Responsive image">					
					</div>			
				</div>	
			</div>
			<div class="col-md-1">
				<a href="<?php echo BASEURL; ?>index.php" class="btn btn-default">				
					<div class="row">					
						<div class="col-md-12 text-center">						
							<i class="fa fa-home fa-4x"></i>					
						</div>					
						<div class="col-md-12 text-center">						
							<p>Principal</p>					
						</div>				
					</div>			
				</a>
			</div>
			<div class="col-md-1">
				<a href="<?php echo BASEURL; ?>agenda" class="btn btn-default">				
					<div class="row">					
						<div class="col-md-12 text-center">						
							<i class="fa fa-calendar fa-4x"></i>					
						</div>					
						<div class="col-md-12 text-center">						
							<p>Agenda</p>					
						</div>				
					</div>			
				</a>
			</div>
			<div class="col-md-1">
				<a href="<?php echo BASEURL; ?>customers" class="btn btn-default">				
					<div class="row">					
						<div class="col-md-12 text-center">						
							<i class="fa fa-group fa-4x"></i>					
						</div>					
						<div class="col-md-12 text-center">						
							<p>Clientes</p>					
						</div>				
					</div>			
				</a>
			</div>
			<div class="col-md-1">
				<a href="<?php echo BASEURL; ?>customers" class="btn btn-default">				
					<div class="row">					
						<div class="col-md-12 text-center">						
							<i class="fa fa-paw fa-4x"></i>					
						</div>					
						<div class="col-md-12 text-center">						
							<p>Pets</p>					
						</div>				
					</div>			
				</a>
			</div>
			<div class="col-md-1">
				<a href="<?php echo BASEURL; ?>customers" class="btn btn-default">				
					<div class="row">					
						<div class="col-md-12 text-center">						
							<i class="fa fa-pencil-square-o fa-4x"></i>					
						</div>					
						<div class="col-md-12 text-center">						
							<p>Cadastros</p>
						</div>				
					</div>			
				</a>	
			</div>
			<div class="col-md-3"></div>
			<div class="col-md-2">
				<a href="index.php?logout='1'" class="btn btn-default">									
					<div class="col-md-12 text-center">						
						<i class="fa fa-power-off fa-4x"></i>					
					</div>					
					<div class="col-md-1 text-center">						
						<?php  if (isset($_SESSION['username'])) : ?>
							<p><?php echo $_SESSION['username']; ?> Sair</p>
						<?php endif ?>				
					</div>						
				</a>	
			</div>
		</div>
	</div>
	
    <main class="container">
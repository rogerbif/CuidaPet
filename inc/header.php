<!DOCTYPE html>	
<html>	
<head>	    
<meta charset="utf-8">	    
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">	    
<title>Sistema CuidaPet</title>	    
<meta name="description" content="">	    
<meta name="viewport" content="width=device-width, initial-scale=1">
	
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap.min.css">	    
	<style>	        
	body {	            
	padding-top: 5px;
	padding-bottom: 20px;	        
	}	    </style>	    
	
	<link rel="stylesheet" href="<?php echo BASEURL; ?>css/style.css">	    
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">	
	<div class="float-right">    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong><a href="index.php?logout='1'" style="color: red;"> logout  </a> </p>
    <?php endif ?>
	</div>
</head>	
<body>	
    
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">	      
	<div class="container">	        
	<div class="navbar-header">	          
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">	            
			<span class="sr-only">Toggle navigation</span>	            
			<span class="icon-bar"></span>	            
			<span class="icon-bar"></span>	            
			<span class="icon-bar"></span>	          
		</button>	          
		<a href="<?php echo BASEURL; ?>index.php" class="navbar-brand">Menu CuidaPet</a>	        
	</div>	        
	<div id="navbar" class="navbar-collapse collapse">	          
		<ul class="nav navbar-nav">          	            
			<li class="dropdown"> 
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">	                    
					Clientes <span class="caret"></span>	                
				</a>	                
				<ul class="dropdown-menu">	                    
					<li><a href="<?php echo BASEURL; ?>customers">Gerenciar Clientes</a></li>	                    
					<li><a href="<?php echo BASEURL; ?>customers/add.php">Novo Cliente</a></li>	                
				</ul>	            
			</li>	          
		</ul>	        
	</div><!--/.navbar-collapse -->	      
	</div>	    
	</nav>	
	
    <main class="container">
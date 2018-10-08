<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: registration/login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: registration/login.php");
  }
?>

<?php require_once 'config.php'; ?>	
<?php require_once DBAPI; ?>	

<?php include(HEADER_TEMPLATE); ?>	
<?php $db = open_database(); ?>	

<!--<h1>Dashboard</h1>	-->
<hr />	

<?php if ($db) : ?>	

<div class="row">		
	<div class="col-xs-6 col-sm-3 col-md-2">			
		<a href="customers/add.php" class="btn btn-primary">				
			<div class="row">					
				<div class="col-md-12 text-center">						
					<i class="fa fa-user-plus fa-5x"></i>					
				</div>			
				<div class="col-md-12 text-center">						
					<p>Novo Cliente</p>					
				</div>				
			</div>			
		</a>		
	</div>	
	<div class="col-xs-6 col-sm-3 col-md-2">			
		<a href="customers/add.php" class="btn btn-primary">				
			<div class="row">					
				<div class="col-md-12 text-center">						
					<i class="fa fa-plus fa-5x"></i>					
				</div>			
				<div class="col-md-12 text-center">						
					<p>Novo Pet</p>					
				</div>				
			</div>			
		</a>		
	</div>	
	
</div>	
<div class="row">
	<div class="col-xs-6 col-sm-3 col-md-2">			
		<a href="customers" class="btn btn-default">				
			<div class="row">					
				<div class="col-md-12 text-center">						
					<i class="fa fa-home fa-5x"></i>					
				</div>					
				<div class="col-md-12 text-center">						
					<p>Principal</p>					
				</div>				
			</div>			
		</a>		
	</div>	
	<div class="col-xs-6 col-sm-3 col-md-2">			
		<a href="customers" class="btn btn-default">				
			<div class="row">					
				<div class="col-md-12 text-center">						
					<i class="fa fa-calendar fa-5x"></i>					
				</div>					
				<div class="col-md-12 text-center">						
					<p>Agenda</p>					
				</div>				
			</div>			
		</a>		
	</div>	
	<div class="col-xs-6 col-sm-3 col-md-2">			
		<a href="customers" class="btn btn-default">				
			<div class="row">					
				<div class="col-md-12 text-center">						
					<i class="fa fa-group fa-5x"></i>					
				</div>					
				<div class="col-md-12 text-center">						
					<p>Clientes</p>					
				</div>				
			</div>			
		</a>		
	</div>	
	<div class="col-xs-6 col-sm-3 col-md-2">			
		<a href="customers" class="btn btn-default">				
			<div class="row">					
				<div class="col-md-12 text-center">						
					<i class="fa fa-paw fa-5x"></i>					
				</div>					
				<div class="col-md-12 text-center">						
					<p>Pets</p>					
				</div>				
			</div>			
		</a>		
	</div> 
	<div class="col-xs-6 col-sm-3 col-md-2">			
		<a href="customers" class="btn btn-default">				
			<div class="row">					
				<div class="col-md-12 text-center">						
					<i class="fa fa-pencil-square-o fa-5x"></i>					
				</div>					
				<div class="col-md-12 text-center">						
					<p>Cadastros</p>
				</div>				
			</div>			
		</a>		
	</div>
	<div class="col-xs-6 col-sm-3 col-md-2">			
		<a href="customers" class="btn btn-default">				
			<div class="row">					
				<div class="col-md-12 text-center">						
					<i class="fa fa-power-off fa-5x"></i>					
				</div>					
				<div class="col-md-12 text-center">						
					<p>Sair</p>					
				</div>				
			</div>			
		</a>		
	</div> 
</div>	
<?php else : ?>		
<div class="alert alert-danger" role="alert">			
<p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>		
</div>	
<?php endif; ?>	
<?php include(FOOTER_TEMPLATE); ?>
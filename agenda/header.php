	<div class="container" style="width: 65%; height: 60px;">
		<div class="row1">
			<div class="col-md-2">
				<div class="row1">					
					<div class="col-md-12 text-center">						
						<img src="<?php echo BASEURL; ?>images/cuidapetlogo.png" class="img-fluid" alt="Responsive image">					
					</div>			
				</div>	
			</div>
			<div class="col-md-1">
				<a href="<?php echo BASEURL; ?>index.php" class="btn btn-default" style="display: inline-block; color: #007bff; border: 1px solid transparent; text-align: center;">				
					<div class="row1">					
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
				<a href="<?php echo BASEURL; ?>agenda" class="btn btn-default" style="color: #007bff; border: 1px solid transparent; text-align: center;">				
					<div class="row1">					
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
				<a href="<?php echo BASEURL; ?>customers" class="btn btn-default" style="color: #007bff; border: 1px solid transparent; text-align: center;">				
					<div class="row1">					
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
				<a href="<?php echo BASEURL; ?>pets" class="btn btn-default" style="color: #007bff; border: 1px solid transparent; text-align: center;">				
					<div class="row1">					
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
				<a href="<?php echo BASEURL; ?>customers" class="btn btn-default" style="color: #007bff; border: 1px solid transparent; text-align: center;">				
					<div class="row1">					
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
				<a href="index.php?logout='1'" class="btn btn-default" style="color: #007bff; border: 1px solid transparent; text-align: center;">									
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

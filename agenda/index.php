<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: /cuidapet/registration/login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: /cuidapet/registration/login.php");
  }
?>

<?php
require_once('../config.php');	
require_once(DBAPI);
$customers = null;	
$customer = null;
$customers = find_all('customers');

date_default_timezone_set("America/Sao_Paulo");
include 'config.php';
include 'funciones.php';
if (isset($_POST['from'])) 
{
    if ($_POST['from']!="" AND $_POST['to']!="") 
    {
        $inicio = _formatear($_POST['from']);
        $final  = _formatear($_POST['to']);
        $inicio_normal = $_POST['from'];
        $final_normal  = $_POST['to'];
        $titulo = evaluar($_POST['title']);
        $body   = evaluar($_POST['event']);
        $clase  = evaluar($_POST['class']);
		$owner  = $_POST['owner'];
        $query="INSERT INTO eventos VALUES(null,'$titulo','$body','','$clase','$inicio','$final','$inicio_normal','$final_normal','$owner')";
        $conexion->query($query); 
        $im=$conexion->query("SELECT MAX(id) AS id FROM eventos");
        $row = $im->fetch_row();  
        $id = trim($row[0]);
        $link = "$base_url"."descripcion_evento.php?id=$id";
        $query="UPDATE eventos SET url = '$link' WHERE id = $id";
        $conexion->query($query); 
        header("Location:$base_url"); 
    }
}
?>

 
<!DOCTYPE html>
<html lang="pt-BR">
<head>
        <meta charset="utf-8">
        <title>Agenda</title>
        <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=$base_url?>css/calendar.css">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <script type="text/javascript" src="<?=$base_url?>js/pt-BR.js"></script>
        <script src="<?=$base_url?>js/jquery.min.js"></script>
        <script src="<?=$base_url?>js/moment.js"></script>
        <script src="<?=$base_url?>js/bootstrap.min.js"></script>
        <script src="<?=$base_url?>js/bootstrap-datetimepicker.js"></script>
        <link rel="stylesheet" href="<?=$base_url?>css/bootstrap-datetimepicker.min.css" />
       <script src="<?=$base_url?>js/bootstrap-datetimepicker.pt-BR.js"></script>
	   <style>
		.img-fluid {
			max-width: 100%;
			height: auto;
		}
		</style>
</head>

<header>
<?php include_once('header.php'); ?>
</header>

<body style="background: white;">

        <div class="container">

                <div class="row">
                        <div class="page-header"><h2></h2></div>
                                <div class="pull-left form-inline"><br>
                                        <div class="btn-group">
                                            <button class="btn btn-primary" data-calendar-nav="prev"><< Anterior</button>
                                            <button class="btn" data-calendar-nav="today">Hoje</button>
                                            <button class="btn btn-primary" data-calendar-nav="next">Seguinte >></button>
                                        </div>
                                        <div class="btn-group">
                                            <button class="btn btn-warning" data-calendar-view="year">Ano</button>
                                            <button class="btn btn-warning active" data-calendar-view="month">Mês</button>
                                            <button class="btn btn-warning" data-calendar-view="week">Semana</button>
                                            <button class="btn btn-warning" data-calendar-view="day">Dia</button>
                                        </div>

                                </div>
                                    <div class="pull-right form-inline"><br>
                                        <button class="btn btn-info" data-toggle='modal' data-target='#add_evento'>Adicionar</button>
                                    </div>

                </div><hr>

                <div class="row">
                        <div id="calendar"></div> <!-- Aqui se mostrara nuestro calendario -->
                        <br><br>
                </div>

                <!--ventana modal para el calendario-->
                <div class="modal fade" id="events-modal">
                    <div class="modal-dialog">
                            <div class="modal-content">
                                    <div class="modal-body" style="height: 400px">
                                        <p>One fine body&hellip;</p>
                                    </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                </div>
                            </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
        </div>

    <script src="<?=$base_url?>js/underscore-min.js"></script>
    <script src="<?=$base_url?>js/calendar.js"></script>
    <script type="text/javascript">
        (function($){
                //creamos la fecha actual
                var date = new Date();
                var yyyy = date.getFullYear().toString();
                var mm = (date.getMonth()+1).toString().length == 1 ? "0"+(date.getMonth()+1).toString() : (date.getMonth()+1).toString();
                var dd  = (date.getDate()).toString().length == 1 ? "0"+(date.getDate()).toString() : (date.getDate()).toString();

                //establecemos los valores del calendario
                var options = {

                    // definimos que los eventos se mostraran en ventana modal
                        modal: '#events-modal', 

                        // dentro de un iframe
                        modal_type:'iframe',    

                        //obtenemos los eventos de la base de datos
                        events_source: '<?=$base_url?>obtener_eventos.php', 

                        // mostramos el calendario en el mes
                        view: 'month',             

                        // y dia actual
                        day: yyyy+"-"+mm+"-"+dd,   


                        // definimos el idioma por defecto
                        language: 'pt-BR', 

                        //Template de nuestro calendario
                        tmpl_path: '<?=$base_url?>tmpls/', 
                        tmpl_cache: false,


                        // Hora de inicio
                        time_start: '08:00', 

                        // y Hora final de cada dia
                        time_end: '22:00',   

                        // intervalo de tiempo entre las hora, en este caso son 30 minutos
                        time_split: '30',    

                        // Definimos un ancho del 100% a nuestro calendario
                        width: '100%', 

                        onAfterEventsLoad: function(events)
                        {
                                if(!events)
                                {
                                        return;
                                }
                                var list = $('#eventlist');
                                list.html('');

                                $.each(events, function(key, val)
                                {
                                        $(document.createElement('li'))
                                                .html('<a href="' + val.url + '">' + val.title + '</a>')
                                                .appendTo(list);
                                });
                        },
                        onAfterViewLoad: function(view)
                        {
                                $('.page-header h2').text(this.getTitle());
                                $('.btn-group button').removeClass('active');
                                $('button[data-calendar-view="' + view + '"]').addClass('active');
                        },
                        classes: {
                                months: {
                                        general: 'label'
                                }
                        }
                };


                // id del div donde se mostrara el calendario
                var calendar = $('#calendar').calendar(options); 

                $('.btn-group button[data-calendar-nav]').each(function()
                {
                        var $this = $(this);
                        $this.click(function()
                        {
                                calendar.navigate($this.data('calendar-nav'));
                        });
                });

                $('.btn-group button[data-calendar-view]').each(function()
                {
                        var $this = $(this);
                        $this.click(function()
                        {
                                calendar.view($this.data('calendar-view'));
                        });
                });

                $('#first_day').change(function()
                {
                        var value = $(this).val();
                        value = value.length ? parseInt(value) : null;
                        calendar.setOptions({first_day: value});
                        calendar.view();
                });
        }(jQuery));
    </script>

<div class="modal fade" id="add_evento" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
  <div class="modal-dialog">
    <div class="modal-content">
		  <div class="modal-header">
			<h4 class="modal-title" id="myModalLabel">Adicionar</h4>
		  </div>
		  <div class="modal-body">
			<form action="" method="post">
				<div class="row">
					<div class="form-group col-md-6">
						<label for="from">Inicio</label>
						<div class='input-group date' id='from'>
							<input type='text' id="from" name="from" class="form-control" readonly />
							<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
						</div>
					</div>

					<div class="form-group col-md-6">
						<label for="to">Final</label>
						<div class='input-group date' id='to'>
							<input type='text' name="to" id="to" class="form-control" readonly />
							<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="form-group col-md-6">
						<label for="tipo">Tipo de Serviço</label>
						<select class="form-control" name="class" id="tipo">
							<option value="event-info">Consulta</option>
							<option value="event-success">Banho/Tosa</option>
							<option value="event-important">Vacina</option>
							<option value="event-special">Exame</option>
							<option value="event-warning">Cirurgia</option>
						</select>
					</div>
					
					<div class="form-group col-md-6">
						<label for="owner">Proprietario</label>
						<select class="form-control" name="owner" id="owner"> 
							<?php foreach ($customers as $customer): ?>  
								<option value="<?php echo $customer['id']; ?>"><?php echo $customer['id']; ?> - <?php echo $customer['name']; ?></option>
							<?php endforeach; ?>
						</select>
					</div>
				</div>
				
				<div class="row">
					<div class="form-group col-md-12">
						<label for="title">Serviço</label>
						<input type="text" required autocomplete="off" name="title" class="form-control" id="title" placeholder="Informe o Serviço">
					</div>
				</div>

				<div class="row">
					<div class="form-group col-md-12">
						<label for="body">Observações</label>
						<textarea id="body" name="event" required class="form-control" rows="3"></textarea>
					</div>
				</div>

				<script type="text/javascript">
					$(function () {
						$('#from').datetimepicker({
							orientation: 'left',
							inline: true,
							sideBySide: true,
							defaultDate: "<?php echo date('Y/m/d h:i A'); ?>",
							language: 'pt-BR',
							use24hours: true,
							showMeridian: false,
							format: 'DD/MM/YYYY HH:mm',
							minDate: moment().subtract(1, 'days')
						});
						$('#to').datetimepicker({
							orientation: 'left',
							inline: true,
							sideBySide: true,
							defaultDate: "<?php echo date('Y/m/d h:i A'); ?>",
							language: 'pt-BR',
							use24hours: true,
							showMeridian: false,
							format: 'DD/MM/YYYY HH:mm',
							minDate: moment().subtract(1, 'days')
						});
					});
				</script>
			</div>
			<div class="modal-footer">
				  <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Cancelar</button>
				  <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Adicionar</button>
			</div>
		</form>
	</div>
</div>
</div>
</body>
</html>
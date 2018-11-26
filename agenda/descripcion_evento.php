<?php
    
    //incluimos nuestro archivo config
    include 'config.php'; 

    // Incluimos nuestro archivo de funciones
    include 'funciones.php';

    // Obtenemos el id del evento
    $id  = evaluar($_GET['id']);

    // y lo buscamos en la base de dato
    $bd  = $conexion->query("SELECT * FROM eventos WHERE id=$id");

    // Obtenemos los datos
    $row = $bd->fetch_assoc();

    // titulo 
    $titulo=$row['title'];

    // cuerpo
    $evento=$row['body'];

    // Fecha inicio
    $inicio=$row['inicio_normal'];

    // Fecha Termino
    $final=$row['final_normal'];

// Eliminar evento
if (isset($_POST['eliminar_evento'])) 
{
    $id  = evaluar($_GET['id']);
    $sql = "DELETE FROM eventos WHERE id = $id";
    if ($conexion->query($sql)) 
    {
        echo "Agenda Excluida";
    }
    else
    {
        echo "A Agenda não pode ser Excluida";
    }
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="<?=$base_url?>css/calendar.css">
	<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<title><?=$titulo?></title>
</head>
<body>
	 <h3><?=$titulo?></h3>
	 <hr>
     <b>Data de Inicio:</b> <?=$inicio?></br>
     <b>Data de Termino:</b> <?=$final?>
 	<p><?=$evento?></p>
</body>
<form action="" method="post">
    <button type="submit" class="btn btn-danger" name="eliminar_evento">Excluir</button>
</form>
</html>

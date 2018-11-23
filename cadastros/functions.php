<?php		
require_once('../config.php');	
require_once(DBAPI);	
$cadastros = null;	
$cadastro = null;	

/**	 *  Listagem de cadastros	 */	
function index($table = null) {		
	global $cadastros;		
	$cadastros = find_all($table);
}

/**	 *  cadastros de cadastros	 */
function add($table = null) {
    if (!empty($_POST['cadastro'])) {
        $today = date_create('now', new DateTimeZone('America/Sao_Paulo'));
        $cadastro = $_POST['cadastro'];
        $cadastro['modified'] = $cadastro['created'] = $today -> format("Y-m-d H:i:s");
        save($table, $cadastro);
        $customerId = $_GET['customerId'];
        if ($customerId == ""){
            header('location: index.php');
        } else {
            header("location: lista_registros.php?customerId=".$customerId);
        }       
    }
}

/**	 *	Atualizacao/Edicao de cadastro	 */
function edit($table = null) {
    $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        if (isset($_POST['cadastro'])) {
            $cadastro = $_POST['cadastro'];
            $cadastro['modified'] = $now -> format("Y-m-d H:i:s");
            update($table, $id, $cadastro);
            header('location: index.php');
        } else {
            global $cadastro;
            $cadastro = find($table, $id);
        }
    } else {
        header('location: index.php');
    }
}

/**	 *  Visualização de um cadastro	 */
function view($table = null, $id = null) {
    global $cadastro;
    $cadastro = find($table, $id);
}

/**	 *  Exclusão de um cadastro	 */
function delete($table = null, $id = null) {
    global $cadastro;
    $cadastro = remove($table, $id);
    header('location: index.php');
}


<?php		

require_once('../config.php');	
require_once(DBAPI);		

$pets = null;	
$pet = null;	

/**	 *  Listagem de pets	 */	
function index() {		
	global $pets;		
	$pets = find_all('pets');
}

/**	 *  Cadastro de pets	 */
function add() {
    if (!empty($_POST['pet'])) {
        $today = date_create('now', new DateTimeZone('America/Sao_Paulo'));
        $pet = $_POST['pet'];
        $pet['modified'] = $pet['created'] = $today -> format("Y-m-d H:i:s");
        save('pets', $pet);
        $customerId = $_GET['customerId'];
        if ($customerId == ""){
            header('location: index.php');
        } else {
            header("location: ../pets/lista_pep.php?customerId=".$customerId);
        } 
    }
}

/**	 *	Atualizacao/Edicao de pet	 */
function edit() {
    $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        if (isset($_POST['pet'])) {
            $pet = $_POST['pet'];
            $pet['modified'] = $now -> format("Y-m-d H:i:s");
            update('pets', $id, $pet);
            header('location: index.php');
        } else {
            global $pet;
            $pet = find('pets', $id);
        }
    } else {
        header('location: index.php');
    }
}

/**	 *  Visualização de um pet	 */
function view($id = null) {
    global $pet;
    $pet = find('pets', $id);
}

/**	 *  Exclusão de um pet	 */
function delete($id = null) {
    global $pet;
    $pet = remove('pets', $id);
    header('location: index.php');
}


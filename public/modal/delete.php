<?php
session_start();
if(  !class_exists('Connection') ) {
    require_once("../includes/config.php");
}

if(isset($_GET['id_sugerencia'])){
    $db = getDB();
    try{

        $sql = "DELETE FROM tabla_sugerencias WHERE id_sugerencia =  :id_sugerencia";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':id_sugerencia', $_GET['id_sugerencia'], PDO::PARAM_INT);
        $stmt->execute();


        // declaración if-else en la ejecución de nuestra consulta
        $_SESSION['message'] = ( $stmt->execute() ) ? 'Miembro eliminado correctamente' : 'Ocurrió un error. No se pudo eliminar al miembro';
    }
    catch(PDOException $e){
        $_SESSION['message'] = $e->getMessage();
    }

}
else{
    $_SESSION['message'] = 'Seleccione miembro para eliminar';
}

header('location: ../auto-consulta.php');

?>
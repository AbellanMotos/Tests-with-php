<?php 
try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=travel','AdminTravel','travel1234');
}catch (PDOException $e){
    die($e->getMessage());
}
//Muestra los campos seleccionados
$travels = $pdo->prepare('select * from travels');
$travels->execute();


//muestra un array como un objeto con todos los campos de la tabla
$results=$travels->fetchAll($pdo::FETCH_OBJ);
echo var_dump($results);
require 'vista.php';

?>
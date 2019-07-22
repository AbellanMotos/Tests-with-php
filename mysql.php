<?php 
try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=travel','AdminTravel','travel1234');
}catch (PDOException $e){
    die($e->getMessage());
}
$travels = $pdo->prepare('select * from travels');
$travels->execute();
var_dump($travels);
require 'vista.php';

$results=$travels->fetchAll(PDO::FETCH_OBJ);
var_dump($results);

?>
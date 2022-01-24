<?php 
try{
    $db = new PDO("mysql:host=localhost; dbname=kayit; charset=utf8", 'root', '');
}
catch(Exception $e){
    echo $e->getMessage();
}


?>
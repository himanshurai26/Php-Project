<?php 

$usr = 'root';
$pass = '';
$db = 'crudproject';

$conn = new mysqli('localhost', $usr,$pass,$db);

if($db){
   // echo "connected Successfully";
}else{
    die('not connected plz check '. mysqli_error($db));
}


?>
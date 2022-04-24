<?php

include ('dbconnection.php');

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "delete from 'phpcrud' where id=$id";
    $result = mysqli_query($conn,$sql);
        if($result){
          //  echo "Data deleted";
          header('location:Home.php');
        }
        {
            die(mysqli_error($conn));
        }
    
}
?>
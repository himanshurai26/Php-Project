
<?php  include 'dbconnection.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>crud project</title>
</head>
<body>
    <div class="container">
    <button class="btn btn-primary my-5"><a href="index.php" class ="text-light">Add User</a></button>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Sl no</th>
      <th scope="col">Name</th>
      <th scope="col">Age</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Subject Name</th>
      <th scope="col">Operation</th>
</thead> 
</tr>
  <tbody>

  <?php

   
   $sql ="select * from 'crudphp'";
   $result = mysqli_query($conn, $sql);
       if($result){
           
           while( $row = mysqli_fetch_assoc($result)){
               $id = $row['id'];
               $name = $row['name'];
               $age = $row['age'];
               $phone = $row['phone'];
               $subject = $row['subject'];

               echo ' <tr>
               <th scope="row">'.$id.'</th>
               <td>'.$name.'</td>
               <td>'.$age.'</td>
               <td>'.$phone.'</td>
               <td>'.$subject.'</td>

               <td>
               <button class="btn btn-primary"><a href="update.php?updateid='.$id.' " class="text-light">Update</a></button>
               <button class="btn btn-danger><a href="delete.php? deleteid='.$id.' "class="text-light">Delete</a></button>
           </td>
              </tr> ';

           }
       }
   
?>

  
  </tbody>
    </table>
    </div>
</body>
</html>
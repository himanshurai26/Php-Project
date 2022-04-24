<?php
include 'dbconnection.php';
$id = $_GET['updateid'];
$sql = "SELECT * FROM 'phpcrud' WHERE ID=$id";
$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$age = $row['age'];
$phone = $row['phone'];
$subject = $row['subject'];

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $age = $_POST['age'];
  $phone = $_POST['phone'];
  $subject = $_POST['subject'];

  $sql = "UPDATE 'phpcrud' SET id='$id', name='$name', age='$age',phone='$phone',subject='$subject' WHERE ID=$id"; 

  if(mysqli_query($conn,$sql)){
    echo " Data Updated Successfully";
 //  header('location:Home.php');
  }else{
    die(mysqli_error($conn));
  }

  mysqli_close($conn);
}

?>

<!doctype html>
<html lang="en">
 <head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

   <title>Crud Screen</title>
 </head>
 <body>
   <div class="container my-5">
   <form method = "post">
 <div class="mb-3">
   <label class="form-label">Name</label>
   <input type="text" class="form-control" placeholder = "Enter your Name" name ="name" autocomplete="off" value=<?php echo $name?>>
 </div>

 <div class="mb-3">
   <label class="form-label">Age</label>
   <input type="text" class="form-control" placeholder = "Enter your Age" name ="age" autocomplete="off" value=<?php echo $age?>>
 </div>

 <div class="mb-3">
   <label class="form-label">Phone Number</label>
   <input type="text" class="form-control" placeholder = "Enter your Mobile Number" name ="phone" autocomplete="off" value=<?php echo $phone?>>
 </div>

 <div class="mb-3">
   <label class="form-label">Subject Name</label>
   <input type="text" class="form-control" placeholder = "Enter your Subject" name ="subject" autocomplete="off" value=<?php echo $subject?>>
 </div>
 
 <button type="submit" class="btn btn-primary" name ="submit">Update</button>
</form>
   </div>
 </body>
</html>








 
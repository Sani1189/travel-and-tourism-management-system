<?php
   include 'connect.php';
   if(isset($_POST["submit"])){
    
    $name=$_POST['name'];
    $contact=$_POST['num'];
    $address= $_POST['address'];
    $city= $_POST['city'];
    $state=$_POST['state'];
    $zip=$_POST['zip'];
    $image=$_FILES['image']['name'];

    $budget=$_POST['budget'];
    $preference=$_POST['preference'];
    

    $query4="INSERT INTO fullsetUporder_t(name,contact,address,city,state,zip,budget,preference,image) VALUES('$name','$contact','$address','$city','$state','$zip','$budget','$preference','$image')";
    mysqli_query($con,$query4);
  


   }
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<script src="alert.js"></script>
<script>
  swal("Your request for Order has been taken.Thank you for shopping with us ");
</script>

</body>
</html>
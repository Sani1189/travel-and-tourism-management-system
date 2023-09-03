
<?php
   include 'connect.php';
   if(isset($_POST["submit"])){
    
    $name=$_POST["name"];
    $email=$_POST["email"];
    $address= $_POST["address"];
    $city= $_POST["city"];
    $state=$_POST["state"];
    $zip=$_POST["zip"];
    $cardholderName=$_POST["holderName"];
    $cardNumber=$_POST["card"];
    $expireMonth=$_POST["expireM"];
    $expireYear=$_POST["expireY"];
    $cvv=$_POST["cvv"];


    $query3="INSERT INTO order_t (name,email,address,city,state,zip,cardholderName,cardNumber,expireMonth ,expireYear,cvv) VALUES (' $name','$email','$address','$city','$state','$zip'
    ,'$cardholderName','$cardNumber','$expireMonth','$expireYear','$cvv')";
    mysqli_query($con,$query3);
  


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
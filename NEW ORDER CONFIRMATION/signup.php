<?php
  include 'connect.php';

   if(isset($_POST["submit"])){
      $fname= mysqli_real_escape_string($con,$_POST["fname"]);
      $lname= mysqli_real_escape_string($con,$_POST["lname"]);
      $email= mysqli_real_escape_string($con,$_POST["email"]);
      $pass= $_POST["password"];
      $rpassword= $_POST["rpassword"];
      $usertype=$_POST["usertype"];

      $query = "SELECT * FROM user_t WHERE email='$email'";
      $result= mysqli_query($con,$query);

      if(mysqli_num_rows($result)>0){
         $x[]="User Already existed!";
        
      }
      else{
        if($pass!=$rpassword){
            $x[]="Password Not Matched";
        }
        else{
            $query2="INSERT INTO user_t (usertype,fname,lname,email,password,rpassword)VALUES (' $usertype','$fname','$lname','$email','$pass','$rpassword')";
            mysqli_query($con,$query2);
            echo "successful";
        }
      }

   }
  
   

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Myeongjo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" >
    <title>SIGN UP</title>
    <link rel="stylesheet" href="signup.css">
</head>




<body>


 <div class="container">
    <div class="box1">
        <img src="green.jpg" >
    </div>
      
    <div class="box2">
        <div class="innerbox">
           
        <form action="" method="POST">
                  
            <h1>SIGN UP</h1>
            <?php
              if(isset($x)){
                  foreach($x as $x){
                    echo '<span class="error-msg">'.$x.'</span>';
                  }
              }
            ?>



                <span>Select Usertype</span><br>
                <select name="usertype" style="background-color:#2fea4b; height:30px; width:18vw">
                    <option value="customer">Customer</option>
                    <option value="field_worker">Field Worker</option>
                    <option value="agriculturist">Agriculturist</option>
                    <option value="dean">Dean</option>
                </select><br>


                <span>Enter Your First Name</span><br>
                <input type="text" name="fname" placeholder="First_Name" required><br>

                <span>Enter Your Last Name</span><br>
                <input type="text" name="lname" placeholder="Last_Name" required><br>

                <span>Enter Your Email</span><br>
                <input type="text" name="email" placeholder="Email" required><br>

                <span>Enter Your Password</span><br>
                <input type="password" name="password" placeholder="Password" required><br>

                <span>Re-Enter Your Password</span><br>
                <input type="password" name="rpassword" placeholder="Re-enter_Password" required><br>
                <input type="submit" name="submit" value="Register">
            </form>
        </div>
    </div>


</div>
</body>
</html>
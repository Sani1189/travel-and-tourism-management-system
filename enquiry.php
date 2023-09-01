<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['submit1']))
{
    $fname=$_POST['fname'];
    $email=$_POST['email'];    
    $mobile=$_POST['mobileno'];
    $subject=$_POST['subject'];    
    $description=$_POST['description'];
    $sql="INSERT INTO  tblenquiry(FullName,EmailId,MobileNumber,Subject,Description) VALUES(:fname,:email,:mobile,:subject,:description)";
    $query = $dbh->prepare($sql);
    $query->bindParam(':fname',$fname,PDO::PARAM_STR);
    $query->bindParam(':email',$email,PDO::PARAM_STR);
    $query->bindParam(':mobile',$mobile,PDO::PARAM_STR);
    $query->bindParam(':subject',$subject,PDO::PARAM_STR);
    $query->bindParam(':description',$description,PDO::PARAM_STR);
    $query->execute();
    $lastInsertId = $dbh->lastInsertId();
    if($lastInsertId)
    {
        $msg="Enquiry Successfully submitted";
    }
    else 
    {
        $error="Something went wrong. Please try again";
    }
}
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Travel and Tourism Management System</title>
    <!--bootstrap css-->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">

    <!--font-awesome css-->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">

    <!--custom css-->
    <link href="css/mystyle.css" rel="stylesheet" type="text/css" />
    <!--import modal from bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!--import jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--import popper.js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!--import bootstrap.js-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    />


    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>

    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/jquery-ui.js"></script>

    <script>
    new WOW().init();
    </script>

    <!-- add custom css -->
    <style>

        body{
            background-color: rgb(51 65 85)!important;
        }
        .enquiry-form {
            background:  rgb(51 65 85);
            padding: 20px;
            border-radius: 10px;
            border : 2px solid gray;

            box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px, rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px, rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px, rgba(0, 0, 0, 0.07) 0px 32px 64px;
        }

        .enquiry-form h3 {
            margin-bottom: 20px;
            font-size: 24px;
            font-weight: bold;
            color: #333;
            
        }

        .form-group {
            margin-bottom: 20px;
            
        }

        .form-group label {
            font-weight: 600;
            color: white!important;

        }

        .form-control {
            border: 1px solid #ced4da;
            border-radius: 5px;
            padding: 10px;
           
        }
       

        .btn-primary {
            background-color: #8892B0;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #1EA49E;
            border-color: #0056b3;
        }

        .errorWrap, .succWrap {
            margin-top: 10px;
            padding: 10px;
            border-radius: 5px;
        }

        .errorWrap {
            background-color: #f8d7da;
            border-color: #f5c6cb;
            color: #721c24;
        }

        .succWrap {
            background-color: #d4edda;
            border-color: #c3e6cb;
            color: #155724;
        }
        .container h1{
            color: white;
            margin-top: 40px;
            font-size: 49px;
            margin-bottom: 20px;
        }
    </style>

   
</head>
<body>
<!-- Top header -->
<div class="top-header">
    <?php include('includes/header.php');?>
</div>

<!-- Banner -->
<br><br>

<!-- Enquiry Form -->
<div class="privacy">
    <div class="container">
        <div class="enquiry-form">
            
            <form name="enquiry" method="post">
                <?php if($error){ ?><div class="errorWrap"><strong>ERROR</strong>: <?php echo htmlentities($error); ?></div><?php }
                    else if($msg){ ?><div class="succWrap"><strong>SUCCESS</strong>: <?php echo htmlentities($msg); ?></div><?php } ?>
                <div class="form-group">
                    <label for="fname"><b>Full name</b></label>
                    <input type="text" name="fname" class="form-control" id="fname" placeholder="Full Name" required="">
                </div> 
                <div class="form-group">
                    <label for="email"><b>Email</b></label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Valid Email id" required="">
                </div>
                <div class="form-group">
                    <label for="mobileno"><b>Mobile No</b></label>
                    <input type="text" name="mobileno" class="form-control" id="mobileno" maxlength="10" placeholder="10 Digit mobile No" required="">
                </div>
                <div class="form-group">
                    <label for="subject"><b>Subject</b></label>
                    <input type="text" name="subject" class="form-control" id="subject"  placeholder="Subject" required="">
                </div>
                <div class="form-group">
                    <label for="description"><b>Description</b></label>
                    <textarea name="description" class="form-control" rows="6" cols="50" id="description"  placeholder="Description" required=""></textarea> 
                </div>
                <div class="form-group">
                    <button type="submit" name="submit1" class="btn-primary btn">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<br><br>
<!-- Footer -->
<?php include('includes/footer.php');?>

<!-- Signup -->
<?php include('includes/signup.php');?>

<!-- Signin -->
<?php include('includes/signin.php');?>

<!-- Write Us -->

<?php include('includes/write-us.php');?>
</body>
</html>

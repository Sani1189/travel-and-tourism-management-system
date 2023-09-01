<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tour Guide Information</title>
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">

    <!-- Font Awesome CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">

    <!-- Custom CSS -->
    <link href="css/mystyle.css" rel="stylesheet" type="text/css" />

    <!-- Import modal from bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Import jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Import popper.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Import bootstrap.js -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Other links... -->

    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

    <!-- Other links... -->

    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>

    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/jquery-ui.js"></script>

    <script>
    new WOW().init();
    </script>

    <!-- add custom css -->

    <style>
   /* Reset some default styles */
body, h2, form {
    margin: 0;
    padding: 0;
    background-color: rgb(51 65 85)!important;
}

/* Style the container */
.tour_guide {
    width: 550px;
    margin: 0 auto;
    padding: 20px;
   
    border: 1px solid #ccc;
    border-radius: 5px;

    
    margin-top: 50px;
    margin-bottom: 50px;
    color: white;
    box-shadow: rgba(0, 0, 0, 0.25) 0px 25px 50px -12px;
}

/* Style the form header */
.tour_guide h2 {
    margin-bottom: 20px;
    font-size: 40px;
    color: white;
}

/* Style form elements */
.tour_guide label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
    color: white;
    font-size: 17px!important;
}

.tour_guide select,
.tour_guide input[type="radio"],
.tour_guide input[type="checkbox"] {
    margin-bottom: 10px;
    font-size: 16px;
}

.tour_guide select,
.tour_guide input[type="radio"],
.tour_guide input[type="checkbox"] {
    margin-right: 5px;
    font-size: 16px;
}

.tour_guide input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 5px;
}

/* Style form elements */
.tour_guide select,
.tour_guide input[type="radio"],
.tour_guide input[type="checkbox"] {
    margin-bottom: 10px;
    padding: 5px;
    font-size: 16px;
}

/* Style checkboxes and radio buttons */
.tour_guide input[type="checkbox"],
.tour_guide input[type="radio"] {
    vertical-align: middle;
    margin-right: 5px;
    font-size: 16px;
}

/* Style form elements */
.tour_guide input[type="text"],
.tour_guide select {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

/* Style submit button on hover */
.tour_guide input[type="submit"]:hover {
    background-color: #45a049;
}
/* Add the following CSS rules to your style.css file */

/* Style success message */
.success-message {
    color: #4CAF50;
    font-weight: bold;
    margin-top: 10px;
    text-align: center;
    align-items: center;
    font-size: 20px;
}
.alert {
    margin-top: 20px;
    text-align: center;
    width: 50%;
    margin-left: 23%;
}

 </style>

</head>
<body>
<?php include('includes/header.php'); ?>



<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travel";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gender = $_POST['gender'];
    $experience = $_POST['experience'];
    $hourly_rent = $_POST['hourly_rent'];
    $spoken_skills = implode(", ", $_POST['spoken_skills']); // Convert array to comma-separated string
    $destination = $_POST['destination'];

    $sql = "INSERT INTO tour_guide (gender, experience, hourly_rent, spoken_skill, destination)
            VALUES ('$gender', $experience, $hourly_rent, '$spoken_skills', '$destination')";

if ($conn->query($sql) === TRUE) {
    echo "<div class='alert alert-success mt-3'>Booking successful! Thank you for booking.</div>";
            echo '<a href="view_tour_guide.php" class="btn btn-primary" style="display: block; width: 25%; margin: 0 auto;">View Ticket</a>';
}  else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!-- add custom css -->
<div class="tour_guide">
<h2>Tour Guide Preference</h2>

<form method="post">
    <label for="" > Gender:</label>
   
    <select name="gender" >
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select>
    <br><br>
<label for="">Years of Experience:</label>

    <select name="experience">
        <option value="1">1 Year</option>
        <option value="2">2 Years</option>
        <option value="3">3 Years</option>
        <!-- Add more options as needed -->
    </select>
    <br><br>

    
    <label for="">Hourly Rent:</label>
    <input type="radio" name="hourly_rent" value="5"> $5
    <input type="radio" name="hourly_rent" value="10"> $10
    <input type="radio" name="hourly_rent" value="15"> $15
    <!-- Add more options as needed -->
    <br><br>

    <label for="">Spoken Language/Skill:</label>
    <input type="checkbox" name="spoken_skills[]" value="english"> English
    <input type="checkbox" name="spoken_skills[]" value="bangla"> Bangla
    <input type="checkbox" name="spoken_skills[]" value="hindi"> Hindi
    <!-- Add more checkboxes for other languages -->
    <br><br>

    <label for="">
    Destination:</label>
    <select name="destination">
        <option value="Bagerhat">Bagerhat</option>
        <option value="Bandarban">Bandarban</option>
        <option value="Barguna">Barguna</option>
        <option value="Barisal">Barisal</option>
        <option value="Bhola">Bhola</option>
        <option value="Bogra">Bogra</option>
        <option value="Dhaka">Dhaka</option>
        <option value="Chattogram">Chattogram</option>
        <option value="Sylhet">Sylhet</option>
        <!-- Add more options for the remaining districts -->
    </select>
    <br><br>

    <input type="submit" value="Submit">
</form>
</div>
<?php include('includes/footer.php'); ?>
</body>
</html>

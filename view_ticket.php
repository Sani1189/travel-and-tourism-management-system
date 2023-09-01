<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Ticket</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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

    <!-- Other stylesheet links... -->
    <style>
        /* Base styles */
.b{display:block;}/* Display Block */
.i{display:inline;}/* Display Inline */
.ib{display:inline-block;}/* Display Inline-Block */
.n{margin:0;}/* Margin None */
.m{margin:0.5em;}/* Margin */
.mt{margin-top:0.5em;}/* Margin Top */
.mr{margin-right:0.5em;}/* Margin Right */
.mb{margin-bottom:0.5em;}/* Margin Bottom */
.ml{margin-left:0.5em;}/* Margin Left */
.mx{margin-left:0.5em;margin-right:0.5em;}/* Margin Left and Right */
.my{margin-top:0.5em;margin-bottom:0.5em;}/* Margin Top and Bottom */
.p{padding:0.5em;}/* Padding */
.pt{padding-top:0.5em;}/* Padding Top */
.pr{padding-right:0.5em;}/* Padding Right */
.pb{padding-bottom:0.5em;}/* Padding Bottom */
.pl{padding-left:0.5em;}/* Padding Left */
.px{padding-left:0.5em;padding-right:0.5em;}/* Padding Left and Right */
.py{padding-top:0.5em;padding-bottom:0.5em;}/* Padding Top and Bottom */

/* Typography */
.fs{font-size:16px;}/* Font Size */
.fw{font-weight:700;}/* Font Weight Bold */

/* Container */
.c{display:flex;flex-direction:column;align-items:center;justify-content:center;}/* Container */
.mw{max-width:600px;}/* Max Width */
.tc{text-align:center;}/* Text Align Center */

/* Header */
.header{margin-top:1em;margin-bottom:1em;}/* Header Margin */

/* Ticket */
.ticket{font-size:36px;margin-top:1em;margin-bottom:1em;}/* Ticket Heading */
.ticket_div{background-color:#f5f5f5;padding:20px;border:1px solid #333;}/* Ticket Div */
.ticket_div h2{font-size:24px;margin-bottom:15px;}/* Ticket Div Heading */
.ticket_div p{font-size:18px;margin-bottom:10px;}/* Ticket Div Paragraph */
.ticket_div strong{font-weight:bold;}/* Ticket Div Strong */

/* Alerts */
.alert{padding:0.75em 1em;margin-bottom:1em;border-radius:0.25em;color:#721c24;background-color:#f8d7da;border:1px solid #f5c6cb;}/* Alert */
.alert-danger{background-color:#f8d7da;color:#721c24;border-color:#f5c6cb;}/* Alert Danger */

/* Container Margin Top */
.mt-5{margin-top:5em;}
.mt-3{margin-top:3em;}

body{
    background-color: rgb(51 65 85)!;
    
}
.container h1{
    color: #1EA49E;
    font-size: 50px;
    margin-top: 50px;
    margin-bottom: 30px;
}
.ticket_div{
    padding: 20px;
    border: 1px solid #333;
    border-radius: 10px;
}
    </style>
</head>
<body>
<?php include('includes/header.php'); ?>

<div class="container mt-5">
    <h1 class="ticket">View Ticket</h1>

    <?php
    // Database connection details
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "travel";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetching the last inserted ticket data
    $sql = "SELECT * FROM ticket_bookings ORDER BY id DESC LIMIT 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        ?>
        <div class="ticket_div">
            <h2>Your Booking Details:</h2>
            <p><strong>Name:</strong> <?php echo $row['name']; ?></p>
            <p><strong>Email:</strong> <?php echo $row['email']; ?></p>
            <p><strong>Seat:</strong> <?php echo $row['seating']; ?></p>
            <p><strong>Transportation:</strong> <?php echo $row['transportation']; ?></p>
            <br>
        </div>
        <?php
    } else {
        
        echo "<div class='alert alert-danger mt-3'>No booking data found.</div>";
    }

    // Close the database connection
    $conn->close();
    ?>

    <!-- Other content... -->
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<br><br><br><br>
<?php include('includes/footer.php'); ?>
</body>
</html>

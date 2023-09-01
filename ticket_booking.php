<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title >Ticket Booking</title>
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
    <!-- add custom css -->
    <style>
        /* Reset default body margin and padding */
body {
    margin: 0;
    padding: 0;
    font-family: 'Open Sans', Arial, sans-serif;
    background-color: rgb(51 65 85)!important;
}

/* Styling for the ticket booking container */
.ticket_div {
    max-width: 600px;
    margin: 50px auto;  
    padding: 20px;
    border: 1px solid #ccc;
    background-color:  rgb(51 65 85);
    border-radius: 5px;
    
    box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px, rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px, rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px, rgba(0, 0, 0, 0.07) 0px 32px 64px;
}

/* Common styling for labels */
.form-group label {
    font-weight: bold;
    color: white!important;
}

/* Styling for input fields */
/* .form-control {
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    font-size: 16px;
}

/* Styling for select fields
.form-group select.form-control {
    appearance: none; 
    background: url('down-arrow.png') no-repeat right; 
    background-size: 20px;
    padding-right: 30px; 
}  */

/* Styling for the submit button */
.btn-primary {
    background-color: #007bff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    transition: background-color 0.3s;
    font-weight: 700;
}

.btn-primary:hover {
    background-color: #0056b3;
}

/* Styling for alerts */
.alert {
    margin-top: 20px;
    text-align: center;
}
.container .ticket{
    text-align: center;
    font-size: 45px;
    color: #8892B0;
    margin-bottom: 20px;
    letter-spacing: 2px;
    font-weight: 700;
}
    </style>
    
</head>
<body>
<?php include('includes/header.php'); ?>


<div class="container mt-5">
    <h1 class="ticket">Ticket Booking</h1>

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

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $quantity = $_POST['quantity'];
        $transportation = $_POST['transportation'];
        $ticketSystem = $_POST['ticket_system'];
        $seating = $_POST['seating'];

        // Insert data into the database
        $sql = "INSERT INTO ticket_bookings (name, email, quantity, transportation, ticket_system, seating) 
                VALUES ('$name', '$email', '$quantity', '$transportation', '$ticketSystem', '$seating')";

        if ($conn->query($sql) === TRUE) {
            echo "<div class='alert alert-success mt-3'>Booking successful! Thank you for booking.</div>";
            echo '<a href="view_ticket.php" class="btn btn-primary" style="display: block; width: 25%; margin: 0 auto;">View Ticket</a>';

        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    // Close the database connection
    $conn->close();
    ?>
    

     <div class="ticket_div">
    <form action="ticket_booking.php" method="post">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="quantity">Number of Tickets:</label>
            <input type="number" class="form-control" id="quantity" name="quantity" required>
        </div>
        
        <div class="form-group">
            <label for="transportation">Select Transportation:</label>
            <select class="form-control" id="transportation" name="transportation">
                <option value="bus">Bus</option>
                <option value="train">Train</option>
                <option value="airplane">Airplane</option>
            </select>
        </div>
        

        
        <div class="form-group">
            <label for="ticket-system">Select Ticket System:</label>
            <select class="form-control" id="ticket-system" name="ticket_system">
                <option value="economy">Economy</option>
                <option value="business">Business</option>
                <option value="first-class">First Class</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="seating">Preferred Seating:</label>
            <input type="text" class="form-control" id="seating" name="seating">
        </div>

        <button type="submit" class="btn btn-primary" name="submit">Book Ticket</button>
        <br><br>
    </form>
</div>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<?php include('includes/footer.php'); ?>
</body>
</html>

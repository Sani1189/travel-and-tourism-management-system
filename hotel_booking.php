<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Booking</title>
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

/* Styling for the container */
.hotel_booking {
    max-width: 600px;
    margin: 50px auto;  
    padding: 20px;
    border: 1px solid #ccc;
    background-color:  rgb(51 65 85);
    border-radius: 5px;
    box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px, rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px, rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px, rgba(0, 0, 0, 0.07) 0px 32px 64px;
}

/* Styling for the h1 element */
h1 {
    text-align: center;
    margin-bottom: 20px;
    color: white!important;
}

/* Common styling for labels */
.form-group label {
    font-weight: bold;
    color: white!important;
}

/* Styling for input fields */
.form-control {
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    font-size: 16px;
}

/* Styling for date inputs */
.form-control[type="date"] {
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    font-size: 16px;
    font-weight: 700;
    color: white;
    appearance: none;
    padding-right: 30px;
    background: url('calendar-icon.png') no-repeat right;
    background-size: 20px;
}

/* Styling for number inputs */
.form-control[type="number"] {
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    font-size: 16px;
}

/* Styling for the submit button */
.btn-primary {
    background-color: #007bff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.btn-primary:hover {
    background-color: #0056b3;
}

/* Styling for additional content */
.additional-content {
    margin-top: 20px;
    padding: 20px;
    border: 1px solid #ccc;
    background-color: #f8f8f8;
    border-radius: 5px;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
}

/* Styling for special offer text */
.additional-content h2 {
    color: #333;
    margin-bottom: 10px;
}

.additional-content p {
    color: red;
}
.success-message {
    background-color: #28a745;
    width:50%;
    color: white;
    padding: 10px;
    border-radius: 5px;
    font-size: 16px;
    text-align: center;
    margin-left: 100px;
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
// Initialize variables to store user input
$name = $email = $checkIn = $checkOut = $numGuests = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input
    $name = $_POST["name"];
    $email = $_POST["email"];
    $checkIn = $_POST["check_in"];
    $checkOut = $_POST["check_out"];
    $numGuests = $_POST["num_guests"];

    // Create connection to the database (replace with your database details)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "travel";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert data into the database
    $sql = "INSERT INTO hotel_bookings (name, email, check_in, check_out, num_guests) VALUES ('$name', '$email', '$checkIn', '$checkOut', '$numGuests')";

    if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success mt-3'>Booking successful! Thank you for booking.</div>";
            echo '<a href="view_hotel_booking.php" class="btn btn-primary" style="display: block; width: 25%; margin: 0 auto;">View Ticket</a>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>

<div class="container mt-5">

<div class="hotel_booking">

    <h1>Hotel Booking</h1>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="check-in">Check-in Date:</label>
            <input type="date" class="form-control" id="check-in" name="check_in" required>
        </div>

        <div class="form-group">
            <label for="check-out">Check-out Date:</label>
            <input type="date" class="form-control" id="check-out" name="check_out" required>
        </div>

        <div class="form-group">
            <label for="num-guests">Number of Guests:</label>
            <input type="number" class="form-control" id="num-guests" name="num_guests" required>
        </div>

        <button type="submit" class="btn btn-primary" name="submit">Book Hotel</button>
    </form>

    <div class="additional-content">
        <h2>Additional Information</h2>
        <p style="color: red;">Special Offer: Get 10% discount when you pay with bKash before September 31st!</p>
    </div>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<?php include('includes/footer.php'); ?>
</body>
</html>

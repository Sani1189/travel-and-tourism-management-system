<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tour Guide Information</title>
    <!-- Include your CSS and JavaScript links here... -->
    <style>
        .table {
            border-collapse: collapse;
            width: 100%;
            border: 2px solid #000; /* Add a border to the outer edges of the table */
        }
        .table th, .table td {
            padding: 8px;
            text-align: left;
            border: none; /* Remove individual cell borders */
        }
        .table th:first-child, .table td:first-child {
            border-left: none; /* Remove left border from first column */
        }
        .table th:last-child, .table td:last-child {
            border-right: none; /* Remove right border from last column */
        }

        h1 .ticket{
            margin-bottom: 0px!important;
        }
    </style>
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




</head>
<body>
<?php include('includes/header.php'); ?>



<div class="container mt-5">
<h1 class="ticket" >Tour Guide History</h1>
    

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "travel";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch data from the database
    $sql = "SELECT * FROM tour_guide";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '<table class="table table-striped">';
        echo '<thead style="background-color: #000; color: #fff;">';
        echo '<tr><th>SL</th><th>Gender</th><th>Experience</th><th>Hourly Rent</th><th>Spoken Skills</th><th>Destination</th></tr>';
        echo '</thead>';
        echo '<tbody>';
        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row['guide_id'] . '</td>';
            echo '<td>' . $row['gender'] . '</td>';
            echo '<td>' . $row['experience'] . ' Years</td>';
            echo '<td>$' . $row['hourly_rent'] . '</td>';
            echo '<td>' . $row['spoken_skill'] . '</td>';
            echo '<td>' . $row['destination'] . '</td>';
            echo '</tr>';
        }
        echo '</tbody></table>';
    } else {
        echo "No tour guide data available.";
    }

    $conn->close();
    ?>

    <!-- Add any other elements or content as needed -->

</div>

<!-- Include your script includes here... -->
<br><br>
<?php include('includes/footer.php'); ?>

</body>
</html>

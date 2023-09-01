<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Ticket History</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/mystyle.css" rel="stylesheet" type="text/css">
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
    <!-- Import other CSS files if needed -->
</head>
<body>
    <div class="top-header">
        <?php include('includes/header.php'); ?>
    </div>

    

    <div class="container mt-5">
    <h1 >Ticket History</h1>
        

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

        // Fetch data from the ticket_bookings table
        $sql = "SELECT * FROM ticket_bookings";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo '<table class="table">';
            echo '<thead class="thead-dark">';
            echo '<tr><th>#</th><th>Ticket Id</th><th>Name</th><th>Email</th><th>Quantity</th><th>Transportation</th><th>Ticket System</th><th>Seating</th></tr>';
            echo '</thead>';
            echo '<tbody>';

            $cnt = 1;
            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . $cnt . '</td>';
                echo '<td>#TKT-' . $row['id'] . '</td>';
                echo '<td>' . $row['name'] . '</td>';
                echo '<td>' . $row['email'] . '</td>';
                echo '<td>' . $row['quantity'] . '</td>';
                echo '<td>' . $row['transportation'] . '</td>';
                echo '<td>' . $row['ticket_system'] . '</td>';
                echo '<td>' . $row['seating'] . '</td>';
                echo '</tr>';
                $cnt++;
            }

            echo '</tbody>';
            echo '</table>';
        } else {
            echo '<p>No records found.</p>';
        }

        // Close the database connection
        $conn->close();
        ?>
    </div>

    <!-- Your footer and script includes... -->
    <br><br>
    <?php include('includes/footer.php'); ?>

</body>
</html>

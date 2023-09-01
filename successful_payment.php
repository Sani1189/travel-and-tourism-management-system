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
    <title>Payment Successful</title>
    <style>
        /* Your existing styles */
        body {
            font-family: Arial, sans-serif;
            background-color: rgb(51 65 85)!important;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;

        }
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            /* background-color: rgba(0, 0, 0, 0.5); */
            
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.3s ease-in-out;
        }
        .modal-content {
            text-align: center;
            padding: 40px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transform: scale(0.8);
            box-shadow: rgba(0, 0, 0, 0.09) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;
            
            opacity: 0;
            transition: transform 0.3s ease-in-out, opacity 0.3s ease-in-out;
        }
        .icon {
            font-size: 60px;
            color: #28a745;
        }
        .message {
            font-size: 32px;
            margin-top: 20px;
            color: #14A44D;
            font-weight: 700;

        }
        .return-link {
            display: block;
            margin-top: 20px;
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }
        .countdown {
            font-size: 22px;
            margin-top: 20px;
            color: red;
            
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


    <div class="modal-overlay">
        <!-- Modal -->
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <div class="message">
                        Your payment was successful!
                    </div>
                    <a href="index.php" class="return-link">Return to Homepage</a>
                    <div class="countdown" id="countdown"></div>
                </div>
            </div>
        </div>
    </div>
    <script>
        setTimeout(function() {
            showSuccessModal(); // Show the success modal after a delay
        }, 1000); // 1000 milliseconds = 1 second

        function showSuccessModal() {
            var modalOverlay = document.querySelector('.modal-overlay');
            var modalContent = document.querySelector('.modal-content');
            modalOverlay.style.opacity = 1;
            modalOverlay.style.pointerEvents = 'auto';
            modalContent.style.transform = 'scale(1)';
            modalContent.style.opacity = 1;
        }

        function redirectToHomepage() {
            window.location.href = 'index.php'; // Redirect to homepage
        }

        // Countdown timer
        var countdownValue = 10; // Countdown value in seconds
        var countdownElement = document.getElementById('countdown');

        function updateCountdown() {
            countdownElement.innerText = 'After ' + countdownValue + ' seconds, you will be redirected.';
            countdownValue--;

            if (countdownValue < 0) {
                clearInterval(countdownInterval);
                redirectToHomepage(); // Redirect to homepage after countdown
            }
        }

        updateCountdown(); // Initial display
        var countdownInterval = setInterval(updateCountdown, 1000); // Update every second
    </script>
   
</body>
</html>

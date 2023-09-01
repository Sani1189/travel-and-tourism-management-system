<?php if ($_SESSION['login']) { ?>
<div class="top-header" style="background:gray">
    <div class="container">

        <!-- <ul class="top-header-left">
            <li class="icon" style="margin-right: 6px;"><a href="index.php"><i class="fa fa-home"></i></a></li>
            <li class="sub"><a href="profile.php">My Profile</a></li>
            <li class="sub"><a href="tour-history.php">My Tour History</a></li>
            <li class="sub"><a href="issuetickets.php">Issue Tickets</a></li>
        </ul> -->
        <ul class="top-header-left">
        <li class="icon" style="margin-right: 6px;"><a href="index.php"><i class="fa fa-home"></i></a></li>
        <li class="sub"><a href="profile.php">My Profile</a></li>
        <li class="sub dropdown">
            <a class="dropdown-toggle" href="#" id="tourHistoryDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Tour History</a>
            <div class="dropdown-menu" aria-labelledby="tourHistoryDropdown">
                <a class="dropdown-item" href="hotel_book_history.php">Hotel Book</a>
                <a class="dropdown-item" href="ticket_history.php">Ticket Book</a>
                <a class="dropdown-item" href="tour-history.php">Tour History</a>
                <a class="dropdown-item" href="tour_guide_history.php">Guide Preference</a>
            </div>
        </li>
        <li class="sub"><a href="issuetickets.php">Issue Tickets</a></li>
    </ul>
        
        


        <ul class="top-header-right">
            <li class="wel">Welcome: <?php echo htmlentities($_SESSION['login']); ?></li>
            <li class="out"><a href="logout.php">Sign Out</a></li>
        </ul>
    </div>
</div>
</div>
<?php } else { ?>
<div class="top-header">
    <div class="container">
        <ul class="top-header-left">
            <li class="icon"><a href="index.php"><i class="fa fa-home"></i></a></li>
            <li class="sub"><a href="admin/index.php">Admin Login</a></li>
        </ul>
        <ul class="top-header-right">
            <li class="wel">Call: +880 96386 41421</li>
            <li class="sig"><a href="signin.php" data-toggle="modal" data-target="#myModal4">Sign In |</a></li>
            <li class="sigi"><a href="signup.php" data-toggle="modal" data-target="#myModal5">| Sign Up</a></li>
        </ul>
    </div>
</div>
</div>
<?php } ?>


<header style="background: #cddfff;">
    <nav class="navbar navbar-expand-lg navbar-slide-in">
        <div class="container" >
                <!-- <img src="photos/logo.png" alt="Sani"> -->
                <h3>TourEase</h3>
            </a>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="package-list.php">Packages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="page.php?type=aboutus">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="page.php?type=privacy">Privacy Policy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="page.php?type=terms">Terms of Use</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="page.php?type=contact">Contact Us</a>
                    </li>
                    <?php if ($_SESSION['login']) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#myModal3">Need Help?</a>
                    </li>
                    <?php } else { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="enquiry.php">Enquiry</a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>
    
    
    <style>
        /* add custom css start */
/* Default color for navigation links */
.navbar .navbar-nav .nav-link {
    color: #333; /* Default color, adjust as per your need */
    transition: color 0.3s ease; /* smooth transition for hover effects */
}

/* Active navigation link color */
.navbar .navbar-nav .nav-link.active {
    color: red;
}

/* Hover effect for navigation links */
.navbar .navbar-nav .nav-link:hover {
    color: #555; /* color on hover, adjust as per your need */
}


         /*end custom css  */




        .top-header-left {
            list-style: none;
            display: flex;
            align-items: center;
            padding: 0;
            margin: 0;
        }


        .top-header-left li a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }

        .sub .dropdown-menu{
            background: #cddfff;
            width: 140%;
        }
        .sub .dropdown-menu .dropdown-item{
            color: white;
            font-weight: bold;
           padding-right: 100px;
           width: 80%;
        }

        .sub .dropdown-menu .dropdown-item a{
            color: #333;
            font-weight: bold;

          
        }

        .dropdown-menu{
            
        }
        .dropdown-menu a{
            
        }
        

        
    </style>
    

     <!-- Add Bootstrap JS and jQuery scripts here -->
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#tourHistoryDropdown').on('click', function() {
                $('.dropdown-menu').toggleClass('show');
            });
            
            // Hide the dropdown when clicking outside of it
            $(document).on('click', function(e) {
                if (!$('.sub.dropdown').is(e.target) && $('.sub.dropdown').has(e.target).length === 0) {
                    $('.dropdown-menu').removeClass('show');
                }
            });
        });
    </script>

    
    <script>
        document.addEventListener("DOMContentLoaded", function() {
    let navItems = document.querySelectorAll(".navbar .nav-link");

    navItems.forEach(item => {
        item.addEventListener("click", function() {
            // Remove active class from all nav items
            navItems.forEach(nav => nav.classList.remove("active"));

            // Add active class to the clicked nav item
            this.classList.add("active");
        });
    });
});

    </script>
</header>
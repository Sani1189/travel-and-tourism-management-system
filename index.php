<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE HTML>
<html>

<head>
    <title>TourEase</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


    <!-- Other links... -->

    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

    <!-- Other links... -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>

    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/jquery-ui.js"></script>

    <script>
        new WOW().init();
    </script>

    <!-- add custom css -->
    <style>
        body {
            background-color: #F5F5F5 !important;
        }
    </style>

</head>

<body>
    <?php include('includes/header.php'); ?>
    <div class="banner">
        <!-- Banner content... -->
    </div>

    <!-- fetch data -->
    <div class="container">
        <section class="xolor">
            <div class="package-list">
                <br>
                <h3>Featured Packages</h3>
                <br>
                <div class="card-deck">
                    <?php
                    $sql = "SELECT * from tbltourpackages order by rand() limit 4";
                    $query = $dbh->prepare($sql);
                    $query->execute();
                    $results = $query->fetchAll(PDO::FETCH_OBJ);
                    if ($query->rowCount() > 0) {
                        foreach ($results as $result) { ?>
                            <div class="card">
                                <img class="card-img-top"
                                    src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage); ?>"
                                    alt="Package Image" style="max-height: 130px;" />

                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?php echo htmlentities($result->PackageName); ?>
                                    </h5>
                                    <p class="card-text">
                                        <?php echo htmlentities($result->PackageType); ?>
                                    </p>
                                    <p class="text-muted"><b>Location:</b>
                                        <?php echo htmlentities($result->PackageLocation); ?>
                                    </p>

                                    <h5>USD
                                        <?php echo htmlentities($result->PackagePrice); ?>
                                    </h5>
                                </div>
                                <a style="margin:0 20px 10px 20px;" href="package-details.php?pkgid=<?php echo htmlentities($result->PackageId); ?>"
                                    class="btn btn-primary">Details</a>

                            </div>
                        <?php }
                    } ?>
                </div>
                <br>
                <div><a href="package-list.php" class="view-more">View More Packages</a></div>
                <br>
        </section>
    </div>
    <div class="clearfix"></div>
    </div>



    <!-- strat service section -->

    <section id="service" class="our_services">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2>TourEase services</h2>
                        <span></span>
                        <p>
                            "Travel services are the gateway to seamless journeys, offering a spectrum of conveniences
                            <br>
                            that transform wanderlust into well-planned adventures."
                        </p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center text-center">
                <div class="col-lg-4 col-sm-6 col-xs-12" data-aos="fade-up">
                    <a href="hotel_booking.php" class="service-link">
                        <div class="service">
                            <div class="icon"><i class="fas fa-hotel"></i></div>
                            <h4>Hotel Booking</h4>
                            <p>"Hotel booking is the key to unlocking comfort and relaxation d providing a home away
                                from home where you can recharge amidst new horizons."</p>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-sm-6 col-xs-12" data-aos="fade-up">
                    <a href="ticket_booking.php" class="service-link">
                        <div class="service">
                            <div class="icon"><i class="fas fa-plane"></i></div>
                            <h4>Ticket Booking</h4>
                            <p>"Ticket booking marks the entry to your chosen adventure, opening doors to new
                                experiences and destinations that await your exploration."</p>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-sm-6 col-xs-12" data-aos="fade-up">
                    <a href="tour_guide.php" class="service-link">
                        <div class="service">
                            <div class="icon"><i class="fas fa-user-tie"></i></div>
                            <h4>Tour Guide</h4>
                            <p>"Storytellers who breathe life into destinations. They share insights and ensure smooth
                                journeys. Transforming tours into unforgettable experiences"</p>
                        </div>
                    </a>
                </div>
            </div>
        </div><!-- END CONTAINER -->
    </section>
    <!-- END SERVICES -->

    <?php include('includes/footer.php'); ?>
    <?php include('includes/signup.php'); ?>
    <?php include('includes/signin.php'); ?>
    <?php include('includes/write-us.php'); ?>
</body>

</html>
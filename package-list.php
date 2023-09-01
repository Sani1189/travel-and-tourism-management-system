<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE HTML>
<html>

<head>
    <title>TourEase | Package List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><!--bootstrap css-->
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

    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" /><!--stylesheet-->



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />


    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>

    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/jquery-ui.js"></script>
    <!-- add custom css -->
    <style>
        /* Banner */
        .banner-3 {
            padding: 10px 0;
            color: #fff;
            text-align: center;
        }

        body {
            background-color: rgb(51 65 85) !important;
        }

        /* Room Cards */
        .room-bottom {
            margin-top: 30px;
        }

        .room-bottom h3 {
            color: #fff;
        }

        .rom-btm {
            background: #F6F4EB;

            margin-bottom: 20px;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            opacity: 0.9;
        }

        .room-left img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .room-midle {
            padding: 20px;
        }

        .room-midle h4 {
            margin-top: 0;
            font-size: 24px;
            color: #333;
        }

        .room-midle h6 {
            color: #888;
        }

        .room-midle p {
            margin: 10px 0;
        }

        .room-right {
            text-align: center;
            padding-top: 20px;
        }

        .room-right h5 {
            color: #007bff;
        }

        .view {
            display: inline-block;
            padding: 5px 20px;
            color: #fff;
            background: #5cb85c;
            border-radius: 5px;
            text-decoration: none;
            transition: background 0.3s ease-in-out;
            text-decoration: none!important;

        }

        .rom-btm {
            background: #fff;
            margin-bottom: 20px;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            /* Use flexbox to align items */
            align-items: center;
            /* Align items vertically in the middle */
        }


        .view:hover {
            background: RGB(92, 174, 120);
            color:#F6F4EB;
        }

        .clearfix {
            clear: both;
        }
    </style>
    <!-- add custom css -->

    <script>
        new WOW().init();
    </script>
    <!--//end-animate-->
</head>

<body>
    <?php include('includes/header.php'); ?>
    <!--- banner ---->
    <div class="banner-3">
        <div class="container">
            <br>
            <h1 class="wow zoomIn animated animated" data-wow-delay=".5s"
                style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"> Travel Package List</h1>
        </div>
    </div>
    <!--- /banner ---->
    <!--- rooms ---->
    <div class="rooms">
        <div class="container">

            <div class="room-bottom">



                <?php $sql = "SELECT * from tbltourpackages";
                $query = $dbh->prepare($sql);
                $query->execute();
                $results = $query->fetchAll(PDO::FETCH_OBJ);
                $cnt = 1;
                if ($query->rowCount() > 0) {
                    foreach ($results as $result) { ?>
                        <div class="rom-btm">
                            <div class="col-md-3 room-left wow fadeInLeft animated" data-wow-delay=".5s">
                                <img src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage); ?>"
                                    class="img-responsive" alt="">
                            </div>
                            <div class="col-md-6 room-midle wow fadeInUp animated" data-wow-delay=".5s">
                                <h4>Package Name:
                                    <?php echo htmlentities($result->PackageName); ?>
                                </h4>
                                <h6>Package Type :
                                    <?php echo htmlentities($result->PackageType); ?>
                                </h6>
                                <p><b>Package Location :</b>
                                    <?php echo htmlentities($result->PackageLocation); ?>
                                </p>
                                <p><b>Features</b>
                                    <?php echo htmlentities($result->PackageFetures); ?>
                                </p>
                            </div>
                            <div class="col-md-3 room-right wow fadeInRight animated" data-wow-delay=".5s">
                                <h5>USD
                                    <?php echo htmlentities($result->PackagePrice); ?>
                                </h5>
                                <div class="btn-div">
                                <a href="package-details.php?pkgid=<?php echo htmlentities($result->PackageId); ?>"
                                    class="view">Details</a>
                                    </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                    <?php }
                } ?>



            </div>
        </div>
    </div>
    <!--- /rooms ---->

    <!--- /footer-top ---->
    <?php include('includes/footer.php'); ?>
    <!-- signup -->
    <?php include('includes/signup.php'); ?>
    <!-- //signu -->
    <!-- signin -->
    <?php include('includes/signin.php'); ?>
    <!-- //signin -->
    <!-- write us -->
    <?php include('includes/write-us.php'); ?>
    <!-- //write us -->
</body>

</html>

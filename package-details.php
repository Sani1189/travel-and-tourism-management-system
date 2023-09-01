<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (isset($_POST['submit2'])) {
    $pid = intval($_GET['pkgid']);
    $useremail = $_SESSION['login'];
    $fromdate = $_POST['selected_date'];
    $total_price = $_POST['total_price'];
    $adults = $_POST['adults'];
    $children = $_POST['children'];
    $seniors = $_POST['seniors'];
    $package_type = $_POST['package_type'];
    $selected_addons = $_POST['selected_addons'];
    $status = 0;
    $sql = "INSERT INTO tblbooking(PackageId,UserEmail,FromDate,status,addsOn,pkgtype,child,adult,senior,total) VALUES
(:pid,:useremail,:fromdate,:status,:selected_addons,:package_type,:children,:adults,:seniors,:total_price)";
    $query = $dbh->prepare($sql);
    $query->bindParam(':pid', $pid, PDO::PARAM_STR);
    $query->bindParam(':useremail', $useremail, PDO::PARAM_STR);
    $query->bindParam(':fromdate', $fromdate, PDO::PARAM_STR);
    $query->bindParam(':status', $status, PDO::PARAM_STR);
    $query->bindParam(':selected_addons', $selected_addons, PDO::PARAM_STR);
    $query->bindParam(':package_type', $package_type, PDO::PARAM_STR);
    $query->bindParam(':children', $children, PDO::PARAM_STR);
    $query->bindParam(':adults', $adults, PDO::PARAM_STR);
    $query->bindParam(':seniors', $seniors, PDO::PARAM_STR);
    $query->bindParam(':total_price', $total_price, PDO::PARAM_STR);
    $query->execute();
    $lastInsertId = $dbh->lastInsertId();
    if ($lastInsertId) {
        $msg = "Booked Successfully";
    } else {
        $error = "Something went wrong. Please try again";
    }

}

?>
<!DOCTYPE HTML>
<html>

<head>
    <title>TourEase | Package Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="applijewelleryion/x-javascript">
        addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } 
    </script>
    <!--bootstrap css-->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
    <!--font-awesome css-->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">

    <!--custom css-->
    <link href="css/mystyle.css" rel="stylesheet" type="text/css" />
    <link href="css/package.css" rel="stylesheet" type="text/css" media="all">

    <!--import modal from bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!--import jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--import popper.js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!--import bootstrap.js-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />


    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>

    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/jquery-ui.js"></script>

    <script>
        new WOW().init();
    </script>
    <script src="js/jquery-ui.js"></script>
    <script>
        $(function () {
            $("#datepicker,#datepicker1").datepicker();
        });
    </script>
    <style>
        .journey,
        .total {
            padding: 10px 40px;
            display: flex;
            flex-direction: row;
            justify-content: space-between;

        }

        .details {
            box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
        }

        .descc {
            margin: 20px auto;
            box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
            background-color: #ebf0f4;
        }

        #addsOnDiv {
            padding: 10px 40px;
            display: flex;
            flex-direction: column;
            font-size: 24px;
        }

        .number span {
            padding-left: 10px;
            padding-right: 10px;
        }

        .number button {
            font-size: 25px;
            padding-top: 0px;
            padding-bottom: 0px;
        }

        .person {
            display: none;
            padding: 10px 20px;
            flex-direction: column;
            justify-content: center;
        }

        .adult,
        .child,
        .senior {
            padding: 8px 20px;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
        }

        .errorWrap {
            padding: 10px;
            margin: 0 0 20px 0;
            background: #fff;
            border-left: 4px solid #dd3d36;
            -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
            box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
        }

        .succWrap {
            margin-top: 30px!important;
            padding: 10px;
            margin: 0 0 20px 0;
            background: #14A44D;
            width: 50%;
            border-left: 4px solid #5cb85c;
            -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
            box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
            color: #fff;
            font-weight: 700;
        }
    </style>
</head>

<body>
    <?php include('includes/header.php'); ?>
    <div class="container" margin-bottom="20px">

        <?php
        if ($error) { ?>
            <div class="errorWrap">
                <strong>ERROR</strong>:
                <?php echo htmlentities($error); ?>
            </div>
        <?php } else if ($msg) { ?>
                <div class="succWrap"><strong>SUCCESS</strong>:
                <?php echo htmlentities($msg); ?>
                </div>
        <?php } ?>
        <?php
        $pid = intval($_GET['pkgid']);
        $sql = "SELECT * from tbltourpackages where PackageId=:pid";
        $query = $dbh->prepare($sql);
        $query->bindParam(':pid', $pid, PDO::PARAM_STR);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);
        $cnt = 1;
        if ($query->rowCount() > 0) {
            foreach ($results as $result) { ?>

                <!-- title of the package -->
                <h2 class="text-center">
                    <?php echo htmlentities($result->PackageName); ?>
                </h2>

                <!-- image of the package -->
                <div class="row">
                    <div class="col-md-8">
                        <img src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage); ?>" class="img-responsive"
                            alt="image not found" width="100%" height="400">
                    </div>

                    <!-- details of the package -->
                    <div class="col-md-4">
                        <div class="details" style="background-color:#ebf0f4" height="400">
                            <!-- create map with mapboxgl_map with 100% width and height 200px -->
                            <div class="mapouter">
                                <div class="gmap_canvas">
                                    <iframe width="100%" height="200" id="gmap_canvas"
                                        src="https://maps.google.com/maps?q=<?php echo htmlentities($result->PackageLocation); ?>&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                </div>
                            </div>
                            <div class="desc" style="padding:18px;">
                                <!-- adding wifi, playground, pool, breakfast,lunch,dinner with icon in a list -->
                                <ul style="font-size:25px">
                                    <li><i style="color:black;" class="fa fa-wifi" aria-hidden="true"></i>
                                        Wifi</li>
                                    <li><i style="color:green;" class="fa fa-play" aria-hidden="true"></i>
                                        Playground</li>
                                    <li><i style="color:blue;" class="fa fa-check" aria-hidden="true"></i>
                                        Pool</li>
                                    <li><i class='fas fa-hamburger' style='color:red'></i>
                                        Breakfast, Dinner</li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- description  add on, total price ,include and exclude ,tour plan -->
                <div class="row">
                    <div class="col-md-8">
                        <div class="pkgtype">
                            <!-- radio button selector -->
                            <h3>Select Package Type</h3>
                            <form class="myform">
                                <input type="radio" id="single" name="pkgtype" value="single" checked>
                                <label for="single">Single</label><br>
                                <input type="radio" id="couple" name="pkgtype" value="couple">
                                <label for="couple">Couple</label><br>
                                <input type="radio" id="family" name="pkgtype" value="family">
                                <label for="family">Family</label><br>
                                <input type="radio" id="group" name="pkgtype" value="group">
                                <label for="group">Group</label><br>
                                <!-- check if radio button is group or family show number of person input -->
                            </form>
                        </div>
                        <div class="addsOn">
                            <!-- adds one check boxes -->
                            <h3>Adds On</h3>
                            <form class="myform">
                                <input type="checkbox" id="guide" name="guide" value="guide">
                                <label for="guide">Guide</label><br>
                                <input type="checkbox" id="photographer" name="photographer" value="photographer">
                                <label for="photographer">Photographer</label><br>
                                <input type="checkbox" id="transport" name="transport" value="transport">
                                <label for="transport">Transport</label><br>
                                <input type="checkbox" id="spa" name="spa" value="spa">
                                <label for="spa">Spa</label><br>
                            </form>
                        </div>
                        <div class="others">
                            <div class="description">
                                <button type="button" class="collapsible">
                                    <h5>Description</h5> <i class="fa fa-chevron-down"></i>
                                </button>
                                <div class="content">
                                    <p>
                                        <?php echo ($result->PackageDetails); ?>
                                    </p>
                                </div>
                            </div>
                            <div class="info">
                                <button type="button" class="collapsible">
                                    <h5>Additional Information</h5> <i class="fa fa-chevron-down"></i>
                                </button>
                                <div class="content">
                                    <p>
                                        <?php echo ($result->PackageInfo); ?>
                                    </p>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="descc" style="padding:18px;">
                            <!-- add journey date input from date picker -->
                            <div class="journey">
                                <h4>Journey Date</h4>
                                <input type="date" id="datePicker" name="datePicker" placeholder="Journey Date" required="">
                            </div>

                            <!-- add number of person input -->
                            <div class="person" id="person">
                                <div class="adult">
                                    <h6>Adult</h6>
                                    <div class="number">
                                        <button type="button" class="btn btn-outline-danger"
                                            onclick="decrement('adultNumber')">-</button>
                                        <span id="adultNumber">1</span>
                                        <button type="button" class="btn btn-outline-success"
                                            onclick="increment('adultNumber')">+</button>
                                    </div>
                                </div>

                                <div class="child">
                                    <h6>Child</h6>
                                    <div class="number">
                                        <button type="button" class="btn btn-outline-danger"
                                            onclick="decrement('childNumber')">-</button>
                                        <span id="childNumber">0</span>
                                        <button type="button" class="btn btn-outline-success"
                                            onclick="increment('childNumber')">+</button>
                                    </div>
                                </div>
                                <div class="senior">
                                    <h6>Senior Citizen</h6>
                                    <div class="number">
                                        <button type="button" class="btn btn-outline-danger"
                                            onclick="decrement('seniorNumber')">-</button>
                                        <span id="seniorNumber">0</span>
                                        <button type="button" class="btn btn-outline-success"
                                            onclick="increment('seniorNumber')">+</button>
                                    </div>
                                </div>

                            </div>
                            <div class="add" id="addsOnDiv">
                                <!-- The selected addons will be displayed here -->
                            </div>
                            <div class="total" id="totalDiv">
                                <!-- The total cost will be displayed here -->
                            </div>
                            <form method="post" name="book">
                                <ul>
                                    <li>
                                        <input type="hidden" name="total_price" id="total_price" value="">
                                        <input type="hidden" name="adults" id="adults" value="">
                                        <input type="hidden" name="children" id="children" value="">
                                        <input type="hidden" name="seniors" id="seniors" value="">
                                        <input type="hidden" name="selected_date" id="selected_date" value="">
                                        <input type="hidden" name="package_type" id="package_type" value="">
                                        <input type="hidden" name="selected_addons" id="selected_addons" value="">
                                    </li>
                                    <?php if ($_SESSION['login']) { ?>
                                        <li>
                                            <button type="submit" name="submit2" class="btn btn-success">Book Now</button>
                                        </li>
                                    <?php } else { ?>
                                        <li class="sigi" align="center">
                                            <a href="#" class="btn btn-success" data-toggle="modal" data-target="#myModal4">Book
                                                now</a>
                                        </li>
                                    <?php } ?>

                                </ul>
                            </form>

                        </div>

                        <!-- add total price -->

                        <!-- add book now button -->

                    </div>
                </div>
            </div>
            </div>
        <?php }
        } ?>
    <!-- footer -->
    <?php include('includes/footer.php'); ?>

    <script>
        // Get references to the checkboxes
        const checkboxes = document.querySelectorAll('input[type="checkbox"]');
        // Get a reference to the addsOn div
        const addsOnDiv = document.getElementById('addsOnDiv');

        // Function to update the addsOn div based on the selected checkboxes
        function updateAddsOnDiv() {
            // Create an array to store the selected addons
            const selectedAddons = [];

            // Loop through the checkboxes to find the selected ones
            for (const checkbox of checkboxes) {
                if (checkbox.checked) {
                    selectedAddons.push(checkbox.value);
                }
            }

            // Update the content of the addsOn div
            if (selectedAddons.length > 0) {
                // Display an <ul> element with the selected addons with fa check green
                addsOnDiv.innerHTML = `
        <h5>Adds On</h5>
        <ul>
            ${selectedAddons.map(addon => `<li><i class="fa fa-check" style="color:green;"></i> ${addon}</li>`).join('')}
        </ul>
        `;
            } else {
                // Clear the content if no addons are selected
                addsOnDiv.innerHTML = '';
            }
        }

        // Add a change event listener to each checkbox
        for (const checkbox of checkboxes) {
            checkbox.addEventListener('change', updateAddsOnDiv);
        }

        // Initial update when the page loads to display any initially selected checkboxes
        updateAddsOnDiv();
    </script>


    <script>
        const addonCosts = {
            guide: 50,
            photographer: 100,
            transport: 300,
            spa: 200
        };

        function increment(elementId) {
            const element = document.getElementById(elementId);
            const currentValue = parseInt(element.innerText);
            element.innerText = currentValue + 1;
            calculateTotal();
        }

        function decrement(elementId) {
            const element = document.getElementById(elementId);
            const currentValue = parseInt(element.innerText);
            if (currentValue > 0) {
                element.innerText = currentValue - 1;
                calculateTotal();
            }
        }
        let packagePrice = <?php echo $result->PackagePrice; ?>;

        function calculateTotal() {
            let packageType = '';
            for (const radioButton of radioButtons) {
                if (radioButton.checked) {
                    packageType = radioButton.value;
                    break;
                }
            }


            let adultnumber = document.getElementById('adultNumber');
            let childnumber = document.getElementById('childNumber');
            let seniornumber = document.getElementById('seniorNumber');
            //parse int value
            adultnumber = parseInt(adultnumber.innerText);
            childnumber = parseInt(childnumber.innerText);
            seniornumber = parseInt(seniornumber.innerText);

            console.log(adultnumber, childnumber, seniornumber);

            let total = 0;

            if (packageType === 'single') {
                total = packagePrice;
                adultnumber = 1;
                childnumber = 0;
                seniornumber = 0;
            } else if (packageType === 'couple') {
                total = packagePrice * 2;
                adultnumber = 2;
                childnumber = 0;
                seniornumber = 0;
            } else if (packageType === 'family') {
                total = (adultnumber * packagePrice) + (childnumber * packagePrice * 0.8) + (seniornumber * packagePrice *
                    1.2);
            } else if (packageType === 'group') {
                total = (adultnumber * packagePrice) + (childnumber * packagePrice * 0.8) + (seniornumber * packagePrice *
                    1.2);
            }

            for (const checkbox of checkboxes) {
                if (checkbox.checked) {
                    total += addonCosts[checkbox.value];
                }
            }

            document.getElementById('totalDiv').innerHTML = `
    <h3>Total</h3>
    <h3>$${total}</h3>
    `;
            // Create an array to store the selected addons
            const selectedAddons = [];

            // Loop through the checkboxes to find the selected ones
            for (const checkbox of checkboxes) {
                if (checkbox.checked) {
                    selectedAddons.push(checkbox.value);
                }
            }



            // Set the values of the hidden input fields
            document.getElementById('total_price').value = total;
            document.getElementById('adults').value = adultnumber;
            document.getElementById('children').value = childnumber;
            document.getElementById('seniors').value = seniornumber;
            document.getElementById('selected_date').value = document.getElementById('datePicker').value;
            document.getElementById('package_type').value = packageType;
            document.getElementById('selected_addons').value = selectedAddons.join(
                ','); // Store selected addons as a comma-separated string


        }

        // Get references to the radio buttons
        const radioButtons = document.querySelectorAll('input[type="radio"]');
        // Get a reference to the total div
        const totalDiv = document.getElementById('totalDiv');

        // Add a change event listener to each radio button
        for (const radioButton of radioButtons) {
            radioButton.addEventListener('change', calculateTotal);
        }
        for (const checkbox of checkboxes) {
            checkbox.addEventListener('change', calculateTotal);
        }


        //add change event listener to each checkbox
        for (const checkbox of checkboxes) {
            checkbox.addEventListener('change', calculateTotal);
        }

        //add event listener to the number of persons input fields
        document.getElementById('adultNumber').addEventListener('change', calculateTotal);
        document.getElementById('childNumber').addEventListener('change', calculateTotal);
        document.getElementById('seniorNumber').addEventListener('change', calculateTotal);

        // Initial update when the page loads to display the total cost


        calculateTotal();
    </script>

    <script>
        // Get radio buttons and the number of persons input field
        var groupRadio = document.getElementById("group");
        var familyRadio = document.getElementById("family");
        var personsInput = document.getElementById("person");

        // Add event listeners to radio buttons
        groupRadio.addEventListener("change", function () {
            if (this.checked) {
                // If "Group" is selected, show the input field
                personsInput.style.display = "block";
            }
        });

        familyRadio.addEventListener("change", function () {
            if (this.checked) {
                // If "Family" is selected, show the input field
                personsInput.style.display = "block";
            }
        });

        // Add event listener to "Single" and "Couple" to hide the input field
        var singleRadio = document.getElementById("single");
        var coupleRadio = document.getElementById("couple");

        singleRadio.addEventListener("change", function () {
            if (this.checked) {
                // If "Single" is selected, hide the input field
                personsInput.style.display = "none";
            }
        });

        coupleRadio.addEventListener("change", function () {
            if (this.checked) {
                // If "Couple" is selected, hide the input field
                personsInput.style.display = "none";
            }
        });
    </script>


    <script>
        // Get all elements with class "collapsible"
        var coll = document.querySelectorAll(".collapsible");

        // Add click event listeners to toggle the content
        for (var i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function () {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.display === "block") {
                    content.style.display = "none";
                } else {
                    content.style.display = "block";
                }
            });
        }
    </script>
    <?php include('includes/signup.php'); ?>
    <?php include('includes/signin.php'); ?>
    <?php include('includes/write-us.php'); ?>
</body>

</html>
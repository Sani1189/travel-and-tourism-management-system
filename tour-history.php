<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['login']) == 0) {
	header('location:index.php');
} else {
	if (isset($_REQUEST['bkid'])) {
		$bid = intval($_GET['bkid']);
		$email = $_SESSION['login'];
		$sql = "SELECT FromDate FROM tblbooking WHERE UserEmail=:email and BookingId=:bid";
		$query = $dbh->prepare($sql);
		$query->bindParam(':email', $email, PDO::PARAM_STR);
		$query->bindParam(':bid', $bid, PDO::PARAM_STR);
		$query->execute();
		$results = $query->fetchAll(PDO::FETCH_OBJ);
		if ($query->rowCount() > 0) {
			foreach ($results as $result) {
				$fdate = $result->FromDate;

				$a = explode("/", $fdate);
				$val = array_reverse($a);
				$mydate = implode("/", $val);
				$cdate = date('Y/m/d');
				$date1 = date_create("$cdate");
				$date2 = date_create("$fdate");
				$diff = date_diff($date1, $date2);
				echo $df = $diff->format("%a");
				if ($df > 1) {
					$status = 2;
					$cancelby = 'u';
					$sql = "UPDATE tblbooking SET status=:status,CancelledBy=:cancelby WHERE UserEmail=:email and BookingId=:bid";
					$query = $dbh->prepare($sql);
					$query->bindParam(':status', $status, PDO::PARAM_STR);
					$query->bindParam(':cancelby', $cancelby, PDO::PARAM_STR);
					$query->bindParam(':email', $email, PDO::PARAM_STR);
					$query->bindParam(':bid', $bid, PDO::PARAM_STR);
					$query->execute();

					$msg = "Booking Cancelled successfully";
				} else {
					$error = "You can't cancel booking before 24 hours";
				}
			}
		}
	}

	?>
	<!DOCTYPE HTML>
	<html>

	<head>
		<title>TourEase </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Tourism Management System In PHP" />
		<script
			type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--bootstrap css-->
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

		<style>
			.errorWrap {
				padding: 10px;
				margin: 0 0 20px 0;
				background: #fff;
				border-left: 4px solid #dd3d36;
				-webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
				box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
			}

			.succWrap {
				padding: 10px;
				margin: 0 0 20px 0;
				background: #fff;
				border-left: 4px solid #5cb85c;
				-webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
				box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
			}

			/* new css */
			/* Reset default margin and padding */
body, h1, h2, h3, h4, h5, h6, p, table {
  margin: 0;
  padding: 0;
}



/* Basic styling for the top header */
/* .top-header {
  background-color: #f5f5f5;
  padding: 20px 0;
} */

/* Center align text within the container */

.container {
  text-align: center;
}

/* Style for the section title */
.privacy h3 {
  margin-bottom: 20px;
  font-size: 24px;
  color: #333;
}

/* Style for table headers */
.privacy table th {
  background-color: #333;
  color: #fff;
  padding: 10px;
}

/* Style for table cells */
.privacy table td {
  padding: 10px;
  border: none; /* Remove inside borders */
  border-bottom: 1px solid #ccc; /* Add bottom border for row separation */
}

/* Style for links within table cells */
.privacy table td a {
  color: #0066cc;
  text-decoration: none;
}

/* Style for alternating row colors */
.privacy table tr:nth-child(odd) {
  background-color: #f5f5f5; /* Add background color for odd rows */
}

/* Style for success and error messages */
.errorWrap,
.succWrap {
  padding: 10px;
  text-align: center;
  margin-top: 20px;
}

.errorWrap {
  background-color: #ff9999;
  color: #ff0000;
}

.succWrap {
  background-color: #99ff99;
  color: #009900;
}




		</style>
	</head>

	<body>
		<!-- top-header -->
		<div class="top-header">
			<?php include('includes/header.php'); ?>
			<br><br>
			<!--- /banner-1 ---->
			<!--- privacy ---->
			<div class="privacy">
				<div class="container">
					<h3 class="wow fadeInDown animated animated text-center" data-wow-delay=".5s"
						style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">My Tour History</h3>
					<form name="chngpwd" method="post" onSubmit="return valid();">
						<?php if ($error) { ?>
							<div class="errorWrap"><strong>ERROR</strong>:
								<?php echo htmlentities($error); ?>
							</div>
						<?php } else if ($msg) { ?>
								<div class="succWrap"><strong>SUCCESS</strong>:
								<?php echo htmlentities($msg); ?>
								</div>
						<?php } ?>
						<p>
						<table  class="text-center new-table align-self-center align-items-center" width="100%"
							border="1" >
							<tr align="center">
								<th>#</th>
								<th>Booking Id</th>
								<th>Package Name</th>
								<th>JournryDate</th>
								<th>Booking Date</th>
								<th>Adds On</th>
								<th>No. Of Person</th>
								<th>price</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
							<?php

							$uemail = $_SESSION['login'];
							;
							$sql = "SELECT tblbooking.BookingId as bookid,tblbooking.PackageId as pkgid,tbltourpackages.PackageName as packagename,tblbooking.FromDate as fromdate,tblbooking.status as status,tblbooking.RegDate as regdate,tblbooking.CancelledBy as cancelby,tblbooking.UpdationDate as upddate,tblbooking.addsOn as addOn,tblbooking.child as child,tblbooking.adult as adult,tblbooking.senior as senior,tblbooking.total as price from tblbooking join tbltourpackages on tbltourpackages.PackageId=tblbooking.PackageId where UserEmail=:uemail";
							$query = $dbh->prepare($sql);
							$query->bindParam(':uemail', $uemail, PDO::PARAM_STR);
							$query->execute();
							$results = $query->fetchAll(PDO::FETCH_OBJ);
							$cnt = 1;
							if ($query->rowCount() > 0) {
								foreach ($results as $result) { ?>
									<tr align="center">
										<td>
											<?php echo htmlentities($cnt); ?>
										</td>
										<td>#BK
											<?php echo htmlentities($result->bookid); ?>
										</td>
										<td><a href="package-details.php?pkgid=<?php echo htmlentities($result->pkgid); ?>"><?php echo htmlentities($result->packagename); ?></a></td>
										<td>
											<?php echo htmlentities($result->fromdate); ?>
										</td>
										<td>
											<?php echo htmlentities($result->regdate); ?>
										</td>
										<td>
											<?php echo htmlentities($result->addOn); ?>
										</td>
										<td>
											<?php echo htmlentities($result->adult); ?> Adult,
											<?php echo htmlentities($result->child); ?> Child,
											<?php echo htmlentities($result->senior); ?> Senior
										</td>
										<td>
											<?php echo htmlentities($result->price); ?>
										</td>
										<td>
											<?php if ($result->status == 0) {
												echo "Pending";
											}
											if ($result->status == 1) {
												echo "Confirmed";
											}
											if ($result->status == 2 and $result->cancelby == 'u') {
												echo "Canceled by you at " . $result->upddate;
											}
											if ($result->status == 2 and $result->cancelby == 'a') {
												echo "Canceled by admin at " . $result->upddate;

											}
											?>
										</td>
										<?php if ($result->status == 2) {
											?>
											<td>Cancelled</td>
										<?php } else { ?>
											<td><a href="tour-history.php?bkid=<?php echo htmlentities($result->bookid); ?>"
													onclick="return confirm('Do you really want to cancel booking')">Cancel</a></td>
										<?php } ?>
									</tr>
									<?php $cnt = $cnt + 1;
								}
							} ?>
						</table>

						</p>
					</form>


				</div>
			</div>
			<br><br><br><br><br><br><br><br><br>
			<!--- /privacy ---->
			<!--- footer-top ---->
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
	</body>

	</html>
<?php } ?>
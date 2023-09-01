<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['login'])==0)
	{	
header('location:index.php');
}
else{
?>
<!DOCTYPE HTML>
<html>
<head>
<title>TourEase</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Tourism Management System In PHP" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
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
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
/>


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
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
/* new added css */
.privacy {
  padding: 5px;
}

.privacy .container {
  text-align: center;
}

.privacy h3 {
  margin-bottom: 5px;
  font-size: 24px;
  color: #333;
}

.privacy form {
  margin-top: 10px;
}

.privacy table {
  width: 100%;
  border-collapse: separate;
  border-spacing: 0;
}

.privacy th,
.privacy td {
  padding: 3px;
  text-align: center;
}

.privacy th {
  background-color: #333;
  color: #fff;
}

.privacy td a {
  color: #0066cc;
  text-decoration: none;
}

.privacy tr:nth-child(odd) {
  background-color: #f5f5f5; /* Add background color for odd rows */
}

/* Add space between rows for separation */
.privacy tr:not(:last-child) {
  margin-bottom: 5px;
}


		</style>
</head>
<body>
<!-- top-header -->
<div class="top-header">
<?php include('includes/header.php');?>
<br><br>
<!--- /banner-1 ---->
<!--- privacy ---->
<div class="privacy">
	<div class="container">
		<h3 class="wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">Issue Tickets</h3>
		<form name="chngpwd" method="post" onSubmit="return valid();">
		 <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
	<p>
	<table border="1" width="100%">
<tr align="center">
<th>#</th>
<th>Ticket Id</th>
<th>Issue</th>	
<th>Description</th>
<th>Admin Remark</th>
<th>Reg Date</th>
<th>Remark date</th>

</tr>
<?php 

$uemail=$_SESSION['login'];;
$sql = "SELECT * from tblissues where UserEmail=:uemail";
$query = $dbh->prepare($sql);
$query -> bindParam(':uemail', $uemail, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{	?>
<tr align="center">
<td ><?php echo htmlentities($cnt);?></td>
<td width="100">#TKT-<?php echo htmlentities($result->id);?></td>
<td><?php echo htmlentities($result->Issue);?></td>
<td width="300"><?php echo htmlentities($result->Description);?></td>
<td><?php echo htmlentities($result->AdminRemark);?></td>
<td width="100"><?php echo htmlentities($result->PostingDate);?></td>
<td width="100"><?php echo htmlentities($result->AdminremarkDate);?></td>
</tr>
<?php $cnt=$cnt+1; }} ?>
	</table>
		
			</p>
			</form>

		
	</div>
</div>
<!--- /privacy ---->
<!--- footer-top ---->
<br><br>
<!--- /footer-top ---->
<?php include('includes/footer.php');?>
<!-- signup -->
<?php include('includes/signup.php');?>			
<!-- //signu -->
<!-- signin -->
<?php include('includes/signin.php');?>			
<!-- //signin -->
<!-- write us -->
<?php include('includes/write-us.php');?>
</body>
</html>
<?php } ?>

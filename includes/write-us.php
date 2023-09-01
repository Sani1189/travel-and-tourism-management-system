<?php
error_reporting(0);
if(isset($_POST['submit']))
{
$issue=$_POST['issue'];
$description=$_POST['description'];
$email=$_SESSION['login'];
$sql="INSERT INTO  tblissues(UserEmail,Issue,Description) VALUES(:email,:issue,:description)";
$query = $dbh->prepare($sql);
$query->bindParam(':issue',$issue,PDO::PARAM_STR);
$query->bindParam(':description',$description,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$_SESSION['msg']="Info successfully submited ";
echo "<script type='text/javascript'> document.location = 'thankyou.php'; </script>";
}
else 
{
$_SESSION['msg']="Something went wrong. Please try again.";
echo "<script type='text/javascript'> document.location = 'thankyou.php'; </script>";
}
}
?>	

<!-- Add custon css -->
<style>
.modal-body .writ h4{
	font-size: 1.5em;
	color: white;
	text-align: center;
	margin-bottom: 1em;
	font-weight: 600;
	text-transform: uppercase;
	letter-spacing: 1px;
}
.descrip .special{
	width: 100%;
	height: 100px;
	padding: 0.5em 0.5em;
	margin-top: 6px;
	font-size: 1em;
	color: #fff;
	outline: none;
	border-raduis: 0.2em;
	background: #1c1c1c;
	border-radius: 0.2em;
	-webkit-appearance: none;
	
}

.na-me .frm-field option{
	color: #fff;
	font-size: 1em;
	border: none;
	outline: none;
	padding: 0.5em 0.5em;
	margin-top: 6px;
	font-size: 1em;
	color: #fff;
	outline: none;
	border: none;
	background: #1c1c1c;
	-webkit-appearance: none;
}

.na-me select{
	text-align: center;
	font-size: 1em;
	height: 40px;
	width: 35%;
	border: none;
	outline: none;
	padding: 0.5em 0.5em;
	margin-top: 6px;
	font-weight: 600;
	font-size: 1em;
	color: black;
	background: #56FFDA;
	border-radius: 2px;
	-webkit-appearance: none;
}


.sub-bn .subbtn{
	width: 50%;
	padding: 0.5em 0.5em;
	margin-left: 7%;
	margin-top: 5px;
	font-size: 1em;
	color: white;
	outline: none;
	border: none;
	
	background: #056E3D;
	border-radius: 5px;
	-webkit-appearance: none;
	cursor: pointer;
	font-weight: 700;
}
.sub-bn .subbtn:hover{
	background: #04AA6D;
}

</style>

	<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button style="color: white;" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
							<section>
							<form name="help" method="post">
								<div class="modal-body modal-spa">
									<div class="writ">
										<h4>HOW CAN WE HELP YOU?</h4>
											<ul>
												
												<li class="na-me">
													<select id="country" name="issue" class="frm-field required sect" required="">
														<option value="">Select Issue</option> 		
														<option value="Booking Issues">Booking Issues</option>
														<option value="Cancellation"> Cancellation</option>
														<option value="Refund">Refund</option>
														<option value="Other">Other</option>														
													</select>
												</li>
											
												<li class="descrip">
									<input class="special" type="text" placeholder="description"  name="Write Description" required="">
												</li>
													<div class="clearfix"></div>
											</ul>
											<div class="sub-bn">
												<form>
													<button type="submit" name="submit" class="subbtn">Submit</button>
												</form>
											</div>
									</div>
								</div>
								</form>
							</section>
					</div>
				</div>
			</div>
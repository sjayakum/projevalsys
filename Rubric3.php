<?php
include_once 'functions.php';
$conn_error="could not connect";

$mysql_host="localhost";
$mysql_user="root";	
$mysql_pass='';
$mysql_table="maintable";


mysql_connect($mysql_host,$mysql_user,$mysql_pass) or die($conn_error);

mysql_select_db('wp');

session_start();

$batchnum =	$_SESSION['batchnum'];



$query = "SELECT usn FROM `test1` WHERE batchno='$batchnum'";

if($query_run = mysql_query($query)){

	
	$a=array();	

	while($row = mysql_fetch_assoc($query_run))
	{


		array_push($a,"{$row['usn']}");

	} 


}



$x = sizeof($a);

if($x < 4){

	for($i=$x;$i<4;$i++){
		array_push($a,"NO USN");
	}


} 
if(isset($_POST['usn1f']) && isset($_POST['usn2f']) && isset($_POST['usn3f'])  && isset($_POST['usn4f']) ){
	$usn1f = $_POST['usn1f'];
	$usn2f = $_POST['usn2f'];
	$usn3f = $_POST['usn3f'];
	$usn4f = $_POST['usn4f'];


	if(!empty($usn1f) &&  !empty($usn2f) && !empty($usn3f)  ){



		$query = "UPDATE `test1` set crit3 ='$usn1f' where usn='$a[0]' ";
		if($query_run = mysql_query($query)){
		}

		$query = "UPDATE `test1` set crit3 ='$usn2f' where usn='$a[1]' ";
		if($query_run = mysql_query($query)){
		}

		$query = "UPDATE `test1` set crit3 ='$usn3f' where usn='$a[2]' ";
		if($query_run = mysql_query($query)){
		}

		$query = "UPDATE `test1` set crit3 ='$usn4f' where usn='$a[3]' ";
		if($query_run = mysql_query($query)){
		}

		echo "
		<script type='text/javascript'>
			alert('Updated');
		</script>
		";

	}



	if(!empty($usn1f) && empty($usn2f)&& empty($usn3f)&& empty($usn4f) ){
		$query = "UPDATE `test1` set crit3 ='$usn1f' where usn='$a[0]' ";
		if($query_run = mysql_query($query)){
		}	echo "
		<script type='text/javascript'>
			alert('Updated');
		</script>
		";
		
	}
	if(!empty($usn2f) && empty($usn1f)&& empty($usn3f)&& empty($usn4f) ){
		$query = "UPDATE `test1` set crit3 ='$usn2f' where usn='$a[1]' ";
		if($query_run = mysql_query($query)){
		}
		echo "
		<script type='text/javascript'>
			alert('Updated');
		</script>
		";
	}

	if(!empty($usn3f) && empty($usn2f)&& empty($usn1f)&& empty($usn4f) ){
		$query = "UPDATE `test1` set crit3 ='$usn3f' where usn='$a[2]' ";
		if($query_run = mysql_query($query)){
		}
		echo "
		<script type='text/javascript'>
			alert('Updated');
		</script>
		";
	}

	if(!empty($usn4f) && empty($usn2f)&& empty($usn3f)&& empty($usn1f) ){
		$query = "UPDATE `test1` set crit3 ='$usn4f' where usn='$a[3]' ";
		if($query_run = mysql_query($query)){
		}
		echo "
		<script type='text/javascript'>
			alert('Updated');
		</script>
		";
	}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <![endif]-->
   <!-- COLORS
   #13c0ba-->
   <!-- Fav and touch icons -->
   <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
   <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
   <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
   <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
   <link rel="shortcut icon" href="img/favicon.png">

   <script type="text/javascript" src="js/jquery.min.js"></script>
   <script type="text/javascript" src="js/bootstrap.min.js"></script>
   <script type="text/javascript" src="js/scripts.js"></script>

   <style type="text/css">
   	@import url(//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css);
   	body { padding-top: 60px; }
   	.nav.nav-justified > li > a { position: relative; }
   	.nav.nav-justified > li > a:hover,
   	.nav.nav-justified > li > a:focus { background-color: transparent; }
   	.nav.nav-justified > li > a > .quote {
   		position: absolute;
   		left: 0px;
   		top: 0;
   		opacity: 0;
   		width: 30px;
   		height: 30px;
   		padding: 5px;
   		background-color: #1370c0; 
   		border-radius: 15px;
   		color: #fff;  
   	}
   	.nav.nav-justified > li.active > a > .quote { opacity: 1; }
   	.nav.nav-justified > li > a > img { box-shadow: 0 0 0 5px #1370c0; } 
   	.nav.nav-justified > li > a > img { 
   		max-width: 100%; 
   		opacity: .3; 
   		-webkit-transform: scale(.8,.8);
   		transform: scale(.8,.8);
   		-webkit-transition: all 0.3s 0s cubic-bezier(0.175, 0.885, 0.32, 1.275);
   		transition: all 0.3s 0s cubic-bezier(0.175, 0.885, 0.32, 1.275);
   	}
   	.nav.nav-justified > li.active > a > img,
   	.nav.nav-justified > li:hover > a > img,
   	.nav.nav-justified > li:focus > a > img { 
   		opacity: 1; 
   		-webkit-transform: none;
   		transform: none;
   		-webkit-transition: all 0.3s 0s cubic-bezier(0.175, 0.885, 0.32, 1.275);
   		transition: all 0.3s 0s cubic-bezier(0.175, 0.885, 0.32, 1.275);
   	}
   	.tab-pane .tab-inner { padding: 30px 0 20px; }

   	@media (min-width: 768px) {
   		.nav.nav-justified > li > a > .quote {
   			left: auto;
   			top: auto;
   			right: 20px;
   			bottom: 0px;
   		}  
   	}

   	.msg {
   		background: #fefefe;
   		color: #666666;
   		font-weight: bold;
   		font-size: small;
   		padding: 12px;
   		padding-left: 16px;
   		border-top: solid 3px #CCCCCC;
   		border-radius: 5px;
   		margin-bottom: 10px;
   		-webkit-box-shadow: 0 10px 10px -5px rgba(0,0,0,.08);
   		-moz-box-shadow: 0 10px 10px -5px rgba(0,0,0,.08);
   		box-shadow: 0 10px 10px -5px rgba(0,0,0,.08);
   	}
   	.msg-clear {
   		border-color: #fefefe;
   		-webkit-box-shadow: 0 7px 10px -5px rgba(0,0,0,.15);
   		-moz-box-shadow: 0 7px 10px -5px rgba(0,0,0,.15);
   		box-shadow: 0 7px 10px -5px rgba(0,0,0,.15);
   	}
   	.msg-info {
   		border-color: #b8dbf2;
   	}
   	.msg-success {
   		border-color: #cef2b8;
   	}
   	.msg-warning {
   		border-color: rgba(255,165,0,.5);
   	}
   	.msg-danger {
   		border-color: #ec8282;
   	}
   	.msg-primary {
   		border-color: #9ca6f1;
   	}
   	.msg-magick {
   		border-color: #e0b8f2;
   	}
   	.msg-info-text {
   		color: #39b3d7;
   	}
   	.msg-success-text {
   		color: #80d651;
   	}
   	.msg-warning-text {
   		color: #db9e34;
   	}
   	.msg-danger-text {
   		color: #c9302c;
   	}
   	.msg-primary-text {
   		color: rgba(47,106,215,.9);
   	}
   	.msg-magick-text {
   		color: #bb39d7;
   	}

   	.btn-gray {
   		color:#333333;
   		background-color:lightgray;
   		border-color: #cccccc;
   	}
   	.btn-gray:hover,
   	.btn-gray:focus,
   	.btn-gray:active,
   	.btn-gray.active,
   	.open .dropdown-toggle.btn-gray {
   		color: #428bca;
   		background-color: #ebebeb;
   		border-color: #adadad;
   	}
   </style>
   <head>
   	<title> RUBRIC 3 </title>
   </head>
   <body style="background-color:#031626">
   	<?php if (login_check() == true) : ?>
   		<div class="container">
   			<div class="col-md-12">
   				<h1 align="center" style="color:lightgray;"> RUBRIC 3 </h1>
   				<div style="font-size:18px">
   					<table class="table-striped" align="center" cellpadding="20">	
   						<tr align="center">
   							<td><b> Criteria Three: Implementation </b></td>
   							<td><b> Marks </b></td>
   						</tr>

   						<tr align="center" style="color:lightgray">
   							<td> Completed implementation for all the design issues    </td>
   							<td> 9-10 </td>
   						</tr>

   						<tr align="center">
   							<td> Completed implementation for the identified problem   </td>
   							<td> 7-8 </td>
   						</tr>

   						<tr align="center" style="color:lightgray">
   							<td> Able to test the result with the implementation    </td>
   							<td> 5-6 </td>
   						</tr>

   						<tr align="center">
   							<td> Partially completed the implementation   </td>
   							<td> 3-4 </td>
   						</tr>

   						<tr align="center" style="color:lightgray"> 
   							<td> Not completed the implementation    </td>
   							<td> 1-2 </td>
   						</tr>


   					</table>

   					<form method="POST" action="Rubric3.php">

   						<h1 align="center" style="color:lightgray"> ENTER MARKS </h1> 
   						<div class="[ container text-center ]">
   							<div class="[ row ]">
   								<div class="[ col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 ]" role="tabpanel">
   									<div class="[ col-xs-4 col-sm-12 ]">
   										<table class="table" align="center" cellpadding="20">

   											<tr align="center"> 
   												<td style="color:lightgray"><b> USN </b></td>
   												<td style="color:lightgray"><b> MARKS </b></td>
   											</tr>

   											<tr align="center">
   												<td> <input class="form-control" type="text"  id="usn1" maxlength="10" readonly="readonly" value="<?php echo $a[0] ?>" /></td>

   												<td> <input class="form-control" type="text" size=5 maxlength=2 name="usn1f" id="usn1m" onchange="chk('usn1m');" /></td>

   											</tr>


   											<tr align="center">
   												<td> <input class="form-control" type="text" id="usn2" maxlength="10" readonly="readonly" value="<?php echo $a[1] ?>" /></td>

   												<td> <input class="form-control" type="text" size=5 maxlength=2 name="usn2f" id="usn2m" onchange="chk('usn2m');"/></td>
   											</tr>



   											<tr align="center">
   												<td> <input class="form-control" type="text" id="usn3" maxlength="10" readonly="readonly" value="<?php echo $a[2] ?>" /></td>

   												<td> <input class="form-control" type="text" size=5 maxlength=2 name="usn3f" id="usn3m" onchange="chk('usn3m');" /></td>
   											</tr>

   											<tr align="center">
   												<td> <input class="form-control" type="text" id="usn4" maxlength="10" readonly="readonly" value="<?php echo $a[3] ?>" /></td>

   												<td> <input class="form-control" type="text" size=5 maxlength=2 name="usn4f" id="usn4m" onchange="chk('usn4m');" /></td>
   											</tr>


   										</table>

   										<br />

   									</table>

   									<input class="btn btn-primary btn btn-block" type="submit" value="Submit Marks">
   								</div></div></div></div>
   								<br/>
   							</form>
   							<div class="[ container text-center ]">
   								<div class="[ row ]">
   									<div class="col-md-12">
   										<ul class="pagination pagination-lg" align="center">
   											<li><a href="Rubric2.php">&laquo;</a></li>
   											<li><a href="FirstTable.php"> Main Table</a></li>
   											<li><a href="Rubric1.php">1</a></li>
   											<li><a href="Rubric2.php">2</a></li>
   											<li class="active"><a href="Rubric3.php">3</a></li>
   											<li><a href="Rubric4.php">4</a></li>
   											<li><a href="Rubric5.php">5</a></li>
   											<li><a href="Rubric6.php">6</a></li>
   											<li><a href="Rubric7.php">7</a></li>
   											<li><a href="Rubric8.php">8</a></li>
   											<li><a href="Rubric9.php">9</a></li>
   											<li><a href="Rubric10.php">10</a></li>
   											<li><a href="Rubric11.php">11</a></li>
   											<li><a href="Rubric12.php">12</a></li>
   											<li><a href="Rubric4.php">&raquo;</a></li>
   										</ul>	
   									</div>
   								</div>
   							</div>


   							<script type="text/javascript">
   								function chk(ele)
   								{
   									var dom=document.getElementById(ele);
   									if(dom.value > 10 || dom.value == 0)
   									{
   										alert("Please enter a value in the range 1-10 \n Click OK to go back and enter correct value" );
   										dom.focus();
   										dom.select();
   										return false;
   									}
   									else
   										return true;
   								}
   							</script>
   						<?php else : ?>
   							<div class="alert alert-danger" role="alert">
   								<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
   								<span class="sr-only">Error:</span>
   								You are not authorized to access this page. Please <a href="index.php">login</a>
   							</div>
   						<?php endif; ?>
   					</body>

   					</html>
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



	if(!empty($usn1f) &&  !empty($usn2f) && !empty($usn3f) ){

		
		$query = "UPDATE `test1` set crit4 ='$usn1f' where usn='$a[0]' ";
		if($query_run = mysql_query($query)){
		}

		$query = "UPDATE `test1` set crit4 ='$usn2f' where usn='$a[1]' ";
		if($query_run = mysql_query($query)){
		}

		$query = "UPDATE `test1` set crit4 ='$usn3f' where usn='$a[2]' ";
		if($query_run = mysql_query($query)){
		}

		$query = "UPDATE `test1` set crit4 ='$usn4f' where usn='$a[3]' ";
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
   <head><title>Rubric 4</title>
   	
   	

   	<script type="text/javascript">


   		function calcu(){

   			

   			usn1total.value = Number(usn1m1.value) + Number(usn1m2.value) + Number(usn1m3.value) + Number(usn1m4.value) + Number(usn1m5.value);

   			usn2total.value = Number(usn2m1.value) + Number(usn2m2.value) + Number(usn2m3.value) + Number(usn2m4.value) + Number(usn2m5.value);

   			usn3total.value = Number(usn3m1.value) + Number(usn3m2.value) + Number(usn3m3.value) + Number(usn3m4.value) + Number(usn3m5.value);


   			usn4total.value = Number(usn4m1.value) + Number(usn4m2.value) + Number(usn4m3.value) + Number(usn4m4.value) + Number(usn4m5.value);

   			usn1f.value = (Number(usn1total.value)/5).toFixed(2);

   			usn2f.value = (Number(usn2total.value)/5).toFixed(2);

   			usn3f.value = (Number(usn3total.value)/5).toFixed(2);

   			usn4f.value = (Number(usn4total.value)/5).toFixed(2);



   		}



   	</script>
   </head>
   <body style="background-color:#031626">
   	<?php if (login_check() == true) : ?>
   		<div class="container">
   			<div class="col-md-12">
   				<h1 align="center" style="color:lightgray;"> RUBRIC 4 </h1>
   				<div style="font-size:18px">
   					<table class="table-striped" align="center" cellpadding="20">
   						<tr align="center">
   							<td rowspan="1">Criteria 4 : Group Participation</td>
   							<td colspan="3">Level of Participation</td>
   						</tr>

   						<tr style="color:lightgray" align="center">
   							<td></td>
   							<td>Distinguished (2)</td>
   							<td>Basic (1)</td>
   							<td>Unacceptable(0)</td>
   						</tr>

   						<tr align="center">
   							<td>Workload</td>
   							<td>Did a full share of the work or more;<br/>
   								knows what needs to be done and does it;<br/>
   								volunteers to help others.</td>
   								<td>Did almost as much work as others;<br/>
   									seldom asks for help.</td>
   									<td>Did less work than others; doesn't<br/>
   										ask for help.</td>
   										
   									</tr>

   									<tr  style="color:lightgray" align="center">
   										<td>Getting Organized</td>
   										<td>Took the initiative proposing meeting<br/>
   											times and getting group organized.</td>
   											<td>Worked agreeably with partner(s) concerning<br/>
   												times and places to meet</td>
   												<td>Did not meet partner(s) at agreed times and<br/>
   													place.</td>
   												</tr>

   												<tr align="center">
   													<td>Participation in Discussions </td>
   													<td>Provided many good ideas; inspired others; clearly<br/>
   														communicated ideas, needs, and feelings.</td>
   														<td>Participated in discussions; on some occasions, made<br/>
   															suggestions. </td>
   															<td>Listened mainly; Rarely spoke up, and ideas were off<br/>
   																the mark.</td>
   															</tr>

   															<tr  style="color:lightgray" align="center">
   																<td>Meeting Deadlines</td>
   																<td>Completed assigned work ahead of time. </td>
   																<td>Completed assigned work on time.</td>
   																<td>Needed much reminding; submission was late.</td>
   															</tr>
   															<tr align="center">
   																<td>Showing up for Meetings Score</td>
   																<td>Showed up for meetings punctually, sometimes<br/>
   																	ahead of time. </td>
   																	<td>Showed up for meetings on time.</td>
   																	<td>Showed up extremely late; no excuse offered. </td>
   																</tr>

   															</table>
   															<br/><br/><br/>
   															<h1 style="color:lightgray" align="center">Enter Your Marks</h1>
   															<form method="POST" action="Rubric4.php">
   																<table class="table" >
   																	<tr  style="color:lightgray" align="center">
   																		<td rowspan="2"><br/><b>Criteria 4 : Group Participation</b></td>
   																		<td colspan="4"><b>USN</b></td>
   																	</tr>
   																	<tr>
   																		<td> <input class="form-control" type="text"  id="usn1" maxlength="10" readonly="readonly" value="<?php echo $a[0] ?>" /></td>
   																		<td> <input class="form-control" type="text"  id="usn2" maxlength="10" readonly="readonly" value="<?php echo $a[1] ?>" /></td>
   																		<td> <input class="form-control" type="text"  id="usn3" maxlength="10" readonly="readonly" value="<?php echo $a[2] ?>" /></td>
   																		<td> <input class="form-control" type="text"  id="usn4" maxlength="10" readonly="readonly" value="<?php echo $a[3] ?>" /></td>

   																	</tr>
   																	<tr style="color:lightgray" align="center"> 
   																		<td>Workload</td>
   																		<td>
   																			<select class="form-control" id="usn1m1" width="100%">
   																				<option value="0">0</option>
   																				<option value="1">1</option>
   																				<option value="2">2</option>
   																			</select>
   																			
   																		</td>
   																		<td>
   																			<select class="form-control" id="usn2m1" width="100%">
   																				<option value="0">0</option>
   																				<option value="1">1</option>
   																				<option value="2">2</option>
   																			</select>
   																			
   																		</td>
   																		<td>

   																			<select class="form-control" id="usn3m1" width="100%">
   																				<option value="0">0</option>
   																				<option value="1">1</option>
   																				<option value="2">2</option>
   																			</select>
   																		</td>
   																		<td>
   																			
   																			<select class="form-control" id="usn4m1" width="100%">
   																				<option value="0">0</option>
   																				<option value="1">1</option>
   																				<option value="2">2</option>
   																			</select>
   																		</td>


   																	</tr>
   																	<tr style="color:lightgray" align="center"> 
   																		<td style="color:lightgray" >Getting Organized
   																		</td>
   																		<td>

   																			<select class="form-control" id="usn1m2" width="100%">
   																				<option value="0">0</option>
   																				<option value="1">1</option>
   																				<option value="2">2</option>
   																			</select>
   																		</td>
   																		<td>

   																			<select class="form-control" id="usn2m2" width="100%">
   																				<option value="0">0</option>
   																				<option value="1">1</option>
   																				<option value="2">2</option>
   																			</select>
   																		</td>
   																		<td>
   																			<select class="form-control" id="usn3m2" width="100%">
   																				<option value="0">0</option>
   																				<option value="1">1</option>
   																				<option value="2">2</option>
   																			</select>
   																		</td>
   																		<td>
   																			<select class="form-control" id="usn4m2" width="100%">
   																				<option value="0">0</option>
   																				<option value="1">1</option>
   																				<option value="2">2</option>
   																			</select>
   																		</td>


   																	</tr>
   																	<tr style="color:lightgray" align="center"> 
   																		<td style="color:lightgray" >Participation in Discussions
   																		</td>
   																		<td>
   																			<select class="form-control" id="usn1m3" width="100%">
   																				<option value="0">0</option>
   																				<option value="1">1</option>
   																				<option value="2">2</option>
   																			</select>
   																		</td>
   																		<td>
   																			<select class="form-control" id="usn2m3" width="100%">
   																				<option value="0">0</option>
   																				<option value="1">1</option>
   																				<option value="2">2</option>
   																			</select>
   																		</td>
   																		<td>
   																			<select class="form-control" id="usn3m3" width="100%">
   																				<option value="0">0</option>
   																				<option value="1">1</option>
   																				<option value="2">2</option>
   																			</select>
   																		</td>
   																		<td>
   																			<select class="form-control" id="usn4m3" width="100%">
   																				<option value="0">0</option>
   																				<option value="1">1</option>
   																				<option value="2">2</option>
   																			</select>
   																		</td>
   																	</tr>
   																	<tr style="color:lightgray" align="center"> 
   																		<td style="color:lightgray">Meeting Deadlines
   																		</td>
   																		<td>
   																			<select class="form-control" id="usn1m4" width="100%">
   																				<option value="0">0</option>
   																				<option value="1">1</option>
   																				<option value="2">2</option>
   																			</select>
   																		</td>
   																		<td>
   																			<select class="form-control" id="usn2m4" width="100%">
   																				<option value="0">0</option>
   																				<option value="1">1</option>
   																				<option value="2">2</option>
   																			</select>
   																		</td>
   																		<td>
   																			<select class="form-control" id="usn3m4" width="100%">
   																				<option value="0">0</option>
   																				<option value="1">1</option>
   																				<option value="2">2</option>
   																			</select>
   																		</td>
   																		<td>
   																			<select class="form-control" id="usn4m4" width="100%">
   																				<option value="0">0</option>
   																				<option value="1">1</option>
   																				<option value="2">2</option>
   																			</select>
   																		</td>
   																	</tr>
   																	<tr style="color:lightgray" align="center"> 
   																		<td style="color:lightgray">Showing Up For Meetings Score
   																		</td>
   																		<td>
   																			<select class="form-control" id="usn1m5" width="100%">
   																				<option value="0">0</option>
   																				<option value="1">1</option>
   																				<option value="2">2</option>
   																			</select>
   																		</td>
   																		<td>
   																			<select class="form-control" id="usn2m5" width="100%">
   																				<option value="0">0</option>
   																				<option value="1">1</option>
   																				<option value="2">2</option>
   																			</select>
   																		</td>
   																		<td>
   																			<select class="form-control" id="usn3m5" width="100%">
   																				<option value="0">0</option>
   																				<option value="1">1</option>
   																				<option value="2">2</option>
   																			</select>
   																		</td>
   																		<td>
   																			<select class="form-control" id="usn4m5" width="100%">
   																				<option value="0">0</option>
   																				<option value="1">1</option>
   																				<option value="2">2</option>
   																			</select>
   																		</td>
   																	</tr>
   																	<tr style="color:lightgray" align="center"> 
   																		<td style="color:lightgray" >Total
   																		</td>
   																		<td>
   																			<input class="form-control" type="text" id="usn1total" readonly="readonly">
   																		</td>
   																		<td>
   																			<input class="form-control" type="text" id="usn2total" readonly="readonly"/>
   																		</td>
   																		<td>
   																			<input class="form-control" type="text" id="usn3total" readonly="readonly"/>
   																		</td>
   																		<td>
   																			<input class="form-control" type="text" id="usn4total" readonly="readonly"/>
   																		</td>
   																	</tr>
   																	<tr style="color:lightgray" align="center"> 
   																		<td style="color:lightgray">Final Marks = Total/5
   																		</td>
   																		<td>
   																			<input class="form-control" type="text" name="usn1f" id="usn1f" readonly="readonly"/>
   																		</td>
   																		<td>
   																			<input class="form-control" type="text" name="usn2f" id="usn2f" readonly="readonly"/>
   																		</td>
   																		<td>
   																			<input class="form-control" type="text" name="usn3f" id="usn3f" readonly="readonly"/>
   																		</td>
   																		<td>
   																			<input class="form-control" type="text" name="usn4f"  id="usn4f" readonly="readonly"/>
   																		</td>
   																	</tr>

   																</table>
   																<br />
   																
   																<div class="[ container text-center ]">
   																	<div class="[ row ]">
   																		<div class="[ col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 ]" role="tabpanel">
   																			<div class="[ col-xs-4 col-sm-12 ]">
   																				<input class="btn btn-info btn btn-block" type="button" value="Calculate Marks" onclick="calcu();" />
   																				<input class="btn btn-primary btn btn-block" type="submit" value="Submit Marks">
   																			</div>
   																		</div>
   																	</div>
   																</div>
   																
   															</form>
   															<script type="text/javascript">

   																usn1m1 = document.getElementById("usn1m1");
   																usn1m2 = document.getElementById("usn1m2");
   																usn1m3 = document.getElementById("usn1m3");
   																usn1m4 = document.getElementById("usn1m4");
   																usn1m5 = document.getElementById("usn1m5");


   																usn2m1 = document.getElementById("usn2m1");
   																usn2m2 = document.getElementById("usn2m2");
   																usn2m3 = document.getElementById("usn2m3");
   																usn2m4 = document.getElementById("usn2m4");
   																usn2m5 = document.getElementById("usn2m5");


   																usn3m1 = document.getElementById("usn3m1");
   																usn3m2 = document.getElementById("usn3m2");
   																usn3m3 = document.getElementById("usn3m3");
   																usn3m4 = document.getElementById("usn3m4");
   																usn3m5 = document.getElementById("usn3m5");


   																usn4m1 = document.getElementById("usn4m1");
   																usn4m2 = document.getElementById("usn4m2");
   																usn4m3 = document.getElementById("usn4m3");
   																usn4m4 = document.getElementById("usn4m4");
   																usn4m5 = document.getElementById("usn4m5");


   																usn1total = document.getElementById("usn1total");
   																usn2total = document.getElementById("usn2total");
   																usn3total = document.getElementById("usn3total");
   																usn4total = document.getElementById("usn4total");

   																usn1f = document.getElementById("usn1f");
   																usn2f = document.getElementById("usn2f");
   																usn3f = document.getElementById("usn3f");
   																usn4f = document.getElementById("usn4f");
   															</script>
   															<div class="[ container text-center ]">
   																<div class="[ row ]">
   																	<div class="col-md-12">
   																		<ul class="pagination pagination-lg" align="center">
   																			<li><a href="Rubric3.php">&laquo;</a></li>
   																			<li><a href="FirstTable.php"> Main Table</a></li>
   																			<li><a href="Rubric1.php">1</a></li>
   																			<li><a href="Rubric2.php">2</a></li>
   																			<li><a href="Rubric3.php">3</a></li>
   																			<li class="active"><a href="Rubric4.php">4</a></li>
   																			<li><a href="Rubric5.php">5</a></li>
   																			<li><a href="Rubric6.php">6</a></li>
   																			<li><a href="Rubric7.php">7</a></li>
   																			<li><a href="Rubric8.php">8</a></li>
   																			<li><a href="Rubric9.php">9</a></li>
   																			<li><a href="Rubric10.php">10</a></li>
   																			<li><a href="Rubric11.php">11</a></li>
   																			<li><a href="Rubric12.php">12</a></li>
   																			<li><a href="Rubric5.php">&raquo;</a></li>
   																		</ul>	
   																	</div>
   																</div>
   															</div>
   														<?php else : ?>
   															<div class="alert alert-danger" role="alert">
   																<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
   																<span class="sr-only">Error:</span>
   																You are not authorized to access this page. Please <a href="index.php">login</a>
   															</div>
   														<?php endif; ?>
   													</body>
   													</html>
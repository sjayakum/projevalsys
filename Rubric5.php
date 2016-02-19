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

	if(!empty($usn1f) &&  !empty($usn2f) && !empty($usn3f) && !empty($usn4f) ){


		$query = "UPDATE `test1` set crit5 ='$usn1f' where usn='$a[0]' ";
		if($query_run = mysql_query($query)){
		}

		$query = "UPDATE `test1` set crit5 ='$usn2f' where usn='$a[1]' ";
		if($query_run = mysql_query($query)){
		}

		$query = "UPDATE `test1` set crit5 ='$usn3f' where usn='$a[2]' ";
		if($query_run = mysql_query($query)){
		}

		$query = "UPDATE `test1` set crit5 ='$usn4f' where usn='$a[3]' ";
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





<html>
<head>
	<title> RUBRIC 5 </title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script type="text/javascript">
		function calcAvg (){
			domusn1m1 = document.getElementById("usn1m1");
			domusn1m2 = document.getElementById("usn1m2");
			domusn1m3 = document.getElementById("usn1m3");

			domusn2m1 = document.getElementById("usn2m1");
			domusn2m2 = document.getElementById("usn2m2");
			domusn2m3 = document.getElementById("usn2m3");


			domusn3m1 = document.getElementById("usn3m1");
			domusn3m2 = document.getElementById("usn3m2");
			domusn3m3 = document.getElementById("usn3m3");


			domusn4m1 = document.getElementById("usn4m1");
			domusn4m2 = document.getElementById("usn4m2");
			domusn4m3 = document.getElementById("usn4m3");

			domusn1f = document.getElementById("usn1f");
			domusn2f = document.getElementById("usn2f");
			domusn3f = document.getElementById("usn3f");
			domusn4f = document.getElementById("usn4f");


			domusn1f.value = ((Number(domusn1m1.value) + Number(domusn1m2.value) + Number(domusn1m3.value) )/3);
			domusn2f.value = ((Number(domusn2m1.value) + Number(domusn2m2.value) + Number(domusn2m3.value) )/3);
			domusn3f.value = ((Number(domusn3m1.value) + Number(domusn3m2.value) + Number(domusn4m3.value) )/3);
			domusn4f.value = ((Number(domusn4m1.value) + Number(domusn4m2.value) + Number(domusn4m3.value) )/3);





		}
	</script>
</head>

<body style="background-color:#031626; ">
	<?php if (login_check() == true) : ?>

		<div class="container">
			<div class="col-md-12">
				<br/><br/>
				<h3  style="color:lightgray;" align="center">Team Work (Peer Review) </h3>
				<form method="POST" action="Rubric5.php">

					<table class="table" align="center" cellpadding="20">
						<tr align="center" class="info">
							<td  style="color:lightgray;"> USN
							</td>
							<td  style="color:lightgray;"> Teammate -1
							</td>
							<td  style="color:lightgray;"> Teammate -2 
							</td>
							<td  style="color:lightgray;"> Teammate -3 
							</td>
							<td  style="color:lightgray;"> Average
							</td>
						</tr>

						<tr>
							<td><input type="text" class="form-control" id="usn1" disabled="disabled" value="<?php echo $a[0] ?>" >
							</td>
							<td><input type="text" class="form-control" id="usn1m1" onchange="chk('usn1m1');">
							</td>
							<td> <input type="text" class="form-control" id="usn1m2" onchange="chk('usn1m2');">
							</td>
							<td><input type="text" class="form-control" id="usn1m3" onchange="chk('usn1m3');" >
							</td>
							<td><input type="text" class="form-control" name="usn1f" id="usn1f">
							</td>

						</tr>

						<tr>
							<td><input type="text" class="form-control" id="usn2" disabled="disabled" value="<?php echo $a[1] ?>" >
							</td>
							<td><input type="text" class="form-control" id="usn2m1" onchange="chk('usn2m1');">
							</td>
							<td> <input type="text" class="form-control" id="usn2m2" onchange="chk('usn2m2');"   >
							</td>
							<td><input type="text" class="form-control" id="usn2m3" onchange="chk('usn2m3');" >
							</td>
							<td><input type="text" class="form-control" name="usn2f" id="usn2f">
							</td>
						</tr>	
						<tr>
							<td><input type="text" class="form-control" id="usn3" disabled="disabled" value="<?php echo $a[2] ?>" >
							</td>
							<td><input type="text" class="form-control" id="usn3m1"  onchange="chk('usn3m1');"  >
							</td>
							<td> <input type="text" class="form-control" id="usn3m2" onchange="chk('usn3m2');">
							</td>
							<td><input type="text" class="form-control" id="usn3m3" onchange="chk('usn3m3');">
							</td>
							<td><input type="text" class="form-control" name="usn3f" id="usn3f">
							</td>
						</tr>

						<tr>
							<td><input type="text" class="form-control" id="usn4" disabled="disabled" value="<?php echo $a[3] ?>" >
							</td>
							<td><input type="text" class="form-control" id="usn4m1" onchange="chk('usn4m1');" >
							</td>
							<td> <input type="text" class="form-control" id="usn4m2" onchange="chk('usn4m2');" >  
							</td>
							<td><input type="text" class="form-control" id="usn4m3" onchange="chk('usn4m3');" >
							</td>
							<td><input type="text" class="form-control" name="usn4f" id="usn4f">
							</td>
						</tr>
					</table>
					<br />
					<div class="[ container text-center ]">
						<div class="[ row ]">
							<div class="[ col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 ]" role="tabpanel">
								<div class="[ col-xs-4 col-sm-12 ]">
									<input class="btn btn-info btn btn-block" type="button" value="Calculate Avg" onclick="calcAvg();"> 
									<input class="btn btn-primary btn btn-block" type="submit" value="Submit Marks">
								</div>
							</div>
						</div>
					</div>
				</form>

				<br />
				<br />
				<div class="[ container text-center ]">
					<div class="[ row ]">
						<div class="col-md-12">
							<ul class="pagination pagination-lg" align="center">
								<li><a href="Rubric4.php">&laquo;</a></li>
								<li><a href="FirstTable.php"> Main Table</a></li>
								<li><a href="Rubric1.php">1</a></li>
								<li><a href="Rubric2.php">2</a></li>
								<li><a href="Rubric3.php">3</a></li>
								<li><a href="Rubric4.php">4</a></li>
								<li class="active"><a href="Rubric5.php">5</a></li>
								<li><a href="Rubric6.php">6</a></li>
								<li><a href="Rubric7.php">7</a></li>
								<li><a href="Rubric8.php">8</a></li>
								<li><a href="Rubric9.php">9</a></li>
								<li><a href="Rubric10.php">10</a></li>
								<li><a href="Rubric11.php">11</a></li>
								<li><a href="Rubric12.php">12</a></li>
								<li><a href="Rubric6.php">&raquo;</a></li>
							</ul>
						</div>
					</div>
				</div>
				<script type="text/javascript">
					function chk(ele)
					{
						var dom=document.getElementById(ele);
						if(dom.value > 2 || dom.value < 0 )
						{
							alert("Please enter a value in the range 0-2 \n Click OK to go back and enter correct value" );
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

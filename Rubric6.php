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


		$query = "UPDATE `test1` set crit6 ='$usn1f' where usn='$a[0]' ";
		if($query_run = mysql_query($query)){
		}

		$query = "UPDATE `test1` set crit6 ='$usn2f' where usn='$a[1]' ";
		if($query_run = mysql_query($query)){
		}

		$query = "UPDATE `test1` set crit6 ='$usn3f' where usn='$a[2]' ";
		if($query_run = mysql_query($query)){
		}

		$query = "UPDATE `test1` set crit6 ='$usn4f' where usn='$a[3]' ";
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
<head><link href="css/bootstrap.min.css" rel="stylesheet"></head>
<body style="background-color:#031626">
	<?php if (login_check() == true) : ?>
		<div class="container">
			<div class="col-md-12">
				<h1 align="center" style="color:lightgray;"><br/>RUBRIC 6<br/></h1>
				<table class="table-striped " align="center" cellpadding="20">

					<tr align="center" style="background:darkgray;">
						<td style="font-size:18px;"><b>Criteria 6 : Testing & results, Conclusions</b></td>
						<td style="font-size:18px;"><b>Marks</b></td>
					</tr>
					<tr align="center" >
						<td style="color:lightgray; font-size:18px;">Clearly communicated test results and included high quality charts,<br/>
							tables, graphs, images, etc. to assist in understanding the interpretation<br/>
							and closes with a strong conclusion.</td>
							<td align="center" style="color:lightgray; font-size:18px;"><br/>5</td>

						</tr>
						<tr align="center" class="success">
							<td style="font-size:18px;">Clearly communicated test results and interpreted results in light of<br/>
								proposed research question and literature review and closes with a strong<br/>
								conclusion.</td>
								<td align="center" style="font-size:18px;"><br/>4</td>
							</tr>

							<tr align="center" >
								<td  style="color:lightgray; font-size:18px;">Communicated research results and adequately interpreted results in<br/>
									light of proposed research question and literature review and closes with<br/>
									a conclusion.</td>
									<td align="center" style="color:lightgray; font-size:18px;"><br/>3</td>
								</tr>
								<tr align="center" class="success">
									<td  style="font-size:18px;">Lacked clarity in communicating research results and inadequately<br/>
										interpreted results in light of proposed research question and literature<br/>
										review closes with a conclusion</td>
										<td align="center" style="font-size:18px;"><br/>2</th>
										</tr>
										<tr align="center" >
											<td  style="color:lightgray; font-size:18px;">Unclear communication of research results and inadequately interpreted<br/>
												results in light of proposed research question and literature review closes<br/>
												with a weak conclusion.</td>
												<td align="center" style="color:lightgray; font-size:18px;"><br/>1</td>
											</tr>
										</table>
									</div>
								</div>
								<br/><br/>
								<form method="POST" action="Rubric6.php">
									<div class="[ container text-center ]">
										<div class="[ row ]">
											<div class="[ col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 ]" role="tabpanel">
												<div class="[ col-xs-4 col-sm-12 ]">
													<h2 align="center" style="color:lightgray;"> ENTER MARKS </h2>
													<table class="table" align="center">
														<tr align="center" class="info"> 
															<td style="color:lightgray"> <b>USN</b> </td>
															<td style="color:lightgray"> <b>MARKS</b> </td>
														</tr>
														<tr>
															<td> <input class="form-control" type="text"  id="usn1" maxlength="10" readonly="readonly" value="<?php echo $a[0] ?>" /></td>
															<td> 
																<select class="form-control " name="usn1f">
																	<option value="1">1</option>
																	<option value="2">2</option>
																	<option value="3">3</option>
																	<option value="4">4</option>
																	<option value="5">5</option>
																</select>
															</td>
														</tr>
														<tr>
															<td> <input class="form-control" type="text"  id="usn2" maxlength="10" readonly="readonly" value="<?php echo $a[1] ?>" /></td>
															<td> 
																<select class="form-control" name="usn2f">
																	<option value="1">1</option>
																	<option value="2">2</option>
																	<option value="3">3</option>
																	<option value="4">4</option>
																	<option value="5">5</option>
																</select>
															</td>
														</tr>
														<tr>
															<td> <input class="form-control" type="text"  id="usn3" maxlength="10" readonly="readonly" value="<?php echo $a[2] ?>" /></td>
															<td> 
																<select class="form-control" name="usn3f">
																	<option value="1">1</option>
																	<option value="2">2</option>
																	<option value="3">3</option>
																	<option value="4">4</option>
																	<option value="5">5</option>
																</select>
															</td>
														</tr>
														<tr>
															<td> <input class="form-control" type="text"  id="usn4" maxlength="10" readonly="readonly" value="<?php echo $a[3] ?>" /></td>
															<td> 
																<select class="form-control" name="usn4f">
																	<option value="1">1</option>
																	<option value="2">2</option>
																	<option value="3">3</option>
																	<option value="4">4</option>
																	<option value="5">5</option>
																</select>
															</td>
														</tr>


													</table>

													<input type="submit" class="btn btn-primary btn btn-block" value="Submit marks"><br/>

												</form>

											</div>
										</div>


										<br/><br/>
						<!--
						<a href="Rubric5.php">Click Here to go to Previous Rubric</a><br/>
						<a href="FirstRubric.php">Click Here to go to Marks Split-Up</a><br/>
						<a href="Rubric7.php">Click Here to go to Next Rubric</a> 


						DARK BLUE COLOR:#428bca
					-->
					<ul class="pagination pagination-lg" >
						<li><a href="Rubric5.php">&laquo;</a></li>
						<li><a href="FirstTable.php"> Main Table</a></li>
						<li><a href="Rubric1.php">1</a></li>
						<li><a href="Rubric2.php">2</a></li>
						<li><a href="Rubric3.php">3</a></li>
						<li><a href="Rubric4.php">4</a></li>
						<li><a href="Rubric5.php">5</a></li>
						<li class="active"><a href="Rubric6.php">6</a></li>
						<li><a href="Rubric7.php">7</a></li>
						<li><a href="Rubric8.php">8</a></li>
						<li><a href="Rubric9.php">9</a></li>
						<li><a href="Rubric10.php">10</a></li>
						<li><a href="Rubric11.php">11</a></li>
						<li><a href="Rubric12.php">12</a></li>
						<li><a href="Rubric7.php">&raquo;</a></li>
					</ul>


					<script type="text/javascript" src="bootstrap.min.js">
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

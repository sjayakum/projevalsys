<?php

$conn_error="could not connect";

$mysql_host="localhost";
$mysql_user="root";	
$mysql_pass='';
$mysql_table="maintable";


mysql_connect($mysql_host,$mysql_user,$mysql_pass) or die($conn_error);

mysql_select_db('wp');

session_start();

$batchnum =	$_SESSION['batchnum'];




?>

<html>
<head></head>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<style type="text/css">
	.red {color:red}
	.blue {color:blue}
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
<body style="background-color:#031626">

	<div class="container">
		<div class="col-md-12">
			<div class="row">
				<div class="main">
					<img src="logo.png">
				</div>
			</div>
		</div>

		<h1 align="center" style="color:lightgray;"> MARKS SPLITUP </h1><br/>
		<div style="font-size:18px">
			<table class="table table-bordered" align="center" cellpadding="20" style="font-size:18px;">
				<tr align="center" style="color:#428bca;">
					<td><b>CRITERIA</b></td>
					<td><b>MARKS</b></td>
					<td><b>RUBRIC</b></td>
				</tr>
				<tr align="center">
					<td><a href="Rubric1.php">1. Literature Survey Presentation (CIE PANEL- PRR1)</a></td>
					<td style="color:darkgray;"> 4 </td>
					<td style="color:darkgray;"> 1 </td>
				</tr>
				<!--tr align="center">
					<td><a href="Rubric11.php">11. Literature Survey Paper (Guide) ** Change here **</a></td>
					<td style="color:darkgray;"> 3 </td>
					<td style="color:darkgray;" align="center"> - </td>
				</tr>
				<tr align="center">
					<td><a href="Rubric12.php">12.Technical Paper on the project work (Guide) ** Chnage here **</a></td>
					<td  style="color:darkgray;"> 3 </td>
					<td  style="color:darkgray;">-</td>
				</tr-->
				<tr align="center">
					<td><a href="Rubric2.php">2.Design (Guide)</a></td>
					<td  style="color:darkgray;"> 10 </td>
					<td style="color:darkgray;">  2 </td>
				</tr>
				<tr align="center">
					<td><a href="Rubric3.php">3. Implementation (CIE PANEL – PRR2)</a></td>
					<td style="color:darkgray;"> 10 </td>
					<td style="color:darkgray;">  3 </td>
				</tr>
				<tr align="center">
					<td><a href="Rubric4.php">4. Group Participation (Guide - PRR3)</a></td>
					<td style="color:darkgray;"> 2 </td>
					<td style="color:darkgray;"> 4  </td>
				</tr>
				<tr align="center">
					<td><a href="Rubric5.php">5.Team Work (Team Members)</a></td>
					<td style="color:darkgray;"> 2 </td>
					<td style="color:darkgray;"> 5  </td>
				</tr>
				<tr valign="center" align="center">
					<td><a href="#">FINAL PRESENTATION (CIE PANEL)</a></td>
					<td rowspan="2"  style="color:darkgray;"> <br/>5 </td>
					<td valign="center" rowspan="6"  style="color:darkgray;"><br/><br/><br/><br/>6  </td>
				</tr>
				<tr align="center">
					<td><a href="Rubric6.php">6. Testing and Result, Conclusion</a></td>

				</tr>
				<tr align="center">
					<td><a href="Rubric7.php">7. Plan of Work</a></td>
					<td style="color:darkgray;"> 2 </td>
				</tr>
				<tr align="center">
					<td><a href="Rubric8.php">8. Societal / Ethical / Environmental issues</a></td>
					<td style="color:darkgray;" style="color:darkgray;"> 2 </td>
				</tr>
				<tr align="center">
					<td><a href="Rubric9.php">9.Written Skill</a></td>
					<td style="color:darkgray;" style="color:darkgray;" style="color:darkgray;"> 5 </td>
				</tr>
				<tr align="center">
					<td><a href="Rubric10.php">10.Oral Presentation</a></td>
					<td  style="color:darkgray;">  2 </td>
				</tr>
				<tr align="center">
					<td><a href="Rubric11.php">11. Literature Survey Paper</a></td>
					<td  style="color:darkgray;">  3 </td>
					<td  style="color:darkgray;">  7 </td>

				</tr>
				<tr align="center">
					<td><a href="Rubric12.php">12. Technical Paper on Project Work</a></td>
					<td  style="color:darkgray;">  3 </td>
					<td  style="color:darkgray;">  8 </td>
				</tr>
				<tr align="center">
					<td><a href="Report.php"> REPORT for this Batch </a></td>
					<td colspan="2" style="color:darkgray;">-</td>

				</tr>
				<tr align="center">
					<td style="color:#428bca;"><b> CIE TOTAL </b></td>
					<td style="color:darkgray;"> 50 </td>
					<td style="color:darkgray;"> - </td>
				</tr>
				<tr align="center">
					<td style="color:#428bca;"><b> SEE TOTAL </b></td>
					<td style="color:darkgray;"> 50 </td>
					<td style="color:darkgray;"> - </td>
				</tr>
			</div>
		</table>

		<br/>

		<table style="font-size:18px;">
			<tr align="right" style="color:lightgray;">
				<th>Evaluation by the Project Guide: Total 18 Marks </th>
				<td>  </td>
			</tr>
			<tr align="right" style="color:lightgray;">
				<th>Peer Evaluation by Project Team Members: 2 Marks </th>
				<td>  </td>
			</tr>
			<tr align="right" style="color:lightgray;">
				<th>Evaluation by the CIE Panel: Total 30 Marks </th>
				<td>  </td>
			</tr>
		</table>
<br/>


		<h2 style="color:lightgray" align="center">Batch Currently Being Graded</h2>
		<table class="table table-bordered">

			<tr style="color:lightgray" align="center">
				<td><b>USN</b></td>
				<td><b>Name</b></td>
			</tr>

			<tr style="color:lightgray" align="center">
				<td><?php  	
					$query_run = @mysql_query("SELECT usn from `test1` where batchno = '$batchnum'");

					$val =@mysql_result($query_run,0,"usn");
					echo $val;
					?> 
				</td>
				<td><?php  	
					$query_run = @mysql_query("SELECT name from `test1` where batchno = '$batchnum'");

					$val =@mysql_result($query_run,0,"name");
					echo $val;
					?> 
					
				</td>

			</tr>
			<tr style="color:lightgray" align="center">
				<td><?php  	
					$query_run = @mysql_query("SELECT usn from `test1` where batchno = '$batchnum'");

					$val =@mysql_result($query_run,1,"usn");
					echo $val;
					?> 
				</td>
				<td><?php  	
					$query_run = @mysql_query("SELECT name from `test1` where batchno = '$batchnum'");

					$val =@mysql_result($query_run,1,"name");
					echo $val;
					?> 
					
				</td>

			</tr>

			<tr style="color:lightgray" align="center">
				<td><?php  	
					$query_run = @mysql_query("SELECT usn from `test1` where batchno = '$batchnum'");

					$val =@mysql_result($query_run,2,"usn");
					echo $val;
					?> 
				</td>
				<td><?php  	
					$query_run = @mysql_query("SELECT name from `test1` where batchno = '$batchnum'");

					$val =@mysql_result($query_run,2,"name");
					echo $val;
					?> 
					
				</td>

			</tr>
			<tr style="color:lightgray" align="center">
				<td><?php  	
					$query_run = @mysql_query("SELECT usn from `test1` where batchno = '$batchnum'");

					$val =@mysql_result($query_run,3,"usn");
					echo $val;
					?> 
				</td>
				<td><?php  	
					$query_run = @mysql_query("SELECT name from `test1` where batchno = '$batchnum'");

					$val =@mysql_result($query_run,3,"name");
					echo $val;
					?> 
					
				</td>

			</tr>



		</table>
	</div>
	<br/><br/>
	<div class="[ container text-center ]">
		<div class="[ row ]">
			<div class="col-md-12">
				<ul class="pagination pagination-lg" align="center">
					<!--li><a href="Rubric7.php">&laquo;</a></li-->
					<li class="active"><a href="FirstTable.php"> Main Table</a></li>
					<li><a href="Rubric1.php">1</a></li>
					<li><a href="Rubric2.php">2</a></li>
					<li><a href="Rubric3.php">3</a></li>
					<li><a href="Rubric4.php">4</a></li>
					<li><a href="Rubric5.php">5</a></li>
					<li><a href="Rubric6.php">6</a></li>
					<li><a href="Rubric7.php">7</a></li>
					<li><a href="Rubric8.php">8</a></li>
					<li><a href="Rubric9.php">9</a></li>
					<li><a href="Rubric10.php">10</a></li>
					<li><a href="Rubric11.php">11</a></li>
					<li><a href="Rubric12.php">12</a></li>
					<li><a href="Rubric1.php">&raquo;</a></li>
				</ul>	
			</div>
		</div>
	</div>
	<form role="form" action="logout.php">
		<div class="[ container text-center ]">
			<div class="[ row ]">
				<div class="[ col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 ]" role="tabpanel">
					<div class="[ col-xs-4 col-sm-12 ]">
						<input type="submit" class="btn btn-gray btn-block" value="Logout">
					</div>
				</div>
			</div>
		</div>

	</form>



</body>
</html>


























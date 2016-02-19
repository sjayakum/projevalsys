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



$query = "SELECT usn FROM `test1` WHERE batchno='$batchnum'";

if($query_run = mysql_query($query)){

	
	$a=array();	

	while($row = mysql_fetch_assoc($query_run))
	{


		array_push($a,"{$row['usn']}");

	} 


}




foreach($a as $temp){

	$query_run = mysql_query("SELECT * from `test1` where usn='$temp'");
	$val1 =mysql_result($query_run,0,"crit1");
	$val2 =mysql_result($query_run,0,"crit2");
	$val3 =mysql_result($query_run,0,"crit3");
	$val4 =mysql_result($query_run,0,"crit4");
	$val5 =mysql_result($query_run,0,"crit5");
	$val6 =mysql_result($query_run,0,"crit6");
	$val7 =mysql_result($query_run,0,"crit7");
	$val8 =mysql_result($query_run,0,"crit8");
	$val9 =mysql_result($query_run,0,"crit9");
	$val10 =mysql_result($query_run,0,"crit10");
	$val11 =mysql_result($query_run,0,"guide");
	$val12 =mysql_result($query_run,0,"member");
	$val13 =mysql_result($query_run,0,"ciepanel");
	$val14 = mysql_result($query_run,0,"crit11");
	$val15 = mysql_result($query_run,0,"crit12");

	$insval1 = $val2 + $val4 + $val14 + $val15;
	$insval2 = $val5;
	$insval3 = $val1 + $val3 + $val6 + ($val7/2) + ($val8/2) + $val9 + ($val10/2);
	$insval4 = $insval1 + $insval2 + $insval3;

	$query_run2 = mysql_query("UPDATE `test1` set guide='$insval1' where usn='$temp' ");	
	$query_run3 = mysql_query("UPDATE `test1` set member='$insval2' where usn='$temp' ");			
	$query_run4 = mysql_query("UPDATE `test1` set ciepanel='$insval3' where usn='$temp' ");
	$query_run5 = mysql_query("UPDATE `test1` set total='$insval4' where usn='$temp'");
	





}


?>


<html>
<head>

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

</head>



<body style="background-color:#031626">
	<br />
	<br />
	<br />

	<div class="container">
		<div class="col-md-9 col-md-offset-1">
			<h1 align="center" style="color:lightgray;">REPORT</h1><br/>

			<table class="table table-striped">

				<tr align="center">
					<td><b> USN </b></td>
					<?php
					foreach($a as $xyz) {
						?>
						<td><b> <?php echo $xyz; ?>
						</b></td>

						<?php 
					} ?>

				</tr>
				<tr align="center" style="color:lightgray"> 
					<td><b>1. Literature Survey Presentation </b></td>
					<td>
						<?php  	
						$query_run = @mysql_query("SELECT crit1 from `test1` where usn='$a[0]'");

						$val =@mysql_result($query_run,0,"crit1");
						echo $val;
						?> 
					</td>
					<td>
						<?php  	
						$query_run = @mysql_query("SELECT crit1 from `test1` where usn='$a[1]'");

						$val =@mysql_result($query_run,0,"crit1");
						echo $val;
						?> 
					</td>

					<td>
						<?php  	
						$query_run = @mysql_query("SELECT crit1 from `test1` where usn='$a[2]'");

						$val =@mysql_result($query_run,0,"crit1");
						echo $val;
						?> 
					</td>

					<td>
						<?php  	
						$query_run = @mysql_query("SELECT crit1 from `test1` where usn='$a[3]'");

						$val =@mysql_result($query_run,0,"crit1");
						echo $val;
						?> 
					</td>



				</tr>
				<tr align="center"> 
					<td><b>2.Design </b></td>
					<td>
						<?php  	
						$query_run = @mysql_query("SELECT crit2 from `test1` where usn='$a[0]'");

						$val =@mysql_result($query_run,0,"crit2");
						echo $val;
						?> 
					</td>
					<td>
						<?php  	
						$query_run = @mysql_query("SELECT crit2 from `test1` where usn='$a[1]'");

						$val =@mysql_result($query_run,0,"crit2");
						echo $val;
						?> 
					</td>

					<td>
						<?php  	
						$query_run = @mysql_query("SELECT crit2 from `test1` where usn='$a[2]'");

						$val =@mysql_result($query_run,0,"crit2");
						echo $val;
						?> 
					</td>

					<td>
						<?php  	
						$query_run = @mysql_query("SELECT crit2 from `test1` where usn='$a[3]'");

						$val =@mysql_result($query_run,0,"crit2");
						echo $val;
						?> 
					</td>



				</tr>
				<tr align="center" style="color:lightgray"> 
					<td><b>3. Implementationn </b></td>
					<td>
						<?php  	
						$query_run = @mysql_query("SELECT crit3 from `test1` where usn='$a[0]'");
						$val =@mysql_result($query_run,0,"crit3");
						echo $val;
						?> 
					</td>
					<td>
						<?php  	
						$query_run = @mysql_query("SELECT crit3 from `test1` where usn='$a[1]'");

						$val =@mysql_result($query_run,0,"crit3");
						echo $val;
						?> 
					</td>

					<td>
						<?php  	
						$query_run = @mysql_query("SELECT crit3 from `test1` where usn='$a[2]'");

						$val =@mysql_result($query_run,0,"crit3");
						echo $val;
						?> 
					</td>

					<td>
						<?php  	
						$query_run = @mysql_query("SELECT crit3 from `test1` where usn='$a[3]'");

						$val =@mysql_result($query_run,0,"crit3");
						echo $val;
						?> 
					</td>



				</tr>
				<tr align="center"> 
					<td><b>4. Group Participation </b></td>
					<td>
						<?php  	
						$query_run = @mysql_query("SELECT crit4 from `test1` where usn='$a[0]'");

						$val =@mysql_result($query_run,0,"crit4");
						echo $val;
						?> 
					</td>
					<td>
						<?php  	
						$query_run = @mysql_query("SELECT crit4 from `test1` where usn='$a[1]'");

						$val =@mysql_result($query_run,0,"crit4");
						echo $val;
						?> 
					</td>

					<td>
						<?php  	
						$query_run = @mysql_query("SELECT crit4 from `test1` where usn='$a[2]'");

						$val =@mysql_result($query_run,0,"crit4");
						echo $val;
						?> 
					</td>

					<td>
						<?php  	
						$query_run = @mysql_query("SELECT crit4 from `test1` where usn='$a[3]'");

						$val =@mysql_result($query_run,0,"crit4");
						echo $val;
						?> 
					</td>



				</tr>
				<tr align="center" style="color:lightgray"> 
					<td><b>5.Team Work </b></td>
					<td>
						<?php  	
						$query_run = @mysql_query("SELECT crit5 from `test1` where usn='$a[0]'");

						$val =@mysql_result($query_run,0,"crit5");
						echo $val;
						?> 
					</td>
					<td>
						<?php  	
						$query_run = @mysql_query("SELECT crit5 from `test1` where usn='$a[1]'");

						$val =@mysql_result($query_run,0,"crit5");
						echo $val;
						?> 
					</td>

					<td>
						<?php  	
						$query_run = @mysql_query("SELECT crit5 from `test1` where usn='$a[2]'");

						$val =@mysql_result($query_run,0,"crit5");
						echo $val;
						?> 
					</td>

					<td>
						<?php  	
						$query_run = @mysql_query("SELECT crit5 from `test1` where usn='$a[3]'");

						$val =@mysql_result($query_run,0,"crit5");
						echo $val;
						?> 
					</td>



				</tr>
				<tr align="center"> 
					<td><b>6. Testing and Result, Conclusion </b></td>
					<td>
						<?php  	
						$query_run = @mysql_query("SELECT crit6 from `test1` where usn='$a[0]'");

						$val =@mysql_result($query_run,0,"crit6");
						echo $val;
						?> 
					</td>
					<td>
						<?php  	
						$query_run = @mysql_query("SELECT crit6 from `test1` where usn='$a[1]'");

						$val =@mysql_result($query_run,0,"crit6");
						echo $val;
						?> 
					</td>

					<td>
						<?php  	
						$query_run = @mysql_query("SELECT crit6 from `test1` where usn='$a[2]'");

						$val =@mysql_result($query_run,0,"crit6");
						echo $val;
						?> 
					</td>

					<td>
						<?php  	
						$query_run = @mysql_query("SELECT crit6 from `test1` where usn='$a[3]'");

						$val =@mysql_result($query_run,0,"crit6");
						echo $val;
						?> 
					</td>



				</tr>
				<tr align="center" style="color:lightgray"> 
					<td><b>7. Plan of Work </b></td>
					<td>
						<?php  	
						$query_run = @mysql_query("SELECT crit7 from `test1` where usn='$a[0]'");

						$val =@mysql_result($query_run,0,"crit7");
						echo $val;
						?> 
					</td>
					<td>
						<?php  	
						$query_run = @mysql_query("SELECT crit7 from `test1` where usn='$a[1]'");

						$val =@mysql_result($query_run,0,"crit7");
						echo $val;
						?> 
					</td>

					<td>
						<?php  	
						$query_run = @mysql_query("SELECT crit7 from `test1` where usn='$a[2]'");

						$val =@mysql_result($query_run,0,"crit7");
						echo $val;
						?> 
					</td>

					<td>
						<?php  	
						$query_run = @mysql_query("SELECT crit7 from `test1` where usn='$a[3]'");

						$val =@mysql_result($query_run,0,"crit7");
						echo $val;
						?> 
					</td>



				</tr>
				<tr align="center"> 
					<td><b>8. Societal / Ethical / Environmental issues </b></td>
					<td>
						<?php  	
						$query_run = @mysql_query("SELECT crit8 from `test1` where usn='$a[0]'");

						$val =@mysql_result($query_run,0,"crit8");
						echo $val;
						?> 
					</td>
					<td>
						<?php  	
						$query_run = @mysql_query("SELECT crit8 from `test1` where usn='$a[1]'");

						$val =@mysql_result($query_run,0,"crit8");
						echo $val;
						?> 
					</td>

					<td>
						<?php  	
						$query_run = @mysql_query("SELECT crit8 from `test1` where usn='$a[2]'");

						$val =@mysql_result($query_run,0,"crit8");
						echo $val;
						?> 
					</td>

					<td>
						<?php  	
						$query_run = @mysql_query("SELECT crit8 from `test1` where usn='$a[3]'");

						$val =@mysql_result($query_run,0,"crit8");
						echo $val;
						?> 
					</td>



				</tr>
				<tr align="center" style="color:lightgray"> 
					<td><b>9.Written Skill </b></td>
					<td>
						<?php  	
						$query_run = @mysql_query("SELECT crit9 from `test1` where usn='$a[0]'");

						$val =@mysql_result($query_run,0,"crit9");
						echo $val;
						?> 
					</td>
					<td>
						<?php  	
						$query_run = @mysql_query("SELECT crit9 from `test1` where usn='$a[1]'");

						$val =@mysql_result($query_run,0,"crit9");
						echo $val;
						?> 
					</td>

					<td>
						<?php  	
						$query_run = @mysql_query("SELECT crit9 from `test1` where usn='$a[2]'");

						$val =@mysql_result($query_run,0,"crit9");
						echo $val;
						?> 
					</td>

					<td>
						<?php  	
						$query_run = @mysql_query("SELECT crit9 from `test1` where usn='$a[3]'");

						$val =@mysql_result($query_run,0,"crit9");
						echo $val;
						?> 
					</td>



				</tr>
				<tr align="center"> 
					<td><b>10.Oral Presentation </b></td>
					<td>
						<?php  	
						$query_run = @mysql_query("SELECT crit10 from `test1` where usn='$a[0]'");

						$val =@mysql_result($query_run,0,"crit10");
						echo $val;
						?> 
					</td>
					<td>
						<?php  	
						$query_run = @mysql_query("SELECT crit10 from `test1` where usn='$a[1]'");

						$val =@mysql_result($query_run,0,"crit10");
						echo $val;
						?> 
					</td>

					<td>
						<?php  	
						$query_run = @mysql_query("SELECT crit10 from `test1` where usn='$a[2]'");

						$val =@mysql_result($query_run,0,"crit10");
						echo $val;
						?> 
					</td>

					<td>
						<?php  	
						$query_run = @mysql_query("SELECT crit10 from `test1` where usn='$a[3]'");

						$val =@mysql_result($query_run,0,"crit10");
						echo $val;
						?> 
					</td>



				</tr>
				<tr align="center" style="color:lightgray"> 
					<td><b>11. Literature Survey Paper</b></td>
					<td>
						<?php  	
						$query_run = @mysql_query("SELECT crit11 from `test1` where usn='$a[0]'");

						$val =@mysql_result($query_run,0,"crit11");
						echo $val;
						?> 
					</td>
					<td>
						<?php  	
						$query_run = @mysql_query("SELECT crit11 from `test1` where usn='$a[1]'");

						$val =@mysql_result($query_run,0,"crit11");
						echo $val;
						?> 
					</td>

					<td>
						<?php  	
						$query_run = @mysql_query("SELECT crit11 from `test1` where usn='$a[2]'");

						$val =@mysql_result($query_run,0,"crit11");
						echo $val;
						?> 
					</td>

					<td>
						<?php  	
						$query_run = @mysql_query("SELECT crit11 from `test1` where usn='$a[3]'");

						$val =@mysql_result($query_run,0,"crit11");
						echo $val;
						?> 
					</td>



				</tr>
				<tr align="center"> 
					<td><b>12. Technical Paper</b></td>
					<td>
						<?php  	
						$query_run = @mysql_query("SELECT crit12 from `test1` where usn='$a[0]'");

						$val =@mysql_result($query_run,0,"crit12");
						echo $val;
						?> 
					</td>
					<td>
						<?php  	
						$query_run = @mysql_query("SELECT crit12 from `test1` where usn='$a[1]'");

						$val =@mysql_result($query_run,0,"crit12");
						echo $val;
						?> 
					</td>

					<td>
						<?php  	
						$query_run = @mysql_query("SELECT crit12 from `test1` where usn='$a[2]'");

						$val =@mysql_result($query_run,0,"crit12");
						echo $val;
						?> 
					</td>

					<td>
						<?php  	
						$query_run = @mysql_query("SELECT crit12 from `test1` where usn='$a[3]'");

						$val =@mysql_result($query_run,0,"crit12");
						echo $val;
						?> 
					</td>



				</tr>
				<tr align="center" style="color:lightgray"> 
					<td><b><b>Guide </b></td>
					<td>
						<?php  	
						$query_run = @mysql_query("SELECT guide from `test1` where usn='$a[0]'");

						$val =@mysql_result($query_run,0,"guide");
						echo $val;
						?> 
					</td>
					<td>
						<?php  	
						$query_run = @mysql_query("SELECT guide from `test1` where usn='$a[1]'");

						$val =@mysql_result($query_run,0,"guide");
						echo $val;
						?> 
					</td>

					<td>
						<?php  	
						$query_run = @mysql_query("SELECT guide from `test1` where usn='$a[2]'");

						$val =@mysql_result($query_run,0,"guide");
						echo $val;
						?> 
					</td>

					<td>
						<?php  	
						$query_run = @mysql_query("SELECT guide from `test1` where usn='$a[3]'");

						$val =@mysql_result($query_run,0,"guide");
						echo $val;
						?> 
					</td>



				</tr>
				<tr align="center"> 
					<td><b>Member </b></td>
					<td>
						<?php  	
						$query_run = @mysql_query("SELECT member from `test1` where usn='$a[0]'");

						$val =@mysql_result($query_run,0,"member");
						echo $val;
						?> 
					</td>
					<td>
						<?php  	
						$query_run = @mysql_query("SELECT member from `test1` where usn='$a[1]'");

						$val =@mysql_result($query_run,0,"member");
						echo $val;
						?> 
					</td>

					<td>
						<?php  	
						$query_run = @mysql_query("SELECT member from `test1` where usn='$a[2]'");

						$val =@mysql_result($query_run,0,"member");
						echo $val;
						?> 
					</td>

					<td>
						<?php  	
						$query_run = @mysql_query("SELECT member from `test1` where usn='$a[3]'");

						$val =@mysql_result($query_run,0,"member");
						echo $val;
						?> 
					</td>



				</tr>
				<tr align="center" style="color:lightgray"> 
					<td><b>CIE Panel </b></td>
					<td>
						<?php  	
						$query_run = @mysql_query("SELECT ciepanel from `test1` where usn='$a[0]'");

						$val =@mysql_result($query_run,0,"ciepanel");
						echo $val;
						?> 
					</td>
					<td>
						<?php  	
						$query_run = @mysql_query("SELECT ciepanel from `test1` where usn='$a[1]'");

						$val =@mysql_result($query_run,0,"ciepanel");
						echo $val;
						?> 
					</td>

					<td>
						<?php  	
						$query_run = @mysql_query("SELECT ciepanel from `test1` where usn='$a[2]'");

						$val =@mysql_result($query_run,0,"ciepanel");
						echo $val;
						?> 
					</td>

					<td>
						<?php  	
						$query_run = @mysql_query("SELECT ciepanel from `test1` where usn='$a[3]'");

						$val =@mysql_result($query_run,0,"ciepanel");
						echo $val;
						?> 
					</td>



				</tr>
				<tr align="center"> 
					<td><b>Total </b></td>
					<td>
						<?php  	
						$query_run = @mysql_query("SELECT total from `test1` where usn='$a[0]'");

						$val =@mysql_result($query_run,0,"total");
						echo $val;
						?> 
					</td>
					<td>
						<?php  	
						$query_run = @mysql_query("SELECT total from `test1` where usn='$a[1]'");

						$val =@mysql_result($query_run,0,"total");
						echo $val;
						?> 
					</td>

					<td>
						<?php  	
						$query_run = @mysql_query("SELECT total from `test1` where usn='$a[2]'");

						$val =@mysql_result($query_run,0,"total");
						echo $val;
						?> 
					</td>

					<td>
						<?php  	
						$query_run = @mysql_query("SELECT total from `test1` where usn='$a[3]'");

						$val =@mysql_result($query_run,0,"total");
						echo $val;
						?> 
					</td>



				</tr>
			</table>

			<ul class="pagination pagination-lg" >
						<li><a href="Rubric11.php">&laquo;</a></li>
						<li><a href="FirstTable.php"> Main Table</a></li>
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
						<li class="active"><a href="Report.php">Report</a></li>

						<!--li><a href="FirstTable.php">&raquo;</a></li-->
			</ul>

		</div>
	</div>



	<br />
	<br />
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>

</body>


</html>
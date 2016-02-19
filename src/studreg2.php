
<?php

$conn_error="could not connect";

$mysql_host="localhost";
$mysql_user="root";
$mysql_pass='';
$mysql_table="maintable";


mysql_connect($mysql_host,$mysql_user,$mysql_pass) or die($conn_error);

mysql_select_db('wp');



if(isset($_POST['usn1']) && isset($_POST['name1']) && isset($_POST['usn2']) && isset($_POST['name2'])  && isset($_POST['usn3']) && isset($_POST['name3'])  && isset($_POST['usn4']) && isset($_POST['name4'])  &&isset($_POST['projtitle']) ){
	$usn1 = $_POST['usn1'];
	$name1 = $_POST['name1'];
	$usn2 = $_POST['usn2'];
	$name2 = $_POST['name2'];
	$usn3 = $_POST['usn3'];
	$name3 = $_POST['name3'];
	$usn4 = $_POST['usn4'];
	$name4 = $_POST['name4'];
	$projtitle = $_POST['projtitle'];
	

	$projtitle = $_POST['projtitle'];

	echo $usn1;
	echo $usn2;
	echo $usn3;
	echo $usn4;

	if(!empty($usn1) &&  !empty($name1)  && !empty($usn2) &&  !empty($name2)  && !empty($usn3) &&  !empty($name3)  &&  !empty($projtitle)  ){

		if(empty($usn4) && empty($name4)){
			$querytemp = "SELECT * from `nextbatchnumber`";

			$query_run_temp= mysql_query($querytemp);
			$val = mysql_result($query_run_temp,0);


			$query1 = "INSERT into `test1` VALUES ('$usn1','$name1','$val','0','$projtitle','0','0','0','0','0','0','0','0','0','0','0','0','0','0')";

			$query2 = "INSERT into `test1` VALUES ('$usn2','$name2','$val','0','$projtitle','0','0','0','0','0','0','0','0','0','0','0','0','0','0')";

			$query3 = "INSERT into `test1` VALUES ('$usn3','$name3','$val','0','$projtitle','0','0','0','0','0','0','0','0','0','0','0','0','0','0')";

			

			if($query_run1 = mysql_query($query1) && $query_run2 = mysql_query($query2) && $query_run3 = mysql_query($query3)){

				
				$newval = $val + 1;


				$queryincrement = "UPDATE `nextbatchnumber` set `batchnumber`=`batchnumber`+1 where 1";

				
				if($query_run_increment = mysql_query($queryincrement)){
					//echo "incremented";
				}else{
					//echo "error in incrementing";
				}

			}




		}else{

			$querytemp = "SELECT * from `nextbatchnumber`";

			$query_run_temp= mysql_query($querytemp);
			$val = mysql_result($query_run_temp,0,"batchnumber");
			echo $val;


			$query1 = "INSERT into `test1` VALUES ('$usn1','$name1','$val','0','$projtitle','0','0','0','0','0','0','0','0','0','0','0','0','0','0')";

			$query2 = "INSERT into `test1` VALUES ('$usn2','$name2','$val','0','$projtitle','0','0','0','0','0','0','0','0','0','0','0','0','0','0')";

			$query3 = "INSERT into `test1` VALUES ('$usn3','$name3','$val','0','$projtitle','0','0','0','0','0','0','0','0','0','0','0','0','0','0')";

			$query4 = "INSERT into `test1` VALUES ('$usn4','$name4','$val','0','$projtitle','0','0','0','0','0','0','0','0','0','0','0','0','0','0')";

			if($query_run1 = mysql_query($query1) && $query_run2 = mysql_query($query2) && $query_run3 = mysql_query($query3) && $query_run4 = mysql_query($query4)){
				
				

				
				$newval = $val + 1;


				$queryincrement = "UPDATE `nextbatchnumber` set `batchnumber`=`batchnumber`+1 where 1";

				
				if($query_run_increment = mysql_query($queryincrement)){
					//echo "incremented";
				}else{
					//echo "error in incrementing";
				}

			}


		}



		




	}

}





?>
<form action="studreg2.php" method="POST">
	USN1:<br><input type="text" name="usn1"><br>
	Name1:<br><input type="text" name="name1"><br>

	USN2:<br><input type="text" name="usn2"><br>
	Name2:<br><input type="text" name="name2"><br>

	USN3:<br><input type="text" name="usn3"><br>
	Name3:<br><input type="text" name="name3"><br>

	USN4:<br><input type="text" name="usn4"><br>
	Name4:<br><input type="text" name="name4"><br>

	<!--
	Batch Number:<br><input type="text" name="batchno"><br>
-->

Project Title <br><input type="text" name="projtitle"><br>



<input type="submit" value="Submit">


<a href="ViewProjects.php">Click Here to View to all projects registered</a>

</form>
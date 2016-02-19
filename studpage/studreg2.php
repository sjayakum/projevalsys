
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

	if(!empty($usn1) &&  !empty($name1)  && !empty($usn2) &&  !empty($name2)  && !empty($usn3) &&  !empty($name3)  &&  !empty($projtitle)  ){

		if(empty($usn4) && empty($name4)){
			$querytemp = "SELECT * from `nextbatchnumber`";

			$query_run_temp= mysql_query($querytemp);
			$val = mysql_result($query_run_temp,0);


			$query1 = "INSERT into `test1` VALUES ('$usn1','$name1','$val','0','$projtitle','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0')";

			$query2 = "INSERT into `test1` VALUES ('$usn2','$name2','$val','0','$projtitle','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0')";

			$query3 = "INSERT into `test1` VALUES ('$usn3','$name3','$val','0','$projtitle','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0')";

			

			if($query_run1 = mysql_query($query1) && $query_run2 = mysql_query($query2) && $query_run3 = mysql_query($query3)){

				
				$newval = $val + 1;


				$queryincrement = "UPDATE `nextbatchnumber` set `batchnumber`=`batchnumber`+1 where 1";

				
				if($query_run_increment = mysql_query($queryincrement)){
					//echo "incremented";
				}else{
					//echo "error in incrementing";
				}

				echo "

				<script type='text/javascript'>
					alert('Sucessful');
				</script>
				";

			}




		}else{

			$querytemp = "SELECT * from `nextbatchnumber`";

			$query_run_temp= mysql_query($querytemp);
			$val = mysql_result($query_run_temp,0,"batchnumber");
	

			$query1 = "INSERT into `test1` VALUES ('$usn1','$name1','$val','0','$projtitle','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0')";

			$query2 = "INSERT into `test1` VALUES ('$usn2','$name2','$val','0','$projtitle','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0')";

			$query3 = "INSERT into `test1` VALUES ('$usn3','$name3','$val','0','$projtitle','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0')";

			$query4 = "INSERT into `test1` VALUES ('$usn4','$name4','$val','0','$projtitle','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0')";

			if($query_run1 = mysql_query($query1) && $query_run2 = mysql_query($query2) && $query_run3 = mysql_query($query3) && $query_run4 = mysql_query($query4)){
				
				

				
				$newval = $val + 1;


				$queryincrement = "UPDATE `nextbatchnumber` set `batchnumber`=`batchnumber`+1 where 1";

				
				if($query_run_increment = mysql_query($queryincrement)){
					//echo "incremented";
				}else{
					//echo "error in incrementing";
				}

				echo "

				<script type='text/javascript'>
					alert('Sucessful');
				</script>
				";

			}


		}



		




	}

}





?>

<!DOCTYPE html>
<html lang="en">
<head>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="js/jquery.js"></script>
	<script src="js/boostrap.min.js"></script>
	<script src="jquery.min.js"></script>


	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">


</head>

<body class="home">
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.html">BMSCE</a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li><a href="index.php">Home</a></li>
					<li class="active"><a href="studreg2.php">About</a></li>
					<li><a href="ViewProjects.php">View Projects</a></li>
					<li><a class="btn" href="#modal-id">Register</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<!-- Header -->
	<header id="head">
		<div class="container">
			<div class="row">
				<h1 class="lead">Welcome</h1>
				<p class="tagline">Register a new Project here </p>
				<a class="btn btn-primary" data-toggle="modal" href='#modal-id'>Register</a>
				<div class="modal fade" id="modal-id">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title">Modal title</h4>
							</div>
							<div class="modal-body" style="color:black;">
								<form action="studreg2.php" method="POST">

									USN1:<br><input type="text" name="usn1"><br>
									Name1:<br><input type="text" name="name1"><br><br>

									USN2:<br><input type="text" name="usn2"><br>
									Name2:<br><input type="text" name="name2"><br><br>

									USN3:<br><input type="text" name="usn3"><br>
									Name3:<br><input type="text" name="name3"><br><br>

									USN4:<br><input type="text" name="usn4"><br>
									Name4:<br><input type="text" name="name4"><br><br>


									Project Title <br><input type="text" name="projtitle"><br>




								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>

									<input type="submit" value="Submit" class="btn btn-primary">

								</form>
							</div>
						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div><!-- /.modal -->



				
			</div>
		</div>
	</header>
	<!-- /Header -->

	<!-- Intro -->
	<div class="container text-center">
		<br> <br>
		<h2 class="thin">View Other Projects</h2>
		<p class="text-muted">
			Click here to View all other projects and people registered in it <br />
			
			<a class="btn btn-primary" href="ViewProjects.php" role="button">View Projects</a>
			
		</p>
	</div>
	<!-- /Intro-->

	
	<!-- container -->
	
	
	
	<!-- /social links -->



	<div class="footer2">
		<div class="container">
			<div class="row">

				<div class="col-md-6 widget">
					<div class="widget-body">
						<p class="simplenav">
							<a href="#">Home</a> | 
							<a href="about.html">About</a> |
							<a href="sidebar-right.html">Sidebar</a> |
							<a href="contact.html">Contact</a> |
							<b><a href="signup.html">Sign up</a></b>
						</p>
					</div>
				</div>

				<div class="col-md-6 widget">
					<div class="widget-body">
						<p class="text-right">
							Website made by Suraj , Shushyam , Muthu &amp; Sivranjini
						</p>
					</div>
				</div>

			</div> <!-- /row of widgets -->
		</div>
	</div>

</footer>	




<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="assets/js/headroom.min.js"></script>
<script src="assets/js/jQuery.headroom.min.js"></script>
<script src="assets/js/template.js"></script>
</body>
</html>
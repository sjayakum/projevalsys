<?php

$conn_error="could not connect";

$mysql_host="localhost";
$mysql_user="root";	
$mysql_pass='';
$mysql_table="maintable";


mysql_connect($mysql_host,$mysql_user,$mysql_pass) or die($conn_error);

mysql_select_db('wp');

$temp = 1;
$i=1;


$query = "SELECT DISTINCT batchno FROM test1 ";

if($query_run = mysql_query($query)){

	
	$batcharray=array();	

	while($row = mysql_fetch_assoc($query_run))
	{


		array_push($batcharray,"{$row['batchno']}");

	} 


}



?>




<html>
<head>
	<title></title>
	<!-- Latest compiled and minified CSS & JS -->
	
	<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css">
	<script src="js/jquery.js"></script>
	<script src="js/boostrap.min.js"></script>
</head>


<body>
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.html">HOME</a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li><a href="index.php">Home</a></li>
					<li><a href="studreg2.php">Register</a></li>
					<li class="active"><a href="ViewProjects.php">View Projects</a></li>

				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->
	<br/ >
	<br/ >
	<br/ >
	<br/ >
	<br/ >
	<br/ >
	<br/ >
	<br/ >

	
	<div class="container">
		<div class="col-md-9 col-offset-1">

			<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

				<?php
				foreach($batcharray as $xyz) {
					?>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingOne">
							<h4 class="panel-title">
								<?php   

								$query_run = mysql_query("SELECT * from `test1` where batchno = '$xyz'");
								$myval =mysql_result($query_run,0,"batchno");

								?> 
								<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i; ?>" aria-expanded="false" aria-controls="collapse<?php echo $i; ?>">

									<?php   

									$query_run = mysql_query("SELECT * from `test1` where batchno = '$xyz'");
									$val =mysql_result($query_run,0,"batchno");
									echo "Batch Number  " ."- ". $val;
									?> 
								</a>
							</h4>
						</div>


						<div id="collapse<?php echo $i++; ?>" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body">
								<table border="1px" class="table table-striped">
									<?php

									$query_run = mysql_query("SELECT * from `test1` where batchno = '$xyz'");

									?>

									<tr>

										<th>Project Title</th>
										<td><?php   

											$val =mysql_result($query_run,0,"projtitle");
											echo $val;
											?> 
										</td>

									</tr>

									<tr>

										<th>Batch Number</th>
										<td>
											<?php   

											$val =mysql_result($query_run,0,"batchno");
											echo $val;
											$temp = $val + 1;
											?> 

										</td>

									</tr>

									<tr>
										<th>Project Guide </th>
										<td>
											<?php   

											$val =mysql_result($query_run,0,"projguide");
											echo $val;
											?> 

										</td>

									</tr>
									<tr>
										<th rowspan="4">Members </th>

										<td>


											<table>
												<tr>
													<td>
														<?php   

														$val =mysql_result($query_run,0,"name");
														echo $val;
														?> 
													</td>
													<td>

														<?php  
														$val =mysql_result($query_run,0,"usn");
														echo $val;
														?>

													</td>
												</tr>
											</table>

										</td>

									</tr>
									<tr>

										<td>

											<table>
												<tr>
													<td>
														<?php   

														$val =mysql_result($query_run,1,"name");
														echo $val;
														?> 
													</td>
													<td>

														<?php  
														$val =mysql_result($query_run,1,"usn");
														echo $val;
														?>

													</td>
												</tr>
											</table>

										</td>

									</tr>
									<tr>

										<td>

											<table>
												<tr>
													<td>
														<?php   

														$val =mysql_result($query_run,2,"name");
														echo $val;
														?> 
													</td>
													<td>

														<?php  
														$val =mysql_result($query_run,2,"usn");
														echo $val;
														?>

													</td>
												</tr>
											</table>
										</td>

									</tr>
									<tr>

										<td>

											<table>
												<tr>
													<td>
														<?php   

														if($val = @mysql_result($query_run,3,"name")){

															echo $val;
														}else{
															echo " ";
														}



														?> 
													</td>
													<td>

														<?php  

														if($val = @mysql_result($query_run,3,"usn")){

															echo $val;
														}else{
															echo " ";
														}




														?>

													</td>
												</tr>
											</table>

										</td>

									</tr>







								</table>  
							</div>
						</div>

						<?php
					}
					?>
				</div>

				<br />

				<br />







			</div>

		</div>
	</div>



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
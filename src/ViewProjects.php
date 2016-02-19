<?php

$conn_error="could not connect";

$mysql_host="localhost";
$mysql_user="root";	
$mysql_pass='';
$mysql_table="maintable";


mysql_connect($mysql_host,$mysql_user,$mysql_pass) or die($conn_error);

mysql_select_db('wp');



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
</head>


<body>

	<?php
	foreach($batcharray as $xyz) {
		?>

		<table border="1px">
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

		<br />

		<br />

		<?php
	}
	?>








</body>
</html>
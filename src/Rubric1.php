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



		$query = "UPDATE `test1` set crit1 ='$usn1f' where usn='$a[0]' ";
		if($query_run = mysql_query($query)){
		}

		$query = "UPDATE `test1` set crit1 ='$usn2f' where usn='$a[1]' ";
		if($query_run = mysql_query($query)){
		}

		$query = "UPDATE `test1` set crit1 ='$usn3f' where usn='$a[2]' ";
		if($query_run = mysql_query($query)){
		}

		$query = "UPDATE `test1` set crit1 ='$usn4f' where usn='$a[3]' ";
		if($query_run = mysql_query($query)){
		}

	}




	if(!empty($usn1f) && empty($usn2f)&& empty($usn3f)&& empty($usn4f) ){
		$query = "UPDATE `test1` set crit1 ='$usn1f' where usn='$a[0]' ";
		if($query_run = mysql_query($query)){
		}
	}
	if(!empty($usn2f) && empty($usn1f)&& empty($usn3f)&& empty($usn4f) ){
		$query = "UPDATE `test1` set crit1 ='$usn2f' where usn='$a[1]' ";
		if($query_run = mysql_query($query)){
		}
	}

	if(!empty($usn3f) && empty($usn2f)&& empty($usn1f)&& empty($usn4f) ){
		$query = "UPDATE `test1` set crit1 ='$usn3f' where usn='$a[2]' ";
		if($query_run = mysql_query($query)){
		}
	}

	if(!empty($usn4f) && empty($usn2f)&& empty($usn3f)&& empty($usn1f) ){
		$query = "UPDATE `test1` set crit1 ='$usn4f' where usn='$a[3]' ";
		if($query_run = mysql_query($query)){
		}
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


	<title>
		Criteria -1
	</title>

	<script type="text/javascript">

		function calcmarks(){

			usn1total.value = Number(usn1m1.value) + Number(usn1m2.value) + Number(usn1m3.value) + Number(usn1m4.value) + Number(usn1m5.value) + Number(usn1m6.value) + Number(usn1m7.value);

			usn2total.value = Number(usn2m1.value) + Number(usn2m2.value) + Number(usn2m3.value) + Number(usn2m4.value) + Number(usn2m5.value) + Number(usn2m6.value) + Number(usn2m7.value);

			usn3total.value = Number(usn3m1.value) + Number(usn3m2.value) + Number(usn3m3.value) + Number(usn3m4.value) + Number(usn3m5.value) + Number(usn3m6.value) + Number(usn3m7.value);


			usn4total.value = Number(usn4m1.value) + Number(usn4m2.value) + Number(usn4m3.value) + Number(usn4m4.value) + Number(usn4m5.value) + Number(usn4m6.value) + Number(usn4m7.value);

			usn1f.value = (Number(usn1total.value)/7).toFixed(2);

			usn2f.value = (Number(usn2total.value)/7).toFixed(2);

			usn3f.value = (Number(usn3total.value)/7).toFixed(2);

			usn4f.value = (Number(usn4total.value)/7).toFixed(2);



		}

		



	</script>
</head>
<body style="background-color:#031626">
	<div class="container">
		<div class="col-md-12">
		<h1 align="center" style="color:lightgray;">RUBRIC 1</h1>
		<div style="font-size:18px">
		<table class="table-striped" align="center" cellpadding="20">
		<tr align="center">
			<td><b>Criteria 1: Presentation(4)</b></td>
			<td><b>Marks</b></td>
		</tr>
		<tr style="color:lightgray;" align="center">
			<td> All elements Present</td>
			<td> 4 </td>
		</tr>
		<tr align="center">
			<td> Most elements Present</td>
			<td> 3 </td>
		</tr>
		<tr style="color:lightgray;" align="center">
			<td> Some elements Present</td>
			<td> 2 </td>
		</tr>
		<tr align="center">
			<td>No elements Present</td>
			<td> 1 </td>
		</tr>
		</div>
		</table>
		</div>
	</div>
	<br/>
	<br/>


	<form method="POST" action="Rubric1.php" >
		
           <h1 align="center" style="color:lightgray;"> ENTER MARKS </h1>

			<div style="font-size:18px; color:lightgray;">
			<div class="container">
			<div class="col-md-12">
			
			<table class="table" align="center" cellpadding="20">

			<tr align="center">
				<td rowspan="2"><b><br/>Criteria 1 : Presentation</b></td>
				<td colspan="4"><b>USN</b></td>

			</tr>


			<tr align="center">
				<td>
					<input type="text" id="usn1" maxlength="11" size="11" readonly="readonly" value="<?php echo $a[0]; ?>" />
				</td>
				<td>
					<input type="text" id="usn2" maxlength="11" size="11" readonly="readonly" value="<?php echo $a[1]; ?>"/>
				</td>
				<td>
					<input type="text" id="usn3" maxlength="11" size="11" readonly="readonly" value="<?php echo $a[2]; ?>"/>
				</td>
				<td>
					<input type="text" id="usn4" maxlength="11" size="11" readonly="readonly" value="<?php echo $a[3]; ?>"/>
				</td>

			</tr>
			<tr align="center"> 
				<td>Presentation begins with a clear focus [defines background, state the problem and objectives].
				</td>
				<td>
					<input class="form-control" type="text" id="usn1m1" maxlength="2"/>
				</td>
				<td>
					<input class="form-control" type="text" id="usn2m1" maxlength="2"/>
				</td>
				<td>
					<input class="form-control" type="text" id="usn3m1"maxlength="2" />
				</td>
				<td>
					<input class="form-control" type="text" id="usn4m1"maxlength="2" />
				</td>


			</tr>
			<tr align="center"> 
				<td>Presentation includes appropriate contents and is clearly organized [Material/content are logically sequenced, related to the topic and not repetitive].

				</td>
				<td><br/>
					<input class="form-control" type="text" id="usn1m2" maxlength="2"/>
				</td>
				<td><br/>
					<input class="form-control" type="text" id="usn2m2"maxlength="2" />
				</td>
				<td><br/>
					<input class="form-control" type="text" id="usn3m2"maxlength="2" />
				</td>
				<td><br/>
					<input class="form-control" type="text" id="usn4m2" maxlength="2"/>
				</td>


			</tr>
			<tr align="center"> 
				<td>Subject knowledge [shows full grasp and understanding of the topic].

				</td>
				<td>
					<input class="form-control" type="text" id="usn1m3" maxlength="2"/>
				</td>
				<td>
					<input class="form-control" type="text" id="usn2m3"maxlength="2" />
				</td>
				<td>
					<input class="form-control" type="text" id="usn3m3"maxlength="2" />
				</td>
				<td>
					<input class="form-control" type="text" id="usn4m3" maxlength="2"/>
				</td>


			</tr >
			<tr align="center"> 
				<td>Presentation highlights key ideas and closes with a strong conclusion.

				</td>
				<td>
					<input class="form-control" type="text" id="usn1m4" maxlength="2"/>
				</td>
				<td>
					<input class="form-control" type="text" id="usn2m4" maxlength="2"/>
				</td>
				<td>
					<input class="form-control" type="text" id="usn3m4" maxlength="2"/>
				</td>
				<td>
					<input class="form-control" type="text" id="usn4m4"maxlength="2" />
				</td>


			</tr>
			<tr align="center"> 
				<td>Answer questions/queries professionally.

				</td>
				<td>
					<input class="form-control" type="text" id="usn1m5" maxlength="2"/>
				</td>
				<td>
					<input class="form-control" type="text" id="usn2m5" maxlength="2"/>
				</td>
				<td>
					<input class="form-control" type="text" id="usn3m5" maxlength="2"/>
				</td>
				<td>
					<input class="form-control" type="text" id="usn4m5"maxlength="2" />
				</td>


			</tr>
			<tr align="center"> 
				<td>Visual aids [Quality of slides / Text readable / Figures / Graphs].


				</td>
				<td>
					<input class="form-control" type="text" id="usn1m6"maxlength="2" />
				</td>
				<td>
					<input class="form-control" type="text" id="usn2m6" maxlength="2"/>
				</td>
				<td>
					<input class="form-control" type="text" id="usn3m6"maxlength="2" />
				</td>
				<td>
					<input class="form-control" type="text" id="usn4m6" maxlength="2"/>
				</td>


			</tr>
			<tr align="center"> 
				<td>Delivery [Language skills / Posture / Within time limits].



				</td>
				<td>
					<input class="form-control" type="text" id="usn1m7" maxlength="2"/>
				</td>
				<td>
					<input class="form-control" type="text" id="usn2m7" maxlength="2"/>
				</td>
				<td>
					<input class="form-control" type="text" id="usn3m7"maxlength="2" />
				</td>
				<td>
					<input class="form-control" type="text" id="usn4m7" maxlength="2"/>
				</td>


			</tr>

			<tr align="center">

				<td>Total
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
			<tr align="center">

				<td>Final Marks = Total/7
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
					<input class="form-control" type="text"  name="usn4f" id="usn4f" readonly="readonly"/>
				</td>


			</tr>

		</table>
	</div>
	</div>
</div>

<div class="[ container text-center ]">
		<div class="[ row ]">
			<div class="[ col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 ]" role="tabpanel">
           		<div class="[ col-xs-4 col-sm-12 ]">
           			<input class="btn btn-info btn btn-block" type="button" value="Calculate Marks" onclick="calcmarks();" />
           			<input class="btn btn-primary btn btn-block" type="submit" value="Submit Marks">
           		</div>
           	</div>
        </div>
</div>
<br/><br/>
<div class="[ container text-center ]">
<div class="[ row ]">
	<div class="col-md-12">
					<ul class="pagination pagination-lg" align="center">
							<li><a href="FirstTable.php">&laquo;</a></li>
							<li><a href="FirstTable.php"> Main Table</a></li>
							<li class="active"><a href="Rubric1.php">1</a></li>
							<li><a href="Rubric2.php">2</a></li>
							<li><a href="Rubric3.php">3</a></li>
							<li><a href="Rubric4.php">4</a></li>
							<li><a href="Rubric5.php">5</a></li>
							<li><a href="Rubric6.php">6</a></li>
							<li><a href="Rubric7.php">7</a></li>
							<li><a href="Rubric8.php">8</a></li>
							<li><a href="Rubric9.php">9</a></li>
							<li><a href="Rubric10.php">10</a></li>
							<li><a href="Rubric2.php">&raquo;</a></li>
						</ul>	
	</div>
</div>
</div>



	</form>

	<script type="text/javascript">


		function regtextboxes(){

			usn1m1 = document.getElementById("usn1m1");
			usn1m2 = document.getElementById("usn1m2");
			usn1m3 = document.getElementById("usn1m3");
			usn1m4 = document.getElementById("usn1m4");
			usn1m5 = document.getElementById("usn1m5");
			usn1m6 = document.getElementById("usn1m6");
			usn1m7 = document.getElementById("usn1m7");


			usn2m1 = document.getElementById("usn2m1");
			usn2m2 = document.getElementById("usn2m2");
			usn2m3 = document.getElementById("usn2m3");
			usn2m4 = document.getElementById("usn2m4");
			usn2m5 = document.getElementById("usn2m5");
			usn2m6 = document.getElementById("usn2m6");
			usn2m7 = document.getElementById("usn2m7");


			usn3m1 = document.getElementById("usn3m1");
			usn3m2 = document.getElementById("usn3m2");
			usn3m3 = document.getElementById("usn3m3");
			usn3m4 = document.getElementById("usn3m4");
			usn3m5 = document.getElementById("usn3m5");
			usn3m6 = document.getElementById("usn3m6");
			usn3m7 = document.getElementById("usn3m7");


			usn4m1 = document.getElementById("usn4m1");
			usn4m2 = document.getElementById("usn4m2");
			usn4m3 = document.getElementById("usn4m3");
			usn4m4 = document.getElementById("usn4m4");
			usn4m5 = document.getElementById("usn4m5");
			usn4m6 = document.getElementById("usn4m6");
			usn4m7 = document.getElementById("usn4m7");


			usn1total = document.getElementById("usn1total");
			usn2total = document.getElementById("usn2total");
			usn3total = document.getElementById("usn3total");
			usn4total = document.getElementById("usn4total");

			usn1f = document.getElementById("usn1f");
			usn2f = document.getElementById("usn2f");
			usn3f = document.getElementById("usn3f");
			usn4f = document.getElementById("usn4f");

		}

	</script>
</body>

</html>
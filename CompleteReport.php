<?php

$conn_error="could not connect";

$mysql_host="localhost";
$mysql_user="root";	
$mysql_pass='';
$mysql_table="maintable";


mysql_connect($mysql_host,$mysql_user,$mysql_pass) or die($conn_error);

mysql_select_db('wp');

session_start();



$query = "SELECT * FROM `test1` ORDER BY 'usn'";

$query_run=mysql_query($query);

$num_rows = mysql_num_rows($query_run);





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
<head>
	<title></title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

</head>
<body style="background-color:#031626">
	<div style="color:lightgray;">
		<br />
		<br />

		<div class="[ container text-center ]">
		<div class="[ row ]">
			<div class="[ col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 ]" role="tabpanel">
           		<div class="[ col-xs-4 col-sm-12 ]">
           		<h1 align="center" style="color:lightgray;"><br/>COMPLETE REPORT</h1><br/>
				<table class="table table" style="font-size:18px;">
					<tr style="color:white;" align="center">
						<td><b>USN</b></td>
						<td><b>NAME</b></td>
						<td><b>CIE</b></td>		

					</tr>

					<?php
					$i=0;
					while($i<$num_rows){
						?>

						<tr align="center">
							<td>
								<?php
								$val =mysql_result($query_run,$i,"usn");
								echo $val;
								?>
							</td>
							<td>
								<?php
								$val =mysql_result($query_run,$i,"name");
								echo $val;
								?>
							</td>
							<td>
								<?php
								$val =mysql_result($query_run,$i,"total");
								echo $val;
								?>
							</td>

						</tr>

						<?php
						$i++;
					}
					?>


				</table>
				<br/>
				<br/>
				<form action="MainPageCoordinator.php">
					<input type="submit" class="btn btn-gray btn btn-block" value="Main Page"><br/>
				</form>
			</div>
		</div>
	</div>
	


</body>
</html>
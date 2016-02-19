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
.col-mut{
  position: relative;
  min-height: 1px;
  padding-right: 20px;
  padding-left: 15px;
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
</head>
<body style="background-color:#031626;">
<div class="container">
	<div class="col-md-12">
	<div class="row">
		<div class="main">
			<img src="logo.png">
		</div>
	</div>
</div>
<h1 align="center" style="color:white; font-size:40; font-family:Helvetica"> Welcome Project Co-Ordinator! </h1><br/>
<p style="color:white; font-size:30; font-family:Helvetica; text-indent:0.5; text-align:justify;"><h4 style="color:lightgray; text-indent:0.5;">BELOW OPTIONS ARE AVAILABLE TO YOU:</h4><br/>
<div class="[ container text-center ]">
            <div class="[ row ]">
                <div class="[ col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 ]" role="tabpanel">
                    <div class="[ col-xs-4 col-sm-12 ]">
<form role="form" action="AssignGuide.php">
			 <input type="submit" class="btn btn-primary btn-block" value="Assign Guide for a Batch">
</form><br/>
<form role="form" action="CompleteReport.php">
			 <input type="submit" class="btn btn-primary btn-block" value="View Complete Report ">
</form>
<br/>

	</p>
		<p><br/>
		<form role="form" action="logout.php">
		      <input type="submit" class="btn btn-gray btn-block" value="Logout">
	</form>
	                   </div>
                  </div>
              </div>
</div>
	</p>
</body>
</html>
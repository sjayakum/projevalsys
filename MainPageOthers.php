<?php
$conn_error="could not connect";

$mysql_host="localhost";
$mysql_user="root";
$mysql_pass='';
$mysql_table="maintable";


mysql_connect($mysql_host,$mysql_user,$mysql_pass) or die($conn_error);

mysql_select_db('wp');



session_start();
if(isset($_POST['batchnodd'])){
  $batchnum = $_POST['batchnodd'];
  

  
  $_SESSION['batchnum'] = $batchnum;
  header('Location: FirstTable.php');

/*  $query = "SELECT usn FROM `test1` WHERE batchno='$batchnum'";

  if($query_run = mysql_query($query)){


    $a=array(); 

    while($row = mysql_fetch_assoc($query_run))
    {

      
      array_push($a,"{$row['usn']}");

    } 

    $arrlength = count($a);

    for($x = 0; $x < $arrlength; $x++) {
      echo $a[$x];
      echo "<br>";
    }
    

  }
*/

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

    @media (min-width: 768px) {
      .nav.nav-justified > li > a > .quote {
        left: auto;
        top: auto;
        right: 20px;
        bottom: 0px;
      }  
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
    <div class="[ container text-center ]">
      <div class="[ row ]">
        <div class="[ col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 ]" role="tabpanel">
          <div class="[ col-xs-4 col-sm-12 ]">
          <form  method="POST" action="MainPageOthers.php">
              <p>
                <h2 align="center" style="color:white;">Select Batch Number</h2><br/>
                <?php

                echo "<select class='select form-control' name='batchnodd'>";


                $query = "SELECT DISTINCT batchno from `test1`";

                if($query_run = mysql_query($query)){


                  $batcharray=array();  

                  while($row = mysql_fetch_assoc($query_run))
                  {


                    array_push($batcharray,"{$row['batchno']}");

                  } 


                }

                echo $batcharray;


                foreach ($batcharray as $xyz) {
                  echo "<option value='$xyz'>Batch $xyz </option>";
                }
                echo "</select>";



                ?>

              </p><br/>
            </div>
          </div>
        </div>
      </div>
      <div class="[ container text-center ]">
        <div class="[ row ]">
          <div class="[ col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 ]" role="tabpanel">
            <div class="[ col-xs-4 col-sm-12 ]">
              <input type="submit" class="btn btn-gray btn-block" value="Continue">
            </div>
          </div>
        </div>
      </div>
    </form>




  </body>
  </html>


<html>
<head>
	<script type="text/javascript" src="js/jquery.min.js"></script>
   <script type="text/javascript" src="js/bootstrap.min.js"></script>
   <script type="text/javascript" src="js/scripts.js"></script>
   <script type="text/javascript" src="js/alertify.min.js"></script>

    <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/alertify.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/themes/default.min.css" />
</head>
</html>






<?php
include 'functions.php';


$connect = mysql_connect("localhost","root","") or die("Couldn't connect please contact your administrator");
mysql_select_db("login") or die("couldn't find database");


    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysql_query("SELECT * FROM users WHERE username='$username'");
    $nr = mysql_num_rows($query);
    session_start();


    if($username&&$password)
    {


        if($nr !== 0)
        {
            while($row = mysql_fetch_assoc($query))
            {
                $dbusername = $row['username'];
                $dbpassword = $row['password'];
            }
            if($username == $dbusername && md5($password)==$dbpassword)
            {
                @$_SESSION['username'] = $username ;
           
                if($username == "admin")
                header('Location: MainPageCoordinator.php');
                else
                header('Location: MainPageOthers.php');
            }
            else
            {
                $message = "Incorrect Password";
         echo "<script type='text/javascript'>alertify.alert('$message');</script>";

            }
        }
         else
         {
             $message = "That user does not exist";
             echo "<script type='text/javascript'>alertify.alert('$message');</script>";
        }
    }


    else
    {
         $message = "Please Enter a username and password";
         echo "<script type='text/javascript'>alertify.alert('$message');</script>";
    }


?>
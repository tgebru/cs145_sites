<?php 
  session_start();
  if (strlen(strstr($_SERVER['REQUEST_URI'],"login.php"))<=0)
      $_SESSION['url']=$_SERVER['REQUEST_URI'];
  include ('./mysqldb.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta http-equiv="content-language" content="en" />
<meta name="robots" content="all,follow" />
<meta name="author" lang="en" content="Rio Akasaka" />
<link rel="shortcut icon" href="favicon.ico" />
<meta name="description" content="AuctionBase is a website designed for CS145, a Stanford Database class" />
<meta name="keywords" content="..." />
<link href='http://fonts.googleapis.com/css?family=Rosario:400,400italic' rel='stylesheet' type='text/css'/>
<link href='http://fonts.googleapis.com/css?family=Terminal+Dosis:400,500,600' rel='stylesheet' type='text/css'/>
<link rel="stylesheet" media="screen,projection" type="text/css" href="css/reset.css" />
<link rel="stylesheet" media="screen,projection" type="text/css" href="css/main.css" />
<!--[if lte IE 6]><link rel="stylesheet" type="text/css" href="css/main-msie.css" /><![endif]-->
<link rel="stylesheet" media="screen,projection" type="text/css" href="css/style.css" />
<link rel="stylesheet" media="print" type="text/css" href="css/print.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
<script type="text/javascript" src="scripts/jquery.scrollTo-min.js"></script>
<script type="text/javascript" src="http://jqueryui.com/ui/jquery.effects.core.js"></script>
<script type="text/javascript" src="scripts/main.js"></script>
<title>AuctionBase | CS145</title>
</head>
<body>
<div id="main">
<!-- Header -->
<div id="header" >
<h1 id="logo"><a href="./" title="[Go to homepage]"><img src="images/logo.jpg" alt="" /></a></h1>
<hr class="noscreen" />
<!-- Navigation -->
<div id="nav">
<strong>Currently</strong> 
<?php
  $query = "select Time_Now from Time";
  try {
    $result = $db->query($query);
    $row = $result->fetch();
    echo ": ".htmlspecialchars($row["Time_Now"])." ";
  } catch (PDOException $e) {
    echo "Current time query failed: " . $e->getMessage();
  }
    $db=null;
?>
<a href="settime.php">| Set the time |</a>
<?php 
if ($_GET['logout']=="true"){ 
    session_destroy();
    $logged_in = <<<EOD
    <a href="login.php?msg=">Log in</a>
    </div><!--/nav-->
EOD;
} else if (isset($_SESSION['name'])){
    $link = $_SESSION['name'] . ".php";
    $logged_in = <<<EOD
    <a href = "index.php?logout=true"> Logout</a>
    </div> <!--/nav -->
EOD;
} else {
    $logged_in = <<<EOD
    <a href="login.php?msg="> Log in</a>
    </div><!--/nav--> 
EOD;
}
    echo $logged_in."\n";
?>
</div> <!--header-->

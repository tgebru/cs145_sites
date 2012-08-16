<?php 
  include ('./header.php');
  include ('./navigationbar.php');
  include ('./mysqldb.php');

$login_form = <<<EOD
<div id="col-top"></div>
<div id="col">
<div class="box">
<h1 id="slogan">Please enter your Login Information</h1>
<form class="s" name="login" id="login" method="GET" action="check_login.php">
<p><label class="new-label" for="username">Please Enter Username: <input type="text" size="40" name="username" id="username" value="Enter Username here" /></label></p>
<p><label class="new-label" for="password">Please Enter Password: <input type="password" size="40" name="password" id="password" value="abracadabra" /></label></p>
<p><input type="submit" class="lefts button4" name="submit" id="submit" value="Submit"/> <input type="reset" class="rights button4" name="reset" id="reset" value="reset"/></p>
</form>
</div><!--box-->
</div><!--col-->
<div id="col-bottom"></div>
EOD;
$msg = $_GET['msg']; //GET the message
if($msg!='') echo '<p>'.$msg.'</p>'; //If message is set echo it
if ($msg!="You are already logged in")echo $login_form;
?>
</body>
</html>

    <?php 
      include ('./header.php');
    ?>
    <?php 
      include ('./navigationbar.php');
    ?>
    <?php 
      include ('./currtime.php');
    ?>
    <?php 
      include ('./mysqldb.php');
      if (isset($_SESSION['name'])){
    ?>
    <hr class="noscreen"/>
    <!--2 columns -->
    <div id="cols2-top"></div>
    <div id="cols2" class="box">
    <div id="col-left">
    <center>
      <?php
	$MM = $_POST["MM"];
	$dd = $_POST["dd"];
	$yyyy = $_POST["yyyy"];
	$HH = $_POST["HH"];
	$mm = $_POST["mm"];
	$ss = $_POST["ss"];    
	$entername = $_SESSION['name'];
	if($_POST["MM"]) {
	  $selectedtime = $yyyy."-".$MM."-".$dd." ".$HH.":".$mm.":".$ss;
	  echo "<center> (Hello, ".$entername.". Previously selected time was: ".$selectedtime.".)</center>";
	}
	  try {
	      $query= "update Time set Time_Now=" . "\"$selectedtime\"";
	      $result = $db->query($query);
	  } catch (PDOException $e) {
	    echo "Current time query failed: " . $e->getMessage();
	  }
	$db=null;
	echo "<br/>";
        echo "<div class=\"title\">";
	echo "<h4>Please select a new time:</h4>";
        echo "</div><!--title-->";
      ?>
      <form method="POST" action="settime.php">
      <?php 
	include ('./timetable.html');
      ?>
      </form>
    <?php 
      }else {
    ?>
	<p>You must be <a class="login" href="login.php?msg=">Logged In</a> to change the time</p> 	
    <?php
      }
    ?>
    </center>
</div><!--main-->
</body>
</html>

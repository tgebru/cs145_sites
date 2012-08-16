<?php # currtime.php - show current time
  
  include ('./mysqldb.php');
?>

<center>
<h3> Current Time </h3> 

<?php
	    $query = "select Time_Now from Time";
	    try {
	    $result = $db->query($query);
	    $row = $result->fetch();
	    echo "Current time is: ".htmlspecialchars($row["Time_Now"]);
	  } catch (PDOException $e) {
	    echo "Current time query failed: " . $e->getMessage();
	  }
	  
	  $db = null;
?>

</center>
</html>


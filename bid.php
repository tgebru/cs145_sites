 <html>
    <head>
      <title>AuctionBase</title>
    </head>

    <?php 
      include ('./header.php');
    ?>

    <?php 
      include ('./navigationbar.php');
    ?>
    <?php 
      include ('./mysqldb.php');
    ?>

    <?php
	$id= $_POST["item_id"];
        $user_id=$_POST["user_id"];
        $amount = $_POST["amount"]; 
        $query  = "select Time_Now from Time"; 
        try {
	    $result = $db->query($query);
            $row=$result->fetch();
            $time=$row['Time_Now'];
            $query = "insert into Bids values(". $id. ","."\"" .  $user_id ."\"" . "," .$amount. "," ."\"". $time ."\"". ")";
            echo $query;
            $result = $db->query($query);
            $error=0;
	} catch (PDOException $e) {
	    echo "query failed: " . $e->getMessage();
            $error=1;
	}
	  $db=null;
       if ($result && $error!=1){
   ?>
      <div class "title">
         <p> Your Bid has been placed successfully</p>
         <a href="ending.php?count=10" class="button3">Go back to Bids</a>
     </div>
     <?php 
       }else{
     ?>
     <div class "error">
        <p>Your bid could not be placed because of an error</p> 
        <?php $url  = "item.php?id=" . $id; ?>
        <a href=<?php echo $url ?> class="button3">Try again</a>
        <br></br>
        <a href="ending.php?count=10" class="button3">Go back to Bids</a>
     </div>
     <?php } ?> 
<html>

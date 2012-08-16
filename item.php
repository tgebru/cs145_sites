    <?php 
      include ('./header.php');
    ?>
    <?php 
      include ('./navigationbar.php');
    ?>
    <?php 
      include ('./mysqldb.php');
    ?> 
    
    <!--Promo-->
    <div id="col-top"></div>
    <div id="col" class="box">
    <img src="images/item.jpeg" class="amazon"/>
    <?php $id= $_GET["id"];
     $query = "select Name, Currently as price, Started, Ends, Location, UserID, description from Items where ItemID=" .$id;
	try {
	    $result = $db->query($query);
	    $row= $result->fetch();
	    $description = $row['description']; 
	    $name = $row['Name'];
	    $price= $row['price'];
	    $start= $row['Started'];
	    $end  = $row['Ends'];
	    $location=$row['Location'];
            #$user_id=$row['UserID'];
	} catch (PDOException $e) {
	    echo "query failed: " . $e->getMessage();
	}
	  $db=null;
        $user_id=$_SESSION['name'];
    ?>
           <div id="col-text">
           <h2 id="slogan"><?php echo $name ?></h2>
           <?php if ($_GET["closed"] != "on") { ?>
	     <div id="price">
                 <span style='float:left;margin-right: 10px;'>Current bid: $<span id='cbid'><?php echo $price ?></span></span><a href="#bid" class="button3">Bid now</a> 
          <?php } ?>
          </div><!--price-->
       <div style='clear:both;'></div>
	 <div id="box">
	 <strong>Started: </strong><?php echo $start ?><strong><br> Ends: </strong><?php echo $end ?></br>
         <strong> Location: </strong><?php echo $location ?></br>
         </div><!--box-->
       <p id = 'desc'><p><?php echo $description ?></p>
       <?php if ($_GET["closed"] != "on") { ?>
      </div><!--col-text-->
      </div><!--col-->
      <div id="col-bottom"></div>
      <hr class="noscreen" />
      <!--2 columns-->
      <div id="cols2-top"></div>
      <div id="cols2" class="box">
      <div id="col-left">
       <div class="title">
            <h4><a name="_bid"></a>Bid</hr>
       </div><!--title-->      
      <?php
         if (isset($user_id)){
      ?>
       <div id="bidarea">
           <form class="s" id="bidform" action="bid.php" method="post">
                 <label class="four"><p>Enter your bid (above $<?php echo $price ?>):</label>  
                 <input type="text" size="10" class="text_field numeric" name="amount" />
                 <input type="hidden" name="item_id" value= <?php echo $id ?> /> 
                 <input type="hidden" name="user_id" value= <?php echo $user_id ?> /> 
                 <p style="width:100%;clear:both;float:left;">By pressing Bid below, you agree to AuctionBase's terms and conditions.</p>
                 <input type="submit" class="lefts button4" value="Bid"/>
           </form>
       </div><!--bidarea-->
<?php 
  }else {
?>
    <p>You Must be <a class="login" href="login.php?msg=">Logged In</a>to Bid</p> 	
<?php
  }
?>
<?php } 
else echo "<p>This bid is closed</p>";
?>
      </div> <!--cols2-->
      </div> <!--col-left-->
      <div id="cols2-bottom"></div>
  </div><!--main-->
</body>
<html>

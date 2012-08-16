    "<?php 
      include ('./header.php');
    ?>
    <?php 
      include ('./navigationbar.php');
    ?>
    <?php 
      include ('./mysqldb.php');
    ?>
    

    <!-- Promo-->
    <div id="col-top"></div>
    <div id="col" class="box">
      <h1 id="slogan">Welcome to Ebay</h1>
      <p>Spend your hard earned money on useless stuff</p>
      <p><img src="images/spend.png" alt="spend image" class="amazon"/></p>
    </div><!--col-->
    <div id="col-bottom"></div>
    <hr class="noscreen" />
    <!-- 2 columns -->
    <div id = "cols2-top"></div>
    <div id = "cols2" class="box">

        <div id="col-left">
          <ul class="ul-list nomb">
	   <?php
	    $query = "select i.ItemID, Name, Currently as price, timediff(i.Ends, t.Time_Now) as time_left from Items i, Time t where Time_Now<Ends and Time_Now > Started limit 0,10";
	    #$query = "select i.ItemID, Name, Currently as price, timediff(i.Ends, t.Time_Now) as time_left from Items i, Time t where Time_Now<Ends  limit 0,10";
	    try {
		$result = $db->query($query);
	        $res  = $result->fetch(); 
                if ($res != null){ 
$str = <<<EOD
<li><div class="title">
	   <h4>Hot auctions ending soon!</h4>
	</div> <!--title-->
</li>
EOD;
echo $str;
			foreach ($db->query($query) as $row){
			    $time = $row['time_left']; 
			    $name = $row['Name'];
			    $price= $row['price'];
			    $url  = "item.php?id=" . $row['ItemID'];
       ?>
                <br /><br /><li><span class='date'><span class='wah'><?php echo $time;?> </span></span> <a href=<?php echo $url;?> class='article'><?php echo $name; ?></a><span class='f-right'><a class='ico-comment'><?php echo "$". $price ?></a></span> 
       <?php
                         }
               }else {
$str = <<<EOD
<li><div class="title">
<h4>No Auctions Found</h4>
</div> <!--title-->
</li>
EOD;
         echo $str;
               }
	    } catch (PDOException $e) {
		echo "Current time query failed: " . $e->getMessage();
	    }
	$db=null;
	?>
    </ul>
     </div><!--col-left-->
    </div><!--col2-->
    <div id = "cols2-bottom"></div>
  </div><!--main-->
</body>
</html>

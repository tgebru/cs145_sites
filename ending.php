    <?php 
      include ('./header.php');
    ?>

    <?php 
      include ('./navigationbar.php');
    ?>
    <?php 
      include ('./mysqldb.php');
    ?>

    <hr class="noscreen" />
    <!-- 2 columns -->
    <div id = "cols2-top"></div>
    <div id = "cols2" class="box">

    <div id="col-left">
	<div class="title">
	<?php
            $contains=  $_GET["contains"];
            $closed  =  $_GET["closed"];
            echo $closed;

            if ($contains==""){
		$category = $_GET["category"];
		if ($category == ""){
                    $count = $_GET["count"];
                    $keyword = $_GET["keyword"];
                    if ($keyword != ""){
			$query = "select i.ItemID, Name, Currently as price, timediff(i.Ends, t.Time_Now) as time_left from Items i, Time t where Time_Now < Ends and Time_Now > Started and (i.Name like '%$keyword%' or i.Description like '%$keyword%') limit 0," . $count;
                    } else {
			$query = "select i.ItemID, Name, Currently as price, timediff(i.Ends, t.Time_Now) as time_left from Items i, Time t where Time_Now < Ends and Time_Now > Started limit 0," .$count;
                    }
		}else {
		    $query = "select i.ItemID, Name, Currently as price, timediff(i.Ends, t.Time_Now) as time_left from Items i, Categories c, Time t where i.ItemID=c.ItemID and Time_Now < Ends  and Time_Now > Started and c.Category like '%$category%' limit 0,10";
		}
           } else {
                $title =    $_GET["searchtitle"];
                $orderby=   $_GET["orderby"];
                $desc  =    $_GET["searchdesc"];
                $minprice = $_GET["minprice"];
                $maxprice = $_GET["maxprice"];
                $buynow   = $_GET["buynow"];
                $count    = $_GET["count"];
                $keyword  = $_GET["keyword"];
                $key_title = "";
                $key_desc  = "";
                
                if ($title =="on") $key_title=$keyword; 
                if ($desc =="on")  $key_desc=$keyword;

                if ($orderby=="Lowest Price"){ 
                    $orer="Currently";
                }else{
                    $order="time_left";
                }
                if ($minprice !="on") $minprice="0";
                if ($maxprice !="on") $maxprice="1000000000";
                if ($buynow !="on"){
		    $query = "select i.ItemID, Name, Currently as price, timediff(i.Ends, t.Time_Now) as time_left from Items i, Time t where Time_Now < Ends and Time_Now > Started and i.Name like '%$key_title%' and  i.Description like '%$key_desc%' and Currently < $maxprice and Currently > $minprice order by $order limit 0," . $count;
                }else {
		    $query = "select i.ItemID, Name, Currently as price, Buy_Price as buy, timediff(i.Ends, t.Time_Now) as time_left from Items i, Time t where Time_Now <  Ends and Time_Now > Started and i.Name like '%$key_title%' and  i.Description like '%$key_desc%' and Currently < $maxprice and Currently > $minprice and Buy_Price is not null order by $order limit 0," . $count;
                }
                if ($closed=="on"){
		    $query = "select i.ItemID, Name, Currently as price, timediff(i.Ends, t.Time_Now) as time_left, Bids.UserID as winner from Items i, Bids, Time t where Time_Now >=  Ends and Time_Now > Started and i.Name like '%$key_title%' and  i.Description like '%$key_desc%' and Currently < $maxprice and Currently > $minprice and Bids.ItemID=i.ItemID group by Bids.UserID having max(Amount) order by $order limit 0," . $count;
                }
           } 
	    try {
		$result = $db->query($query);
		$row  = $result->fetch(); 
                if ($row != null){
	            $text = <<<EOD
                     <h4>Auctions ending soon</h4>
  	            </div> <!--title-->
                    <br /><br /> 
                   <ul class="ul-list nomb">
EOD;
                } else {
	            $text = <<<EOD
                     <h4>No Auctions Found</h4>
  	            </div> <!--title-->
                    <br /><br /> 
                   <ul class="ul-list nomb">
EOD;
                }
                echo $text;
                foreach ($db->query($query) as $row){
		    $time = $row['time_left']; 
		    $name = $row['Name'];
		    $price= $row['price'];
                    $winner=$row['winner'];
                    $buy   =$row['buy'];
                    $url  = "item.php?id=" . $row['ItemID'];
                    if ($closed=="on") $url=$url."&closed=on";
       ?> 
               <li><span class='date'><span class='wah'><?php echo $time;?> </span></span><a href=<?php echo "\"".$url."\"";?> class='article'><?php echo $name; ?></a><span class='f-right'><a class='ico-comment'><?php echo "$". $price ?><?php if ($buynow=="on") echo "Buy Price: $".$buy ?><?php if ($closed=="on") echo "Winner: ".$winner?>
</a></span><br /><br /></li>
       <?php
                  }
	    } catch (PDOException $e) {
		echo "Query failed: " . $e->getMessage();
	    }
	$db=null;
	?>
    </ul>
</div><!--col-left-->
</div><!--cols2-->
<div id="cols2-bottom"></div>
</div><!--main-->
</body>
</html>
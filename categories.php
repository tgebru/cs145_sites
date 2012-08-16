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
    <div id="cols3-top"></div>
    <div id="cols3" class="box">
	<?php
	    $query = "select distinct Category from Categories";
            $i=0;
            $str="";
	    try {
                foreach ($db->query($query) as $row){
                    $i=$i+1;
		    $category = $row['Category']; 
if ($i==1){
$str = <<<EOD
    <!--col1-->
    <div class="col">
    <h3><a href = "#">Product I.</a></h3>
    <p class="nom t-center"><a href="#"><img src="images/image_1.png" alt="" /></a></p>
    <div class="col-text">
EOD;
echo $str;
}elseif ($i==349) {
$str = <<<EOD
    <!--col2-->
    </div><!--col-text-->
    </div> <!--col-->
    <hr class="noscreen" />
    <!--col2--><div class="col">
    <h3><a href = "#">Product II.</a></h3>
    <p class="nom t-center"><a href="#"><img src="images/image_3.png" alt="" /></a></p>
    <div class="col-text">
EOD;
    echo $str;
}elseif ($i==696){
$str =<<<EOD
    </div><!--col-text-->
    </div> <!--col-->
    <hr class="noscreen" />
    <!--col3-->
    <div class="col last">
    <h3><a href = "#">Product III.</a></h3>
    <p class="nom t-center"><a href="#"><img src="images/image_2.png" alt="" /></a></p>
    <div class="col-text">
EOD;
         echo $str;
}
        $unescaped = "ending.php?category=". $category;
        ?> 
                <a href=<?php echo "\"".htmlentities($unescaped)."\""?>><?php echo htmlentities($category); ?></a><br /> 
       <?php
                  }
	    } catch (PDOException $e) {
		echo "query failed: " . $e->getMessage();
	    }
	$db=null;
	?>
</div><!--col-text-->
</div><!--col-->
<hr class="noscreen" />
</div><!--cols3-->
<div id="cols3-bottom"></div>
</div><!--main-->
</body>
</html>

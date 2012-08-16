<?php 
$url = $_SERVER['REQUEST_URI'];
$id1="none1";
$id2="none2";
$id3="none3";
$id4="none4";

     if (strpos($url, 'index.php')  !== false )     $id1= "tray-active";
else if (strpos($url, 'ending.php') !== false )     $id2= "tray-active";
else if (strpos($url, 'categories.php') !== false ) $id3= "tray-active";
else if (strpos($url, 'asearch.php') !== false )    $id4= "tray-active";
?>
<div id="tray">
    <ul>
        <li id=<?php echo "\"".$id1."\"" ?>><a href="index.php">Homepage</a></li>
        <li id=<?php echo "\"".$id2."\"" ?>><a  href="ending.php?count=10">Ending Soon!</a></li>
        <li id=<?php echo "\"".$id3."\"" ?>><a  href="categories.php">Categories</a></li>
        <li id=<?php echo "\"".$id4."\"" ?>><a href="asearch.php">Advanced Search</a></li>
    </ul>
  
    <!--Search-->
    <div id="search" class="box">
         <form action="ending.php" method="get">
              <div class="box">
                <div id="search-input"><span class="noscreen">Search:</span><input type="text" size="30" id="query" name="keyword" value="Search" /></div>
                <input type="hidden" name="count" value="50"/>
                <div id="search-submit"><input type="image" src="images/search-submit.gif" alt="Search Box" value="OK" /></div>
               </div> <!--box-->
         </form>
    </div> <!--search-->

    <script type="text/javascript">
      $("#query").click(function() {
	if ($(this).val() == "Search") {
	    $(this).val("");
	}
      });
    </script>
<hr class="noscreen" />
</div> <!--tray-->

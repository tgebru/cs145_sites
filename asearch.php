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
    <!--2 columns -->
    <div id="cols2-top"></div>
    <div id="cols2" class="box">
	<!--search box-->
	<div id="col-right">
	   <h4><span>Filter</span></h4>
	   <div class="box">
	       <label class="four">Category: All<br /><br /></label>
	       <form class="s" action="ending.php" method="get">
		  <p><label class="four"><input type="radio" class="text_field" name="contains" value="contains"/>Contains<input type="radio" class="text_field" name="contains" value="starts" checked="checked" />Starts with</label></p>
		   <p><label class="four">Keyword<input type="text" size="23" class="text_field" name="keyword" id="query2" value="" /></label><br /></p>
		   <p><label>Search in: <input type="checkbox" class="text_field" name="searchtitle" id="searchtitle" checked="checked"/> Title <input type="checkbox" class="text_field" name="searchdesc" id="searchdesc" /> Description</label></p>
		   <p><label class="four">Order by <input type="radio" class="text_field" name="orderby" value="price"/> Lowest Price<input type="radio" class="text_field" name="orderby" value="" checked="checked" /> Ending Soonest</label></p>
		  <div style="float:left;clear:both;">Items priced between<br/><input type="text" size="10" class="text_field numeric" name="minprice" id="minprice" />and <input type="text" size="10" class="text_field numeric" name="maxprice" id="maxprice" /><br /><br /></div>
		 <p> <label>Sale format: <input type="checkbox" class="text_field" name="buynow" id="buynow" />Buy It Now</label></p>
		  <p><label>Only Closed Auctions: <input type="checkbox" class="text_field" name="closed" id="closed" /></label></p>
		  <p><label class="four">Show   <select name="count" id="count" class="chzn-select" style="width:70px;"><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> results</label></p>
                 <div><input type="submit" class="lefts button4" value="Search"/></div>
</form>
	  </div><!--/box-->
	</div><!--/col-right-->
     </div> <!--/cols2-->
<div id="cols2-bottom"></div>
</div><!--main-->
</body>
</html> 

/* ----------------------------------------------------------------------------------------------------------

    Output device: screen, projection

    Author:     Nuvio (www.nuvio.cz)
    Update:     2008-07-29, 18:30 GMT+1
    Version:    2.2.6 (2008-07-13, 14:28 GMT+1)

    Structure:
        display; position; z-index; float; clear; width; height; overflow; margin; padding; border; background; align; font;

    Content:
    
        1) HTML tags
        2) HTML styles
        3) Layout
        4-1) Page: Homepage
        5) Others

---------------------------------------------------------------------------------------------------------- */

/* ----------------------------------------------------------------------------------------------------------
1) HTML tags
---------------------------------------------------------------------------------------------------------- */

body {background:url("../images/bg.gif") 0 0 repeat-x;margin-top:-20px;font:0.8em/1.5 "arial", sans-serif;}
h1, h2, h3, h4, h5, h6, p, address, blockquote, table, dl, fieldset {margin:15px 0;}

/* ----------------------------------------------------------------------------------------------------------
2) HTML styles
---------------------------------------------------------------------------------------------------------- */
ul.ul-01 {margin:15px 0; list-style:none;}
ul.ul-01 li {padding:2px 0 2px 25px; background:url("../images/ul-01.gif") 0 50% no-repeat; font-size:85%;}

ul.ul-list {margin:15px 0; list-style:none;}
ul.ul-list li {padding:1px 0;}
ul.ul-list span.date {clear:both;padding-right:10px;width:150px;display:block;float:left;}
ul.ul-list .article {display:block;float:left;width:360px;}
ul.ul-list .f-right {display:block;float:left !important;width:60px;}
.nomb li {
    margin-bottom:5px !important;float:left;width:600px;
}

/* ----------------------------------------------------------------------------------------------------------
3) Layout
---------------------------------------------------------------------------------------------------------- */

#main {background:url("../images/bg2.gif") 0 0 repeat-x;width:960px; margin:0 auto; overflow:hidden;}

    #header {position:relative; height:90px; padding:30px 20px 15px 20px;}

        #logo {margin:0;}
    
        #nav {position:absolute; top:80px; right:20px; margin:0;}
        #nav span {margin:0 8px;}
        #nav #nav-active {font-weight:bold; text-decoration:none;}
    #tray {position:relative; width:960px; height:45px; background:url("../images/tray.gif") 0 0 no-repeat; overflow:hidden; font:500 100%/1 "Helvetica Neue, Helvetica, Arial",sans-serif;}
    #tray ul {margin:0 20px; list-style:none;}
    #tray li {display:inline;}
    #tray li a {display:block; float:left; padding:17px 20px 17px 18px; background:url("../images/tray-separator.gif") 100% 0 no-repeat; text-decoration:none;}
    #tray li a:hover {background:url("../images/tray-hover.gif");}
    #tray li#tray-active a {background:url("../images/tray-active.gif");}
        #search {position:absolute; top:8px; right:20px;}
        #search div {position:relative; width:235px;}
        
        #search #search-input {position:absolute; top:0; left:0; width:200px; height:30px; background:url("../images/search-input.png") 0 0 no-repeat; overflow:hidden;}
        #search #search-input input {outline: none;width:186px; margin:5px; border:0; font-size:18px; font-weight:300;margin-left:8px;font-family:Helvetica Neue, Helvetica, Arial, sans-serif;}
        #search #search-submit {position:absolute; top:0; right:0; width:30px;}

    #footer {clear:both; padding:20px 20px 40px 20px; font-size:85%;}
    #footer p {margin:0;}

/* ----------------------------------------------------------------------------------------------------------
4-1) Page: Homepage
---------------------------------------------------------------------------------------------------------- */

#col-top {width:960px; height:5px; margin-top:15px; background:url("../images/col-top.gif") 0 0 no-repeat; font-size:0; line-height:0; overflow:hidden;}
#col-bottom {width:960px; height:5px; margin-bottom:15px; background:url("../images/col-bottom.gif") 0 0 no-repeat; font-size:0; line-height:0; overflow:hidden;}

#col {position:relative; padding:15px 30px 15px 20px; background:url("../images/col.gif") 0 0 repeat-y;}
*/

    #ribbon {position:absolute; top:-5px; left:0; width:100px; height:100px; background:url("../images/ribbon.gif") 0 0 no-repeat; font-size:0; line-height:0; overflow:hidden; z-index:10;}
    #col-browser {position:relative; float:left; width:280px; height:215px; background:url("") 0 0 no-repeat;}
    #col-browser img {position:absolute; top:18px; left:60px;}
#col-browser img {
			border: 15px solid #fff;
			border-bottom: 65px solid #fff;
		
			-webkit-transform: rotate(1deg);
			-moz-transform: rotate(1deg);		
            -webkit-box-shadow: 6px 6px 8px rgba(0, 0, 0, 0.1);
			-moz-box-shadow: 6px 6px 8px rgba(0, 0, 0, 0.1);
		}
        #desc {
        
        font-size:18px;
        font-family:Helvetica Neue, Helvetica, Arial, sans-serif;
        font-weight:300;
        }
		/* ACTIVE + FOCUS */
.button4:active,
.button4:focus {
   
}
#quota { margin-left: 0px }
/* ACTIVE + FOCUS */
.button4:active,
.button4:focus {
   
}
#quota { margin-left: 0px }
.rights {
margin-left:15px;
}
a.button4 {
	background:#489615;
    color: #FFFFFF;
     border: 0 none;
    border-radius: 9px 9px 9px 9px;
    cursor: pointer;
     -webkit-border-radius: 9px;
    -moz-border-radius: 9px;
    float:left;
    text-align: center;
    text-decoration: none;
    text-shadow: 0 1px 0 rgba(0, 0, 0, 0.5);
    box-shadow: 0 3px rgba(0, 0, 0, 0.1), 0 -4px rgba(0, 0, 0, 0.1) inset;
    font-size: 16px;
    font-family:Trebuchet MS;
    padding: 5px 16px 5px;
    background-image: linear-gradient(#84C63C, #489615);
background-image: -moz-linear-gradient(#84C63C, #489615);
background-image: -webkit-linear-gradient(#84C63C, #489615);

}
.yLabel {
	font-size:9px;
	font-family:Helvetica Neue, Helvetica, sans-serif;
	font-weight:200;
}
a.button3:hover,a.button4:hover {
color:#fff;
	box-shadow:0 3px rgba(0,0,0,0.1),0 -4px rgba(0,0,0,0.1) inset,0 0 100px rgba(255,255,255,0.2) inset;-moz-box-shadow:0 3px rgba(0,0,0,0.1),0 -4px rgba(0,0,0,0.1) inset,0 0 100px rgba(255,255,255,0.2) inset;-webkit-box-shadow:0 3px rgba(0,0,0,0.1),0 -4px rgba(0,0,0,0.1) inset,0 0 100px rgba(255,255,255,0.2) inset
}
rect {
  fill: steelblue;
  stroke: white;
}
line {
  stroke: black;
  shape-rendering: crispEdges;
}

#box {
margin-top:25px;
background:#fbf7aa;
 -webkit-border-radius: 9px;
    -moz-border-radius: 9px;
    padding:10px;
    border:3px solid #f9e98e;
}
a.button3 {
	background:#0e58ae;
    color: #FFFFFF;
     border: 0 none;
     -webkit-border-radius: 9px;
    -moz-border-radius: 9px;
    border-radius: 9px 9px 9px 9px;
    cursor: pointer;
    float:left;
    text-align: center;
    text-decoration: none;
    text-shadow: 0 1px 0 rgba(0, 0, 0, 0.5);
    box-shadow: 0 3px rgba(0, 0, 0, 0.1), 0 -4px rgba(0, 0, 0, 0.1) inset;
    font-size: 16px;
    font-family:Trebuchet MS;
     padding: 5px 16px 5px;
background-image: linear-gradient(#4195DD, #0e58ae);
background-image: -moz-linear-gradient(#4195DD, #0e58ae);
background-image: -webkit-linear-gradient(#4195DD, #0e58ae);


}
input.text_field, .chzn-choices {
 -webkit-border-radius: 5px !important;
    -moz-border-radius: 5px !important;
    border-radius: 5px !important;
    background: #fff url(http://www.pinolio.com/images/tf_bg.gif) no-repeat;
   
    color: #333;
    border: 1px solid #ccc;
    padding:3px;
    font-size: 13px;
}
		#col-browser img:hover {
			-webkit-box-shadow: 6px 6px 8px rgba(0, 0, 0, 0.1);
			-moz-box-shadow: 6px 6px 8px rgba(0, 0, 0, 0.1);
			-webkit-transform: rotate(1deg) scale(1.05);
			-moz-transform: rotate(1deg) scale(1.05);
		}

    #col-text {float:right;margin-left:20px; width:580px; padding-top:15px; line-height:1.7;}

        #slogan {overflow:hidden;font-family: 'Terminal Dosis', sans-serif;
font-weight:300;color:#067e00;position:relative; margin:0; padding:0; font-size:30px;}
        #slogan span {display:block; position:absolute; top:0; left:0; z-index:1; width:100%; height:100%; margin:0; padding:0; background:url("../tmp/slogan.gif") 0 0 no-repeat;}
        #btns {margin-top:25px; margin-bottom:0;}
p {font-size:15px;}
#cols2-top {width:960px; height:5px; margin-top:15px; background:url("../images/cols2-top.gif") 0 0 no-repeat; font-size:0; line-height:0; overflow:hidden;}
#cols2-bottom {width:960px; height:5px; margin-bottom:15px; background:url("../images/cols2-bottom.gif") 0 0 no-repeat; font-size:0; line-height:0; overflow:hidden;}
#cols2 {background:url("../images/cols2.gif") 0 0 repeat-y;}

    #cols2 #col-left {float:left; width:595px; padding:20px;}
    #cols2 #col-right {float:right; width:268px; margin-right:1px; padding:20px;}
    
        #cols2 #col-left h4, #cols2 #col-right h4 {margin:0; font-size:100%;}
        #cols2 #col-left .title {background:url("../images/dot.gif") 0 50% repeat-x;}
        #cols2 #col-left .title h4 {display:inline; padding-right:10px;}
        #cols2 #col-left .title span {padding-left:10px;}

        #cols2 .box {margin-top:0px;}
        #cols2 #col-right h4 {background:url("../images/dot-02.gif") 0 50% repeat-x;}
        #cols2 #col-right h4 span {padding-right:10px;}
        #cols2 .col-right-img {float:left; width:65px;}
        #cols2 .col-right-text {float:right; width:190px;}
        #cols2 .col-right-text p {margin:0;}

#cols3-top {width:960px; height:5px; margin-top:15px; background:url("../images/cols3-top.gif") 0 0 no-repeat; font-size:0; line-height:0; overflow:hidden;}
#cols3-bottom {width:960px; height:5px; margin-bottom:15px; background:url("../images/cols3-bottom.gif") 0 0 no-repeat; font-size:0; line-height:0; overflow:hidden;}
#cols3 {background:url("../images/cols3.gif") 0 0 repeat-y;}

    .col {float:left; width:308px; padding:0 1px; margin-right:15px;}
    .col.last {margin-right:0;}
    .col h3 {margin:0; padding:7px 15px 12px 50px; background:url("../images/cols3-title.gif") 20px 40% no-repeat; font-size:120%;}

        .col-text {padding:20px; border-top:1px solid #DFDFDF;}
        .col-text p {margin:0;}
        #col-text p {font-size:14px;}
        .col-text ul {margin-bottom:0;}
        .col-more {padding:10px 10px 1px 0; text-align:right;}

/* ----------------------------------------------------------------------------------------------------------
5) Others
---------------------------------------------------------------------------------------------------------- */

.ico-comment {padding-left:18px; background:url("../images/auction_hammer.png") 0 50% no-repeat;}
.ico-rss {padding-left:18px; background:url("../images/ico-rss.gif") 0 50% no-repeat;}

.smaller {font-size:85%;}

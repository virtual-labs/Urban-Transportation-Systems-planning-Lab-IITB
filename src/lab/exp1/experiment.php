<?php
//include_once("../sessioncheck.php");
  include_once("header.php");
   getHeader(4,"Volume, Speed and Delay Study at Intersection","");
?> 
<script language="JavaScript"> 
function fullScreen(theURL) { 
	 var width=screen.availWidth-20;//screen.width;
	 var height=screen.availHeight-70;//screen.height;
	 theURL= theURL + "?width="+ width + "&height=" + height;
	 window.open(theURL, '', 'fullscreen=yes,scrollbars=no,resizable=no'); 
} 
</script>


<div id="body">
<h1 class="title_header1" align="right">Volume, Speed and Delay Study at Intersection</h1>
<h1 class="designation">Experiment</h1>
<p><span style="font-family: verdana,geneva; font-size: medium;"><a href="javascript:void(0);" onClick="fullScreen('applet/T-sectionSimulation1.php')"><strong> <span style="text-decoration: underline;">Click Here</span> To Perform Experiment</strong></a></p>
</div>
<?php
  include_once("footer.php");
  getFooter(4);
?>   
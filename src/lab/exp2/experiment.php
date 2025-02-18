<?php
include_once("../sessioncheck.php");
include_once("../util/system.php");
  include_once("header.php");
   getHeader(4,"Regression Analysis","Trip Generation");
?> 
<p><script language="JavaScript"> 
function fullScreen1(theURL) { 
	 var width=screen.availWidth-20;//screen.width;
	 var height=screen.availHeight-70;//screen.height;
	 theURL= theURL + "?width="+ width + "&height=" + height;
	 window.open(theURL, 'windowName', 'fullscreen=yes,scrollbars=yes,resizable=no,menubar=yes,titlebar=yes,toolbar=yes'); 
} 
</script>
<div id="body">
<h1 class="title_header1" align="right">Regression Analysis</h1>
<span class="title">Input files needed</span>
<span><b>For data analysis.</b></span>
<ul class="objective">
<li>
Household wise socio-economic characteristics and number of trips generated for base year. 
</li>
</ul>
<br>
<span><b>To Estimate Trip rates and to forecast trip rates for future year.</b></span>
<ul class="objective">
<li>
Household wise socio-economic characteristics and number of trips generated for base year. 
</li>
<li>
Household wise socio-economic characteristics for future year. 
</li>
</ul>
<p><font color="red">*</font><font style="font-size:12px;">Default input files with specified format are given below.</font></p>
<span class="title">Experiment</span>
<p><span class="title1"><a href="javascript:void(0);" onClick="fullScreen1('applet/DataAnalysis1.php')";><strong> <span style="text-decoration: underline;">Click Here</span> To Perform Experiment with JAVA based Simulation</strong></a></p>
<!-- <p><a href="javascript:void(0);" onClick="fullScreen('checkprerequisite.php')";><span style="color:#FF0000;">( Click to check your system settings to execute above simulation )</span></a></p>
<br> -->
<p><span class="title1"><a href="DataRegrMod.php"><strong> <span style="text-decoration: underline;">Click Here</span> To Perform Experiment with PHP based Simultation</strong></a></span>
</span></p>
<br>
<span class="title">See the default Excel / CSV input files for file format:</b></span>
<p>Download &amp; Save the file on your computer to perform experiment.</p>
<table class="table">
<tbody>
<tr>
<td style="padding-left: 60px;"><a href="<?echo DOC_FOLDER?>/pune.xls"><img src="img/SmallXLS.jpg" alt="Excel" />&nbsp;<strong>(Click Here) for Input File (xls)</a></strong></td>
<td style="padding-left: 60px;"><a href="<?echo DOC_FOLDER?>/punecsv.csv"><img src="img/SmallCSV.jpg" alt="CSV" />&nbsp;<strong>(Click Here) for Input File (csv)</a></strong></td>
</tr>
</tbody>
</table>
</div>
<?php
  include_once("footer.php");
  getFooter(4);
?>  	

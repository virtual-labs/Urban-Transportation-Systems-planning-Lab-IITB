<?php
include_once("../sessioncheck.php");
include_once("header.php");
  getHeader(5,"Regression Analysis","Trip Generatrion");
?> 
 
	<div id="body">
<h1 class="title_header1" align="right">Regression Analysis</h1>
    <h1 class="designation">FAQs</h1>
    <ul class="questions">
      <li>What is Difference between Trip   and  journey?<span class="answers">A trip is a one-way person movement by a mechanized mode of transport, having two trip ends, an origin (the start of the trip) and a destination (the end of the trip).
journey is a one-way movement from a point of origin to a point of destination.</span></li>
      <li>what is Non-home based trip and home based trip?<span class="answers">The trip in which at least one of trip ends is home, is called as home based trip.
The trip in which neither of the end is home, is called as non home based trip.</span></li>
      <li>What are trip production and trip attraction?<span class="answers">Trip production - this is defined as the home end of an HB trip or as the origin of NHB trip.
Trip attraction - this is defined as the home end of an HB trip or the destination of NHB trip.
 </span></li>
      <li>When same zone behaves as an trip production and attraction?<span class="answers">
        <img src="img/fig26.jpg" style="display:block;margin-left: auto;margin-right: auto "></img>If one person goes for the work and then from the work place he goes to workshop then zones behaves as trip production and attraction zone</span></li>
      <li>What are trip generation rates?<span class="answers">Trip generation rates are average rates used to estimate how much traffic a specific land use will produce. For example, the amount of traffic generated by a group of homes is different from a business park.</span></li>
      <li>What are zones?<span class="answers">Regions within the study area that contain homogenous land uses and can be described accurately by only a few variables.</span></li>
    </ul>
  </div>

  <?php
  include_once("footer.php");
  getFooter(5);
?> 
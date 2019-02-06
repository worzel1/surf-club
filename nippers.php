<html>
<head>   
<link href="calendar.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<style>.w3-row-padding img {margin-bottom: 12px}</style>
<?php

include 'schedule.php';

$schedule = new simpleXMLElement($xmlstr);

$xml=simplexml_load_file("newsletter.xml") or die("Error: Cannot create object"); 
$newsdate = $xml['date'];
  

// <!-- First Grid -->
  echo '<div class="w3-row-padding w3-padding-64 w3-container">
	  <div class="w3-content">
		<div class="w3-half">
		  <h1>That was the week that was.........</h1>' ;
		  echo '<h3>' . $newsdate . '</h3>';
  foreach($xml->half[0]->children() as $paras) {
		echo (isset($paras->head)?'<h5 class="w3-padding-32">' . $paras->head . '</h5>':'');
		echo (isset($paras->para)?'<p class="w3-text-grey">' . $paras->para . '</p>':'');
		echo (isset($paras->point)?'<div class="w3-text-grey">' . $paras->point . '</div>':'');
   }	
		
  echo '  </div>
          <div class="w3-half ">
		  <i class="w3-padding-64 w3-text-red"></i>
		  <!-- Portfolio Section -->
  <div class="w3-padding-32 w3-content" id="portfolio">
  
     <!-- Grid for photos -->
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-half">
        <img src="/images/patrol1.jpg" style="width:100%">
        <img src="/images/patrol4.jpg" style="width:100%">
        <img src="/images/patrol5.jpg" style="width:100%">
      </div>

      <div class="w3-half">
        <img src="/images/patrol7.jpg" style="width:100%">
        <img src="/images/patrol8.jpg" style="width:100%">
        <img src="/images/patrol2.jpg" style="width:100%">
      </div>
    <!-- End photo grid -->
    </div>
  <!-- End Portfolio Section -->
  </div>
		</div>
       </div>
	</div>';
	 


//<!-- Second Grid -->
echo '<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-half w3-center">
       <!-- Portfolio Section -->
  <div class="w3-padding-32 w3-content" id="portfolio">
  
     <!-- Grid for photos -->
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-half">
        <img src="/images/patrol1.jpg" style="width:98%">
        <img src="/images/patrol4.jpg" style="width:98%">
        <img src="/images/patrol5.jpg" style="width:98%">
      </div>

      <div class="w3-half">
        <img src="/images/patrol7.jpg" style="width:100%">
        <img src="/images/patrol8.jpg" style="width:100%">
        <img src="/images/patrol2.jpg" style="width:100%">
      </div>
    <!-- End photo grid -->
    </div>
  <!-- End Portfolio Section -->
   </div> 
 </div>
    <div class="w3-half">';
	  
      foreach($xml->half[1]->children() as $paras) {
		echo (isset($paras->head)?'<h5 class="w3-padding-32" style="margin-left:12px">' . $paras->head . '</h5>':'');
		echo (isset($paras->para)?'<p class="w3-text-grey" style="margin-left:12px">' . $paras->para . '</p>':'');
		echo (isset($paras->point)?'<div class="w3-text-grey" style="margin-left:32px">' . $paras->point . '</div>':'');
   }	
 echo '</div>
  </div>
</div>;

<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">Quote of the day: live life</h1>
</div>';
  
  
  
  
  
 


echo '<div class="w3-container">
  <hr>
  <div class="w3-center">
    <h2>2018-2019 Sorrento SLSC Nipper Program </h2>';
echo  '<p w3-class="w3-large">' . "Keep Safe, Have Fun and Always be Nice to All" . '</p>
</div>';

echo '<div class="w3-responsive w3-card-4">
<table class="w3-table w3-striped w3-bordered">
<thead>
<tr class="w3-theme">
  <th>Date</th>
  <th>Activity</th>
  <th>Location</th>
  <th>Start</th>
  <th>end</th>
  <th>note</th>
</tr>
</thead>
<tbody>';

foreach($schedule->children() as $activities) {
	$dt = $activities->cdate;
    $event = $activities->activity;
	$loc = $activities->location;
	$strt = $activities->stime;
	$end = $activities->etime;
	$note = $activities->note;
	
	echo '<tr>
	  <td>' . $dt . '</td>
	  <td>' . $event . '</td>
	  <td>' . $loc . '</td>
	  <td>' . $strt . '</td>
	  <td>' . $end . '</td>
	  <td>' . $note . '</td>
	</tr>';
}	
	
	
echo '</tbody>
</table>
</div>';

?>
<!-- Work Section -->
<div class="w3-container" style="padding:128px 16px" id="work">
  <h3 class="w3-center">Nipper Gallery</h3>
  

  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-col l3 m6">
      <img src="images/patrol10.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="">
    </div>
    <div class="w3-col l3 m6">
      <img src="images/patrol9.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="">
    </div>
    <div class="w3-col l3 m6">
      <img src="images/patrol5.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="">
    </div>
    <div class="w3-col l3 m6">
      <img src="images/patrol8.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="">
    </div>
  </div>

  <div class="w3-row-padding w3-section">
    <div class="w3-col l3 m6">
      <img src="images/patrol1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="">
    </div>
    <div class="w3-col l3 m6">
      <img src="images/patrol2.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="">
    </div>
    <div class="w3-col l3 m6">
      <img src="images/patrol12.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="">
    </div>
    <div class="w3-col l3 m6">
      <img src="images/patrol11.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="">
    </div>
  </div>
</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>
</body>
</html>        
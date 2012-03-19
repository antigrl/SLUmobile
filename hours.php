<p><h3><?php print "Today's Hours: ". date('l, F jS, Y'); ?></h3></p>
<hr>
<!-- Hours for Pius -->
<p>
<?php
$today = date("Y-m-d");
    $feedURL = "http://www.google.com/calendar/feeds/slu.edu_eadq0giqc5h6bf3l3f50jk34jo%40group.calendar.google.com/public/basic?start-min=".$today."T00:00:00&start-max=".$today."T23:59:59&ctz=America/Chicago";
			    //print $feedURL;
				$sxml = simplexml_load_file($feedURL);

   $counts = $sxml->children('http://a9.com/-/spec/opensearchrss/1.0/');
   $total = $counts->totalResults; 
?>

<?php

foreach ($sxml->entry as $entry) {
  $caltitle = stripslashes($entry->title);
   echo "<strong>Pius XII Memorial Library</strong><br />$caltitle";
}
?>
</p>

<!-- Hours for MCL -->
<p>
<?php
$today = date("Y-m-d");
    $feedURL = "http://www.google.com/calendar/feeds/slu.edu_ffd8isj5p44ee2vohkv673jclk%40group.calendar.google.com/public/basic?start-min=".$today."T00:00:00&start-max=".$today."T23:59:59&ctz=America/Chicago";
			    //print $feedURL;
				$sxml = simplexml_load_file($feedURL);

   $counts = $sxml->children('http://a9.com/-/spec/opensearchrss/1.0/');
   $total = $counts->totalResults; 
?>

<?php

foreach ($sxml->entry as $entry) {
  $caltitle = stripslashes($entry->title);
   echo "<strong>Medical Center Library</strong><br />$caltitle";
}
?>
</p>

<!-- Hours for Law -->
<p>
<?php
$today = date("Y-m-d");
    $feedURL = "http://www.google.com/calendar/feeds/slu.edu_t2ahlbgihctv2037qf8cv520s0%40group.calendar.google.com/public/basic?start-min=".$today."T00:00:00&start-max=".$today."T23:59:59&ctz=America/Chicago";
			    //print $feedURL;
				$sxml = simplexml_load_file($feedURL);

   $counts = $sxml->children('http://a9.com/-/spec/opensearchrss/1.0/');
   $total = $counts->totalResults; 
?>

<?php

foreach ($sxml->entry as $entry) {
  $caltitle = stripslashes($entry->title);
   echo "<strong>Omer Poos Law Library</strong><br />$caltitle";
}
?>
</p>

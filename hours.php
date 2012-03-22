<style type="text/css">
ul { color: #FFF; list-style:none; font-family: Arial, "MS Trebuchet", sans-serif; text-align: center; }
</style>
<?php
$today = date("Y-m-d");
    $feedURL = "http://www.google.com/calendar/feeds/slu.edu_c4reknqcm60rf0blukgoio5urs%40group.calendar.google.com/public/basic?start-min=".$today."T00:00:00&start-max=".$today."T23:59:59&ctz=America/Chicago";
          //print $feedURL;
        $sxml = simplexml_load_file($feedURL);

   $counts = $sxml->children('http://a9.com/-/spec/opensearchrss/1.0/');
   $total = $counts->totalResults; 
?>
      
<ul>
 <li><p><?php print "Hours for ". date('M jS') .":</BR>"; ?></p></li>           
<?php

foreach ($sxml->entry as $entry) {
  $caltitle = stripslashes($entry->title);
   echo "<li>$caltitle</li>";
}
?>
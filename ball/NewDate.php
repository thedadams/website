<!doctype html>
<html>
<head>
  <title><?php
    if(key_exists("adddate",$_GET)) {
      echo "Adding " . $_GET["adddate"] . " to the \"no play\" list";
    } elseif(key_exists("removedate",$_GET)) {
     echo "Removing " . $_GET["removedate"] . " from the \"no play\" list";
   } else {
     echo "You did nothing.";
   }
   ?></title>

<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(["setDocumentTitle", document.domain + "/" + document.title]);
  _paq.push(["setCookieDomain", "*.thedadams.com"]);
  _paq.push(["setDomains", ["*.thedadams.com/piwik"]]);
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//thedadams.com/piwik/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', '1']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//thedadams.com/piwik/piwik.php?idsite=1&rec=1" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->
</head>
 <body>
   <?php
   if(true) {
    if(key_exists("adddate",$_GET)) {
      $timeZone = new DateTimeZone('America/Phoenix');
      $date = date_create($_GET["adddate"],$timezone);
      if(!$date) {
        echo "<h1>Error!<br/></h1><p>Nothing was done.  You must have entered the date incorrectly.  Try again.</p>";
        return;
      }
      $newFileContents = "";
      $dateAdded = false;
      $file = fopen("NoBall.dat","rb");
      while(!feof($file)) {
        $nextDate = date_create(trim(fgets($file)),$timezone);
        if($nextDate >= $date) {
         if($nextDate == $date) {
           echo "<h1>Success<br/></h1> <p>However, the date was already in the file so nothing changed.</p>";
           $dateAdded = true;
           $lastDate = $nextDate;
         } elseif($lastDate < $date) {
           $newFileContents = $newFileContents . $_GET["adddate"] . "\n";
           echo "<h1>Success!</h1><p>The date " . $date->format("m/d/Y") . " was added.</p>";
           $dateAdded = true;
         }
       }
       $newFileContents = $newFileContents . $nextDate->format("m/d/Y") . "\n";
       $lastDate = $nextDate;
     }
     fclose($file);
     if(!$dateAdded) {
      $newFileContents = $newFileContents . $_GET["adddate"];
      echo "<h1>Success!</h1><p>The date " . $date->format("m/d/Y") . " was added.</p>";
    }
    $file = fopen("NoBall.dat","wb");
    fwrite($file, trim($newFileContents));
    fclose($file);
  } elseif(key_exists("removedate",$_GET)) {
    $timeZone = new DateTimeZone('America/Phoenix');
    $date = date_create($_GET["removedate"],$timezone);
    if(!$date) {
      echo "<h1>Error!<br/></h1><p>Nothing was done.  You must have entered the date incorrectly.  Try again.</p>";
      return;
    }
    $newFileContents = "";
    $dateRemoved = false;
    $file = fopen("NoBall.dat","rb");
    while(!feof($file)) {
      $nextDate = date_create(trim(fgets($file)),$timezone);
      if($nextDate >= $date && !$dateRemoved) {
       if($nextDate == $date) {
         echo "<h1>Success<br/></h1> <p>The date " . $_GET["removedate"] . " was successfully removed.</p>";
         $dateRemoved = true;
         continue;
       }
       echo "<h1>Success!<br/></h1><p>However, the date " . $_GET["removedate"] . " did not exists, so nothing changed.";
       $dateRemoved = true;
     }
     $newFileContents = $newFileContents . $nextDate->format("m/d/Y") . "\n";
   }
   fclose($file);
   $file = fopen("NoBall.dat","wb");
   fwrite($file, trim($newFileContents));
   fclose($file);
 }
} else {
  echo "<p>Nothing happened.  You may have used the wrong get variables.  They are \"adddate\" and \"removedate\".<br/><br/>Don't forget the password.";
}

function sendNotification($addOrRemove) {

  curl_setopt_array($ch = curl_init(), array(
    CURLOPT_URL => "https://api.pushover.net/1/messages.json",
    CURLOPT_POSTFIELDS => array(
      "token" => "aJ6uaaiTP4MvXQSoSwigQxiGphL7qN",
      "user" => "hMU9viySQtt5StDtNYbHAlhox8fWm0",
      "device" => "iPhone",
      "message" => "The date " . $date->format("m/d/Y") . " was " . $addedOrRevomed . " from the \"no play\" list.",
      )));

  curl_exec($ch);
  curl_close($ch);

}
?>
</body>
</html>

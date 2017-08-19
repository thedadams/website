<?php
$timeZone = new DateTimeZone('America/Phoenix');
$today = date_create("now", $timeZone);
$thisTuesday = date_create("now", $timeZone);
$dateIntervalOf7Days = new DateInterval('P7D');
$thisTuesday->add(new DateInterval('P' . (14 - $thisTuesday->format("w") + 2) % 7 . 'D'));


$file = fopen(dirname(__FILE__) . "/NoBall.dat","r");
//LAST DATE SCHEDULED
$scheduledTo = date_create("08/29/2017", $timeZone);
date_modify($scheduledTo,"-1 day"); // Take one day away to make the code work properly.
while(!feof($file)) {
  $date = date_create(trim(fgets($file)) . " 23:59:59",$timeZone);
  if($today < $date) {
    $date->sub($dateIntervalOf7Days);
    if($today > $date) {
      echo "There is NO basketball this week (";
      echo $thisTuesday->format("l, F jS");
      echo ") at St. Theresa.<br/><br/>";
      $date->add($dateIntervalOf7Days);
      if (feof($file) && $date < $scheduledTo) {
        echo "Basketball will continue next week on ";
        $date->add($dateIntervalOf7Days);
        echo $date->format("l, F jS.  ");
        break;
      } elseif($date >= $scheduledTo) {
        echo "There is NO basketball for the foreseeable future.  When the schedule is ready, we will update this site.  Check back soon!  ";
        break;
      } else {
        while (!feof($file)) {
          $nextDate = date_create(fgets($file) . "23:59:59", $timeZone);
          if(!($nextDate == date_add($date, $dateIntervalOf7Days))) {
            echo "The next time we will have basketball at St. Theresa is ";
            echo $date->format("l, F jS.  ");
            break;
          }
          if(feof($file)) {
            $date->add($dateIntervalOf7Days);
            echo "The next time we will have basketball at St. Theresa is ";
            echo $date->format("l, F jS.  ");
            break;
          }
        }
        break;
      }
    } else {
        $date->add($dateIntervalOf7Days);
      echo "There is basketball this week (" . $thisTuesday->format("F jS") . ") at St. Theresa!  Lace 'em up and come on out!  See you at 6:00pm.<br><br>";
      echo "The next scheduled night off is ";
      echo $date->format("l, F jS.  ");
      echo "Please mark your calendar.  ";
      break;
    }
  } elseif(feof($file)) {
    $dateIntervalOf7Days->d = 1;
    $scheduledTo->add($dateIntervalOf7Days);
    echo "There is basketball this week (" . $thisTuesday->format("F jS") . ") at St. Theresa!  Lace 'em up and come on out!  See you at 6:00pm.<br/><br/>";
    echo "As of right now, we have basketball every week through Tuesday, " . $scheduledTo->format("F jS, Y") . ".  ";
    echo "If something changes, we will update this site to let everyone know.";
  }
}
fclose($file);

?>

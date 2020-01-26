<?php
/*This script searches the directory "Posts/" for existing posts for an archive listing.
 * The blog posts should be written in a text file and the contents will be included
 * in a webpage as is.  Thus it is best to include the markup tags as desired in the
 * text file.  The files should be saved in directories corresponding to the date they
 *  were created, say: 2013/01Jan/31 is the file corresponding to Jan 31, 2013.
 * This should be used in conjuction with jQuery.js.
 */
function buildQuickArchive() {
   	$years = scandir("Posts", 1);
	for ($i=0; $i<count($years) - 2; $i++) {
   		echo "<ul class=\"archive-year\">";
	   	echo "<li><a href=\"javascript:void(0)\" class=\"archive\" title=\"Expand " . $years[$i] . "\">" . $years[$i] ."</a>";
	   	echo "<ul style=\"display:none;\">";
	   	$months = scandir("Posts/" . $years[$i],1);
	   	for ($j = 0; $j < count($months)-2; $j++) {
	   		echo "<li><a href=\"javascript:void(0)\" class=\"archive\" title=\"Expand " . substr($months[$j],2) . "\">" . substr($months[$j],2) . "</a>";
	   		echo "<ol style=\"display:none;\">";
	   		$days = scandir("Posts/" . $years[$i] . "/" . $months[$j],1);
	   		for ($k = 0; $k < count($days) - 2; $k++) {
	   		    $file = fopen("Posts/" . $years[$i] . "/" . $months[$j] . "/" . $days[$k], "r");
	   		    $title = trim(fgets($file));
	   		    fclose($file);
	   			echo "<li value=\"" . $days[$k] . "\"><a href=\"Post.html?post=";
	   			echo $years[$i] . "-" . $months[$j] . "-" . $days[$k];
	   			echo "\" title=\"" . $title . "\">" . $title . "</a></li>";
	   		}
	   		echo "</ol></li>";
		}
		echo "</ul></li></ul>";
   	}
    echo "<script type=\"text/javascript\" src=\"js/Archive.js\"></script>";
}

/*
 * $backward == true if we are gather posts going further into the past.
 */
function displayPosts($postsToDisplay, $startDate, &$newestPostDisplayedDate, &$oldestPostDisplayedDate, $overallNewestPostDate, $overallOldestPostDate, $backward) {
    $preview = "";
    $counter = 0;
    while ($counter < $postsToDisplay) {
        if (file_exists("Posts/" . $startDate->format("Y/mM/d"))) {
            if($startDate > $newestPostDisplayedDate) {
                $newestPostDisplayedDate->setDate($startDate->format("Y"), $startDate->format("m"), $startDate->format("d"));
            }
            if($startDate < $oldestPostDisplayedDate) {
                $oldestPostDisplayedDate->setDate($startDate->format("Y"), $startDate->format("m"), $startDate->format("d"));
            }
            $post = new Post($startDate->format("Y/m/d"), date_create("@" . filemtime("Posts/" . $startDate->format("Y/mM/d")))->format("Y/m/d"));
            $file = fopen("Posts/" . $startDate->format("Y/mM/d"),"r");
            $post->setTitle(trim(fgets($file)));
            fgets($file); // Get the blank line between the title and body.
            $post->setBody(fgets($file) . "\n" . fgets($file) . "\n" . fgets($file)); // Pull just the first two paragraphs for a preview.
            fclose($file);
            $preview = $backward ? $preview . "<h3><a href=\"Post.html?post=" : "<hr/><br>" . $preview;
            $preview = $backward ? $preview . $startDate->format("Y-mM-d") . "\" title=\"" . $post->getTitle() . "\">" . $post->getTitle() . "</a></h3>" : "<span><br>Updated on " . $post->getDateUpdated()->format("m/d/Y") . "</span></p>" . $preview;
            $preview = $backward ? $preview . "<p><span>Posted on " . $post->getDateCreated()->format("m/d/Y"). "</span></p>" : "<p><a href=\"Post.html?post=". $startDate->format("Y-mM-d") . "\" title=\"" . $post->getTitle() . "\">Read&nbsp;more...</a><br>" . $preview;
            $preview = $backward ? $preview . $post->getBody() : $post->getBody() . $preview;
            $preview = $backward ? $preview . "<p><a href=\"Post.html?post=". $startDate->format("Y-mM-d") . "\" title=\"" . $post->getTitle() . "\">Read&nbsp;more...</a><br>" : "<p><span>Posted on " . $post->getDateCreated()->format("m/d/Y"). "</span></p>" . $preview;
            $preview = $backward ? $preview . "<span><br>Updated on " . $post->getDateUpdated()->format("m/d/Y") . "</span></p>" : $startDate->format("Y-mM-d") . "\" title=\"" . $post->getTitle() . "\">" . $post->getTitle() . "</a></h3>" . $preview;
            $preview = $backward ? $preview . "<hr/><br>" : "<h3><a href=\"Post.html?post=" . $preview;
            $counter++;
        }
        if($backward) {
            if ($startDate < $overallOldestPostDate/* && $counter != $postsToDisplay*/) {
                /*if($newestPostDisplayedDate == $overallNewestPostDate) {
                  break;
                  } else {
                  $startDate->setDate($newestPostDisplayedDate->format("Y"), $newestPostDisplayedDate->format("m"), $newestPostDisplayedDate->format("d"));
                  $startDate->modify("+1 day");
                  $preview = displayPostsGoingNewer($postsToDisplay - $counter, $startDate, $newestPostDisplayedDate, $oldestPostDisplayedDate, $overallNewestPostDate, $overallOldestPostDate, false) . $preview;
                  break;
                  }*/
                break;
            }
            $startDate->modify("-1 day");
        } else {
            if ($startDate > $overallNewestPostDate/* && $counter != $postsToDisplay*/) {
                /*if($oldestPostDisplayedDate == $overallOldestPostDate) {
                  break;
                  } else {
                  $startDate->setDate($oldestPostDisplayedDate->format("Y"), $oldestPostDisplayedDate->format("m"), $oldestPostDisplayedDate->format("d"));
                  $startDate->modify("-1 day");
                  $preview = displayPostsGoingNewer($postsToDisplay - $counter, $startDate, $newestPostDisplayedDate, $oldestPostDisplayedDate, $overallNewestPostDate, $overallOldestPostDate, true) . $preview;
                  break;
                  }*/
                break;
            }
            $startDate->modify("+1 day");
        }
    }
    return $preview;
}

function getOldestNewestPostDates(&$overallOldestPostDate, &$overallNewestPostDate) {
    $year = scandir("Posts/", 1)[0];
    $month = scandir("Posts/" . $year, 1)[0];
    $day = scandir("Posts/" . $year . "/" . $month, 1)[0];
    $overallNewestPostDate = new DateTime($year . "-" . substr($month, 0, 2) . "-" . $day);
    $year = scandir("Posts/")[2];
    $month = scandir("Posts/" . $year)[2];
    $day = scandir("Posts/" . $year . "/" . $month)[2];
    $overallOldestPostDate = new DateTime($year . "-" . substr($month, 0, 2) . "-" . $day);
}

function getTagStringFromArray($tagArray, $partialLink) {
    $tagString = "";
    foreach($tagArray as $value) {
        $tagString = $tagString . "<a href=\"" . $partialLink . urlencode(trim(strtolower($value))) . "\" title=\"" . trim(ucwords($value)) . "\">" . ucwords($value) . "</a>, ";
    }
    return substr($tagString, 0, -2);
}
?>

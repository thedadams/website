<?php
$tagsJSON = array();
$years = scandir("Posts",1);
for ($i=0; $i<count($years)-2; $i++) {
    if(is_file($years[$i])) {
        continue;
    }
    
    $months= scandir("Posts/" . $years[$i],1);
    for($j=0; $j < count($months)-2; $j++) {
        if(is_file($months[$j])) {
            continue;
        }

        $days = scandir("Posts/" . $years[$i] . "/" . $months[$j],1);
        for($k=0; $k < count($days)-2; $k++) {
            if($days[$k] == ".DS_Store") {
                continue;
            }

            $file = fopen("Posts/" . $years[$i] . "/" . $months[$j] . "/" . $days[$k], "rb");
            $title = trim(fgets($file));
            $body = "";
            $tags = array();
            while(!feof($file)) {
                $nextLine = fgets($file);
                if(strpos($nextLine, "#tags:") === false) {
                    $body = $body . $nextLine;
                } else {
                    $nextLine = substr($nextLine, 6);
                    $tags = explode(",", $nextLine);
                }
            }
            foreach($tags as $tag) {
                if(isset($tagsJSON[trim($tag)])) {
                    if(isset($tagsJSON[trim($tag)][strtolower($title)])) {
                        if(!($years[$i] . "-" . $months[$j] . "-" . $days[$k] == $tagsJSON[trim($tag)][strtolower($title)])) {
                            $tagsJSON[trim($tag)][strtolower($title)] = $years[$i] . "-" . $months[$j] . "-" . $days[$k];
                        }
                    } else {
                        $tagsJSON[trim($tag)][strtolower($title)] = $years[$i] . "-" . $months[$j] . "-" . $days[$k];
                    }
                } else {
                    $tagsJSON[trim($tag)] = array();
                    $tagsJSON[trim($tag)][strtolower($title)] = $years[$i] . "-" . $months[$j] . "-" . $days[$k];
                }
            }
        }
    }
}
$tagsFile = fopen("PostTags.json", "wb");
fwrite($tagsFile, json_encode($tagsJSON));
fclose($tagsFile);
?>
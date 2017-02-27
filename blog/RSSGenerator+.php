<?php
$timezone = new DateTimeZone("America/Phoenix");
$num = 0;

$rssFile = fopen("feed.rss","wb");
$tagsJSON = json_decode(trim(file_get_contents("PostTags.json")), true);
fwrite($rssFile,"<?xml version=\"1.0\"?>\n");
fwrite($rssFile,"<rss version=\"2.0\" xmlns:atom=\"http://www.w3.org/2005/Atom\">\n\n");
fwrite($rssFile,"<channel>\n\t<title>The Blog of a Math Nerd</title>\n");
fwrite($rssFile,"\t<description>Sports, math, programming</description>\n");
fwrite($rssFile,"\t<atom:link href=\"http://blog.thedadams.com/feed.rss\" rel=\"self\" type=\"application/rss+xml\"/>\n");
fwrite($rssFile,"\t<link>http://blog.thedadams.com/</link>\n");
fwrite($rssFile,"\t<copyright>&#169; Donnie Adams</copyright>\n");

$years = scandir("Posts/",1);
for ($i=0; $i<count($years)-2; $i++) {
    if(is_file($years[$i])) {
        continue;
    }

    $months= scandir("Posts/" . $years[$i],1);
    for($j=0; $j < count($months)-2; $j++) {
        if(is_file("Posts/" . $years[$i] . "/" . $months[$j])) {
            continue;
        }

        $days = scandir("Posts/" . $years[$i] . "/" . $months[$j],1);
        for($k=0; $k < count($days)-2; $k++) {
            if($days[$k] == ".DS_Store") {
                continue;
            }

            $file = fopen("Posts/" . $years[$i] . "/" . $months[$j] . "/" . $days[$k], "rb");
            fwrite($rssFile, "\n\t<item>\n\n");
            $title = trim(fgets($file));
            fwrite($rssFile, "\t\t<title>" . $title . "</title>\n");
            $body = "";
            $tags = array();
            while(!feof($file)) {
                $nextLine = fgets($file);
                if(strpos($nextLine, "#tags:") === false) {
                    $body = $body . str_replace("href=\"Post.html?post=", "href=\"http://blog.thedadams.com/Post.html?post=", $nextLine);
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
            fwrite($rssFile, "\t\t<description><![CDATA[" . trim($body) . "]]></description>\n");
            fwrite($rssFile, "\t\t<link>http://blog.thedadams.com/Post.html?post=" . $years[$i] . "-" . $months[$j] . "-" . $days[$k] . "</link>\n");
            fwrite($rssFile, "\t\t<guid isPermaLink=\"false\">http://blog.thedadams.com/Post.html?post=" . $years[$i] . "-" . $months[$j] . "-" . $days[$k] . "</guid>\n");
            $date = date_create("@" . filemtime("Posts/" . $years[$i] . "/" . $months[$j] . "/" . $days[$k]), $timezone);
            fwrite($rssFile, "\t\t<pubDate>" . $date->format("D, d M Y H:i:s O") . "</pubDate>\n\n");
            fwrite($rssFile, "\t</item>\n\n");
            fclose($file);
            $num++;
                
            if($num == 25) {
                goto alldone;
            }
        }
    }
}
alldone:
fwrite($rssFile, "</channel>\n\n</rss>");
fclose($rssFile);
$tagsFile = fopen("PostTags.json", "wb");
fwrite($tagsFile, json_encode($tagsJSON));
fclose($tagsFile);
?>

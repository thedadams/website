<?php

    $timezone = new DateTimeZone("America/Phoenix");
    $num = 0;

    $rssFile = fopen("feed.rss","wb");
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
            if(is_file($months[$j])) {
                continue;
            }

            $days = scandir("Posts/" . $years[$i] . "/" . $months[$j],1);
            for($k=0; $k < count($days)-2; $k++) {
                if($days[$k] == ".DS_Store") {
                    continue;
                }

                $file = fopen("Posts/" . $years[$i] . "/" . $months[$j] . "/" . $days[$k], "rb");
                fwrite($rssFile, "\n\t<item>\n\n");
                fwrite($rssFile, "\t\t<title>" . trim(fgets($file)) . "</title>\n");
                fwrite($rssFile, "\t\t<description><![CDATA[" . trim(stream_get_contents($file)) . "]]></description>\n");
                fwrite($rssFile, "\t\t<link>http://blog.thedadams.com/Post.html?post=" . $years[$i] . "-" . $months[$j] . "-" . $days[$k] . "</link>\n");
                fwrite($rssFile, "\t\t<guid isPermaLink=\"false\">http://blog.thedadams.com/Post.html?post=" . $years[$i] . "-" . $months[$j] . "-" . $days[$k] . "</guid>\n");
                $date = new DateTime($years[$i] . "-" . substr($months[$j],2) . "-" . $days[$k], $timezone);
                fwrite($rssFile, "\t\t<pubDate>" . $date->format("D, d M Y") . " 13:00:00 -0700</pubDate>\n\n");
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
?>

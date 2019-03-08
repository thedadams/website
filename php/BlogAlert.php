<?php
if(!($_POST["date"] == "" || $_POST["title"] == "")) {
    $message = "The blog post \"" . $_POST["title"] . "\" posted on " . $_POST["date"] . " is currently being viewed from the IP address " . getRealIpAddr() . ".";
    curl_setopt_array($ch = curl_init(), array(
      CURLOPT_USERPWD => "J4zgYronuIQ2676pOzlyVBTagZX1PE3Q",
      CURLOPT_URL => "https://api.pushbullet.com/v2/pushes",
      CURLOPT_POSTFIELDS => array(
          "type" => "note",
          "title" => "Blog Alert",
          "body" => $message,
          )));
    curl_exec($ch);
    curl_close($ch);
}
function getRealIpAddr() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
?>

<?php
    function sendPushover($title,$date) {
        $message = "The blog post \"" . $title . "\" posted on " . $date . " is currently being viewed from the IP address " . getRealIpAddr() . ".";
        $params = array('http' => array(
            'method' => 'POST',
            'content' => http_build_query(array(
                "token" => "XNzhkQPC1yM96KFGiHHVeLwANjkxGL",
                "user" => "hMU9viySQtt5StDtNYbHAlhox8fWm0",
                "device" => "iPhone",
                "message" => $message)
        )));
        $ctx = stream_context_create($params);
        $fp = @fopen("https://api.pushover.net/1/messages.json", 'rb', false, $ctx);
        fclose($fp);
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

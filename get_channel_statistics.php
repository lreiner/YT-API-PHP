<?php
    include "classes/YTChannel.php";
    header('Access-Control-Allow-Origin: *');
    header('Content-type: application/json');

    if(isset($_GET["id"])) {
        $response = array();
        $response[0] = array(
            'channelID' => $_GET["id"],
            'viewCount'=> YTChannel::getChannelData($_GET["id"], "viewcount"),
            'subscriberCount'=> YTChannel::getChannelData($_GET["id"], "subcount")
        );
    
        echo json_encode($response); 
    }
?>
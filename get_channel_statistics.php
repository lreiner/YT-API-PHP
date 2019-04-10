<?php
    include "classes/YTChannel.php";
    header('Access-Control-Allow-Origin: *');
    header('Content-type: application/json');

    if(isset($_GET["id"])) {
        $response = array();
        $response[0] = array(
            'channelID' => $_GET["id"],
            'viewCount' => YTChannel::getChannelStatistics($_GET["id"], "viewcount"),
            'subscriberCount' => YTChannel::getChannelStatistics($_GET["id"], "subcount"),
            'latestVideoID' => YTChannel::getLatestVideo($_GET["id"])
        );
    
        echo json_encode($response); 
    }
?>
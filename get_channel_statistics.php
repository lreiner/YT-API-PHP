<?php
    $channelID = 'UC-lHJZR3Gqxm24_Vd_AJ5Yw';

    $url = 'https://www.youtube.com/channel/'.$channelID;
    $page = file_get_contents($url);
    preg_match_all('/<span class=\"yt-subscription-button-subscriber-count-branded-horizontal(.*?)\">(.*?)<\/span>/s',$page,$subcount,PREG_SET_ORDER);

    $url = 'https://www.youtube.com/channel/'.$channelID.'/about';
    $pageabout = file_get_contents($url);
    preg_match_all('/<span class=\"about-stat(.*?)\">(.*?)<\/span>/s',$pageabout,$viewcount,PREG_SET_ORDER);

    header('Access-Control-Allow-Origin: *');
    header('Content-type: application/json');
        $response = array();
        $response[0] = array(
            'channelID' => $channelID,
            'viewCount'=> clean($viewcount[1][2]),
            'subscriberCount'=> clean($subcount[0][2])
        );

    echo json_encode($response); 

    function clean($string) {
        $string = preg_replace('/[^0-9]/', '', $string);
        return $string = str_replace(',', '', $string);
    }
?>
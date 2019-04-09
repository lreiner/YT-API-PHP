<?php
    class YTChannel {
        /**
         * Clean function to remove all letters and "," to optain a number only
         * @param rawNumber -> String like "9.999.999 views"
         */
        function clean($rawNumber) {
            $rawNumber = preg_replace('/[^0-9]/', '', $rawNumber);
            return $rawNumber = str_replace(',', '', $rawNumber);
        }
        
        /**
         * GET ChannelData from Front Page and About Page
         * @param channelID -> official Channel Page ID
         * @param type -> type like subcount, viewcount 
         */
        public static function getChannelData($cID, $type) {
            if($type == "subcount") {
                $url = 'https://www.youtube.com/channel/' . $cID;
                $page = file_get_contents($url);
                preg_match_all('/<span class=\"yt-subscription-button-subscriber-count-branded-horizontal(.*?)\">(.*?)<\/span>/s', $page, $channelData, PREG_SET_ORDER);
                
                $statistic = self::clean($channelData[0][2]);
            } 
            else {
                $url = 'https://www.youtube.com/channel/'.$cID.'/about';
                $page = file_get_contents($url);
                preg_match_all('/<span class=\"about-stat(.*?)\">(.*?)<\/span>/s', $page, $channelData, PREG_SET_ORDER);        

                $statistic = self::clean($channelData[1][2]);
            }

            return $statistic;
        }
    }
?>
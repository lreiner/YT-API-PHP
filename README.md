# Youtube Channel Statistics
<table>
<tr>
<td>
PHP script to gain channel statistics in live time.  An alternative to the Youtube Data API. Free to use for everyone! 🤖 Youtube Data API has one common problem: You cant do live updates on channel statistics because they limit your Queries per day. This script solves this problem by extracting channel statistics in live time from there official youtube channel pages.
</td>
</tr>
</table>

## :warning: VERY IMPORTANT:warning:
This application is for private or educational purposes only. You should use the official [Youtube Data API](https://developers.google.com/youtube/v3/).
We do not accept responsibility for banned accounts or penalties of any kind caused by the use of this script. We would like to point out that using this script violates the Terms and Conditions. By using the script, you automatically accept that you yourself are criminally responsible for yourself and you are aware that it violates the guidelines.
</br >

## How does it work?

Just put the files on your Http Server and call the script like this:
```
http://<server-ip-or-address>/get_channel_statistics.php?id=UC-lHJZR3Gqxm24_Vd_AJ5Yw
```

Example Output in JSON:
```
[{"channelID":"UC-lHJZR3Gqxm24_Vd_AJ5Yw","viewCount":"21082625429","subscriberCount":"93689562"}]
```

## Donation [![Donate](https://img.shields.io/badge/Donate-PayPal-green.svg)](https://www.paypal.me/LukasReiner/) 
If this project help you reduce time to develop, you can give me a cup of coffee (or a Beer of course) :)
[![Support via PayPal](https://cdn.rawgit.com/twolfson/paypal-github-button/1.0.0/dist/button.svg)](https://www.paypal.me/LukasReiner/) 

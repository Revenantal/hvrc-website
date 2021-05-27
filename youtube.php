<?php 

$filename = 'youtube.json';

if (time()-filemtime($filename) > 1 * 3600) {
    $youtubeAPI = 'AIzaSyAP-GSIakMeLVRLBGODewIIxdDyLj_mJJk';
    $youtubeChannelID = 'UCROochQfs2p5KKH-WrFSd5w';
    
    //Its different for all users
    $googleApi = 
        'https://www.googleapis.com/youtube/v3/search?part=snippet&order=date&maxResults=4&channelId='
        . $youtubeChannelID . '&key=' . $youtubeAPI;
    
    /* Create new resource */
    $ch = curl_init();
    
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    /* Set the URL and options  */
    curl_setopt($ch, CURLOPT_URL, $googleApi);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_VERBOSE, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    /* Grab the URL */
    $curlResource = curl_exec($ch);
    
    /* Close the resource */
    curl_close($ch);
    
    $youtubeData = json_decode($curlResource);
    
    $file = fopen('youtube.json','w+');
            fwrite($file, $curlResource);
            fclose($file);
}
header('Content-Type: application/json');
echo file_get_contents($filename);

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <script type="text/javascript">
$(document).ready(function() {
    $.get(
    "https://www.googleapis.com/youtube/v3/channels",{
        part:'contentDetails',
        forUsername:'doctorscompany',
        key: 'AIzaSyDgu3JiVzi3HuFX5zc_ii4nhtSy1LvoJRc'},
        function(data) {
            $.each(data.items,function(i, item) {
                console.log(item);
                pid = item.contentDetails.relatedPlaylists.uploads;
                getVids (pid);
            })
            
        }
    );      
    function getVids (pid) {
        $.get(
    "https://www.googleapis.com/youtube/v3/playlistItems",{
        part:'snippet',
        maxResults:50,
        playlistId: pid,
        key: 'AIzaSyDgu3JiVzi3HuFX5zc_ii4nhtSy1LvoJRc'},
        function(data) {        
             var output;            
            $.each(data.items,function(i, item) {
                console.log(item);
                videoTitle = item.snippet.title;
                 rvideoID = item.snippet.resourceId.videoId;
                 vidThumburl =  item.snippet.thumbnails.high.url;                                               
                 output = '<li style="list-style:none;"><a class="videos2 video" href="https://www.youtube.com/watch?v='+rvideoID+'">'+videoTitle+'<a/></li>';
                                  
                  //Append to results list
                  $('#results').append(output);             
            })
            
        }
    );
    }   
});
</script>
</head>

<body>
<div id="container">
<ul id="results"></ul>
</div>
   
</body>
</html>
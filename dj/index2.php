<?php
include "getSong.php";

//echo $playUrl;

?>

<div id="player"></div>

    <script src="http://www.youtube.com/player_api"></script>

    <script>

        // create youtube player
        var player;
        function onYouTubePlayerAPIReady() {
            player = new YT.Player('player', {
              height: '390',
              width: '640',
              videoId: '<?php echo $playUrl; ?>',
              events: {
                'onReady': onPlayerReady,
                'onStateChange': onPlayerStateChange
              }
            });
        }

        // autoplay video
        function onPlayerReady(event) {
            event.target.playVideo();
        }

        // when video ends
        function onPlayerStateChange(event) {        
            if(event.data === 0) {          
                location.reload();
            } 
        }

    </script>
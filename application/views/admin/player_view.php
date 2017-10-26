<!DOCTYPE html>
<html>
<head>
  <title>
    
  </title>
  <script src="<?=base_url();?>asset/flowerplayer/js/flowplayer.min.js"></script>
<!-- load the latest version of the audio plugin -->
<script src="<?=base_url();?>asset/flowerplayer/js/flowplayer.audio.min.js"></script>

</head>
<body>

</body>
</html>
<div id="fp-audio" data-audio-only="true" class="fp-fat fp-edgy fp-outlined">
 
  <!-- this simple plugin uses a video tag for audio too -->
  <video data-title="The National - Fake Empire">
    <source type="application/x-mpegurl" src="//edge.flowplayer.org/fake_empire.m3u8">
    <source type="audio/mp3" src="//edge.flowplayer.org/fake_empire.mp3">
  </video>

  <!-- audio plugin stylesheet -->
<link rel="stylesheet" href="//releases.flowplayer.org/audio/flowplayer.audio.css">
 
<!-- ... -->
 
<!-- load the Flowplayer script -->

 
</div>
 
<p>Now playing: <span id="audio-title"></span></p>
 
<script>
$("#fp-audio").flowplayer({
  splash: true,
  flashls: {
    startfromlevel: 0
  }
});
 
flowplayer($("#fp-audio")).on("ready", function (e, api, media) {
  $("#audio-title").text(media.title);
});
</script>

<style type="text/css">
  #fp-audio .fp-timestamp {
  display: none;
}
#fp-audio .fp-color {
  background-color: #f00;
}
#fp-audio .fp-controls {
  background-color: #600;
  background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(120,0,0,0.85)), to(rgba(120,0,0,0.85)));
  background-image: -webkit-linear-gradient(top, rgba(220,0,0,0.85), rgba(120,0,0,0.85));
  background-image: linear-gradient(to bottom, rgba(220,0,0,0.85), rgba(120,0,0,0.85));
}
</style>

<div id="fp-background"></div>
 
<script>
flowplayer("#fp-background", {
    ratio: 9/16,
 
    // this is a background video
    background: {
        // make mask lighter to reduce distraction
        mask: "rgba(255, 255, 255, 0.9)"
    },
    muted: true,
 
    clip: {
        sources: [
            { type: "application/x-mpegurl",
              src:  "//cdn.flowplayer.org/202777/153414.m3u8" },
            { type: "video/mp4",
              src:  "//cdn.flowplayer.org/202777/153414.mp4" }
        ]
    }
});
</script>

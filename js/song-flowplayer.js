 $f("player", {src:"http://releases.flowplayer.org/swf/flowplayer-3.2.16.swf", wmode: "opaque"}, {
 
   plugins: {
        controls: {
            fullscreen: false,
            height: 30,
            autoHide: false,
        }
    },
    clip: {
		autoPlay: false,
       url: "http://releases.flowplayer.org/data/fake_empire.mp3"
 
    }
 
});
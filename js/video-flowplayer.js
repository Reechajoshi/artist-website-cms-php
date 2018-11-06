$f("player", "js/flowplayer.swf", {
	// configure the required plugin
	plugins:  {

		controls: { autoHide: true },
		youtube: {
			url:'js/flowplayer.youtube-3.2.11.swf',
			enableGdata: false,
		},
		bitrateselect: {
			hdButton: {
                place: 'none'
            }
		}
	},
	clip: {
		provider: 'youtube',
		urlResolvers: ['youtube'],
        autoPlay: true,
        url: 'api:PprhkSom6fA'
	},
});
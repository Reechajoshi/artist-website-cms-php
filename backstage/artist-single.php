<?php
	
	
	require( "inc/conf/vars.php" );

	//HACK
	$blog_pattern_match_array = array( 
					"benny_dayal" => "benny_dayal_blog",
					"arunimalekshmi_c_v" => "mizhikalil_blog",
					"jishnu_sudarsan" => "azhage_va_blog",								 
					"aravind_chandrasekhar" => "neela_mizhi_blog"
	);
	
	if(isset($_GET['name']))
	{
		$a_name = $_GET['name'];
		$full_name = $artist_name[$a_name];
		$artist_prof_img = $artist_profile_images[$a_name];		
		$desc = $artist_desc[$a_name];
		$song = $artist_song[$a_name];
		$song_path = $artist_song_path[$a_name];
		$music_video = $artist_music_video[$a_name];
		$music_video_img = $artist_music_video_img[$a_name];
		$blog_img = $artist_blog_img[$a_name];
		$blog_title = $artist_blog_title[$a_name];
		$blog_content = $artist_blog_content[$a_name];
		$dir_path  = "img/artists/$a_name";
		$dir = scandir( $dir_path );

		
	}
		
		
	echo('
		<!DOCTYPE html>
		<!--[if IE 8]><html class="no-js lt-ie9" lang="en" > <![endif]-->
		<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

		<head>
			<meta charset="utf-8">
		  <meta name="viewport" content="width=device-width">
		  <title>Kingfisher Strong Backstage :: Artist</title>
		  
		  

		  <link rel="stylesheet" href="css/normalize.css" />
		  <link rel="stylesheet" href="css/style.css">

		  
			<script type="text/javascript" src="js/jquery-1.10.1.min.js"></script>

			 <!-- Add mousewheel plugin  -->
			<script type="text/javascript" src="js/fancybox/jquery.fancybox.js?v=2.1.5"></script>
			<link rel="stylesheet" type="text/css" href="js/fancybox/jquery.fancybox.css?v=2.1.5" media="screen" />
			<script type="text/javascript" src="js/fancybox/jquery.fancybox-media.js?v=1.0.6"></script>
			 <script type="text/javascript" src="js/fancybox/fancybox-function.js"></script>

		</head>
		<body>

		<div class="row">
		<div class="backstage-logo"><a href="index.html"><img src="img/backstage-logo.png" alt="kingfisher-strong-backstage-logo"></a></div>
		<div class="fridaymoviez-logo"><a href="http://www.fridaymoviez.com/" target="_blank"><img src="img/fridaymoviez-logo.png" alt="fridaymoviez-logo" ></a></div>

		</div><!-- End row -->

		<div class="top-banner">
		  <div class="container">
		  <div class="row">
		  <header>
		<div class="navbox-top">
		<!--<ul class="season">
		<li><a href="#">Season 1</a></li>
		<li><a href="#">Season 2</a></li>
		<li class="active"><a href="#">Season 3</a></li>
		</ul>-->

		<ul class="top-box right">
		<li><div class="basic-non-select-example"></div></li>
		<li ><!--<div id="searchwrapper"><form action="">
		<input type="text" class="searchbox" name="Search" value="Search" placeholder="Search..." />
		<input type="button" src="THE_BLANK_SUBMIT_BUTTON_IMAGE" class="searchbox_submit" value="" />
		</form>
		</div>-->
		</li>
		<li ><a href="#"><img src="img/facebook.png" alt="facebook"></a></li>
		<li ><a href="#"><img src="img/twiter.png" alt="twiter"></a></li>
		<li ><a href="#"><img src="img/youtube.png" alt="youtube"></a></li>
		</ul>
		</div>
		</header>
		  </div></div>
		</div><!-- End top-banner -->


		<div class="menu-box">
		<div class="row">
		<div class="nav-box ">
		<nav>
		<ul class="nav">
		<li><a href="index.html">Home</a></li>
		<li class="divider"></li>
		<li class="active"><a href="artist.html">Artists</a></li>
		<li class="divider"></li>
		<li><a href="video.html">Videos</a></li>
		<li class="divider"></li>
		<li><a href="song.html">Songs</a></li>
		<li class="divider"></li>
		<li><a href="blog.html">Blogs</a></li>
		<li class="divider"></li>
		<li><a href="about-us.html">About</a></li>
		<li class="divider"></li>
		<li class="last"><a href="contact.html">Contact Us</a></li>
		</ul>
		</nav>
		<!-- End Nav Section -->
		</div><!-- End nav-box -->
		</div>
		</div><!-- End about-box -->

		<section class="page-title">
		<h1>'.$full_name.'</h1>
		</section><!-- End about-box -->
		<div class="breadcrumb"><a href="index.html">Home /</a> <a href="artist.html">Artist /</a> '.$full_name.'</div>

		<div class="row box">
		<div class="box1 left">
		  <img src='.$artist_prof_img.'.jpg /> 
		</div>

		<div class="box2 left">
		<p class="text-justify">'.$desc.'</p>

		<div class="player">
		<h2>Listen To My Song - '.$song.'</h2>
		<!--<script src="js/flowplayer-3.2.12.min.js"></script> -->
		<!--<div id="player" style="display:block;height:30px;">
		<object id="song_file" style="height:100px;" data="'.$song_path.'"></object></div>
		<script src="js/artist-single-flowplayer.js"></script> -->
		<div id="player" style="display:block;height:50px;width:628px; margin-bottom:15px;">
		<object id="song_file" style="height:100px;" data="'.$song_path.'"><param name="autoplay" value="false" /></object></div>
		</div>
		</div>

		<div class="clear"></div>
		</div><!-- End row -->

		<div class="row box">


		<div class="box1 video-gallery left">
		<h2>Music Video</h2>
		<div><a class="fancybox-media" href='.$music_video.' ><img src='.$music_video_img.' alt="" />
		<div class="play-icon"></div></a></div>
		</div>

		<div class="box2 photo-gallery left">
		<h2>Photos</h2>');
		for( $i = 0; $i < count( $dir ); $i++ )
		{
			if( $dir[ $i ] != '.' && $dir[ $i ] != '..' )
			echo('
			<a class="fancybox" href="'.$dir_path.'/'.$dir[$i].'" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="'.$dir_path.'/'.$dir[$i].'" alt="" /></a>
			  ');
		}
		echo( '</div>


		<div class="clear"></div>
		</div><!-- End row -->

		<div class="row box no-border">
		<h2>Blog</h2>
		<ul class="blog1 no-bullet">
		<li>');
		if($blog_img && $blog_title && $blog_content)
		echo('
		<div class="pro-blog left"><img src='.$blog_img.' alt="image" /></div>
		<span>OCT 14 2014</span>
		<h2>'.$blog_title.'</h2>
		<p class="text-justify">'.$blog_content.'</p>
		<a style="margin-left:275px" href="blog_single.php?name='.$blog_pattern_match_array[ $a_name ].'">Read more...</a>');
		echo('
		</li>
		</ul>
		</div><!-- End row -->

		<div class="footer">
		<div class="row">
		<div class="left">&copy; 2014 <a target="_blank" href="http://twilighten.com/">Twilight Entertainment PVT LTD.</a> All rights reserved.</div>
		<div class="right"><a href="about-us.html">About us</a> | <a href="contact.html">Contact Us</a> | <a href="privacy_policy.html">Privacy Policy</a></div>
		</div>
		</div><!-- End footer -->

		</body>
		</html>
		')
?>

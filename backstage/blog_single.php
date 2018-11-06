<?php

	require( "inc/conf/vars.php" );
	
	if(isset($_GET['name']))
	{

		$blog_name = $_GET['name'];
		$blog_title = $blog_title[$blog_name];		
		$blog_content = $blog_content[$blog_name];		
		$blog_img = $blog_images[$blog_name];		

	}
	
	
	echo('<html><head>
			<meta charset="utf-8">
		  <meta name="viewport" content="width=device-width">
		  <title>Kingfisher Strong Backstage :: Blog</title>
		  
		  

		  <link rel="stylesheet" href="css/normalize.css" />
		  <link rel="stylesheet" href="css/style.css">

			<script type="text/javascript" src="js/jquery-1.10.1.min.js"></script>
			
			<script src="js/jquery.cookie.js"></script>
		  <script src="js/poll.js"></script>
		  
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
		<li><a href="artist.html">Artists</a></li>
		<li class="divider"></li>
		<li><a href="video.html">Videos</a></li>
		<li class="divider"></li>
		<li><a href="song.html">Songs</a></li>
		<li class="divider"></li>
		<li class="active"><a href="blog.html">Blogs</a></li>
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
		<h1>Blog</h1>
		</section><!-- End about-box -->
		<div class="breadcrumb"><a href="index.html">Home /</a> <a href="blog.html">Blog / </a>'.$blog_title.'</div>

		<div class="row" id="blog">
		<div class="paging paging1"><a href="#" class="jp-previous jp-disabled">← Previous</a><a href="#" class="jp-next jp-disabled">Next →</a></div>
		<div class="blog-single">
		<img src="'.$blog_img.'" width="662" />
		<span>Aug 14 2014</span>
		<h2>'.$blog_title.'</h2>
		<p class="text-justify">'.$blog_content.'</p>

		<fb:like send="false" layout="button_count" width="100" href="{$www}/news/{$singlenews.slug}" show_faces="true"></fb:like>
		 <a href="https://twitter.com/share" class="twitter-share-button" data-url="{$www}/news/{$singlenews.slug}" data-count="none">Tweet</a>
		   
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?"http":"https";if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document, "script", "twitter-wjs");</script>

		<!-- Place this tag where you want the +1 button to render. -->
		<div class="g-plusone" data-size="medium" data-annotation="none"></div>

		</div>
		<div class="clear"></div>
		</div>

		<div class="footer">
		<div class="row">
		<div class="left">&copy; 2014 <a target="_blank" href="http://twilighten.com/">Twilight Entertainment PVT LTD.</a> All rights reserved.</div>
		<div class="right"><a href="about-us.html">About us</a> | <a href="contact.html">Contact Us</a> | <a href="privacy_policy.html">Privacy Policy</a></div>
		</div>
		</div><!-- End footer -->

		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, "script", "facebook-jssdk"));</script>

		<!-- Place this tag after the last +1 button tag. -->
		<script type="text/javascript">
		  (function() {
			var po = document.createElement("script"); po.type = "text/javascript"; po.async = true;
			po.src = "https://apis.google.com/js/plusone.js";
			var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(po, s);
		  })();
		</script>


		</body>
		</html>
');

?>

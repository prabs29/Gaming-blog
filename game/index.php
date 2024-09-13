<html>
<head>
<title>Gaming Blog</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Google Fonts -->
<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
<script type="text/javascript">
$(function () {
	
	var filterList = {
	
		init: function () {
		
			// MixItUp plugin
			// http://mixitup.io
			$('#portfoliolist').mixitup({
				targetSelector: '.portfolio',
				filterSelector: '.filter',
				effects: ['fade'],
				easing: 'snap',
				// call the hover effect
				onMixEnd: filterList.hoverEffect()
			});				
		
		},
		
		hoverEffect: function () {
		
			// Simple parallax effect
			$('#portfoliolist .portfolio').hover(
				function () {
					$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
					$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
				},
				function () {
					$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
					$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
				}		
			);				
		
		}

	};
	
	// Run the show!
	filterList.init();
	
	
});	
</script>
</head>
<body>
<!-- Header Starts Here -->
<div class="header">
	<div class="container">
		<div class="logo">
			<a href="index.php"><img src="images/logo.png" alt=""></a>
		</div>
		<span class="menu"></span>
		<div class="navigation">
			<ul class="navig cl-effect-3" >
				<li><a href="index.php">Home</a></li>
				<li><a href="games.php">Games</a></li>
				<li><a href="blog.php">Blog</a></li>
				<li><a href="features.php">Features</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
			<!--<div class="search-bar">
					<input type="text" placeholder="Search" required="" />
					<input type="submit" value="" />
			</div>-->
			<div class="clearfix"></div>
			<script>
				$( "span.menu" ).click(function() {
				  $( ".navigation" ).slideToggle( "slow", function() {
				    // Animation complete.
				  });
				});
			</script>

		</div>
		<div class="clearfix"></div>
	</div>
</div>
<div class="banner"></div>
<!-- Header Ends Here -->	
<div class="banner-bot">
	<div class="container">
		<h2>Greetings!</h2>
		<p>We welcome you to the Homepage for the blog sport of the hottest games of the recent times, here we will be providing you with some exciting current gaming information as well as information on the upcoming projects in the near future.</p>
		<p>On this website you will come accross images, information and feedback on games that are either released or are yet to be released, the information is provided by the members as well as the admins of the website so you can be assured that the information that you will be given will be versatile and accurate.</p>
		<nav class="cl-effect-3"><a href="#">More</a></nav>
	</div>
</div>
<!-- Gallery Starts Here -->
<div class="gallery">
	<div class="container">
		<h3>Gallery</h3>
		<div class="gallery-top">
			<ul id="filters" class="clearfix">
						<li><span class="filter active" data-filter="app card icon logo web">1</span></li>
						<li><span class="filter" data-filter="app">2</span></li>
						<li><span class="filter" data-filter="card">3</span></li>
						<li><span class="filter" data-filter="icon">4</span></li>
					</ul>
					<div id="portfoliolist">
					<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<a href="index.php" class="b-link-stripe b-animate-go  thickbox">
						     <img src="images/pic3.jpg"height="300px"width="300px"/><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "> </h2>
						  		</div></a>
		                </div>
					</div>				
					<div class="portfolio icon mix_all" data-cat="icon" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<a href="index.php" class="b-link-stripe b-animate-go  thickbox">
						     <img src="images/pic2.jpg" height="300px"width="350px"/><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "> </h2>
						  	 </div></a>
		                </div>
					</div>		
					<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<a href="index.php" class="b-link-stripe b-animate-go  thickbox">
						     <img src="images/pic1.jpg"height="300px"width="350px" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "> </h2>
						  	 </div></a>
		                </div>
					</div>				
					<div class="portfolio logos mix_all" data-cat="logo" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<a href="index.php" class="b-link-stripe b-animate-go  thickbox">
						     <img src="images/oldpic3.jpg"height="300px"width="350px" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "> </h2>
						  	 </div></a>
		                </div>
		            </div>
					<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<a href="index.php" class="b-link-stripe b-animate-go  thickbox">
						     <img src="images/pic5.jpg" height="300px"width="350px"/><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "> </h2>
						  	 </div></a>
		                </div>
					</div>			
				</div>

		</div>
	</div>
</div>
<!-- Gallery Ends Here -->
<!-- Video Part starts Here -->
<div class="video-serch">
	<div class="container">
		<div class="col-md-6 vid-col">
			<p>Upto date clips of the new warzone update that came out last week check it out! </p>
			<p>This video clip was submitted by a user on the call of duty server which showcases the new updates which were released in the past week it includes the new weapons, weapon balance changes, new field upgrades and new operators for the players to use and interact with on the game. There are also the new map changes as well as much more new content that was added to the servers.</p>
			<div class="more">
				<a href="#">See more videos</a>
			</div>
		</div> 
		<div class="col-md-6 vid-coll">
			<img src="images/vid-img.jpg" alt="">
			<div class="play-but">
				<a href="#small-dialog5" class="thickbox play-icon popup-with-zoom-anim"><img src="images/vid-play.png" alt="" /></a>
			</div>
			<!--pop-up-box-->
					  <script type="text/javascript" src="js/modernizr.custom.53451.js"></script>  
					<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
					<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
			<!--pop-up-box-->
			<div id="small-dialog5" class="mfp-hide">
					<iframe src="//player.vimeo.com/video/38584262"  frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen> </iframe>
				</div>
				 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>
		</div>
		<div class="clearfix"></div>
	</div>	
</div>
<!-- Video Part Ends Here -->
<!-- What New Part starts Here -->
<div class="what-new">
	<div class="container">
		<h3>What's new</h3>
		<div class="blog-news">
			<div class="blog-news-grid">
				<div class="news-grid-left">
					<h4>06</h4>
					<small>of january 2024</small>
				</div>
				<div class="news-grid-right">
					<h4><u>Call of duty mobile released</u></h4>
					<p>The new Game is live! for you to enjoy on your hand held devices which makes it easier for players to access the game if they don't have a gaming console, it can be played on your mobile device. </p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="blog-news-grid b_n_g">
				<div class="news-grid-left">
					<h4>10</h4>
					<small>of November 2023</small>
				</div>
				<div class="news-grid-right">
					<h4><u>Call of duty Modern Warfare III</u></h4>
					<p>A new installment of call of duty release which will later be infused into warzone in the next coming months with all new weapons and operators and much more! </p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="blog-news b_n">
			<div class="blog-news-grid">
				<div class="news-grid-left">
					<h4>24</h4>
					<small>of September 2022</small>
				</div>
				<div class="news-grid-right">
					<h4><u>Call of duty Modern Warfare II</u></h4>
					<p>The modern warfare II servers will be shutting down this month due to the new release of the next istallment,however all the progress from the title will be passed on to modern warfare II. </p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="blog-news-grid b_n_g">
				<div class="news-grid-left">
					<h4>23</h4>
					<small>of March 2024</small>
				</div>
				<div class="news-grid-right">
					<h4><u>Upcoming tournaments</u></h4>
					<p>The annual tournament for call of duty warzone will be held this coming week with participants from all over the world taking part in it in order to win the first prize of $1,000000! </p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- What New Part Endss Here -->
<!-- Footer Starts Here -->
<div class="footer">
	<div class="container">
		<ul class="social">
			<li><i class="fa"></i></li>
			<li><i class="fb"></i></li>
			<li><i class="fc"></i></li>
		</ul>
		<p>Design by Parabhjot Singh</p>
	</div>
	
</div>
<!-- Footer Ends Here -->
</body>
</html>
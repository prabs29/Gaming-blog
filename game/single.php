<?php include("feeddbconn.php");
?> 
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
			<script>
				$( "span.menu" ).click(function() {
				  $( ".navigation" ).slideToggle( "slow", function() {
				    // Animation complete.
				  });
				});
			</script>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- Header Ends Here -->	
<!-- Games Page Starts here -->
<div class="games">
	<div class="container">
		<div class="page-path">
			<ul class="path-list"><br><br><br><br>
				<li><a href="index.php">Home</a></li>&nbsp;&nbsp;/&nbsp;&nbsp;
				<li><a href="blog.php">Blog</a></li>&nbsp;&nbsp;/&nbsp;&nbsp;
				<li class="act">Details</li>
			</ul>
			<p><a href="index.php">Back to Home</a></p>
			<div class="clearfix"></div>
		</div>
		<h3 class="page-header">
			Recent Blogs
		</h3>
		<div class="blog-content">
			<div class="blog-post">
				<h3><a href="#">For all users who want take part in the New release Games</a></h3>
				<div class="post-details">
					<p>Posted By <a href="#">Prabh</a> &nbsp;&nbsp; On <span>14 may, 2024</span> &nbsp;&nbsp; Comments<span>(5)</span></p>
				</div>
				<img src="images/blog1.jpg" alt="">
				<h4>Here you are welcome to provide us with some of your information if you wish to know about the new releases</h4>
				<p>New games are released more often than we realise which is why it is hard to keep track of all the releases, social media can only take you to a certain extent </p>
				<p>If you wish to stay on top of all the COD related information then we have this service for all the users who are interested in this sort of thing, we will be adding you all to a mail list with which you can recieve information about all the releases and much more</p>
				<p>we would also like for you to let us know about any imrprovements we can make to our site and this user friendly experience which is why we will be adding a section at the bottom of this page for you to let us know your thoughts about what we can do better than we are already doing </p>
				<p>it could be anything from a small page colour change to something big as adding more information about a different sort of experience we look forward to your feedback and how we can make it better in the future.</p>
			</div>
			
			<div class="comment-box">
				<h3 class="page-header">Feedback </h3>
					<form action="#" method="POST">
				<div class="text-cmt">
					<input type="text" placeholder="Name" required=""/name="name">
					<input type="text" placeholder="Email" required=""/name="email">
				</div>
				<div class="text-cmt">
					<textarea placeholder="Message" required=""/name="message"></textarea>
				</div>
				<div class="text-cmt">
					<input type="submit" value="Submit" name="submit">
				</div>
			</div>
		</div></form>
		<div class="blog-sidebar">
			<h3 class="page-header">Loadouts</h3>
			<ul class="product-categories color"><li class="cat-item cat-item-42"><a href="#">Shooting</a> <span class="count">(14)</span></li>
				<li class="cat-item cat-item-60"><a href="#">MW II</a> <span class="count">(2)</span></li>
				<li class="cat-item cat-item-63"><a href="#">Multiplayer</a> <span class="count">(2)</span></li>
				<li class="cat-item cat-item-54"><a href="#">SMG</a> <span class="count">(8)</span></li>
				<li class="cat-item cat-item-55"><a href="#">Assault Rifles</a> <span class="count">(11)</span></li>
				<li class="cat-item cat-item-64"><a href="#">Hand Guns</a> <span class="count">(3)</span></li>
				<li class="cat-item cat-item-61"><a href="#">Black Ops</a> <span class="count">(3)</span></li>
				<li class="cat-item cat-item-56"><a href="#">Operators</a> <span class="count">(6)</span></li>
				<li class="cat-item cat-item-57"><a href="#">Zombies</a> <span class="count">(13)</span></li>
				<li class="cat-item cat-item-58"><a href="#">Privates</a> <span class="count">(7)</span></li>
				<li class="cat-item cat-item-62"><a href="#">Mobile</a> <span class="count">(2)</span></li>
				<li class="cat-item cat-item-41"><a href="#">Blackout</a> <span class="count">(17)</span></li>
			 </ul>
			<!--<h3 class="page-header">Subscribe</h3>
			<div class="subscribe">
				<h4>Subscribe For News</h4>
				<input type="text" placeholder="Email.." required="" />
				<input type="submit" value="Subscribe" />
			</div>-->
			<h3 class="page-header">Papular Tags</h3>
			<ul class="tags_links">
					<li><a href="#">Loadout</a></li>
					<li><a href="#">Operators</a></li>
					<li><a href="#">Guns</a></li>
					<li><a href="#">Dropzone</a></li>
					<li><a href="#">Maps</a></li>
					<li><a href="#">Unlock</a></li>
					<li><a href="#">Hideout</a></li>
					<li><a href="#">Drones</a></li>
			</ul>

		</div>
		<div class="clearfix"></div>
		
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
<?php
if($_POST['submit'])
{
	$name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $query = "INSERT INTO review values('$name','$email','$message')";
    $data = mysqli_query($conn,$query);

    if($data)
    {
        echo "data inserted";
    }
    else
    {
        echo "data  not inserted";
    }

}
?>
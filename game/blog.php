<?php include("subdbconn.php");
?>
<html>
<head>
<title>Gaming Blog </title>
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
				<li class="act">Blog</li>
			</ul>
			<p><a href="index.php">Back to Home</a></p>
			<div class="clearfix"></div>
		</div>
		<center><h3 class="page-header">
			Recent Blogs
		</h3></center>
		<div class="blog-content">
			<div class="blog-post">
				<h3><a href="single.php">The new update to the warzone servers went live last week</a></h3>
				<div class="post-details">
					<p>Posted By <a href="#">prabh</a> &nbsp;&nbsp; On <span>5 may, 2024</span> &nbsp;&nbsp; Comments<span>(20)</span></p>
				</div>
				<img src="images/blog1.jpg" alt="">
				<h4>with the servers getting updated recently the new content is huge and give the players limitless opportunities</h4>
				<p>There have been loads of new weapons that got added into the warzone mode. Along with a whole new roaster of the playable operators for players to showcase their skills and dedication to the game as some of the unliockable content shows other players how much time the individual has invested into the game....</p>
				<nav class="cl-effect-3"><a href="single.php">Read More</a></nav>
			</div>
			<div class="blog-post">
				<h3><a href="single.php">Players not happy with the Competition results</a></h3>
				<div class="post-details">
					<p>Posted By <a href="#">Prabh</a> &nbsp;&nbsp; On <span>20 apr, 2024</span> &nbsp;&nbsp; Comments<span>(100)</span></p>
				</div>
				<img src="images/blog2.jpg" alt="">
				<h4>Call of duty organisers face backlash after the recent tournament results</h4>
				<p>As every year in the past this year was no different for the players to take part in the competition that is held every year, it is a great way for the company to advertise their games and increase the popularity of their intallments of each game that comes out however this year the competition took a whole new turn....</p>
				<nav class="cl-effect-3"><a href="single.php">Read More</a></nav>
			</div>
			<div class="blog-post">
				<h3><a href="single.php">Call of Duty Mobile is always getting updated for a great experience</a></h3>
				<div class="post-details">
					<p>Posted By <a href="#">Prabh</a> &nbsp;&nbsp; On <span>14 may, 2024</span> &nbsp;&nbsp; Comments<span>(20)</span></p>
				</div>
				<img src="images/1.jpg" alt="">
				<h4>There are usually constant updates on the platform for COD-mobile which means the user experience is first priority </h4>
				<p>The recent updates on the mobile platform shows how easily it is accessible for the players to play the game as well as how easy it is for them to interact with one another, this makes the whole experience of playing the game so much more fun as one can play with their friends remotely...</p>
				<nav class="cl-effect-3"><a href="single.php">Read More</a></nav>
			</div>
		</div>
		<div class="blog-sidebar">
			<h3 class="page-header">Loadouts</h3>
			<ul class="product-categories color"><li class="cat-item cat-item-42"><a href="#">warzone</a> <span class="count">(14)</span></li>
				<li class="cat-item cat-item-60"><a href="#">MW II</a> <span class="count">(25)</span></li>
				<li class="cat-item cat-item-63"><a href="#">Multiplayer</a> <span class="count">(10)</span></li>
				<li class="cat-item cat-item-54"><a href="#">SMG</a> <span class="count">(8)</span></li>
				<li class="cat-item cat-item-55"><a href="#">Assault rifles</a> <span class="count">(11)</span></li>
				<li class="cat-item cat-item-64"><a href="#">Hand Guns</a> <span class="count">(3)</span></li>
				<li class="cat-item cat-item-61"><a href="#">Black ops</a> <span class="count">(3)</span></li>
				<li class="cat-item cat-item-56"><a href="#">Operators</a> <span class="count">(6)</span></li>
				<li class="cat-item cat-item-57"><a href="#">Zombies</a> <span class="count">(13)</span></li>
				<li class="cat-item cat-item-58"><a href="#">Privates</a> <span class="count">(7)</span></li>
				<li class="cat-item cat-item-62"><a href="#">Mobile</a> <span class="count">(2)</span></li>
				<li class="cat-item cat-item-41"><a href="#">Blackout</a> <span class="count">(17)</span></li>
			 </ul>
			<h3 class="page-header">Subscribe</h3>
			<div class="subscribe">
				<h4>Subscribe For News</h4>
			<form action="#" method="POST">
				<input type="email" id="Email" placeholder="Email"name="email" /><br><br>
				<center>
				<input type="submit" value="Subscribe" name="submit"></center>
			</form>
			</div>
			<h3 class="page-header">Papular Tags</h3>
			<ul class="tags_links">
					<li><a href="#">Loadout</a></li>
					<li><a href="#">Operator</a></li>
					<li><a href="#">Guns</a></li>
					<li><a href="#">Dropzone</a></li>
					<li><a href="#">Maps</a></li>
					<li><a href="#">Unlock</a></li>
					<li><a href="#">Hideout</a></li>
					<li><a href="#">Drone</a></li>
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
		<p>Design by Parabhjot</p>
	</div>
	
</div>
<!-- Footer Ends Here -->
</body>
</html>
<?php
if($_POST['submit'])
{
 $email = $_POST['email'];
   
 $query = "INSERT INTO blog1 values('$email')";
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
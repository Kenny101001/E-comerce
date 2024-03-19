<?php include ( "inc/connect.inc.php" ); ?>
<?php 
ob_start();
session_start();
if (!isset($_SESSION['user_login'])) {
	$user = "";
}
else {
	$user = $_SESSION['user_login'];
	$result = mysqli_query($con, "SELECT * FROM user WHERE id='$user'");
	$get_user_email = mysqli_fetch_assoc($result);
	$uname_db = $get_user_email != null ? $get_user_email['firstName'] : null;
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Nita's online grocery</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Nita's online grocery">
		<meta name="keywords" content="Online grocery, Caloocan, Grocery, Convenient Grocery, Products">

		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-5WSP7F65');</script>
		<!-- End Google Tag Manager -->

		<script src="/js/homeslideshow.js"></script>
		
	</head>

	<body style="min-width: 980px;">

		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5WSP7F65"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->

		<div class="homepageheader" style="position: relative;">
			<div class="signinButton loginButton">
				<div class="uiloginbutton signinButton loginButton" style="margin-right: 40px;">
					<?php 
						if ($user!="") {
							echo '<a style="text-decoration: none; color: #fff;" href="logout.php">LOG OUT</a>';
						}
						else {
							echo '<a style="color: #fff; text-decoration: none;" href="signin.php">SIGN UP</a>';
						}
					 ?>
					
				</div>
				<div class="uiloginbutton signinButton loginButton" style="">
					<?php 
						if ($user!="") {
							echo '<a style="text-decoration: none; color: #fff;" href="profile.php?uid='.$user.'">Hi '.$uname_db.'</a>';
						}
						else {
							echo '<a style="text-decoration: none; color: #fff;" href="login.php">LOG IN</a>';
						}
					 ?>
				</div>
			</div>
			<div style="float: left; margin: 5px 0px 0px 23px;">
				<a href="index.php">
					<img style=" height: 75px; width: 130px;" src="image/cart.png">
				</a>
			</div>
			<div class="">
				<div id="srcheader">
					<form id="newsearch" method="get" action="search.php">
					        <input type="text" class="srctextinput" name="keywords" size="21" maxlength="120"  placeholder="Search Here..."><input type="submit" value="search" class="srcbutton" >
					</form>
				<div class="srcclear"></div>
				</div>
			</div>
		</div>
		<div class="home-welcome">
			<div class="home-welcome-text" style="background-image: url(image/background.jpg); height: 380px; ">
				<div style="padding-top: 180px;">
					<div style=" background-color: #dadbe6;">
						<h1 style="margin: 0px;">Nita's online grocery</h1>
						<h2>Most Convenient Grocery Store in 7th ave. Caloocan</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="home-prodlist">
			<div>
				<h3 style="text-align: center;">Products Grocery Category</h3>
			</div>
			<div style="padding: 20px 30px; width: 85%; margin: 0 auto;">
				<ul style="float: left;">
					<li style="float: left; padding: 25px;">
						<h4>Noodles-Canned</h4>
						<div class="home-prodlist-img"><a href="our-products/noodles-canned.php">
							<img src="./image/product/noodles/n.jpg" class="home-prodlist-imgi" alt="Noodles">
							</a>
						</div>
					</li>
				</ul>
				<ul style="float: left;">
					<li style="float: left; padding: 25px;">
						<h4>Snacks</h4>
						<div class="home-prodlist-img"><a href="our-products/snacks.php">
							<img src="./image/product/snack/sn.jpg" class="home-prodlist-imgi" alt="Snack">
							</a>
						</div>
					</li>
				</ul>
				<ul style="float: left;">
					<li style="float: left; padding: 25px;">
						<h4>Sweets</h4>
						<div class="home-prodlist-img"><a href="our-products/sweets.php">
							<img src="./image/product/sweet/s.jpg" class="home-prodlist-imgi" alt="Sweet"></a>
						</div>
					</li>
				</ul>
				<ul style="float: left;">
					<li style="float: left; padding: 25px;">
						<h4>Hygiene</h4>
						<div class="home-prodlist-img"><a href="our-products/hygiene.php">
							<img src="./image/product/hygiene/hy.jpg" class="home-prodlist-imgi" alt="Hygiene"></a>
						</div>
					</li>
				</ul>
				<ul style="float: left;">
					<li style="float: left; padding: 25px;">
						<h4>Shampoo</h4>
						<div class="home-prodlist-img"><a href="our-products/shampoo.php">
							<img src="./image/product/shampoo/pall.jpg" class="home-prodlist-imgi" alt="Shampoo"></a>
						</div>
					</li>
				</ul>
				<ul style="float: left;">
					<li style="float: left; padding: 25px;">
						<h4>Soap-Detergent</h4>
						<div class="home-prodlist-img"><a href="our-products/soap-detergent.php">
							<img src="./image/product/soap/sp.jpg" class="home-prodlist-imgi"  alt="Soap"></a>
						</div>
					</li>
				</ul>
				<ul style="float: left;">
					<li style="float: left; padding: 25px;">
						<h4>Drinks</h4>
						<div class="home-prodlist-img"><a href="our-products/drinks.php">
							<img src="./image/product/drink/dr.jpg" class="home-prodlist-imgi"  alt="Drink"></a>
						</div>
					</li>
				</ul>
				<ul style="float: left;">
					<li style="float: left; padding: 25px;">
						<h4>Seasonings</h4>
						<div class="home-prodlist-img"><a href="our-products/seasonings.php">
							<img src="./image/product/seasoning/cond.jpg" class="home-prodlist-imgi"  alt="Seasoning"></a>
						</div>
					</li>
				</ul>
			</div>			
		</div>
	</body>
</html>
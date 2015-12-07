
<!DOCTYPE html>
<html>
<head>
<title>ITMO544 FINAL PAGE</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Coffee Break Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<script src="js/jquery.min.js"></script>
<!---- start-smoth-scrolling---->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
<!--start-smoth-scrolling-->
</head>
<body>
	<!--header-top-starts-->
	<div class="header-top">
		<div class="container">
			<div class="head-main">
			</div>
		</div>
	</div>
	<!--header-top-end-->
	<!--start-header-->
	<div class="header">
		<div class="container">
			<div class="head">
			<div class="navigation">
				 <span class="menu"></span> 
					<ul class="navig">
						<li><a href="index.html"  class="active">Home</a></li>
						<li><a href="gallery.html">Gallery</a></li>
						
					</ul>
			</div>
			<div class="header-right">
				<div class="search-bar">
					<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
					<input type="submit" value="">
				</div>
				<ul>
					<li><a href="#"><span class="fb"> </span></a></li>
					<li><a href="#"><span class="twit"> </span></a></li>
					<li><a href="#"><span class="pin"> </span></a></li>
					<li><a href="#"><span class="rss"> </span></a></li>
					<li><a href="#"><span class="drbl"> </span></a></li>
				</ul>
			</div>
				<div class="clearfix"></div>
			</div>
			</div>
		</div>	
	<!-- script-for-menu -->
	<!-- script-for-menu -->
	
	<!-- script-for-menu -->
	<!--banner-starts-->
	<div class="banner">
		<div class="container">
			<div class="banner-top">
				
			</div>
		</div>
	</div>
	
	<!--banner-end-->
	<!--about-starts-->
	<div class="about">
		<div class="container">
			<div class="about-main">
						
			</div>
<div class="about-two">
						<div>
		<form enctype="multipart/form-data" action="submit.php" method="POST"> 
	<input type="hidden" name="MAX_FILE_SIZE" value="30000000" /> 
 	send this file:<input name="userfile" type="file" /><br> 
 Enter Email of user:<input type="email" name="useremail"><br> 
 Enter Phone of user (1-XXX-XXX-XXXX):<input type="phone" name="phone"> 
 
 
 <input type="submit" value="Send File"/> 
 </form> 
 <hr /> 
 <form enctype="multipart/form-data" action="gallary.php" method="POST"> 
 Enter Email of user for gallary to browse:<input type="email" name="email"> 
 <input type="submit" value="Load Gallery" /> 
</form> 

	</div>
						</div>
						
					</div>			
		</div>
	</div>
	<!--about-end-->
	
	<!--footer-starts-->
	<div class="footer">
		<div class="container">
			<div class="footer-text">
				<p>© 2015 ITMO544 PROJECT. All Rights Reserved | Design by HAOTIAN GU </a> </p>
			</div>
		</div>
	</div>
	<!--footer-end-->
</body>
</html>

<!DOCTYPE html>
<html>
<head>
<title>Coffee Break a Blog Category Flat Bootstarp responsive Website Template | Gallery :: w3layouts</title>
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
	<!--script-->
	<script src="js/modernizr.custom.97074.js"></script>
<script src="js/jquery.chocolat.js"></script>
		<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8">
		<!--light-box-files -->
		<script type="text/javascript" charset="utf-8">
		$(function() {
			$('.gallery a').Chocolat();
		});
		</script>
		<script type="text/javascript" src="js/jquery.hoverdir.js"></script>
</head>
<body>
	<!--header-top-starts-->
	<div class="header-top">
		<div class="container">
			
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
						<li><a href="index.html">Home</a></li>
					
						<li><a href="gallery.html" class="active">Gallery</a></li>
						
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
		<script>
			$("span.menu").click(function(){
				$(" ul.navig").slideToggle("slow" , function(){
				});
			});
		</script>
	<!-- script-for-menu -->
	<!--banner-starts-->
	<div class="banner">
		<div class="container">
			<div class="banner-top">
				
			</div>
		</div>
	</div>
	<!--banner-end-->
	<!--gallery-starts-->
	<div class="gallery">
		<div class="container">
			<div class="gallery-top heading">
				<h3>OUR GALLERY</h3>
			</div>
			
				
		<script type="text/javascript">
			$(function() {
			
				$(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );

			});
		</script>
        </div>
	</div>
<div>
<?php

session_start();

$email = $_POST["email"];

echo $email;

require 'vendor/autoload.php';



use Aws\Rds\RdsClient;

$client = RdsClient::factory(array(
'version' =>'latest',
'region'  => 'us-west-2'
));



$result = $client->describeDBInstances(array(

  'DBInstanceIdentifier' => 'itmo544-ght-dbrr',
  'SourceDBInstanceIdentifier' => 'itmo544-ght-db'
));
$endpoint = $result['DBInstances'][0]['Endpoint']['Address'];
print "============\n". $endpoint . "================\n";





echo "begin database";

$link = mysqli_connect($endpoint,"guhaotian","909690ght","guhaotiandb") or die("Error " . mysqli_error($link));

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

//below line is unsafe - $email is not checked for SQL injection -- don't do this in real life or use an ORM instead

$link->real_query("SELECT * FROM items WHERE email = '$email'");

//$link->real_query("SELECT * FROM items");

$res = $link->use_result();

echo "Result set order...\n";

while ($row = $res->fetch_assoc()) {

    echo "<img src =\" " . $row['s3rawurl'] . "\" /><img src =\"" .$row['s3finishedurl'] . "\"/>";

echo $row['id'] . "Email: " . $row['email'];

}

$link->close();

?>
</div>

	<!--gallery-end-->
	<!--footer-starts-->
	<div class="footer">
		<div class="container">
			<div class="footer-text">
				
			</div>
		</div>
	</div>
	<!--footer-end-->
</body>
</html>

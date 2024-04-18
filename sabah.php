<?php
	$city = "Sabah";
	$citySlug = "sabah";
?>

<!doctype html>
<html lang="en">
<head>

	<?php include('includes/head.php'); ?>

</head>
<body class="<?php echo $citySlug; ?>">

	<?php include('includes/header.php'); ?>

	<div class="container">


		<!-- ==========================================
			Main Content
		=========================================== -->
		<main class="content-wrap">

			<a class="back-cities" href="index.php"><i class="fa fa-chevron-circle-left"></i> <span>Back to all heritage sites</span></a>
			<a class="hotels-cta" target="_blank" href="https://www.expedia.co.uk/Kota-Kinabalu-Hotels.d602.Travel-Guide-Hotels">Book hotels</a>
			
			<div class="sites">

				<!-- Site
				======================================= -->
				<div class="site national-monument">
					<div class="hero-info">
						<div class="info">
							<h1>Kinabalu Park <span><?php echo $city; ?></span></h1>
							<p class="site-type"><img class="icon" src="images/nature-site-blue.svg"> Natural heritage site</p>
							<p class="site-type"><img class="icon" src="images/unesco-blue.svg"> UNESCO heritage site</p>
							<p class="address">89300 Ranau, Sabah, Malaysia</p>
						</div>

						<div class="img">
							<a target="_blank" class="credit" href="https://www.flickr.com/photos/gracewong/8679416627">Tommy Wong</a>
							<img src="images/<?php echo $citySlug; ?>/kinabalu-1.jpg" alt="Kinabalu Park 1">
						</div>
					</div>

					<div class="further-info">
						<div class="site-content">
							<p>Kinabalu Park is one the first World Heritage Site in Malaysia announced by UNESCO in December 2000 for its ‘outstanding universal values’. It is home to more than 4,500 species that includes 100 mammal species and 326 birds as well as more than 110 land snail species. The park is stretched to an area of 754 square kilometres surrounding Mount Kinabalu.</p>

							<div class="timeline">
								<p class="age" data-age="54">Established <span></span></p>
								<ul><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li></ul>
								<p class="present">Present</p>
								<p class="end">300 years</p>
							</div>
						</div>

						<ul class="gallery">
							<li>
								<a target="_blank" class="credit" href="https://commons.wikimedia.org/wiki/File:Kinabalu_Park,_Ranau,_Sabah,_Malaysia_-_panoramio_(26).jpg">mohigan</a>
								<img src="images/<?php echo $citySlug; ?>/kinabalu-2.jpg" alt="Kinabalu Park 2">
							</li>
							<li>
								<a target="_blank" class="credit" href="https://www.flickr.com/photos/shankaronline/11968132246">shankar s.</a>
								<img src="images/<?php echo $citySlug; ?>/kinabalu-3.jpg" alt="Kinabalu Park 3">
							</li>
							<li>
								<img src="images/<?php echo $citySlug; ?>/kinabalu-4.jpg" alt="Kinabalu Park 4">
							</li>
							<li>
								<img src="images/<?php echo $citySlug; ?>/kinabalu-5.jpg" alt="Kinabalu Park 5">
							</li>
						</ul>
					</div>
				</div>


			</div>


		</main>


		<?php include('includes/share-btns.php'); ?>

		<div class="overlay"></div>

	</div>



<?php include('includes/footer-includes.php'); ?>

</body>
</html>
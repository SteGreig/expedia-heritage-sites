<?php
	$city = "Sarawak";
	$citySlug = "sarawak";
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
			<a class="hotels-cta" target="_blank" href="https://www.expedia.com.my/Kuching-Hotels.d6142141.Travel-Guide-Hotels">Book hotels</a>
			
			<div class="sites">

				<!-- Site
				======================================= -->
				<div class="site national-monument">
					<div class="hero-info">
						<div class="info">
							<h1>Gunung Mulu National Park <span><?php echo $city; ?></span></h1>
							<p class="site-type"><img class="icon" src="images/nature-site-blue.svg"> Natural heritage site</p>
							<p class="site-type"><img class="icon" src="images/unesco-blue.svg"> UNESCO heritage site</p>
							<p class="address">Sarawak, Malaysia</p>
						</div>

						<div class="img">
							<a target="_blank" class="credit" href="https://www.flickr.com/photos/91451979@N00/21353749436">John Mason</a>
							<img src="images/<?php echo $citySlug; ?>/gunung-mulu-1.jpg" alt="Gunung Mulu National Park 1">
						</div>
					</div>

					<div class="further-info">
						<div class="site-content">
							<p>Gunung Mulu National Park is a national park located in Miri Division and is popular of its caves and expeditions (Royal Geographical Society Expedition of 1977-1978) that attracted over 100 scientists in the course of 15 months.</p>

							<div class="timeline">
								<p class="age" data-age="44">Established <span></span></p>
								<ul><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li></ul>
								<p class="present">Present</p>
								<p class="end">300 years</p>
							</div>
						</div>

						<ul class="gallery">
							<li>
								<a target="_blank" class="credit" href="https://www.flickr.com/photos/berniedup/15326380377">Bernard DUPONT</a>
								<img src="images/<?php echo $citySlug; ?>/gunung-mulu-2.jpg" alt="Gunung Mulu National Park 2">
							</li>
							<li>
								<a target="_blank" class="credit" href="https://www.flickr.com/photos/91451979@N00/20758751793">John Mason</a>
								<img src="images/<?php echo $citySlug; ?>/gunung-mulu-3.jpg" alt="Gunung Mulu National Park 3">
							</li>
							<li>
								<a target="_blank" class="credit" href="https://www.flickr.com/photos/lukeprice88/14358333418">Luke Price</a>
								<img src="images/<?php echo $citySlug; ?>/gunung-mulu-4.jpg" alt="Gunung Mulu National Park 4">
							</li>
							<li>
								<a target="_blank" class="credit" href="https://commons.wikimedia.org/wiki/File:Pinnacles_at_Mulu_2.jpg">FlickereviewR</a>
								<img src="images/<?php echo $citySlug; ?>/gunung-mulu-5.jpg" alt="Gunung Mulu National Park 5">
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
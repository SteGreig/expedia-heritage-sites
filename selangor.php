<?php
	$city = "Selangor";
	$citySlug = "selangor";
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
			<a class="hotels-cta" target="_blank" href="https://www.expedia.com.my/Kuala-Lumpur-Hotels.d180008.Travel-Guide-Hotels">Book hotels</a>
			
			<div class="sites">

				<!-- Site
				======================================= -->
				<div class="site national-monument">
					<div class="hero-info">
						<div class="info">
							<h1>Batu Caves <span><?php echo $city; ?></span></h1>
							<p class="site-type"><img class="icon" src="images/culture-site-blue.svg"> Cultural heritage site</p>
							<p class="address">Gombak, 68100 Batu Caves, Selangor, Malaysia</p>
						</div>

						<div class="img">
							<a target="_blank" class="credit" href="https://commons.wikimedia.org/wiki/File:Batu_Caves_Yogeshmj.mech1.jpg">Yogeshmj.mech</a>
							<img src="images/<?php echo $citySlug; ?>/batu-caves-1.jpg" alt="Batu Caves 1">
						</div>
					</div>

					<div class="further-info">
						<div class="site-content">
							<p>Batu Caves, one of the most visited tourist attractions in Kuala Lumpur, is a limestone hill that consists of three big caves and a lot of other smaller ones. The large statue of the Hindu God at the entrance is dedicated to Lord Murugan, the focal point of the Hindu festival of Thaipusam in Malaysia. The cave’s age is said to be around 400 million years old.</p>

							<div class="timeline">
								<p class="age" data-age="127">Established <span></span></p>
								<ul><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li></ul>
								<p class="present">Present</p>
								<p class="end">300 years</p>
							</div>
						</div>

						<ul class="gallery">
							<li>
								<a target="_blank" class="credit" href="https://www.flickr.com/photos/jlascar/18982280391">Jorge Lascar</a>
								<img src="images/<?php echo $citySlug; ?>/batu-caves-2.jpg" alt="Batu Caves 2">
							</li>
							<li>
								<a target="_blank" class="credit" href="https://commons.wikimedia.org/wiki/File:Malaysia_-_030_-_KL_-_Batu_Caves_Hindu_temple_(3510554856).jpg">Magnus Manske</a>
								<img src="images/<?php echo $citySlug; ?>/batu-caves-3.jpg" alt="Batu Caves 3">
							</li>
							<li>
								<a target="_blank" class="credit" href="https://www.flickr.com/photos/minuseleven/8344046186">Peter Boer</a>
								<img src="images/<?php echo $citySlug; ?>/batu-caves-4.jpg" alt="Batu Caves 4">
							</li>
							<li>
								<img src="images/<?php echo $citySlug; ?>/batu-caves-5.jpg" alt="Batu Caves 5">
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
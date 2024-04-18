<?php
	$city = "Pahang";
	$citySlug = "pahang";
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
			<a class="hotels-cta" target="_blank" href="https://www.expedia.com.my/Kuala-Tahan-Hotels.d6126211.Travel-Guide-Hotels">Book hotels</a>
			
			<div class="sites">

				<!-- Site
				======================================= -->
				<div class="site national-monument">
					<div class="hero-info">
						<div class="info">
							<h1>Taman Negara <span><?php echo $city; ?></span></h1>
							<p class="site-type"><img class="icon" src="images/nature-site-blue.svg"> Natural heritage site</p>
							<p class="address">Kuala Tahan, 27000 Kuala Tahan, Pahang, Malaysia</p>
						</div>

						<div class="img">
							<img src="images/<?php echo $citySlug; ?>/taman-negara-1.jpg" alt="Taman Negara 1">
						</div>
					</div>

					<div class="further-info">
						<div class="site-content">
							<p>Taman Negara is the oldest rainforest in Malaysia attracting users every year to view the rainforest’s thick jungle and rivers. Visitors can enjoy trekking, walking on the world’s longest canopy walkway, climbing the highest mountain in Peninsular Malaysia, caving, camping, and observing wildlife, fishing and many more.</p>

							<div class="timeline">
								<p class="age" data-age="79">Established <span></span></p>
								<ul><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li></ul>
								<p class="present">Present</p>
								<p class="end">300 years</p>
							</div>
						</div>

						<ul class="gallery">
							<li>
								<a target="_blank" class="credit" href="https://commons.wikimedia.org/wiki/File:Nusa_Native_Camp-_Taman_Negara_-_panoramio.jpg">Raki_Man</a>
								<img src="images/<?php echo $citySlug; ?>/taman-negara-2.jpg" alt="Taman Negara 2">
							</li>
							<li>
								<a target="_blank" class="credit" href="https://en.wikipedia.org/wiki/File:Taman_Negara_1.JPG">Gregorik</a>
								<img src="images/<?php echo $citySlug; ?>/taman-negara-3.jpg" alt="Taman Negara 3">
							</li>
							<li>
								<a target="_blank" class="credit" href="https://commons.wikimedia.org/wiki/File:Malezja_2011_Taman_Negara_National_Park_108.jpg">Julo</a>
								<img src="images/<?php echo $citySlug; ?>/taman-negara-4.jpg" alt="Taman Negara 4">
							</li>
							<li>
								<a target="_blank" class="credit" href="https://commons.wikimedia.org/wiki/File:Malezja_2011_Taman_Negara_National_Park_123.jpg">Julo</a>
								<img src="images/<?php echo $citySlug; ?>/taman-negara-5.jpg" alt="Taman Negara 5">
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
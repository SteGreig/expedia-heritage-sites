<?php
	$pg = "index";
?>

<!doctype html>
<html lang="en">
<head>

	<?php include('includes/head.php'); ?>

</head>
<body class="<?php echo $pg; ?>">

	<?php include('includes/header.php'); ?>

	<div class="container">

		<!-- ==========================================
			Sidebar (Filters)
		=========================================== -->
		<div class="sidebar">
			<aside class="filters">

				<div class="toggle-switch cultural-toggle">
					<input checked type="checkbox" id="cultural-switch"><label for="cultural-switch">Toggle</label>
					<p>Cultural Heritage Sites</p>
				</div>

				<div class="toggle-switch natural-toggle">
					<input checked type="checkbox" id="natural-switch"><label for="natural-switch">Toggle</label>
					<p>Natural Heritage Sites</p>
				</div>

				<div class="toggle-switch unesco-toggle">
					<input checked type="checkbox" id="unesco-switch"><label for="unesco-switch">Toggle</label>
					<p>UNESCO Heritage Sites</p>
				</div>

			</aside>


			<aside class="age-scale">
				<p>
				  <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
				</p>
				 
				<div id="slider-vertical" style="height:250px;"></div>

				<div class="scale">
					<p class="present">Present</p>
					<p class="y100">100 years</p>
					<p class="y200">200+ years</p>
					<ul><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li></ul>
				</div>
			</aside>
		</div>


		<!-- ==========================================
			Main Content
		=========================================== -->
		<main class="content-wrap">

			<ul class="cities-list">

				<li class="culture" data-age="34">
					<a class="kuala-lumpur" href="kuala-lumpur.php">
						<p class="city-text">Kuala Lumpur</p>
						<div class="count">
							<img src="images/culture-site-white.svg" alt="Culture Site icon">
							<p>2</p>
						</div>
					</a>
				</li>

				<li class="culture natural unesco" data-age="11">
					<a class="kedah" href="kedah.php">
						<p class="city-text">Kedah</p>
						<div class="count">
							<img src="images/culture-site-white.svg" alt="Culture Site icon">
							<p>1</p>
						</div>
						<div class="count">
							<img src="images/nature-site-white.svg" alt="Natural Site icon">
							<p>2</p>
						</div>
						<div class="count">
							<img src="images/unesco-white.svg" alt="Unesco Site icon">
							<p>1</p>
						</div>
					</a>
				</li>

				<li class="culture" data-age="114">
					<a class="penang" href="penang.php">
						<p class="city-text">Penang</p>
						<div class="count">
							<img src="images/culture-site-white.svg" alt="Culture Site icon">
							<p>4</p>
						</div>
					</a>
				</li>

				<li class="culture" data-age="127">
					<a class="selangor" href="selangor.php">
						<p class="city-text">Selangor</p>
						<div class="count">
							<img src="images/culture-site-white.svg" alt="Culture Site icon">
							<p>1</p>
						</div>
					</a>
				</li>

				<li class="culture natural unesco" data-age="23">
					<a class="perak" href="perak.php">
						<p class="city-text">Perak</p>
						<div class="count">
							<img src="images/culture-site-white.svg" alt="Culture Site icon">
							<p>1</p>
						</div>
						<div class="count">
							<img src="images/nature-site-white.svg" alt="Natural Site icon">
							<p>2</p>
						</div>
						<div class="count">
							<img src="images/unesco-white.svg" alt="Unesco Site icon">
							<p>1</p>
						</div>
					</a>
				</li>

				<li class="natural" data-age="79">
					<a class="pahang" href="pahang.php">
						<p class="city-text">Pahang</p>
						<div class="count">
							<img src="images/nature-site-white.svg" alt="Natural Site icon">
							<p>1</p>
						</div>
					</a>
				</li>

				<li class="natural unesco" data-age="44">
					<a class="sarawak" href="sarawak.php">
						<p class="city-text">Sarawak</p>
						<div class="count">
							<img src="images/nature-site-white.svg" alt="Natural Site icon">
							<p>1</p>
						</div>
						<div class="count">
							<img src="images/unesco-white.svg" alt="Unesco Site icon">
							<p>1</p>
						</div>
					</a>
				</li>

				<li class="natural unesco" data-age="54">
					<a class="sabah" href="sabah.php">
						<p class="city-text">Sabah</p>
						<div class="count">
							<img src="images/nature-site-white.svg" alt="Natural Site icon">
							<p>1</p>
						</div>
						<div class="count">
							<img src="images/unesco-white.svg" alt="Unesco Site icon">
							<p>1</p>
						</div>
					</a>
				</li>

				<li class="culture" data-age="87">
					<a class="melaka" href="melaka.php">
						<p class="city-text">Melaka</p>
						<div class="count">
							<img src="images/culture-site-white.svg" alt="Culture Site icon">
							<p>3</p>
						</div>
					</a>
				</li>

			</ul>

		</main>


		<?php include('includes/share-btns.php'); ?>

		<div class="overlay"></div>

	</div>

<?php include('includes/footer-includes.php'); ?>

<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
$( function() {
	$( "#slider-vertical" ).slider({
		orientation: "vertical",
		range: "min",
		min: 0,
		max: 200,
		slide: function( event, ui ) {
			$("#amount").val(199 - ui.value);
			var years = $('#slider-vertical').slider("option", "value");
			years = (200 - years);
			$('.test').text(years);

			var numCities = $('.cities-list > li').length;
			for (var i=0; i<=numCities; i++) {
			    (function(i){

			    	var cage = $('.cities-list li:nth-child('+i+')').attr('data-age');
					if(cage > years) {
						$('.cities-list li:nth-child('+i+')').addClass('hide');
						$('.cities-list li:nth-child('+i+')').removeClass('show');
					} else {
						$('.cities-list li:nth-child('+i+')').addClass('show');
						$('.cities-list li:nth-child('+i+')').removeClass('hide');
					}

			    })(i);
			}
		}
	});

} );
</script>

</body>
</html>
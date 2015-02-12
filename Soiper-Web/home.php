<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
		<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="jumbotron col-md-12" style="margin-top: 50px;">
					<div class="row">
						<div class="col-md-9">
							<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
								<!-- Indicators -->
								<ol class="carousel-indicators">
									<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
									<li data-target="#carousel-example-generic" data-slide-to="1"></li>
									<li data-target="#carousel-example-generic" data-slide-to="2"></li>
									<li data-target="#carousel-example-generic" data-slide-to="3"></li>
									<li data-target="#carousel-example-generic" data-slide-to="4"></li>
									<li data-target="#carousel-example-generic" data-slide-to="5"></li>
								</ol>

								<!-- Wrapper for slides -->
								<div class="carousel-inner" role="listbox">
									<div id="slide0" class="item active">
										<div style="background-image: url(img/ejemplo1.jpg); height: 415px; background-repeat:no-repeat;background-size:cover; margin: 0px auto;"></div>
										<div class="carousel-caption">
											ejemplo1
										</div>
									</div>
									<div id="slide1" class="item">
										<div style="background-image: url(img/ejemplo2.jpg); height: 415px; background-repeat:no-repeat;background-size:cover; margin: 0px auto;"></div>
										<div class="carousel-caption">
											ejemplo2
										</div>
									</div>
									<div id="slide2" class="item">
										<div style="background-image: url(img/ejemplo3.jpg); height: 415px; background-repeat:no-repeat;background-size:cover; margin: 0px auto;"></div>
										<div class="carousel-caption">
											ejemplo3
										</div>
									</div>
									<div id="slide3" class="item">
										<div style="background-image: url(img/ejemplo4.jpeg); height: 415px; background-repeat:no-repeat;background-size:cover; margin: 0px auto;"></div>
										<div class="carousel-caption">
											ejemplo4
										</div>
									</div>
									<div id="slide4" class="item">
										<div style="background-image: url(img/ejemplo5.jpg); height: 415px; background-repeat:no-repeat;background-size:cover; margin: 0px auto;"></div>
										<div class="carousel-caption">
											ejemplo5
										</div>
									</div>
									<div id="slide5" class="item">
										<div style="background-image: url(img/ejemplo6.jpg); height: 415px; background-repeat:no-repeat;background-size:cover; margin: 0px auto;"></div>
										<div class="carousel-caption">
											ejemplo6
										</div>
									</div>
								</div>

								<!-- Controls -->
								<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
								<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
							</div>
						</div>
						<div class="col-md-3">
							<button id="0" href="#carousel-example-generic" data-slide-to="0" style="background-image: url(img/ejemplo1.jpg); opacity:1; height: 200px; width: 240px; border: none; background-position: center; background-repeat:no-repeat;background-size:cover; margin: 0px auto;"></button>
						</div>
						<div class="col-md-3">
							<button id="1" href="#carousel-example-generic" data-slide-to="1" style="background-image: url(img/ejemplo2.jpg); opacity:0.5; height: 200px; width: 240px; border: none; background-position: center; background-repeat:no-repeat;background-size:cover; margin: 0px auto; margin-top: 15px"></button>
						</div>
					</div>
					<div class="row" style="margin-top: 25px">
						<div class="col-md-3">
							<button id="2" href="#carousel-example-generic" data-slide-to="2" style="background-image: url(img/ejemplo3.jpg); opacity:0.5; height: 100px; width: 255px; border: none; background-position: center; background-repeat:no-repeat;background-size:cover; margin: 0px auto; margin-right: -15px;"></button>
						</div>
						<div class="col-md-3">
							<button id="3" href="#carousel-example-generic" data-slide-to="3" style="background-image: url(img/ejemplo4.jpeg); opacity:0.5; height: 100px; width: 255px; border: none; background-position: center; background-repeat:no-repeat;background-size:cover; margin: 0px auto; margin-right: -15px;"></button>
						</div>
						<div class="col-md-3">
							<button id="4" href="#carousel-example-generic" data-slide-to="4" style="background-image: url(img/ejemplo5.jpg); opacity:0.5; height: 100px; width: 240px; border: none; background-position: center; background-repeat:no-repeat;background-size:cover; margin: 0px auto;"></button>
						</div>
						<div class="col-md-3">
							<button id="5" href="#carousel-example-generic" data-slide-to="5" style="background-image: url(img/ejemplo6.jpg); opacity:0.5; height: 100px; width: 240px; border: none; background-position: center; background-repeat:no-repeat;background-size:cover; margin: 0px auto;"></button>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<script>
			$("#carousel-example-generic").on('slide.bs.carousel', function() {
				var fadeOut = $(this).find('.active').index();
				$("#"+fadeOut.toString()).animate({ opacity : '0.5' }, 200);
			});
			$("#carousel-example-generic").on('slid.bs.carousel', function() {
				var fadeIn = $(this).find('.active').index();
				$("#"+fadeIn.toString()).animate({ opacity : '1' }, 200);
			});
		</script>
		
	</body>
</html>
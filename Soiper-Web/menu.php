<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	</head>
	<body>
		<!-- Fixed navbar -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="inicio.php">Soiper</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li <?php if(strpos($_SERVER["REQUEST_URI"],'inicio.php') !== false){echo "class=\"active\"";} ?>><a href="inicio.php">Inicio</a></li>
						<li <?php if(strpos($_SERVER["REQUEST_URI"],'noticias.php') !== false){echo "class=\"active\"";} ?>><a href="noticias.php">Noticias</a></li>
						<li <?php if(strpos($_SERVER["REQUEST_URI"],'contacto.php') !== false){echo "class=\"active\"";} ?>><a href="contacto.php">Contacto</a></li>
						<li <?php if(strpos($_SERVER["REQUEST_URI"],'nosotros.php') !== false){echo "class=\"active\"";} ?> ><a href="nosotros.php">Sobre Nosotros</a></li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</nav>
		<div class="container-fluid">
			<div class="row">
				<div class="jumbotron pull-right" style="margin-top: 50px">
					<a class="twitter-timeline" href="https://twitter.com/hayquemelol" data-widget-id="565581875084005376">Tweets por el @hayquemelol.</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				</div>
			</div>
		</div>
	</body>
</html>
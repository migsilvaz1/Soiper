<html>
	<head>
		<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	</head>
	<body>
		<div class="logo" style="width: 300px;height: 100px;background: url(img/ejemplo1.jpg) no-repeat center top;"></div>
		<script>
			$('.logo').hover(function() {
				$(this).animate({
					opacity : 0
				}, 'fast', function() {
					$(this).css({
						'background-image' : 'url(http://placehold.it/300x100/ffffff/000000.png&text=second)'
					}).animate({
						opacity : 1
					});
				});
			}, function() {
				$(this).animate({
					opacity : 0
				}, 'fast', function() {
					$(this).css({
						'background-image' : 'url(img/ejemplo1.jpg)'
					}).animate({
						opacity : 1
					});
				});
			});
		</script>
	</body>
</html>
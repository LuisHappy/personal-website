<?php require_once 'config/getenv.php'; ?>
<html>
<head>
	<title>Home - Luis Camacho</title>

	<link rel="stylesheet" type="text/css" href="css/style.css">

	<div id="navigation">
		<nav class="topnav">
			<a href="/pages/contact.html" id="contact">Contact</a>
	      	<a href="/pages/work.html" id="work">Work</a>
	      	<a href="/" id="home">Home</a>
		</nav>
	</div>
</head>
<body>
	<div class="content">
		<center>
		<h3>Latest Work</h3>

		<div id="video" class="container"></div>
		</center>
	</div>
</body>
</html>
<script src="scripts/jquery-3.3.1.min.js"></script>
<script type="text/javascript">

	$(document).ready(function () {
		$("#home").addClass('active');

		$.ajax({
			url: "php/getLink.php",
			type: 'POST',

		}).done(function( response ){
			console.log(response);
			var iframeInfo = '<iframe class ="video" src=" ' + response + ' " frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
			$('#video').append(iframeInfo);
		});
	});


</script>
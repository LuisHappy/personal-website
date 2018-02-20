<?php require_once 'config/getenv.php';?>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<?php include 'config/NavBar.php'; ?>
	<div class="center">
	<title>Home - Luis Camacho</title>


		
		<div class="content">
			<center>
			<h3>Latest Work</h3>
			<div id="videoContainer">
				<div id="video" class="container"></div>
			</div>
			</center>
		</div>
	</div>
<script src="scripts/jquery-3.3.1.min.js"></script>
<script type="text/javascript">

	$(document).ready(function () {
		$("#home").addClass('active');

		$.ajax({
			url: "php/getLink.php",
			type: 'POST',

		}).then(function( response ){
			
			var iframeInfo = '<iframe class ="video" src="' + response + '" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
			$('#video').append(iframeInfo);
		});
			$('#videoContainer').fadeOut(0, function(){
				$('#videoContainer').fadeIn(1500);
				
			});
	});


</script>
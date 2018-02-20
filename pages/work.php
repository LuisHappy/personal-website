	<title>Work - Luis Camacho</title>

	<link rel="stylesheet" type="text/css" href="../css/style.css">

	<?php require_once '../config/NavBar.php'; ?>
	<center>
		<div class="center">
			<div class="content ">
				<center>
					<h3>Instagram</h3>
					<div class="videoContainer">
						<iframe src="//lightwidget.com/widgets/e73029eb55545375bf04376e6289c76a.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 50%; border: 0; overflow: hidden;"></iframe>
					</div>
				</center>
				<div class="clear"></div>
			
					<h3>YouTube</h3>
					<div class="videoContainer">
						<div id="videoDiv"></div>
					</div>
				
			</div>
		</div>
	</center>

<script src="../scripts/jquery-3.3.1.min.js"></script>
<script src="//lightwidget.com/widgets/lightwidget.js"></script>

<script type="text/javascript">
	$(document).ready(function () {
		$("#work").addClass('active');

		$.ajax({
			url: "../php/getAllVideos.php",
			type: 'POST',
			
		}).then(function(response) {
			var iframeInfo = '<iframe class ="videoBox" src="' + response + '" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
			$('#videoDiv').append(iframeInfo);
		});
		$('.videoContainer').fadeOut(0, function(){
				$('.videoContainer').fadeIn(1500);
				
			});
	})
</script>
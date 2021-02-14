<html>
	<head>

	</head>
	<link rel='stylesheet' href='style.css'>

	<body>
	<div class='container'>
		<div class='col'>
			<?php echo "<div class='image-box'>"; include 'tourist1.html'; echo "</div>"; ?>
		</div>

		<div class='col'>
			<?php echo "<div class='image-box'>"; require 'tourist2.html'; echo "</div>"; ?>
		</div>
		<div class='col'>
			<?php echo "<div class='image-box'>"; include 'tourist3.html'; echo "</div>"; ?>
		</div>
		<div class='col'>
			<?php echo "<div class='image-box'>"; require 'tourist4.html'; echo "</div>"; ?>
		</div>
		<div class='col'>
			<?php echo "<div class='image-box'>"; include 'tourist5.html'; echo "</div>"; ?>
		</div>
	</div>

	<div class="footer">
		<p>Reference: <a href='https://guidetothephilippines.ph/articles/what-to-experience/top-tourist-spots-philippines'> Top 15 Must-Visit Tourist Spots in the Philippines</a></p>
	</div>
	
	</body>
</html>
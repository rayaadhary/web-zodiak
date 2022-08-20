<?php
	include_once "functions.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Zodiac</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>

		<div class="wrapper">
			<div class="inner">
				<form action="index.php" method="POST">
					<h3>Zodiac | Horoscope</h3>
					<p>Horoscope for today.</p>
					<label class="form-group">
						<!-- <input type="text" class="form-control"  required> -->
						<select class="form-control" name="zodiak" id="" style="backgroud-color: black;" required>
							<option value="">Choose</option>
							<option value="aries">Aries</option>
							<option value="taurus">Taurus</option>
							<option value="gemini">Gemini</option>
							<option value="cancer">Cancer</option>
							<option value="leo">Leo</option>
							<option value="virgo">Virgo</option>
							<option value="libra">Libra</option>
							<option value="scorpio">Scorpio</option>
							<option value="sagittarius">Sagittarius</option>
							<option value="capricorn">Capricorn</option>
							<option value="aquarius">Aquarius</option>
							<option value="pisces">Pisces</option>
						</select>
					</label>
					<button name="submit" type="submit">Submit 
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
				</form>
					<?php
						if(isset($_POST['submit'])){
							$q = $_POST['zodiak'];
							$data = zodiak($q);
							$hasil = $data["description"];
					?>
					<br>
					<br>
						<textarea class="form-control form-control-lg mt-5 text-light" rows="3"><?= $hasil; ?></textarea>
						<br>
						<br>
						<h5>Zodiac Related</h5>
							<?php
								$q = $data["mood"];
								$youtube = youtube($q);
								foreach ($youtube as $y) {
								?>
							<iframe width="250" height="150" src="https://www.youtube.com/embed/<?=$y["id"]["videoId"]?>" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen ></iframe>
							<?php
							}
							?>
					<?php
						}
					?>
			</div>
		</div>
		
	</body>
</html>
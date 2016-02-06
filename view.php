<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<header>
		Micro Cms
	</header>

	<?php 
		
		foreach ($articles as $value) {
			# code...
			?>
			<article>
				<h2><?= $value['art_title']; ?></h2>
				<h2><?= $value['art_content']; ?></h2>
			</article>
			<?php
		}
	 ?>

	<footer>
		build by yenteck
	</footer>
</body>
</html>
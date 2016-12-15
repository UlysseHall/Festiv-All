<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Festiv'All</title>
	<link rel="stylesheet" type="text/css" href="css/search.css">
	<link rel="stylesheet" type="text/css" href="css/style-nav.css">
	<link rel="stylesheet" type="text/css" href="css/style-footer.css">
	<link rel="stylesheet" href="css/style-search-form.css">
</head>
<body>

	<?php include("navbar.php"); ?>

	<main>
		<h1>Critères de sélection</h1>
		<center><?php include("searchForm.php"); ?></center>
		<hr>
		
		<h1>Résultats</h1>
		
		<?php
			if(isset($_SESSION["listFest"]) && isset($_SESSION["listStyle"]) && $_SESSION["listFest"] != [] && $_SESSION["listStyle"] != [])
			{
				$listFest = $_SESSION["listFest"];
				$listStyle = $_SESSION["listStyle"];
				$arrayIndex = 0;
				foreach($listFest as $festival)
				{
					?>
					<article>   
					
						<div class="date">
							<p class="pdate"><?php echo($festival[2]->format('j')); ?><br>
							<?php echo($festival[2]->format('F')); ?><br><?php echo($festival[2]->format('Y')); ?></p>
						</div>
						
						<div class="imgresult" style="background-image:url('img-content/festivals/<?php echo($festival[4]); ?>');">
							<h2><?php echo($festival[0]); ?></h2>
						</div>
						
						<div class="result">
							<h3><?php echo(ucfirst($festival[1])); ?></h3>
							
							<h4>
								<?php
								$length = count($listStyle[$arrayIndex]);
								$it = 0;
								foreach($listStyle[$arrayIndex] as $genre)
								{
									if($it != $length-1)
									{
										echo(" ". strtoupper($genre) ." -");
									}
									else
									{
										echo(" ". strtoupper($genre) ." ");
									}
									$it++;
								}
								?>
							</h4>
							<a href="info.php?id=<?php echo($festival[3]); ?>">En savoir plus ></a>
						</div>
						
					</article>
					<?php
					$arrayIndex++;
				}
			}
			else
			{
				?>
				<center><h3>Aucun résultat correspondant</h3></center>
				<?php
			}
		?>
	</main>
	<?php include("footer.php"); ?>
</body>
</html>
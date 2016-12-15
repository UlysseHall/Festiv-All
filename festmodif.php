<?php

session_start();
include_once("connect.php");

if(isset($_POST["pass"]) && $_POST["pass"] != "")
{
	$pass = sha1($_POST["pass"]);
	$festReq = $bdd->query("SELECT password, id FROM festival");

	while($fest = $festReq->fetch())
	{
		if($fest["password"] == $pass)
		{
			$festId = $fest["id"];
		}
	}
	
	if(!isset($festId))
	{
		header("Location: festadd.php");
	}
	
	$_SESSION["updateFestId"] = $festId;
	
	$fest = $bdd->prepare("SELECT * FROM festival WHERE id = :festId");
	$fest->execute(array(":festId" => $festId));
	$info = $fest->fetch();
	
	$artReq = $bdd->prepare("SELECT nom FROM artiste WHERE festival_id = :festId");
	$artReq->execute(array(":festId" => $festId));
	$listArtiste = "";
	foreach($artReq as $artiste)
	{
		$listArtiste.= $artiste["nom"].",";
	}
	$listArtiste = rtrim($listArtiste, ",");

	$styReq = $bdd->prepare("
		SELECT s.nom styNom
		FROM festyle fs
		INNER JOIN style s
		ON fs.style_id = s.id
		WHERE fs.festival_id = :festId");
	$styReq->execute(array(":festId" => $festId));
	
	$listStyles = [];
	foreach($styReq as $style)
	{
		array_push($listStyles, $style["styNom"]);
	}
	
	$info["date_start"] = str_replace(" ", "T", $info["date_start"]);
	$info["date_stop"] = str_replace(" ", "T", $info["date_stop"]);
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Festiv'All</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/festadd.css">
	<link rel="stylesheet" href="css/style-nav.css">
	<link rel="stylesheet" type="text/css" href="css/style-footer.css">
</head>

<body>

	<?php include("navbar.php"); ?>

	<section>
	
		<h1>Supprimer votre festival</h1>
		<form action="festivalDelete.php" method="POST">
			<input type="submit" value="Supprimer">
		</form>
		
		<hr>

		<h1>Modifier votre festival</h1>
		
		<?php include("addForm.php"); ?>
		
	</section>
	<?php include("footer.php"); ?>
</body>
</html>
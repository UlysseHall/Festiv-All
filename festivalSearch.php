<?php

include_once("connect.php");

$reqFest =	"SELECT f.id festId, f.nom festNom, f.date_start festDate, f.lieu festLieu
			FROM festival f
			INNER JOIN festyle fs
			ON f.id = fs.festival_id
			INNER JOIN style s
			ON fs.style_id = s.id";

if(isset($_POST["mois"]) && $_POST["mois"] != "")
{
	$mois = $_POST["mois"];
	$reqFest .= " WHERE MONTH(f.date_start) =".$mois;
}

if(isset($_POST["style"]) && $_POST["style"] != "")
{
	$styId = $_POST["style"];
	$reqFest .= " AND s.id =".$styId;
}

if(isset($_POST["lieu"]) && $_POST["lieu"] != "")
{
	$lieu = $_POST["lieu"];
	$reqFest .= " AND f.lieu="."'".$lieu."'";
}

$repFest = $bdd->query($reqFest);

$listFest = [];
$listStyle = [];

foreach($repFest as $fest)
{
	if(!in_array($fest["festNom"], $listFest))
	{
		array_push($listFest, $fest["festNom"]);
		$styles = $bdd->prepare("
			SELECT s.nom styleNom
			FROM style s
			INNER JOIN festyle fs
			ON s.id = fs.style_id
			WHERE fs.festival_id = :festivalId
		");
		$styles->execute(array(":festivalId" => $fest["festId"]));
		
		$tempStyleList = [];
		while($style = $styles->fetch())
		{
			array_push($tempStyleList, $style["styleNom"]);
		}
		
		array_push($listStyle, $tempStyleList);
	}
}

$arrayIndex = 0;
foreach($listFest as $festival)
{
	echo("Festival : " . $festival . ", Genres : ");
	foreach($listStyle[$arrayIndex] as $genre)
	{
		echo($genre . ", ");
	}
	echo("<br>");
	$arrayIndex++;
}
?>
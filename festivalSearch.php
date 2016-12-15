<?php

session_start();
include_once("connect.php");

$reqFest =	"SELECT f.id festId, f.nom festNom, f.date_start festDate, f.lieu festLieu, f.img festImg
			FROM festival f
			INNER JOIN festyle fs
			ON f.id = fs.festival_id
			INNER JOIN style s
			ON fs.style_id = s.id";

if(isset($_POST["mois"]) && $_POST["mois"] != "")
{
	$mois = mysql_real_escape_string($_POST["mois"]);
	$_SESSION["searchMois"] = $mois;
	$reqFest .= " WHERE MONTH(f.date_start) =".$mois;
}
else
{
	$_SESSION["searchMois"] = "";
}

if(isset($_POST["style"]) && $_POST["style"] != "")
{
	$styId = mysql_real_escape_string($_POST["style"]);
	$_SESSION["searchStyle"] = $styId;
	$reqFest .= " AND s.id =".$styId;
}
else
{
	$_SESSION["searchStyle"] = "";
}

if(isset($_POST["lieu"]) && $_POST["lieu"] != "")
{
	$lieu = mysql_real_escape_string($_POST["lieu"]);
	$_SESSION["searchLieu"] = $lieu;
	$reqFest .= " AND f.lieu="."'".$lieu."'";
}
else
{
	$_SESSION["searchLieu"] = "";
}

$reqFest .= " ORDER BY f.nom";

$repFest = $bdd->query($reqFest);

$listFest = [];
$listStyle = [];

foreach($repFest as $fest)
{
	$tempFestList = [$fest["festNom"], $fest["festLieu"], new DateTime($fest["festDate"]), $fest["festId"], $fest["festImg"]];
	if(!in_array($tempFestList, $listFest))
	{
		array_push($listFest, $tempFestList);
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

$_SESSION["listFest"] = $listFest;
$_SESSION["listStyle"] = $listStyle;
header("Location: search.php");
?>
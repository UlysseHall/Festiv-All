<?php

session_start();
include_once("connect.php");

//Récupération des données de festmodif.php en post

$nom = $_POST["nom"];
$lieu = strtolower($_POST["lieu"]);
$dateStart = $_POST["dateStart"];
$dateStop = $_POST["dateStop"];
$prix = $_POST["prix"];
$description = $_POST["description"];
$lien = $_POST["lien"];
$artistes = $_POST["artistes"];
$styles = $_POST["styles"];
$listArtistes = explode(",", $artistes);
$festId = $_SESSION["updateFestId"];

//Mise à jour des données du festival

$festReq = $bdd->prepare("UPDATE festival SET nom = :nom, lieu = :lieu, date_start = :dateStart, date_stop = :dateStop, prix = :prix, description = :description, lien = :lien WHERE id = :festId");
$festReq->execute(array(
	"nom" => $nom,
	"lieu" => $lieu,
	"dateStart" => $dateStart,
	"dateStop" => $dateStop,
	"prix" => $prix,
	"description" => $description,
	"lien" => $lien,
	"festId" => $festId
));

//Suppression des artistes du festival

$delArt = $bdd->prepare("DELETE FROM artiste WHERE festival_id = :festId");
$delArt->execute(array("festId" => $festId));

//Rajout des nouveaux artistes du festival

foreach($listArtistes as $artiste)
{
	$artReq = $bdd->prepare("INSERT INTO artiste(festival_id, nom) VALUES(:festival_id, :nom)");
	$artReq->execute(array(
		"festival_id" => $festId,
		"nom" => $artiste
	));
}

//Suppression des styles du festival

$delSty = $bdd->prepare("DELETE FROM festyle WHERE festival_id = :festId");
$delSty->execute(array("festId" => $festId));

//Rajout des nouveaux syles du festival

foreach($styles as $style)
{
	$styIdReq = $bdd->prepare("SELECT id FROM style WHERE nom = :nom");
	$styIdReq->execute(array(":nom" => $style));
	$styleId = $styIdReq->fetch();
	
	$styReq = $bdd->prepare("INSERT INTO festyle(festival_id, style_id) VALUES(:festival_id, :style_id)");
	$styReq->execute(array(
		"festival_id" => $festId,
		"style_id" => $styleId["id"]
	));
}

header("Location: info.php?id=".$festId);

?>
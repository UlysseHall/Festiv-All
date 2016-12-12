<?php

include_once("connect.php");

$nom = $_POST["nom"];
$lieu = $_POST["lieu"];
$dateStart = $_POST["dateStart"];
$dateStop = $_POST["dateStop"];
$prix = $_POST["prix"];
$taille = $_POST["taille"];
$description = $_POST["description"];
$lien = $_POST["lien"];
$artistes = $_POST["artistes"];
$styles = $_POST["styles"];

$listArtistes = explode(",", $artistes);
$listStyles = explode(",", $styles);

$festReq = $bdd->prepare("INSERT INTO festival(nom, lieu, date_start, date_stop, prix, taille, description, lien) 
	VALUES(:nom, :lieu, :date_start, :date_stop, :prix, :taille, :description, :lien)");
$festReq->execute(array(
	"nom" => $nom,
	"lieu" => $lieu,
	"date_start" => $dateStart,
	"date_stop" => $dateStop,
	"prix" => $prix,
	"taille" => $taille,
	"description" => $description,
	"lien" => $lien
));

$festivalId = $bdd->lastInsertId();

foreach($listArtistes as $artiste)
{
	$artReq = $bdd->prepare("INSERT INTO artiste(festival_id, nom) VALUES(:festival_id, :nom)");
	$artReq->execute(array(
		"festival_id" => $festivalId,
		"nom" => $artiste
	));
}

foreach($listStyles as $style)
{
	$styReq = $bdd->prepare("INSERT INTO style(festival_id, nom) VALUES(:festival_id, :nom)");
	$styReq->execute(array(
		"festival_id" => $festivalId,
		"nom" => $style
	));
}
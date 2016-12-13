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
$password = sha1($_POST["password"]);

$listArtistes = explode(",", $artistes);

$festReq = $bdd->prepare("INSERT INTO festival(nom, lieu, date_start, date_stop, prix, taille, description, lien, password) 
	VALUES(:nom, :lieu, :date_start, :date_stop, :prix, :taille, :description, :lien, :password)");
$festReq->execute(array(
	"nom" => $nom,
	"lieu" => $lieu,
	"date_start" => $dateStart,
	"date_stop" => $dateStop,
	"prix" => $prix,
	"taille" => $taille,
	"description" => $description,
	"lien" => $lien,
	"password" => $password
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

foreach($styles as $style)
{
	$styIdReq = $bdd->prepare("SELECT id FROM style WHERE nom = :nom");
	$styIdReq->execute(array(":nom" => $style));
	$styleId = $styIdReq->fetch();
	
	$styReq = $bdd->prepare("INSERT INTO festyle(festival_id, style_id) VALUES(:festival_id, :style_id)");
	$styReq->execute(array(
		"festival_id" => $festivalId,
		"style_id" => $styleId["id"]
	));
}
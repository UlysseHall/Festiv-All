<?php

session_start();
include_once("connect.php");

//Récupération des données du formulaire

$nom = $_POST["nom"];
$lieu = strtolower($_POST["lieu"]);
$dateStart = $_POST["dateStart"];
$dateStop = $_POST["dateStop"];
$prix = $_POST["prix"];
$description = $_POST["description"];
$lien = $_POST["lien"];
$artistes = $_POST["artistes"];
$styles = $_POST["styles"];
$img = "defaut.jpg";
$password = uniqid();
$passwordEncrypted = sha1($password);

$listArtistes = explode(",", $artistes);

//Requête de création du festival sans les styles musicaux et sans les artistes

$festReq = $bdd->prepare("INSERT INTO festival(nom, lieu, date_start, date_stop, prix, description, lien, password, img) 
	VALUES(:nom, :lieu, :date_start, :date_stop, :prix, :description, :lien, :password, :img)");
$festReq->execute(array(
	"nom" => $nom,
	"lieu" => $lieu,
	"date_start" => $dateStart,
	"date_stop" => $dateStop,
	"prix" => $prix,
	"description" => $description,
	"lien" => $lien,
	"password" => $passwordEncrypted,
	"img" => $img
));

$festivalId = $bdd->lastInsertId();

//Requête d'envoie de données des artistes

foreach($listArtistes as $artiste)
{
	$artReq = $bdd->prepare("INSERT INTO artiste(festival_id, nom) VALUES(:festival_id, :nom)");
	$artReq->execute(array(
		"festival_id" => $festivalId,
		"nom" => $artiste
	));
}

//Requête d'envoie de données des styles musicaux

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

//Création des sessions de password (affiché sur la page successadd.php)
//et d'id du festival pour afficher le lien du festival créé

$_SESSION["pass"] = $password;
$_SESSION["festId"] = $festivalId;
header("Location: successadd.php");
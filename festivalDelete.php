<!--
	Code de suppression de festival
-->

<?php

session_start();
include_once("connect.php");

$festId = $_SESSION["updateFestId"];

//Suppression du festival

$delReq = $bdd->prepare("DELETE FROM festival WHERE id = :festId");
$delReq->execute(array("festId" => $festId));

//Suppression des artistes liés au festival

$delReqArt = $bdd->prepare("DELETE FROM artiste WHERE festival_id = :festId");
$delReqArt->execute(array("festId" => $festId));

//Suppression des styles musicaux liés au festival

$delReqSty = $bdd->prepare("DELETE FROM festyle WHERE festival_id = :festId");
$delReqSty->execute(array("festId" => $festId));

header("Location: index.php");
?>
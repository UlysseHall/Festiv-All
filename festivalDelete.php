<?php

session_start();
include_once("connect.php");

$festId = $_SESSION["updateFestId"];

$delReq = $bdd->prepare("DELETE FROM festival WHERE id = :festId");
$delReq->execute(array("festId" => $festId));

$delReqArt = $bdd->prepare("DELETE FROM artiste WHERE festival_id = :festId");
$delReqArt->execute(array("festId" => $festId));

$delReqSty = $bdd->prepare("DELETE FROM festyle WHERE festival_id = :festId");
$delReqSty->execute(array("festId" => $festId));

header("Location: index.php");
?>
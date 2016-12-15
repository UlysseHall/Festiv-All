<?php

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
}

?>
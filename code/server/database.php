<?php
	//verbindet mit der datenbank und weisst es einen Namen zu
	require_once "code/server/presentation/helper/DatabaseConnection.php";
	$configuration_file_contents = file_get_contents("code/server/configuration/data.json");
	$configuration = json_decode($configuration_file_contents, true);

	$database = new DatabaseConnection($configuration["hostname"], $configuration["username"], $configuration["password"], $configuration["databasename"]);
?>
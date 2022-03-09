<?php
require_once "code/server/presentation/helper/DatabaseConnection.php";

class DatabaseManager{

	public static $database;
	
	public static function initialize(){
	//connect ENGLISH PLS  mit der datenbank und weisst es einen Namen zu
	$configuration_file_contents = file_get_contents("code/server/configuration/data.json");
	$configuration = json_decode($configuration_file_contents, true);
	self::$database = new DatabaseConnection($configuration["hostname"], $configuration["username"], $configuration["password"], $configuration["databasename"]);
	
	}
}

DatabaseManager::initialize();

?>
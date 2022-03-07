<style>
	input {
		background-color: lightblue;
	}

	.empfehlung {
		display: flex;
		flex-direction: column;
	}

	p {
		align-self: flex-start;
	}
</style>

<?php
require_once "app/server/presentation/controller/Empfehlung.php";

require_once "app/server/database.php";
$besprechungen = $database->getFirstResult($database->query("SELECT * FROM `besprechung` where empf_id  = ? LIMIT 1", array($_GET['id']), array('i')));


echo "
<form method=\"POST\">
	<div class=\"empfehlung\">
	

		
		<img src=\"" .   str_replace("C:/xampp/htdocs/Projekt_ouk307/htdocs/", "", $besprechungen["img_path"]) .   "\"  alt=\"place\">
		<h1>" . $besprechungen["titel"] . "</h1>
		
			<p id=\"summary\">" .  $besprechungen["text"] . "</p>
	
	</div>
</form>
";
?>
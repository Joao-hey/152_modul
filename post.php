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
require_once "code/server/presentation/controller/Empfehlung.php";

require_once "code/server/database.php";
$post = DatabaseManager::$database->getFirstResult($database->query("SELECT * FROM `post` where post_id  = ? LIMIT 1", array($_GET['id']), array('i')));


echo "
<form method=\"POST\">
	<div class=\"post_site\">
	

		
		<img src=\"" . "code/client/img/img-post/". $empfehlung["img_path"] .   "\"  alt=\"place\">
		<h1>" . $post["titel"] . "</h1>
		
			<p id=\"summary\">" .  $post["text"] . "</p>
	
	</div>
</form>
";
?>
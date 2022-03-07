<style>
	.box-container {
		text-align: center;
		padding-bottom: 20px;
	}

	.content-preseberator img {
		min-height: 0px;
	}

	.box {
		border: 2px dotted;
		display: inline-block;
		text-align: center;
		padding: 20px;
		width: 100%;
		max-width: 1100px;
		vertical-align: middle;
		box-sizing: border-box;
		margin-bottom: 10px;
	}

	.emp {
		margin-bottom: 20px;
		display: flex;
		flex-direction: column;
	}
</style>

<form method="POST">

	<h1>Gespräche</h1>

	<div class="box-container">
		<a class="box" href="Empfehlung-erstellung.php"> Gespräch anfangen </a>
	</div>

	<?php
	require_once "app/server/database.php";

	$besprechungen = $database->toArray($database->query("SELECT * FROM besprechung"));

	foreach ($besprechungen as $besprechung) {
		echo " 
		<a href=\"Empfehlung.php? id=" . $besprechung["empf_id"] . "\">
			<div class=\"emp\">
				<img src=\"" . str_replace("C:/xampp/htdocs/Projekt_ouk307/htdocs/", "", $besprechung["img_path"]) . "\" alt=\"place\">
				<h1>" . $besprechung["titel"] . "</h1>
				
				<div>
					<p id=\"summary\"> " . $besprechung["text"] . "</p>
				</div>
			</div>
		</a>";
	}
	?>
</form>
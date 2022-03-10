

<div class="box-body">
	    <div>
			<a class="box" class="add-button" href="create.php"> Plus </a>
			<div></div>

<?php
	require_once "code/server/database.php";

	$posts = DatabaseManager::$database->toArray(DatabaseManager::$database->query("SELECT * FROM posts"));

	foreach ($posts as $post) {
		echo " 
		<a href=\"Empfehlung.php? id=" . $post["empf_id"] . "\">
			<div class=\"emp\">
				<img src=\"" . "152_modul/code/client/view/images/new/". $post["img_path"] . "\" alt=\"place\">
				<h1>" . $post["titel"] . "</h1>
				
				<div>
					<p id=\"summary\"> " . $post["text"] . "</p>
				</div>
			</div>
		</a>
		";
	}
	?>
	</div>
                    
</div>
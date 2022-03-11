<div class="box-body">
    <div>
        <a class="box" href="create.php"> <img class="box-image" id="box-image" src="code/client/img/plus_v2.png" alt="hah"> <label class="box-image-label" for="box-image">Post hinzufügen</label> </a>


        <?php
	require_once "code/server/database.php";

	$posts = DatabaseManager::$database->toArray(DatabaseManager::$database->query("SELECT * FROM posts"));

	foreach ($posts as $post) {
		echo " 
		<a class=\"post\" href=\"Post.php? id=" . $post["post_id"] . "\">
			<div class=\"post-content\" class=\"emp\">
				<div>
					<h1>Titel: " . $post["titel"] . "</h1>
				</div>

				<div>
					<p id=\"summary\">Text: " . $post["text"] . "</p>
				</div>
				
				<img class=\"post-content-img\" src=\"" . "code/client/img/img-post/". $post["imageName"] . "\" alt=\"place\">
			</div>
		</a>
		";
	}
	?>
    </div>

</div>
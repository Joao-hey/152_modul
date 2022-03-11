

<div class="box-body">
	    <div>
			<a class="box" class="add-button" href="create.php"> <img src="code/client/img/plus_v2.png" alt="hah"> </a>
			

<?php
	require_once "code/server/database.php";

	$posts = DatabaseManager::$database->toArray(DatabaseManager::$database->query("SELECT * FROM posts"));

	foreach ($posts as $post) {
		echo " 
		<a class=\"post\" href=\"Post.php? id=" . $post["post_id"] . "\">
			<div class=\"post-content\" class=\"emp\">
				<img class=\"post-content-img\" src=\"" . "code/client/img/img-post/". $post["imageName"] . "\" alt=\"place\">
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
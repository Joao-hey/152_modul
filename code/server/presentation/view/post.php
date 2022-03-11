<?php 
require_once "code/server/database.php";
$post = DatabaseManager::$database->getFirstResult(DatabaseManager::$database->query("SELECT * FROM `posts` where post_id  = ? LIMIT 1", array($_GET['id']), array('i')));


echo "
<div class=\"box-body\">
	    <div>
			<form method=\"POST\">
				<div class=\"post_site\">
					<div>
						<h1>" . $post["titel"] . "</h1>
					</div>
					<div>
						<p id=\"summary\">" .  $post["text"] . "</p></div>
					
						<div>
							<p>Lizenz: </p>
							<p>". $post["lizens"] ."</p>";

										require_once "code/server/presentation/controller/post.php";
										echo "

										<img class=\"post-img\" src=\"" . "code/client/img/img-post/". $post["imageName"] .   "\"  alt=\"place\">
					</div>
				</div>
			</form>
	</div>                 
</div>
";

?>
<style>
	.box-body{
    display: flex;
    justify-content: center;
    color: var(--black);
}

.box-body *{
    color: var(--black);
}

.box-body div{
    display: flex;
    width: 70%;
    background-color: var(--white);
    color: var(--black);
    padding: 5%;
    flex-wrap: wrap;
    justify-content: space-around;
}

.box-body div div{
    background-color: var(--white);
    color: var(--black);
    width: 20%;
    margin-bottom: 1em;
}
</style>

<div class="box-body">
                    <div>
						<div></div>

<?php
	require_once "code/server/database.php";

	$empfehlungen = $database->toArray($database->query("SELECT * FROM empfehlung"));

	foreach ($empfehlungen as $empfehlung) {
		echo " 
		<a href=\"Empfehlung.php? id=" . $empfehlung["empf_id"] . "\">
			<div class=\"emp\">
				<img src=\"" . "152_modul/code/client/view/images/new/". $empfehlung["img_path"] . "\" alt=\"place\">
				<h1>" . $empfehlung["titel"] . "</h1>
				
				<div>
					<p id=\"summary\"> " . $empfehlung["text"] . "</p>
				</div>
			</div>
		</a>
		";
	}
	?>
	</div>
                    
</div>
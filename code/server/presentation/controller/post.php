<?php require_once "code/server/presentation/controller/create.php"; 
require_once "code/server/database.php";
$post = DatabaseManager::$database->getFirstResult(DatabaseManager::$database->query("SELECT * FROM `posts` where post_id  = ? LIMIT 1", array($_GET['id']), array('i')));
$license = $post["lizens"];

if( $license == "cc0"){
    echo"<a href=\"https://creativecommons.org/share-your-work/public-domain/cc0/\"> cc0</a>";
}else if( $license == "cc-by"){
    echo"<a href=\"http://creativecommons.org/licenses/by/4.0/\"> cc-by</a>";
}else if( $license == "cc-by-nd"){
    echo"<a href=\"http://creativecommons.org/licenses/by-nd/4.0/\"> cc-by-nd</a>";
}else if( $license == "cc-by-nc"){
    echo"<a href=\"http://creativecommons.org/licenses/by-nc/4.0/\"> cc-by-nc</a>";
}else if( $license == "cc-by-nc-sa"){
    echo"<a href=\"http://creativecommons.org/licenses/by-nc-sa/4.0/\"> cc-by-nc-sa</a>";
}else if( $license == "cc-by-nc-nd"){
    echo"<a href=\"http://creativecommons.org/licenses/by-nc-nd/4.0/\"> cc-by-nc-nd</a>";
}else if( $license == "cc-by-sa"){
    echo"<a href=\"http://creativecommons.org/licenses/by-sa/4.0/\"> cc-by-sa</a>";
}else{
    echo"Alle recht vorbehalten";
}
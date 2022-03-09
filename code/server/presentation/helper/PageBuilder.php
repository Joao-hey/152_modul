<?php

class PageBuilder
{
    
    //ENGLISH PLS erstell funktionion für die website
    public static function pagebuild($title = "", $pageKey = "")
    {
        echo "<!DOCTYPE html>
        <html lang=\"en\">
        
        <head>
            <meta charset=\"UTF-8\">
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
            <title>". $title ."</title>
            <link rel=\"stylesheet\" href=\"code/client/Style/Start_website.css\">
        </head>
        
        <body>
            <div class=\"box\">
                <div class=\"box-header\">
                    <a href=\"index.php\">
                        <img class=\"logo\" src=\"code/client/img/logo.png\" alt=\"\">
                    </a>

                    <div class=\"button\">
                    ";
                    include("code/server/presentation/controller/task.php"); 
                    echo "
                    </div>
                </div>
        
                <div class=\"box-underliner\">
        
                    <picture>
                        <source srcset=\"code/client/img/line-small.png\" media=\"(max-width: 700px)\">
                        <img src=\"code/client/img/line-big.png\" alt=\"\">
                    </picture>
                </div>
        
                
                    ";

        include($_SERVER["DOCUMENT_ROOT"] . "/152_modul/code/server/presentation/view/" . $pageKey .".php");


        
        echo "
                    

    </div>
</body>

</html>
";
    }
}
<?php
class PageBuilder
{
    //erstell funktionion fèr die website
    public static function pagebuild($title = "", $pageKey = "")
    {
        echo "<!DOCTYPE html>
        <html lang=\"en\">
        
        <head>
            <meta charset=\"UTF-8\">
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
            <title>". $title ."</title>
            <link rel=\"stylesheet\" href=\"/152_modul/code/client/Style/Start_website.css\">
        </head>
        
        <body>
            <div class=\"box\">
                <div class=\"box-header\">
                    <a href=\"/152_modul/code/server/index.php\">
                        <img class=\"logo\" src=\"/152_modul/code/client/img/logo.png\" alt=\"\">
                    </a>

                    <div class=\"button\">
                        <a href=\"/152_modul/code/server/login.php\">anmelden</a>
                        <a href=\"/152_modul/code/server/signup.php\">registieren</a>
                    </div>
                </div>
        
                <div class=\"box-underliner\">
        
                    <picture>
                        <source srcset=\"/152_modul/code/client/img/line-small.png\" media=\"(max-width: 700px)\">
                        <img src=\"/152_modul/code/client/img/line-big.png\" alt=\"\">
                    </picture>
                </div>
        
                <div class=\"box-body\">
                    ";

        include($_SERVER["DOCUMENT_ROOT"] . "/152_modul/code/server/presentation/view/" . $pageKey .".php");


        echo "

                    
                </div>

    </div>
</body>

</html>
";
    }
}
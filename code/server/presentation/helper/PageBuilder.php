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
        
                    <img class=\"logo\" src=\"client/img/logo.png\" alt=\"\">
        
                    <div class=\"button\">
                        <a href=\"\">anmelden</a>
                        <a href=\"\">registieren</a>
                    </div>
                </div>
        
                <div class=\"box-underliner\">
        
                    <picture>
                        <source srcset=\"client/img/line-small.png\" media=\"(max-width: 700px)\">
                        <img src=\"client/img/line-big.png\" alt=\"\">
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
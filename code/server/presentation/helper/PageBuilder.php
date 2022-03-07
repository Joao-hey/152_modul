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
                    <title>$title</title>
                    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
                    <meta name=\"viewport\" content=\"width=K, initial-scale=1.0\">
                    <link rel=\"stylesheet\"  href=\"app/client/view/styles/Style.css\">
                </head>
                <body>
                    <div class=\"link-container\">
                        <table class=\"link\" >
                            <tr class=\"link-button\">
                                <td" . ($title == "Startseite" ? " class=\"active\" " : "") . ">
                                    <a class=\"logo\" href=\"Startseite.php\">
                                        <img src=\"app/client/view/images/header.jpg\" alt=\"logo\">
                                    </a>
                                </td>
                                
                                

                                <td" . ($title == "Empfehlung" ? " class=\"active\" " : "") . ">
                                    <a class=\"link-button-text\" href=\"Empfehlungen.php\">Gespräche</a>
                                </td>


                                <td" . ($title == "Profil" ? " class=\"active\" " : "") . ">
                                    <a class=\"link-button-text\" href=\"Profile.php\">Profil</a>
                                </td>

                                <td class=\"extra\" >
                                    <p>Day:     
                                    <script>
                                        var today = new Date();
                                        var time = today.getFullYear() + \"-\" + (today.getMonth()+1) + \"-\" +  today.getDate() + \"<br>\" + today.getHours() + \":\" + today.getMinutes() + \"uhr\";
                                        document.write(time);;
                                    </script> 
                                    </p>
                                </td>

                            </tr>

                        </table>

                    </div>
                
                    <div class=\"content-container\">
                        <div class=\"content-body\">
                            <div class=\"content\">
    
                            
                            ";

        include($_SERVER["DOCUMENT_ROOT"] . "/Projekt_ouk307-main/htdocs/app/server/presentation/view/" . $pageKey .".php");


        echo "

                            </div>
                            <div class=\"content-preseberator\">
                                    <img src=\"app/client/view/images/Bild-" . rand(1, 4) . ".png\" alt=\"cool photo missing\">
                            </div>
                        </div>

                        <div class=\"footer\">
                            <span>&copy " . date("Y") . " Jc gmbh</span>" . " &#183 " . "<a href=\"Datenschutz.php\">Datenschutz</a>
                        </div> 
                            
                    </div>
                    
                </body>
            </html>
";
    }
}
<!DOCTYPE html>
<html>
    <head>
    
    </head>
    <body>

            <ul>
                
                <?php
                
                    $file = "list.txt";

                    
                    if (file_exists($file)) {
                        
                        
                        $fileHandle = fopen($file, "r");

                        
                        
                        while (($line = fgets($fileHandle)) !== false) {
                            $parts = explode(";", $line);

                            
                            if (count($parts) >= 2) { 
                                $url = trim($parts[0]); /
                                $description = trim($parts[1]);

                             
                                echo "<li><a href=\"$url\">$description</a></li>";
                            }
                        }

                       
                        fclose($fileHandle);
                        
                    } else {
                        
                        echo "Plik nie istnieje.";
                        
                    }
                
                
                ?>
                             
            </ul>

    
    
    
    </body>
</html>





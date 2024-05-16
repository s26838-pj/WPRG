<!DOCTYPE html>
<html lang="pl">
    <head>
    </head>
    <body>

        <form action="" method="post" enctype="multipart/form-data">
            Wybierz plik tekstowy: <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Send File" name="submit">
        </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $file = $_FILES["fileToUpload"]["tmp_name"];
    
            $fileHandle = fopen($file, "r");

            
            $lines = [];
            while (!feof($fileHandle)) {
                $lines[] = fgets($fileHandle);
            }

            
            fclose($fileHandle);

        
            $reversedLines = array_reverse($lines);
            $fileHandle = fopen($file, "w");

            foreach ($reversedLines as $line) {
                fwrite($fileHandle, $line);
            }

            fclose($fileHandle);

            echo "Kolejność wierszy została odwrócona.";

         }
        ?>

        
        
        
        
        
        
        
    </body>
</html>








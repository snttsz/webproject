<?php

    $headerPath = __DIR__ . '/templates/header.php';

    if (file_exists($headerPath))
    {
        include($headerPath);
    }
    else
    {
        http_response_code(404);
        
        echo "Couldn't find header file in " . $headerPath;
    }

?>

<!DOCTYPE html>

<html lang="en">

    <head>
        
        <meta charset="UTF-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="../assets/css/patterns.css">

        <title>SoundnShare</title>
    
    </head>

    <body>

    </body>

</html>
<!DOCTYPE html>
<html>
    <head>
        <title>Leson_2</title>
        <meta charset="utf-8">
    </head>
    <body>
         <?php
            $rawApiResponse = file_get_contents(filename:"https://dog.ceo/api/breeds/image/random");
            $apiResponse = json_decode($rawApiResponse, associative:true);
            // var_export($rawApiResponse);
            // echo "\nI am here\n";
            // echo $apiResponse["message"];
         ?>
        <img src="<?= $apiResponse["message"] ?>" alt="">
    </body>
</html>

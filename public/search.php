<?php

    require(__DIR__ . "/../includes/config.php");

    // numerically indexed array of places
    $places = [];

    // TODO: search database for places matching $_GET["geo"]
        
    $geo = ($_GET["geo"] . "%");
   
     $places= query("SELECT * FROM places WHERE place_name LIKE ?", $geo); 
        

    // output places as JSON (pretty-printed for debugging convenience)
    header("Content-type: application/json");
    print(json_encode($places, JSON_PRETTY_PRINT));
    

?>

<?php
 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>court</title>
    <link rel="stylesheet" href="court.css">
</head>
<body id="background">
    
    <div id="content">
    <button class="btn" id="outdoor" onclick="outdoor()">Outdoor Court</button>
    <button class="btn" id="indoor" onclick="indoor()">Indoor Court</button>
    </div>
    
</body>
</html>

<Script>


    function outdoor(){
        window.location.href = 'outdoorCourt.php'
    }

    function indoor(){
        window.location.href = 'indoorCourt.php'
    }
</Script>
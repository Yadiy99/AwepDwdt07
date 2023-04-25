<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="indoorCourt.css">
</head>
<body>
    <div id="header"><h1>Indoor court booking Request</h1></div>

    <div id="content">
        <h1>DD/MM/YY</h1>
        <br>
        <button id="time">Enter time</button>
        <br>
        <button id="cancel" onclick="cancel()">Cancel</button>
        <button id="book">Book Now</button>
    </div>
</body>
</html>

<script>
    function cancel() {
        window.location.href = 'court.php';
    }
</script>
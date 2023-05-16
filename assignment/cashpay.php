<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet" />
  <link href="./css/main.css" rel="stylesheet" />
  <title>Payment Confirmation</title>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font-size: 16px;
      font-family: 'Inter', sans-serif;
      font-weight: regular;
      color: #333;
      margin: 0;
      padding: 0;
    }

    .container {
      position: relative;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background-color: rgba(199, 255, 237, 1);
    }

    .card {
      width: 600px;
      padding: 60px;
      border-radius: 30px;
      background-color: #0088cc;
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    .card__icon {
      width: 80px;
      height: 80px;
      margin: 0 auto;
      border-radius: 50%;
      background-color: #6cd869;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .card__icon img {
      max-width: 50px;
      max-height: 50px;
    }

    .card__title {
      font-size: 24px;
      margin-top: 20px;
      margin-bottom: 10px;
      font-weight: bold;
      color: white;
    }

    .card__message {
      font-size: 18px;
      margin-bottom: 30px;
      color: white;
    }

    .button {
      display: inline-block;
      padding: 10px 20px;
      border-radius: 30px;
      background-color: #64D469;
      color: #fff;
      font-size: 16px;
      text-decoration: none;
      transition: background-color 0.3s ease;
    }

    .button:hover {
      background-color: #4D9E50;
    }

/* -------------------------------------------tick thing------------------------------------------- */
    #tick-mark {
    position: relative;
    display: inline-block;
    width: 30px;
    height: 30px;
}

#tick-mark::before {
    position: absolute;
    left: 0;
    top: 50%;
    height: 50%;
    width: 3px;
    background-color: #336699;
    content: "";
    transform: translateX(10px) rotate(-45deg);
    transform-origin: left bottom;
}

#tick-mark::after {
    position: absolute;
    left: 0;
    bottom: 0;
    height: 3px;
    width: 100%;
    background-color: #336699;
    content: "";
    transform: translateX(10px) rotate(-45deg);
    transform-origin: left bottom;
}
/* -------------------------------------------tick thing------------------------------------------- */

  </style>
</head>

<body>
  <div class="container">
    <div class="card">
      <div class="card__icon">
      <div id="tick-mark"></div>
      </div>
      <h1 class="card__title"><b> Please pay cash by the counter. </b></h1>
      <p class="card__message">Thank you for your booking, username. Your booking details have been emailed to you.</p>
      <br>
      <a href="#" class="button">Continue</a>
    </div>
  </div>
</body>

</html>

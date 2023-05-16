<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet" />
    <link href="./css/main.css" rel="stylesheet" />
    <title>Document</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-size: 14px;
        }

        .container {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgba(199, 255, 237, 1);
        }

        .payment-options {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 30px;
            padding: 20px;
            background-color: rgba(255, 255, 255, 1);
            border-radius: 30px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
        }

        .payment-title {
            font-family: Inter;
            font-weight: bold;
            font-size: 30px;
            text-align: center;
        }

        .payment-option {
            align-items: center;
            gap: 10px;
            text-align: center;
        }

        .payment-icon {
            width: 150px;
            height: 150px;
            background-size: cover;
            background-position: center;
        }

        .payment-button {
            width: 400px;
            padding: 10px;
            font-size: 18px;
            font-weight: bold;
            color: #ffffff;
            border: none;
            border-radius: 30px;
            background-color: #0088cc;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .payment-button:hover {
            background-color: #006699;
        }

        img{
          width: 180px;
          height: 180px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="payment-options">
            <h1 class="payment-title">Choose a Payment Method</h1>
            <div class="payment-option">
                
              <button class="payment-button">
                <img src="images/cash.png" alt="Cash Icon" />
                <br>
                Cash
              </button>

            </div>
            <div class="payment-option">

            <button class="payment-button">
                <img src="images/card.png" alt="Card Icon" />
                <br>
                Card
            </button>

            </div>
        </div>
    </div>
</body>

</html>

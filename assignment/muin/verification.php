<?php
function generateVerificationCode() {
  $codeLength = 6; // Length of the verification code
  $characters = '0123456789'; // Characters to use for the code

  $code = '';
  $maxIndex = strlen($characters) - 1;

  for ($i = 0; $i < $codeLength; $i++) {
    $code .= $characters[random_int(0, $maxIndex)];
  }

  return $code;
}
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="verification.css">
<head>
  <meta charset="UTF-8">
  <title>Verification</title>
  <script>
    
      var userCode = document.getElementById("verification-input").value;
      var generatedCode = document.getElementById("verification-code").innerText;

    function performOperation() {
      // Perform the operation and check for success

      var userCode = document.getElementById("verification-input").value;
      var generatedCode = document.getElementById("verification-code").innerText;
      if (userCode === generatedCode) {
        window.location.href = "accCreated.php"; // Replace with the URL of your success page
      } 
      else {
        alert ("Verification failed, try again.")
      }
    }
  </script>
</head>
<body>
 
  <div class="verification-box">
  <h1>Verify account</h1>
  <p>Enter verification code that has been sent to you</p>
    <p class="verification-code" id="verification-code"><?php echo generateVerificationCode(); ?></p>
    <input type="text" id="verification-input" placeholder="Enter verification code" required>
    <br>
    <button onclick="performOperation()"><h2>Verify</h2>   </button>
  </div>
</body>
</html>

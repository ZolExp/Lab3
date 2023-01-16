<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="../main.css">
    <meta charset="utf-8">  
    <title>QR Code Generator</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>

    <?php include '../header.php'; ?>

    <div class="wrapper">
      <header>
        <h1>QR Code Generator</h1>
        <p>Paste a url or enter text to create QR code</p>
      </header>
      <div class="form">
        <input type="text" spellcheck="false" placeholder="Enter text or url">
        <button>Generate QR Code</button>
      </div>
      <div class="qr-code">
        <img src="" alt="qr-code">
      </div>
    </div>

    <script src="script.js"></script>

  </body>
</html>
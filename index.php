<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="index.css" type="text/css" />
</head>
<body>
  <div class="container">
    <h2>Mad Lib</h2>
    <form method="POST" action="madlibSubmit.php" accept-charset="UTF-8">
      <div class="row">
        <label>Number greater than one </label>
        <br />
        <input type="number" step="1" name="number">
        <p class="error"><?php if(isset($error['number'])){
          echo $error['number'];
        }
        ?></p>
      </div>
      <div class="row">
        <label>Verb ending in '-ing' </label>
        <br />
        <input type="text" name="verb">
        <p class="error"><?php if(isset($error['verb'])){
          echo $error['verb'];
          }
        ?></p>
      </div>
      <div class="row">
        <label>Plural noun </label>
        <br />
        <input type="text" name="pluralNoun">
        <p class="error"><?php if(isset($error['pluralNoun'])){
          echo $error['pluralNoun'];
          }
          ?></p>
      </div>
      <div class="row">
        <label>Singular noun </label>
        <br />
        <input type="text" name="singleNoun">
        <p class="error"><?php if(isset($error['singleNoun'])){
          echo $error['singleNoun'];
          }
          ?></p>
      </div>
      <div class="row">
        <label>City </label>
        <br />
        <input type="text" name="city">
        <p class="error"><?php if(isset($error['city'])){
          echo $error['city'];
          }
          ?></p>
      </div>
      <div class="form-buttons">
        <input type="submit" name="submit" value="Send"><input type="reset" value="Clear">
      </div>
    </form>
  </div>
</body>
<?PHP
$madLibMessage = "";
$number = "";
$verb = "";
$pluralNoun = "";
$singleNoun = "";
$city = "";

if ($_POST && isset($_POST['submit'])) {
    $number = $_POST['number'];
    $verb = $_POST['verb'];
    $pluralNoun = $_POST['pluralNoun'];
    $singleNoun = $_POST['singleNoun'];
    $city = $_POST['city'];
    $error = array();

    if (!is_numeric($number)) {
        $error['number'] = "Please enter numbers only for the 'Number greater than one' field.";
    } elseif (!$number || $number <= 1) {
        $error['number'] = "Please enter a number greater than one.";
    }
    if (!$verb) {
        $error['verb'] = "Please enter a verb ending in '-ing'";
    } elseif (substr($verb, -3) !== 'ing') {
        $error['verb'] = "Please make sure the verb ends in '-ing'";
    }
    if (!$pluralNoun) {
        $error['pluralNoun'] = "Please enter a plural noun";
    }
    if (!$singleNoun) {
        $error['singleNoun'] = "Please enter a single noun";
    }
    if (!$city) {
        $error['city'] = "Please enter a city";
    }
    if (count($error) === 0) {
        $madLibMessage = "The magic of $city is evident on summer nights when $number $pluralNoun can be seen $verb around the $singleNoun!";
    }
}
?>

<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="index.css" type="text/css" />
</head>
<body>
  <div class="container">
    <h2>Mad Lib</h2>
    <?php echo "$madLibMessage" ?>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" accept-charset="UTF-8">
      <div class="form-inputs" style="<?php
        if ($madLibMessage) {
            echo 'display: none';
        } else {
            echo 'display: inherit';
        }
        ?>"
      >
        <div class="row">
          <label>Number greater than one </label>
          <br />
          <input type="number" step="1" maxlength="10" value="<?php echo $number ?>" name="number">
          <p class="error">
            <?php if (isset($error['number'])) {
                echo $error['number'];
            }
            ?>
          </p>
        </div>
        <div class="row">
          <label>Verb ending in '-ing' </label>
          <br />
          <input type="text" maxlength="50" value="<?php echo $verb ?>" name="verb">
          <p class="error">
            <?php if (isset($error['verb'])) {
                echo $error['verb'];
            }
            ?>
          </p>
        </div>
        <div class="row">
          <label>Plural noun </label>
          <br />
          <input type="text" maxlength="50" value="<?php echo $pluralNoun ?>" name="pluralNoun">
          <p class="error">
            <?php if (isset($error['pluralNoun'])) {
                echo $error['pluralNoun'];
            }
            ?>
          </p>
        </div>
        <div class="row">
          <label>Singular noun </label>
          <br />
          <input type="text" maxlength="50" value="<?php echo $singleNoun ?>" name="singleNoun">
          <p class="error">
            <?php if (isset($error['singleNoun'])) {
                echo $error['singleNoun'];
            }
            ?>
          </p>
        </div>
        <div class="row">
          <label>City </label>
          <br />
          <input type="text" maxlength="50" value="<?php echo $city ?>" name="city">
          <p class="error">
            <?php if (isset($error['city'])) {
                echo $error['city'];
            }
            ?>
          </p>
        </div>
        <div class="form-buttons">
          <input type="submit" name="submit" value="Submit"><input type="reset" value="Clear">
        </div>
      </div>
      <br />
      <div class="form-buttons">
        <input type="submit" name="Clear errors" value="Reset">
      </div>
    </form>
  </div>
</body>

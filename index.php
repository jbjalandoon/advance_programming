<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Assignment One</title>
    <style media="screen">
    .col {
      float: left;
      width: 33.33%;
    }

    .container:after {
      display: table;
      clear: both;
    }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="col">
        <h3>Name</h3>
        <h3>Jerome Jalandoon</h3>
      </div>
      <div class="col">
        <h3>Operation</h3>
        <form class="" action="index.php" method="post">
          <label for="num_one">Enter First Number: </label>
          <br>
          <br>
          <input type="number" name="num_one" value="" required>
          <br>
          <br>
          <label for="num_two">Enter Second Number: </label>
          <br>
          <br>
          <input type="number" name="num_two" value="" required>
          <br>
          <br>
          <input type="submit" name="operation" value="+">
          <input type="submit" name="operation" value="-">
          <input type="submit" name="operation" value="*">
          <input type="submit" name="operation" value="/">
        </form>
        <br>
        <?php
          if (isset($_POST['operation'])) {
            $numOne = $_POST['num_one'];
            $numTwo = $_POST['num_two'];
            if ($_POST['operation'] == "+") {
              $answer = $numOne + $numTwo;
            } elseif ($_POST['operation'] == "-") {
              $answer = $numOne - $numTwo;
            } elseif ($_POST['operation'] == "*") {
              $answer = $numOne * $numTwo;
            } else {
              $answer = $numOne / $numTwo;
            }
              echo "Answer: " . $answer;
          }
        ?>
      </div>
      <div class="col">
        <h3>GCD</h3>
        <form class="" action="index.php" method="post">
          <label for="num_one">Enter First Number: </label>
          <br>
          <br>
          <input type="number" name="num_one" value="" required>
          <br>
          <br>
          <label for="num_two">Enter Second Number: </label>
          <br>
          <br>
          <input type="number" name="num_two" value="" required>
          <br>
          <br>
          <input type="submit" name="gcd" value="Find the GCD">
        </form>
        <br>
        <?php
          if (isset($_POST['gcd'])) {
            $numOne = $_POST['num_one'];
            $numTwo = $_POST['num_two'];
            $gcd = 1;
            for ($i = 1; $i <= $numOne && $i <= $numTwo; $i++) {
              if ($numOne % $i == 0 && $numTwo % $i== 0) {
                $gcd = $i;
              }
            }
            echo "GCD: " . $gcd;
          }
        ?>
      </div>
    </div>
  </body>
</html>

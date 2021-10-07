<html>
  <head>
    <title>PHP Loops Demonstration</title>
  </head>
  <body>
    <h1>PHP Loops Demonstration</h1>
    <div>
      <h2>The FOR Loop:</h2>
      <?php
        for ($i=1; $i < 11; $i++) { 
          echo "The value of the loop counter is: $i\n";
          echo "<br>";
        }
      ?>
    </div>
    <hr>
    <div>
      <h2>The WHILE Loop:</h2>
      <?php
        $a=1;
        while ($a <= 10) {
          echo "The value of the loop counter is: $a";
          echo "<br>";
          $a++;
        }
      ?>
    </div>
    <hr>
    <div>
      <h2>The DO WHILE Loop:</h2>
      <?php
        $b=1;
        do {
          echo "The value of the loop counter is: $b";
          echo "<br>";
          $b++;
        } while ($b <= 10);
      ?>
    </div>
    <hr>
    <div>
      <h2>The FOREACH Loop:</h2>
      <?php
        $colors = array("orange", "purple", "green", "pink");
        
        foreach ($colors as $color) {
          echo "$color";
          echo "<br>";
        }
        ?>
    </div>
  </body>

</html>
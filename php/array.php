<!DOCTYPE html>
<html>
    <body>

<?php
  //INDEXED ARRAY
  $color=array("Blue","Green","Red");
  echo "My favourite colours are: ".$color[0]." , ".$color[1]." and ".$color[2]."<hr/>";

  //ARRAY LENGTH
  echo count($color)."<hr/>";

  //LOOP THROUGH AN INDEXED ARRAY
  $arrlength=count($color);

  for($x=0 ; $x<$arrlength;$x++)
  {
      echo $color[$x]."<br>";
  }
  echo "<hr/>";

  //ASSOCIATIVE ARRAYS
  $tscore=array("John"=>"60", "Bill"=>"80", "Dan"=>"75");
  echo "Bill scored ",$tscore["Bill"]." /100";

  echo "<hr/>";

  //LOOP THROUGH AN ASSOCIATIVE ARRAY
  foreach($tscore as $x=>$score){
      echo "Key=".$x." , Score=".$score;
      echo "<br>";
  }

  echo "<hr/>";
  //MULTIDIMENSIONAL ARRAY
  $grade=array
  (
      array("John",50,60),
      array("Bob",40,25),
      array("Sam",35,40),
      array("Dan",55,26)

  );

  echo $grade[0][0].": Test 1: ".$grade[0][1].", Test 2: ".$grade[0][2]."<br>";
  echo $grade[1][0].": Test 1: ".$grade[1][1].", Test 2: ".$grade[1][2]."<br>";
  echo $grade[2][0].": Test 1: ".$grade[2][1].", Test 2: ".$grade[2][2]."<br>";
  echo $grade[3][0].": Test 1: ".$grade[3][1].", Test 2: ".$grade[3][2]."<br>";

  echo "<hr/>";

  //SORT
  $names=array("John","Bob","Dan","Sue","Ted","Sam","Xena","Zara");
  sort($names);//rsort() will reverse the order

  $len=count($names);
  for($x=0;$x<$len;$x++){
      echo $names[$x];
      echo "<br>";
  }
  echo "<hr/>";

  //ASSOCIATIVE ARRAY SORT ACCORDING TO VALUE
  $tscore=array("John"=>"60", "Bill"=>"80", "Dan"=>"75");
  asort($tscore);//arsort() for descending order
  foreach($tscore as $y=>$score){
    echo "Key=".$y." , Score=".$score;
    echo "<br>";
}
echo "<hr/>";

//ASSOCIATIVE ARRAY SORT ACCORDING TO KEY
$tscore=array("John"=>"60", "Bill"=>"80", "Dan"=>"75");
ksort($tscore);//krsort() for descending order
foreach($tscore as $y=>$score){
  echo "Key=".$y." , Score=".$score;
  echo "<br>";
}
echo "<hr/>";


//GLOBAL VARIABLE
$x=30;
$y=40;

function add(){
    $GLOBALS['x']=$GLOBALS['x']+$GLOBALS['y'];
}

add();
echo $x;
echo "<hr/>";

// OTHER SUPERGLOBALS
echo $_SERVER['PHP_SELF'];
echo "<hr/>";
echo $_SERVER['SERVER_NAME'];
echo "<hr/>";

?>


</body>
</html>
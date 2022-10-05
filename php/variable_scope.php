<!DOCTYPE html>
<html>
    <body>

    <?php

    // global scope example
    $x=5;$y=45;//global scope

    function test1(){
        // will generate error
        echo "<p>value of x is: $x</p>";
    }
    test1();
    echo "<p> value of x is: $x</p><hr/>";
    function test3(){
        global $x,$y;
        $y=$x+$y;
    }

    test3();// execute func.
    echo $y;//output value of y


    // local scope variable
    function test2(){
       $y=5; //local scope
       echo "<p>value of y is: $y</p>";
    }
    test2();
    //will generate error
    echo "<p>value of y is: $y</p>";

    function test4(   )

    ?>

</body>
</html>
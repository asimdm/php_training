<?php
    $name="Abira-69";
    echo "$name.<br>";

    $a=0;
    $b=10.5;
    echo "value of a+b is ".$a+$b."<br>";
    echo "value of a is ";
    var_dump($a);
    echo "<br>";
    echo "value of b is ";
    var_dump($b);
    echo "<br>";
    echo "value of a+b is ";
    var_dump($a+$b);
    echo "<br>";
    echo "value of a*b is ";
    var_dump($a*$b);
    echo "<br>";

    echo "is_int($a)<br>";

    $colour = array("Blue", "Black", "Red", "White");
    echo $colour[0];
    echo "<br>";
    var_dump($colour);

    $str = "Techno India NJR";
    echo "<br>".strlen($str);
    echo "<br>".str_word_count($str);
    echo "<br>".strrev($str);
    echo "<br>".strpos($str,"India");
    echo "<br>".str_replace("India","Universe",$str);
?>
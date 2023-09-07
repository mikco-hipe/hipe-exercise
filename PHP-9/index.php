<?php 

    function concatenation(){
        $testString = "Hello";

        //Concatination Operator
        $toConcatOperator = $testString ." madlang people mabuhay!";
        
        //Shorthand
        $toConcatShorthand = "Hello";
        $toConcatShorthand .= " madlang people mabuhay!";
    
        echo $toConcatOperator, "<br>";
        echo $toConcatShorthand, "<br>";
    }

    function substring(){
        $testString = "The quick brown fox jumps over the lazy dog.";

        echo substr($testString, 1), "<br>";
        echo substr($testString, 1, null), "<br>";
        echo substr($testString, 1, 3), "<br>";
        echo substr($testString, 0, 4), "<br>";
        echo substr($testString, 0, 8), "<br>";
        echo substr($testString, -1, 1), "<br>";

        echo $testString[0], "<br>";
        echo $testString[3], "<br>";
        echo $testString[4], "<br>";

    }

    function replacement(){

    }
   concatenation();
   substring();
?>
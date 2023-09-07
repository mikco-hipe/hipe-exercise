<?php 

    function concatenation(){
        $testString = "Hello";

        //Concatination Operator
        $toConcatOperator = $testString ." madlang people mabuhay!";
        
        //Shorthand
        $toConcatShorthand = "Hello";
        $toConcatShorthand .= " madlang people mabuhay!";
    
        echo $toConcatOperator."<br>";
        echo $toConcatShorthand."<br>";
    }

    function substring(){
        $testString = "The quick brown fox jumps over the lazy dog.";

        echo substr($testString, 0, 10) . "<br>";
        echo substr($testString, 10, 15) . "<br>";
        echo substr($testString, 25) . "<br>";

    }

    function replacement(){
        $string1 = 'I am going East <br>';
        $string2 = str_replace('East', 'West', $string1);

        echo $string1;
        echo $string2;
    }
   concatenation();
   substring();
   replacement();
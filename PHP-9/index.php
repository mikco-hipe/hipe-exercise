<?php 

    function concatenation(){
        $testString = "Hello";

        // concatination Operator
        $toConcatOperator = $testString ." madlang people mabuhay!";
        
        // shorthand
        $toConcatShorthand = "Hello";
        $toConcatShorthand .= " madlang people mabuhay!";
    
        echo $toConcatOperator."<br>";
        echo $toConcatShorthand."<br>";
    }

    function substring(){
        $testString = "The quick brown fox jumps over the lazy dog.";

        // will display only depending on the specifed index
        echo substr($testString, 0, 10) . "<br>";
        echo substr($testString, 10, 15) . "<br>";
        echo substr($testString, 25) . "<br>";

    }

    function replacement(){

        // the original string will be replaced
        $string1 = 'I am going East <br>';
        $string2 = str_replace('East', 'West', $string1);

        echo $string1;
        echo $string2;
    }
    // function calls
   concatenation();
   substring();
   replacement();
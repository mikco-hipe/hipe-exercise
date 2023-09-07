<?php 
    function generateFibonacci($n) {
        $fibonacci = [];
        $fibonacci[0] = 0;
        $fibonacci[1] = 1;

        for ($i = 2; $i < $n+1; $i++) {
            $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        }

        return $fibonacci;
    }

$n = 10; 
$fibonacciSequence = generateFibonacci($n);

for($i=0; $i<count($fibonacciSequence); $i++){
    echo $fibonacciSequence[$i], " ";
}
?>

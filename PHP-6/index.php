<?php
$unsortedArray = array(14, 3, 15, 7, 13, 17, 8, 10, 16, 2, 5, 20, 9, 1, 11, 4, 19, 18, 12, 6);

function ascendingOrder($unsortedArray)
{
    $length = count($unsortedArray);
    for ($i = 0; $i < $length - 1; $i++) {
        for ($j = $i + 1; $j < $length; $j++) {
            if ($unsortedArray[$i] > $unsortedArray[$j]) {
                $temp = $unsortedArray[$i];
                $unsortedArray[$i] = $unsortedArray[$j];
                $unsortedArray[$j] = $temp;
            }
        }
    }

    echo "Ascending Order: <br>";
    foreach ($unsortedArray as $value) {
        echo $value . " ";
    }
    echo "<br>";
}

function descendingOrder($unsortedArray)
{
    $length = count($unsortedArray);
    for ($i = 0; $i < $length - 1; $i++) {
        for ($j = $i + 1; $j < $length; $j++) {
            if ($unsortedArray[$i] < $unsortedArray[$j]) {
                $temp = $unsortedArray[$i];
                $unsortedArray[$i] = $unsortedArray[$j];
                $unsortedArray[$j] = $temp;
            }
        }
    }

    echo "Descending Order: <br>";
    foreach ($unsortedArray as $value) {
        echo $value . " ";
    }
    echo "<br>";
}

ascendingOrder($unsortedArray);
descendingOrder($unsortedArray);

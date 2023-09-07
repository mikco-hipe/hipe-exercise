<?php 
date_default_timezone_set("Asia/Manila");

//Different date format
echo "Dates in different format";
echo "The date today is " . date("Y/m/d") . "<br>";
echo "The date today is " . date("Y.m.d") . "<br>";
echo "The date today is " . date("Y-m-d") . "<br>";
echo "The date today is " . date("l") . "<br><br>";

//
echo "The time today is " . date("h:i:sa");
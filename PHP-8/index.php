<?php 
date_default_timezone_set("Asia/Manila");

// different date format
echo "Dates in different format";
echo "The date today is " . date("Y/m/d") . "<br>";
echo "The date today is " . date("Y.m.d") . "<br>";
echo "The date today is " . date("Y-m-d") . "<br>";
echo "The date today is " . date("l") . "<br><br>";

// will display time today
echo "The time today is " . date("h:i:sa");
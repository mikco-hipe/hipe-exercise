<?php 

    //Creating a file
    $createFile = fopen("C:\laragon\www\hipe-exercises\PHP-10\createdFile.txt", "w");
    echo "Creating Files... <br>";
    fwrite($createFile, "PHP<br>");
    fwrite($createFile, "JavaScript<br>");
    fwrite($createFile, "Python<br>");
    fwrite($createFile, "Java<br>");
    fwrite($createFile, "Rust<br>");
    echo "Files Created<br><br>";
    fclose($createFile);

    //Reading file
    echo "Reading Files<br>";
    $createFile = fopen("C:\laragon\www\hipe-exercises\PHP-10\createdFile.txt", "r") or die("File doesn't exist");
    echo fread($createFile, filesize("C:\laragon\www\hipe-exercises\PHP-10\createdFile.txt"));
    fclose($createFile);

    //Deleting File
    unlink("C:\laragon\www\hipe-exercises\PHP-10\createdFile.txt");
    echo "<br>Files Deleted<br>";

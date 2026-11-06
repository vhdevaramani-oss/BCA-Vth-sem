<?php
$file = fopen("student.txt", "w");

if ($file) {
    
    fwrite($file, "Welcome to PHP Programming!\n");
    fwrite($file, "This is a file handling example.");


    fclose($file);

    echo "File created and data written successfully.";
} else {
    echo "Unable to create the file.";
}
?>

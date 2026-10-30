<?php
// Create and open a file in write mode
$file = fopen("student.txt", "w");

// Check whether the file is opened successfully
if ($file) {
    // Write data into the file
    fwrite($file, "Welcome to PHP Programming!\n");
    fwrite($file, "This is a file handling example.");

    // Close the file
    fclose($file);

    echo "File created and data written successfully.";
} else {
    echo "Unable to create the file.";
}
?>
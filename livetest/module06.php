<?php
// Live Test Assignment

$file_name = "ostad.txt";

if (file_exists($file_name)) {
    # Open the file for reading and writing
    $file = fopen($file_name, "r+");
    # Move the file pointer to the end of the file
    fseek($file, 0, SEEK_END);
    # Get the current date and time
    $date = date("Y-m-d H:i:s");
    # Append the date and time to the file contents
    fwrite($file, "\n$date");
    # Close the file
    fclose($file);
} else {
    # Create the file if it does not exist
    $file = fopen($file_name, "w");
    # Get the current date and time
    $date = date("Y-m-d H:i:s");
    # Write the date and time to the file
    fwrite($file, "$date");
    # Close the file
    fclose($file);
}

?>

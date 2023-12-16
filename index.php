<?php 
$file = fopen('csv_files.csv', 'r'); // Open the CSV file in read mode

if ($file) {
    $firstRow = fgetcsv($file); // Read the first row

    if ($firstRow !== false) { // Check if a row was successfully read
         
      foreach ($firstRow as $columnName) :
       echo  $columnName;
      endforeach;
    } else {
        echo "Error reading CSV file.";
    }

    fclose($file); // Close the CSV file
} else {
    echo "Error opening CSV file.";
}
?>
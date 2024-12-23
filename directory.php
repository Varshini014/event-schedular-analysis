<?php
$directoryName = "uploads";

// Check if the directory does not exist
if (!is_dir($directoryName)) {
    // Create the directory
    if (mkdir($directoryName, 0777)) { // 0777 is the default mode, you can adjust the permissions as needed
        echo "Directory created successfully";
    } else {
        echo "Failed to create directory";
    }
} else {
    echo "Directory already exists";
}
?>

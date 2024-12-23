<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Gallery</title>
    <style>
        .gallery {
            display: flex;
            flex-wrap: wrap;
        }
        .gallery img {
            width: 200px;
            height: 200px;
            object-fit: cover;
            margin: 5px;
        }
    </style>
</head>
<body>
    <div class="gallery">
        <?php
        // Directory where your images are stored
        $imageDir = 'images/';
        
        // Get all files in the directory
        $images = glob($imageDir . 'b1.jpg');

        // Connect to MySQL (replace these variables with your MySQL connection details)
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "javapoint";

        $con = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        }
        
        // Insert filenames into MySQL table
        foreach ($images as $image) {
            // Insert filename into the table
            $filename = basename($image);
            $sql = "INSERT INTO gallery (filename) VALUES ('$filename')";
            if ($conn->query($sql) === FALSE) {
                echo "Error: " . $sql . "<br>" . $con->error;
            }
        }

        // Display images
        foreach ($images as $image) {
            echo '<img src="' . $b1.jpg . '" alt="Gallery Image">';
        }

        // Close MySQL connection
        $con->close();
        ?>
    </div>
</body>
</html>
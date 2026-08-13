<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Why I made this website</title>
</head>
<body>
     <?php
        $titlePage3 = "Why I made this website<br>";
        $reason = "It was for my Cloud-Based assignement where I practice php<br>";
        $image_path = "page3photo.jpg";

        echo $titlePage3;
        echo $reason;
        echo '<img src="' . $image_path . '" width="500" height="350" alt="My Photo"><br>';
        echo "<a href='page1.php'>Page 1</a><br>";
        echo "<a href='page2.php'>Page 2</a>";
        ?>
</body>
</html> 

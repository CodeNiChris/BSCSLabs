<!DOCTYPE html>
<html lang="en">
    <?php
        $titlePage2 = "My Hobbies";
        $hobby = "Playing games, coding, joining competitions, and going out with my friends";
        $image_path = "page2photo.jpg";
        ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titlePage2; ?></title>
</head>
<body>
    <?php
        echo $hobby . "<br>";
        echo '<img src="' . $image_path . '" width="500" height="350" alt="My Photo"><br>';
        echo "<a href='page1.php'>Page 1</a><br>";
        echo "<a href='page3.php'>Page 3</a>";
        ?>
</body>
</html> 

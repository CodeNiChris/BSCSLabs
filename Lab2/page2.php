<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Hobbies</title>
</head>
<body>
    <?php
        $titlePage2 = "My Hobbies<br>";
        $hobby = "Playing games, coding, joining competitions, and going out with my friends<br>";
        $image_path = "page2photo.jpg";

        echo $titlePage2;
        echo $hobby;
        echo '<img src="' . $image_path . '" width="500" height="350" alt="My Photo"><br>';
        echo "<a href='page1.php'>Page 1</a><br>";
        echo "<a href='page3.php'>Page 3</a>";
        ?>
</body>
</html> 

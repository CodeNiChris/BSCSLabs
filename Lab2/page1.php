<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About me</title>
</head>
<body>
    <?php
        $titlePage1 = "About me<br>";
        $name = "Christian Benedict Marie Espinosa<br>";
        $course = "Bachelor of Science in Computer Science - Major in Game Development";
        $image_path = "page1photo.jpg";

        echo $titlePage1;
        echo $name;
        echo $course."<br>";
        echo '<img src="' . $image_path . '" width="300" height="300" alt="My Photo"><br>';
        echo "<a href='page2.php'>Page 2</a><br>";
        echo "<a href='page3.php'>Page 3</a>";
        ?>
</body>
</html> 

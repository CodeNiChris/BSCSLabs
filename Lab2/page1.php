<!DOCTYPE html>
<html lang="en">
<?php
        $titlePage1 = "About me";
        $name = "Christian Benedict Marie Espinosa";
        $course = "Bachelor of Science in Computer Science - Major in Game Development";
        $image_path = "page1photo.jpg";
        ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titlePage1; ?></title>
</head>
<body>
    <?php
        echo $name . "<br>";
        echo $course."<br>";
        echo '<img src="' . $image_path . '" width="300" height="300" alt="My Photo"><br>';
        echo "<a href='page2.php'>Page 2</a><br>";
        echo "<a href='page3.php'>Page 3</a>";
        ?>
</body>
</html> 

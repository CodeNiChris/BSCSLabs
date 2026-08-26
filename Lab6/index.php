<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p id="content"></p>

    <input type=""text" id="name" placeholder="Enter your name">
    <button onclick="hello(), setTimeout(closeMessage, 1)">Submit</button>


    <script>
        function hello(){
            let name = document.getElementById("name").value;
            document.getElementById("content").innerHTML = "I am " + name;
        }

        function closeMessage(){
            alert("Bye!");
        }
    </script>   




    <!-- <img src="two.png" id="image" style = "width: 1600px; height: 800px;" alt="">
    

    <button onclick="document.getElementById('image').src='one.png'">Win</button>
    <button onclick="document.getElementById('image').src='two.png'">Lose</button> -->
</body>
</html> 

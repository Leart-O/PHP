<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         form > input{
            margin-bottom: 10px;
            font-size: 20px;
            padding: 5px;
        }

        button{
            background: none;
            border: 1px solid black;
            padding: 10px 40px;
            font-size: 20px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <form action="add.php" method="POST">
        <input type="text" name="username" id="username" placeholder="Username"><br><br>

        <input type="text" name="name" id="name" placeholder="Name"><br><br>

        <input type="email" name="email" id="email" placeholder="email"><br><br>
        
         <input type="text" name="Surname" id="Surname" placeholder="Surname"><br><br>
        <button type="submit" name="submit">ADD</button><br>
    </form>
</body>
</html>
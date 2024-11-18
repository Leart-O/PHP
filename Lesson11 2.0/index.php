<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
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
        <label for="usermne">Username</label><br>
        <input type="text"  id="username" placeholder="Username" required><br>

        <label for="name">Name</label><br>
        <input type="text"  id="name" placeholder="Name" required><br>

        <label for="surname">Surname</label><br>
        <input type="text" id="Surname" placeholder="Surname" required><br>

        <label for="email">Email</label><br>
        <input type="email" id="email" placeholder="email" required><br>

        <button type="submit" name="submit">ADD</button>
    </form>
</body>
</html>
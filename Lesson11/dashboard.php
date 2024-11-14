<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <style>
        table{
            border: 1px solid black;
            border-collapse: collapse;

        }
        tr, th, td{
            border:1px solid black;
            padding: 10px;
        }
    </style>
</head>
<body>
    <?php
    include_once("config.php");

    $getUsers = $pdo->prepare("SELECT * FROM users");
    $getUsers->execute();
    $users = $getUsers->fetchAll();

        
    ?>

<table>
    <thead>
        <th>Username</th>
        <th>Name</th>
        <th>Surname</th>
        <th>Password</th>
        <th>Email</th>
    </thead>
    <tbody>
        <?php
        
        ?>
    </tbody>
</table>

</body>
</html>
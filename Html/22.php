<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


</head>
<body>
<table>
    <tr>
        <th>Name</th>
        <th>Age</th>
    </tr>
    <tr>
        <td>John</td>
        <td>25</td>
    </tr>
    <tr>
        <td>Sarah</td>
        <td>30</td>
    </tr>
    <tr>
        <td>Mike</td>
        <td>28</td>
    </tr>
    <?php
    if(isset($_POST['name']) && isset($_POST['age'])) {
        $name = $_POST['name'];
        $age = $_POST['age'];
        echo "<tr><td>$name</td><td>$age</td></tr>";
    }
    ?>
</table>
<form method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name"><br><br>
    <label for="age">Age:</label>
    <input type="text" id="age" name="age"><br><br>
    <input type="submit" value="Submit">
</form>
</body>
</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <style>
        body{
            margin: 30px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="column column-60 column-offset-20">
            <h1>Welcome</h1>
            <h2>
                <?php
                    echo "hello";
                ?>
            </h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                numqua
            </p>
            <p>
                <?php
                $fname = '';
                $lname = '';
                ?>
                <?php if (isset($_REQUEST['fname']) && !empty($_REQUEST['fname'])){  ?>
                <?php $fname =  $_REQUEST['fname'];
                 } ?>
                <br>
                <?php if (isset($_REQUEST['lname']) && !empty($_REQUEST['lname'])){  ?>
                     <?php $lname = $_REQUEST['lname'];  } ?>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="column column-60 column-offset-20">
            <form action="" method="POST">
                <label for="fname">First Name</label>
                <input type="text" name="fname" id="fname" value="<?php echo $fname; ?>">
                <label for="lname">Last Name</label>
                <input type="text" name="lname" id="lname" value="<?php echo $lname; ?>">
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
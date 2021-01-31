<style>
<?php include "style.css"; ?>
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <?php
     if (isset($_GET["fname"])){
        $name = $_GET['fname'];
     }
    if (isset($_GET['submit'])){
        //title change code starts
        ?>
        <title>
        <?php echo $name." Wishes You Happy Diwali"      ?>
        </title>
        <?php
        //title change code ends
    }

    ?>
</head>
<body style="background: url(giphy.gif);">
    <?php
    $name = '';
    if (isset($_GET["fname"])){
        $name = $_GET['fname'];
    }

    if (isset($_GET['submit'])){
        ?>
        <p id="ptag">
        <?php
        echo $name;
        ?>
        </p>
        <?php
    }
    ?>
    <h2>Wishes you a Happy Diwali</h2>
    <img id="image" src="gif.gif" width="300px">

    <form class="form" action="index.php" method="GET">
        <input type="text" placeholder="Enter your name" name="fname"><br>
        <button type="submit" id="btn" name="submit">Show Your Name</button>
    <?php
         function current_url()
         {
             $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
             $validURL = str_replace("&","&amp;",$url);
             return $validURL;
         }
         if (isset($_GET['submit'])){
            echo "<br>";
            echo "Share Link : ";
            ?>
            <a href="#" id="atag">
            <?php
            echo current_url();
            ?>
            </a>
            <?php
        }
    ?>
</body>
</html>
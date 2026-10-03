<?php

    $name= "Arry";
    $interests= "Click one of them!";
    $link= "";
    $interest_color= "blue";
    $about_color = "blue";
    $other_works = "";
    $other_interests= "I have also done: ";
    $progress= "";
    $greetings="";


    if (isset($_GET["page"])){ //this is how a get function works
        $page= $_GET["page"];

        if ($page == "about"){
            $interests= "I like programming!";
            $link = '<a href="https://livejournal.space">My another website</a>';
            $about_color= "red";

        }

        if ($page == "interests"){
            $interests= "I enjoy animation and movies!";
            $link = '<a href="https://en.wikipedia.org/wiki/The_Batman_(film)">My favorite film</a>';
            $interest_color= "red";
        }

    }

    if (isset($_POST["action"])){
        $action= $_POST["action"];

        if ($action == "game") {
            $other_works= '<a style= color:red href="https://3hroned.itch.io">My games</a>';
        }

        if ($action== "animation") {
            $other_works= "i dont have any to show for that 😭";
        }
    }

    if (isset($_POST["testing"])){
        $progress = "Sorry, work in progress 👷‍♂️🏗️";
    }

    if ($_SERVER['REQUEST_METHOD'] === "POST" && (isset($_POST["username"]))) {
        $username = $_POST["username"];

        $greetings= "Hi " . $username;

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Arry's Site</title>
</head>
<body>
    <h1 class="title">My DashBoard</h1>

    <div class="introduction-box">
        <div class="introduction">Introduction👋</div>
        <div class="introduction-text">Hello there, I am <?php echo $name;?></div>
    </div>

    <div class="interests-box">
        <div class="interests">🎨Interests</div>
        <?php echo $interests. " ". $link;?>
        <br>
        <a style= color:<?php echo $about_color;?> href="index.php?page=about">About me</a> <!-- get function -->
        <br>
        <a style=color:<?php echo $interest_color;?> href="index.php?page=interests">My interests</a>
        <br>
        <div><?php echo $other_interests . $other_works;?></div>
        <form method="POST">
            <button class="game-button" name="action" value="game">My games</button>
            <br>
            <button class="animation-button" name="action" value="animation">My animation</button>
            <br>
        </form>

        <form method="POST">
            <button class="progress" type="submit" name="testing">thats it??</button>
            <br>
            <input type="text" name="username">
        </form>
        <div>
            <?php echo $progress;?>
        </div>
        <div>
            <?php echo $greetings;?>
        </div>
    </div>
</body>
</html>
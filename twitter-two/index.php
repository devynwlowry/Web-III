<?php 
    
    $tweets=['twitter'];

    if($_POST['twitter']) {
        array_push($tweets, $_POST['twitter'], 'twitter');
        $json = json_encode($tweets);
        file_get_contents('tweets.json');
        file_put_contents('tweets.json', $json);
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Twitter Clone</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <div id="container">
        <div id="content">
            <div id="profile">
                <div class="Photo"></div>
                <h2> Devyn Lowry </h2>
                <div id="Followers">
                    <h3>Followers</h2>
                    <p><b>270</b></p>
                </div>
                <div id="Following">
                    <h3 class="Followingnum"> Following </h3>
                    <p class="num"><b>312</b></p>
                </div>
                <button type="button"><b>Follow</b></button>
                <form class="newtweet" action="index.php" method="POST">
                    <textarea name="twitter" placeholder="New Tweet"></textarea>
                    <button type="submit" name="tweet" class="tweet"><b>Tweet</b></button>
                </form>
            <?php
                $_SESSION['tweets'] = $_POST['twitter'];

                if(isset($_POST['twitter'])){
                echo ("<ul style='text-align:center; margin-top:-400px;=; font-family:Helvetica Neue;font-weight:500;font-size: 22px;'>" . $_POST['twitter'] . "</ul>");
                }
            ?>
            </div>
        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<?php 
    include('index.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="ISO-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="search.css">
    <link href="https://fonts.googleapis.com/css?family=Supermercado+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
</head>
<body>
    <header>
        <div class="dark-nav">
            <ul>
                <li><a href="action.php">Clan</a></li>
                <li class="active"><a href="#">Player</a></li>
                <li><a href="#">Top Clans</a></li>
                <li><a href="#">Top Players</a></li>
            </ul>
            <div class="float-right">
            <i class="material-icons">account_circle</i>
            <i class="material-icons">autorenew</i>
        </div>
        </div>
    </header>
    <header id="header2">
        <div class="nav-bar">
        <div class="container-head">
            <div class="heading"><h2 class="horizontal-center"><i class="material-icons" style="color: red; ">games</i>Clash Royale Api Test 1.0</h2></div>
            <div class="search">
                <form action="action.php" method="POST">
                    <input type="text" placeholder="Type Player Tag" name="field">
                    <button type="submit"><i class="material-icons">search</i></button>
                </form>
            </div>
        </div>
        </div>
    </header>
    <section>
    <div class="container bg-grey" id="blur-border">
        <div class="container">
            <div class="content">
                <?php 
                    $token = new token();
                    //$tag = 'YRRUVPLC';
                    $tag = $_GET['tag'];
                    ?>
                <div class="head-player"><h1><?php echo $token->get_player_name($tag) ?></h1></div>
                <?php  
                    $token->get_player_details($tag);?>
                    <hr><span>Trophies :  </span>
                    <?php 
                    $token->get_player_trophies($tag);
                ?><hr><span>Arena :  </span>
                <?php 
                $token->get_player_arena($tag);
                ?>
                <hr><span>Clan :  </span>
                    <?php 
                    $token->get_player_clan($tag);
                ?>  
                
            </div>
        </div>
    </div>
    </section>
</body>
</html>
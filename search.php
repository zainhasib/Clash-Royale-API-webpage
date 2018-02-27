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
        <div class="nav-bar">
        <div class="container-head">
            <div class="heading"><h2 class="horizontal-center"><i class="material-icons" style="color: red; ">games</i>Clash Royale Api Test 1.0</h2></div>
            <div class="search">
                <form action="action.php" method="GET">
                    <input type="text" placeholder="Type Clan Tag" name="field">
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
                ?>
                <table>
                    <tr><th>Sl. No.</th>
                    <th>Name</th>
                    <th>Trophies</th>
                    <th>Role</th>
                    <div class="title"><?php echo '<h2>'.$token->get_clan_name('U9PQ88').'</h2>';?></div>
                    <?php
                            //echo $token->get_clan_title('U9PQ88');
                            //$token->get_members_trophies('U9PQ88');
                            
                        ?>
                    <?php 
                        $token->get_members_full('U9PQ88');
                    ?>
                </table>
            </div>
        </div>
    </div>
    </section>
</body>
</html>
<html>
    <body>
        <h1>
            Name type: 
            <ul>
                <?php
                 $json = file_get_contents('http://players/');
                 $players = json_decode($json) -> players;
                 foreach ($players as $player) {
                    echo "<li>$player</li>";
                 }
                 
                ?>
            </ul>
        </h1>
    </body>
</html>
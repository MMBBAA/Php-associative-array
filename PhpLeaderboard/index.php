<!DOCTYPE html>
<!--
create an array that contains a leaderboard with a name key, and a ranking key.
 - provide a method that will rank the leaderboard from highest to lowest
 - provide a method that will show the best ranked player
 - provide a method that will show the lowest ranked player
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <form action="Menu.php" method="post">
            <fieldset>
                <h1>Leaderboard</h1>

                <br>
                <?php
                print "<input type='checkbox' name='leaderboard' > Show leaderboard</br>";
                print "<input type='checkbox' name='orderLeaderboard'> Show order leaderboard</br>";
                print "<input type='checkbox' name='HighestPlayer' > show the best ranked player</br>";
                print "<input type='checkbox' name='LowestPlayer' > show the lowest ranked player</br>";
                ?>
                <input type="submit" value="Send" id="sending" />
            </fieldset>
        </form>
    </body>
</html>

</body>
</html>

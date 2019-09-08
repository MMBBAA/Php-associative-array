<?php
$leaderboard = array(
    'Casillas' => 1,
    'Luis' => 3,
    'Antonio' => 4,
    'Fernando' => 6,
    'Eduardo' => 5,
    'Alejandro' => 2,
    'Maria' => 8,
    'Luisa' => 10,
    'Juan' => 9,
    'David' => 11,
    'Pedro' => 7);

function show($leaderboard) {

    foreach ($leaderboard as $key => $value) {
        echo "name: " . $key . " position: " . $value . "</br>";
    }
}

function showOrder($leaderboard) {
    asort($leaderboard);
    foreach ($leaderboard as $key => $value) {
        echo "name: " . $key . " position: " . $value . "</br>";
    }
}

function showLowestPlayer($leaderboard) {
    asort($leaderboard);
    $lowestValue = end($leaderboard);
    $lowestKey = key($leaderboard);
    echo "the lowest ranked player is " . $lowestKey . " with position " . $lowestValue;
}

function showHighestPlayer($leaderboard) {
    arsort($leaderboard);
    $HighestValue = end($leaderboard);
    $HighestKey = key($leaderboard);
    echo "the highest ranked player is " . $HighestKey . " with position " . $HighestValue;
}

if (!empty($_POST['leaderboard'])) {

    show($leaderboard);
    print "------------";
    echo"<br>";
}

if (!empty($_POST['orderLeaderboard'])) {

    showOrder($leaderboard);
    print "------------";
    echo"<br>";
}

if (!empty($_POST['HighestPlayer'])) {

    showHighestPlayer($leaderboard);
    echo"<br>";
    print "------------";
    echo"<br>";
}

if (!empty($_POST['LowestPlayer'])) {

    showLowestPlayer($leaderboard);
    echo"<br>";
    print "------------";
    echo"<br>";
}
?>
<p>
    <a href="index.php">Back to menu</a>
</fieldset>


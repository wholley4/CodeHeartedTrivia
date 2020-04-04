<html>
<head>
      <link rel="stylesheet" type="text/css" href="./CHTglike.css">
   </head>
<body>

<h1> Leaderboard </h1>

<?php

$p1 = array(
    'username' => 'drakenumberone789',
    'score' => '7499',
);
$p2 = array(
    'username' => 'vdogamer123',
    'score' => '4999',
);
$p3 = array(
    'username' => 'bestcoder25',
    'score' => '999',
);

$p4 = array(
    'username' => 'sweetheart5432',
    'score' => '24999',
);
$p5 = array(
    'username' => '$_COOKIE[$username]',
    'score' => '$_COOKIE[$highscore]',
);

$players = array($p1, $p2, $p3, $p4, $p5);
arsort($players);

echo('<table border="1"');
echo('<tr><th>Username</th><th>Score</th></tr>');
foreach ($players as $player)
{
    echo('<tr><td>' . htmlspecialchars($player['username']) . '</td>');
    echo('<td>' . htmlspecialchars($player['score']) . '</td></tr>');
}
echo('</table>');
?>

<a href="http://codd.cs.gsu.edu/~kgarrett10/CodeHeartedTriviahomepage.html" id="button1">Back</a>
</body>
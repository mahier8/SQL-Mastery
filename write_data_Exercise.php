<?php

try
{
    $db = new PDO('mysql:host=localhost;dbname=batch14;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
    die('Error : ' . $e->getMessage());
}

// Question 1

// we add an entry into the table video_games
// $db->exec('INSERT INTO video_games(ID, name, owner, console, price, nb_players_max, comments) VALUES(null,\'Oblivion\', \'John\', \'Xbox\', 35, 1, \'Great Rôle game\')');

// echo 'the game as been added successfully';

// Question 2

// The name of the game is Call of duty the owner is Franck, it’s played on PC costs 25 dollars and the maximum of players is 2 finally the comment is “Multiplayer shooting game”.
// $response = $db->prepare('INSERT INTO video_games(ID, name, owner, console, price, nb_players_max, comments) VALUES(null, :name, :owner, :console, :price, :nb_players_max, :comments)');
// $response->execute(array(
//     'name' => 'Call of Duty',
//     'owner' => 'Frank',
//     'console' => 'PC',
//     'price' => '25',
//     'nb_players_max' => '2',
//     'comments' => 'Multiplayer shooting game'
//     ));

// echo 'the second game as been added successfully !';

// Question 3

// update the price of the game oblivion to 30 dollars without using a prepared query.
// $db->exec('UPDATE video_games SET price = 30 WHERE name = \'Oblivion\'');

// echo 'the price has been changed successfully';

// Question 4

// Update the comment for Call of duty by adding “ and Best game ever for me!” by using a prepared query.
$req = $db->prepare('UPDATE video_games SET comment = :newprix, nb_players_max = :new_palyers_max WHERE password = :password');
$req->execute(array(
    'newprix' => $newprix,
    'nb_players_max' => $nb_players_max,
    'game_name' => $game_name
    ));

echo 'the comment has been changed successfully';

?>
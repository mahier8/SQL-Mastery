<?php
///////////////////////////////////////////
// while ($data = $response->fetch())
// {
//     echo '<li>' . $data['name'] . ' (' . $data['price'] . ' dollars)</li>';
// }
// echo '</ul>';

// SELECT   | could be * but it is all of the columns you want
// FROM     | table(s)
// WHERE    | here we create filter(s)
// AND | OR to use the filters
// ORDER BY LIMIT

// try
// {
//     $db = new PDO('mysql:host=localhost;dbname=batch13;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
// }
// catch(Exception $e)
// {
//     die('Error : ' . $e->getMessage());
// }
// //http://localhost:8080/sites/_DEMONSTRATIONS/batch14/read_data.php?owner=Florian&price_max=5
// $req = $db->prepare('SELECT name, price FROM video_games WHERE owner= ? AND price <= ? ORDER BY price');
// $req->execute(array($_GET['owner'], $_GET['price_max']));
// $req = $db->prepare('SELECT name, price FROM video_games WHERE owner= :owner AND price <= :pricemax');
// $req->execute(array('owner' => $_GET['owner'], 'pricemax' => $_GET['price_max']));

// echo '<ul>';
// while ($data = $req->fetch(PDO::FETCH_ASSOC))
// {
//     echo '<li>' . $data['name'] . ' (' . $data['price'] . ' dollars)</li>';
// }
// echo '</ul>';

// $req->closeCursor();
///////////////////////////////////////////

try { 
    $db = new PDO('mysql:host=localhost;dbname=batch14;charset=utf8', 'root', '');
} catch (Exception $e) { 
    die('Error : ' . $e->getMessage());
}

// question 1
//normal query
// $response = $db->query('SELECT name, price FROM video_games WHERE owner="John"');
//     // echo "<pre>";
//     // print_r($data);
//     // echo "</pre>";

//URL :  http://localhost/sites/PHP/SQLconnection/read_data_Exercise.php?owner=John

//? markers
// $response = $db->prepare('SELECT name, price FROM video_games WHERE owner= ?');
// $response->execute(array($_GET['owner']));

// nominative markers ======== didnt work
// $response = $db->prepare('SELECT name, price FROM video_games WHERE owner= :owner');
// $response->execute(array('owner' => $_GET['owner']));

// echo '<ul>';
// while ($data = $response->fetch()) // $data - we need something to store what is feched
// {
//     echo '<li>' . $data['name'] . ' (' . $data['price'] . ' dollars)</li>';
// }
// echo '</ul>';


// question 2
//normal query
// $response = $db->query('SELECT name, nb_players_max FROM video_games WHERE nb_players_max="1"');

// // //URL :  http://localhost/sites/PHP/SQLconnection/read_data_Exercise.php?nb_players_max=1

// // //? markers
// $response = $db->prepare('SELECT name, nb_players_max FROM video_games WHERE nb_players_max= ?');
// $response->execute(array($_GET['nb_players_max']));

// nominative markers
// $response = $db->prepare('SELECT name, nb_players_max FROM video_games WHERE nb_players_max= :nb_players_max');
// $response->execute(array('nb_players_max' => $_GET['nb_players_max']));

// echo '<ul>';
// while ($data = $response->fetch()) {
//     echo '<li>' . $data['name'] . ' (' . $data['nb_players_max'] . ')</li>';
// }
// echo '</ul>';

// question 3
// normal query
// $response = $db->query('SELECT name, owner FROM video_games WHERE console="PC"');

// URL :  http://localhost/sites/PHP/SQLconnection/read_data_Exercise.php?console=PC

// ? markers
// $response = $db->prepare('SELECT name, owner FROM video_games WHERE console= ?');
// $response->execute(array($_GET['console']));

// nominative markers
// $response = $db->prepare('SELECT name, owner FROM video_games WHERE console= :console');
// $response->execute(array('console' => $_GET['console']));

// echo '<ul>';
// while ($data = $response->fetch()) {
//     echo '<li>' . $data['name'] . ' ' . $data['owner'] . ' </li>';
// }
// echo '</ul>';

// question 4
// normal query
// $response = $db->query('SELECT name, owner FROM video_games WHERE name="SSX 3" OR name="Tetris"');

// URL :  http://localhost/sites/PHP/SQLconnection/read_data_Exercise.php?name=Tetris

// // ? markers
// $response = $db->prepare('SELECT name, owner FROM video_games WHERE name= ? OR name= ?');
// $response->execute(array($_GET['name1'], $_GET['name2']));

// nominative markers ===== cant do this one
// $response = $db->prepare('SELECT name, owner FROM video_games WHERE name= :name OR name= :name');
// $response->execute(array('name1' => $_GET['name1'], 'name2' => $_GET['name2']));

// echo '<ul>';
// while ($data = $response->fetch()) {
//     echo '<li>' . $data['name'] . ' ' . $data['owner'] . '</li>';
// }
// echo '</ul>';

// question 5
// normal query
// $response = $db->query('SELECT name, owner FROM video_games WHERE price="25"');

// URL :  http://localhost/sites/PHP/SQLconnection/read_data_Exercise.php?price=25

// // ? markers
// $response = $db->prepare('SELECT name, owner FROM video_games WHERE price= ?');
// $response->execute(array($_GET['price']));

// nominative markers
// $response = $db->prepare('SELECT name, owner FROM video_games WHERE price= :price');
// $response->execute(array('price' => $_GET['price']));

// echo '<ul>';
// while ($data = $response->fetch()) {
//     echo '<li>' . $data['name'] . ' ' . $data['owner'] . ' </li>';
// }
// echo '</ul>';

// question 6
// normal query
// $response = $db->query('SELECT * FROM video_games ORDER BY nb_players_max');

// echo '<ul>';
// while ($data = $response->fetch()) {
//     echo '<li>' . $data['name'] . ' (' . $data['nb_players_max'] . ' dollars) </li>';
// }
// echo '</ul>'; 

// question 7
// normal query
// $response = $db->query('SELECT * FROM video_games WHERE owner="Florian" LIMIT 0, 5');

// URL :  http://localhost/sites/PHP/SQLconnection/read_data_Exercise.php?owner=Florian

// ? markers
$response = $db->prepare('SELECT name, owner FROM video_games WHERE owner= ?');
$response->execute(array($_GET['owner']));

echo '<ul>';
while ($data = $response->fetch()) {
    echo '<li>' . $data['name'] . ' (' . $data['price'] . ' dollars)</li>';
}
echo '</ul>';

// question 8
// normal query
// $response = $db->query('SELECT * FROM video_games WHERE owner="John" AND price<40 ORDER BY price DESC');

// echo '<ul>';
// while ($data = $response->fetch()) {
//     echo '<li>' . $data['name'] . ' (' . $data['price'] . ' dollars)</li>';
// }
// echo '</ul>';

?>




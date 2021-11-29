<?php
// This is how we make the connection to the DB

try { // (try) throw and catch
    $db = new PDO('mysql:host=localhost;dbname=batch14;charset=utf8', 'root', '');
} catch (Exception $e) { // by convention we say e. stands for exception. 
    die('Error : ' . $e->getMessage());
}

// SELECT   | could be * but it is all of the columns you want
// FROM     | table(s)
// WHERE    | here we create filter(s)
// AND | OR to use the filters
// ORDER BY LIMIT

// selct all the entrie inside of the news table
$response = $db->query('SELECT * FROM news LIMIT 0, 10');
while ($data = $response->fetch(PDO::FETCH_OBJ)) { // $data - we need something to store what is feched
    // echo "<pre>";
    // print_r($data);
    // echo "</pre>";
    // echo $data['title'];

    echo $data->title;
}


?>
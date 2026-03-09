<?php
$json_text = file_get_contents("./songs.json");
// var_dump($json_text);


$songs = json_decode($json_text, true);
// var_dump($songs);

$total_songs = count($songs);
?>
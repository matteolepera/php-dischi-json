<?php

//leggere il file dei dischi(songs.json).
$json_text = file_get_contents("songs.json");

//convertire la stringa da json a struttrura php.
$songs = json_decode($json_text, true);
// var_dump(value: $songs);


//modificare struttrura php.
//DEBUG
// $new_song = $_POST["titolo"] . $_POST["artista"] . $_POST["cover_url"] . $_POST["anno_pubblicazione"] . $_POST["genere"];
// var_dump($new_song);

$songs[] = [
    "titolo" => $_POST["titolo"],
    "artista" => $_POST["artista"],
    "cover_url" => $_POST["cover_url"],
    "anno_pubblicazione" => (int) $_POST["anno_pubblicazione"],
    "genere" => $_POST["genere"]
];


// var_dump($songs);


//riconvertire da struttura php a stringa json.
$json_text_updated = json_encode($songs);
// var_dump($json_text_updated);
//sovraschiviamo il contenuto del file.
file_put_contents("./songs.json", $json_text_updated);

header("Location: ./index.php")
    ?>
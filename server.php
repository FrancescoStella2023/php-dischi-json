<?php

if ($_POST['title'] && $_POST['artist'] && $_POST['url_cover'] && $_POST['date_published'] && $_POST['genre']) {

    $title = $_POST['title'];
    $artist = $_POST['artist'];
    $url_cover = $_POST['url_cover'];
    $date_published = $_POST['date_published'];
    $genre = $_POST['genre'];

    $discs_json = file_get_contents('./discs.json');
    $discs = json_decode($discs_json, true);

    $discs[] = [
        "title" => $title,
        "artist" => $artist,
        "url_cover" => $url_cover,
        "date_published" => $date_published,
        "genre" => $genre
    ];

    $discs_json = json_encode($discs);

    file_put_contents('./discs.json', $discs_json);

    header('Location: ./index.php');
} else {
    header('Location: ./index.php');
}
?>
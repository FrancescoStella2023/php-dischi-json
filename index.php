<?php

$discs = [
    [
        "title" => "test0",
        "artist" => "testArtist0",
        "url_cover" => "https://example.com",
        "date_pulished" => "2026",
        "genre" => "pop"
    ],
    [
        "title" => "test1",
        "artist" => "testArtist1",
        "url_cover" => "https://example.com",
        "date_pulished" => "2026",
        "genre" => "Jazz"
    ],
    [
        "title" => "test2",
        "artist" => "testArtist2",
        "url_cover" => "https://example.com",
        "date_pulished" => "2026",
        "genre" => "pop"
    ],
    [
        "title" => "test3",
        "artist" => "testArtist3",
        "url_cover" => "https://example.com",
        "date_pulished" => "2026",
        "genre" => "Jazz"
    ],
    [
        "title" => "test4",
        "artist" => "testArtist4",
        "url_cover" => "https://example.com",
        "date_pulished" => "2026",
        "genre" => "Jazz"
    ],
    [
        "title" => "test5",
        "artist" => "testArtist5",
        "url_cover" => "https://example.com",
        "date_pulished" => "2026",
        "genre" => "Jazz"
    ],
    [
        "title" => "test6",
        "artist" => "testArtist6",
        "url_cover" => "https://example.com",
        "date_pulished" => "2026",
        "genre" => "Jazz"
    ],
    [
        "title" => "test7",
        "artist" => "testArtist7",
        "url_cover" => "https://example.com",
        "date_pulished" => "2026",
        "genre" => "Jazz"
    ]
]

    ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo dischi</title>
    <!-- Linking bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="contaner-fluid py-4 text-white ps-5 bg-dark">
        <h1>Catalogo dischi</h1>
    </div>

    <div class="row row-cols-3 mb-3">

        <?php foreach ($discs as $disc) { ?>

            <div class="col">
                <div class="card m-3  ">
                    <div class="class-image">
                        <img class="w-100" src="<?= $disc['url_cover'] ?>" alt="<?= $disc['title'] ?>">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?= $disc['title'] ?></h5>
                        <p class="card-text"><?= $disc['artist'] ?></p>
                        <p class="card-text"><?= $disc['date_pulished'] ?></p>
                    </div>
                </div>
            </div>

            <?php
        } ?>

    </div>
</body>

</html>
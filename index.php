<?php

require_once "./functions.php";

$discs = getDiscs();

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

<body class="bg-secondary">
    <div class="contaner-fluid py-4 px-4 mb-4 text-white bg-dark d-flex justify-content-between align-items-center">
        <div>
            <h1 class="fw-bold mb-0">Catalogo dischi +</h1>
            <p class="text-secondary mb-0">Tutta la musica chea ami</p>
        </div>
        <a href="./addDiscPage.php" class="m-1 btn btn-success">Add new track</a>
    </div>

    <div class="container-fluid">
        <div class="row row-cols-3 mb-2">

            <?php foreach ($discs as $disc) { ?>

                <div class="col">
                    <div class="card m-3 bg-dark p-2 rounded text-white ">
                        <div class="class-image">
                            <img class="w-100" src="<?= $disc['url_cover'] ?>" alt="<?= $disc['title'] ?>">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-primary"><?= $disc['title'] ?></h5>
                            <p class="card-text text-secondary"><?= $disc['artist'] ?></p>
                            <p class="card-text text-black"><?= $disc['date_published'] ?></p>
                        </div>
                    </div>
                </div>

                <?php
            } ?>

        </div>
    </div>
</body>

</html>
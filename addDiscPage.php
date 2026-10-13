<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aggiungi un disco al catalogo</title>
    <!-- Linking bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-secondary">
    <div class="contaner-fluid py-4 px-4 mb-4 text-white bg-dark d-flex justify-content-between align-items-center">
        <div>
            <h1 class="fw-bold mb-0">Aggiungi disco</h1>
            <p class="text-secondary mb-0">Aggiungi la musica del tuo cantante preferito</p>
        </div>
        <a href="./index.php" class="m-1 btn btn-danger">Back</a>
    </div>

    <div class="container text-center my-5">
        <form action="server.php" method="POST">
            <div class="row">
                <label for="title" class="fw-bold">Titolo del brano</label>
                <input type="text" id="title" name="title" placeholder="Song title">

                <label for="artist" class="fw-bold">Artista</label>
                <input type="text" id="artist" name="artist" placeholder="Song's artist">

                <label for="url_cover" class="fw-bold">Url imagine cover</label>
                <input type="text" id="url_cover" name="url_cover" placeholder="image url -  https://....">

                <label for="date_published" class="fw-bold">Data di uscita</label>
                <input type="number" name="date_published" id="date_published" placeholder="year ****">

                <label for="genre" class="fw-bold">Genere</label>
                <input type="text" name="genre" id="genre" placeholder="Pop - Jazz - Rock ...">
            </div>


            <button type="submit" class="my-2 btn btn-success">Inserisci</button>
        </form>
    </div>
</body>

</html>
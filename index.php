<?php
require_once("./functions.php");

?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BootStrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!-- BootStrap-Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>I miei dischi</title>
</head>

<body class="bg-dark text-light min-vh-100">

    <!-- Navbar -->
    <nav class="navbar bg-black border-bottom border-secondary">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="d-flex align-items-center gap-2">
                <div class="bg-white rounded-2 p-2 d-flex align-items-center justify-content-center gap-2 text-dark">
                    <i class="bi bi-vinyl-fill"></i>
                    <span class="fw-semibold fs-5">Dischi</span>
                </div>

            </div>

            <!-- <button class="btn btn-outline-secondary btn-sm d-flex align-items-center gap-2">
                <i class="bi bi-plus-lg"></i>
                Aggiungi disco
            </button> -->

        </div>
    </nav>
    <!-- End-Nav -->

    <div class="container py-5">

        <div class="mb-4">
            <h1 class="fw-bold">La mia collezione</h1>
            <p class="text-secondary"><?php echo $total_songs ?> <?php echo $total_songs == 1 ? "disco" : "dischi" ?>
            </p>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">

            <!-- Card -->
            <?php foreach ($songs as $song) { ?>
                <div class="col">
                    <div class="card h-100 bg-black border-secondary">
                        <img src=<?php echo $song['cover_url'] ?> class="card-img-top w-80 mx-auto d-block"
                            alt=<?php echo "Cover " . $song['titolo'] . " " . $song['artista']; ?>>
                        <div class="card-body text-center">
                            <h5 class="card-title fw-semibold"><?php echo $song['titolo'] ?></h5>
                            <h6 class="card-subtitle mb-3 text-secondary"><?php echo $song['artista'] ?></h6>
                            <span class="badge bg-secondary"><?php echo $song['genere'] ?></span>
                            <span class="badge bg-dark border border-secondary"><?php echo $song['anno_pubblicazione'] ?></span>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <!-- End-Card -->

        </div>
    </div>

</body>
<!-- BootStrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>

</html>
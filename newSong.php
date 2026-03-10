<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BootStrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!-- BootStrap-Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Aggiungi un nuovo disco</title>
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

            <a href="./index.php" class="btn btn-outline-secondary btn-sm d-flex align-items-center gap-2">
                <i class="bi bi-arrow-left"></i>
                Torna alla collezione
            </a>

        </div>
    </nav>
    <!-- End-Nav -->

    <div class="container py-5">

        <div class="mb-4">
            <h1 class="fw-bold">Aggiungi un disco</h1>
            <p class="text-secondary">Compila i campi per aggiungere un nuovo disco alla collezione</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="card bg-black border-secondary">
                    <div class="card-body p-4">

                        <!-- Form -->
                        <form action="./server.php" method="POST">
                            <div class="mb-3">
                                <label for="titolo" class="form-label text-secondary">Titolo</label>
                                <input type="text" class="form-control bg-dark text-light border-secondary" id="titolo"
                                    name="titolo" required>
                            </div>

                            <div class="mb-3">
                                <label for="artista" class="form-label text-secondary">Artista</label>
                                <input type="text" class="form-control bg-dark text-light border-secondary" id="artista"
                                    name="artista" required>
                            </div>

                            <div class="mb-3">
                                <label for="cover_url" class="form-label text-secondary">Indirizzo cover</label>
                                <input type="text" class="form-control bg-dark text-light border-secondary"
                                    id="cover_url" name="cover_url" required>
                            </div>

                            <div class="mb-3">
                                <label for="anno_pubblicazione" class="form-label text-secondary">Anno di
                                    pubblicazione</label>
                                <input type="number" class="form-control bg-dark text-light border-secondary"
                                    id="anno_pubblicazione" name="anno_pubblicazione" required>
                            </div>

                            <div class="mb-4">
                                <label for="genere" class="form-label text-secondary">Genere</label>
                                <select class="form-select bg-dark text-light border-secondary" id="genere"
                                    name="genere" required>
                                    <option value="" disabled selected>Seleziona un genere</option>
                                    <option value="Pop">Pop</option>
                                    <option value="Rock">Rock</option>
                                    <option value="Rap">Rap</option>
                                    <option value="Trap">Trap</option>
                                    <option value="Hip-Hop">Hip-Hop</option>
                                    <option value="R&B">R&B</option>
                                    <option value="Electronic">Electronic</option>
                                    <option value="Indie">Indie</option>
                                    <option value="Jazz">Jazz</option>
                                    <option value="Classical">Classical</option>
                                </select>
                            </div>

                            <div class="d-grid">
                                <button type="submit"
                                    class="btn btn-outline-light d-flex align-items-center justify-content-center gap-2">
                                    <i class="bi bi-plus-lg"></i>
                                    Aggiungi disco
                                </button>

                            </div>
                        </form>
                        <!-- End-Form -->

                    </div>
                </div>
            </div>
        </div>

    </div>

</body>

<!-- BootStrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>

</html>
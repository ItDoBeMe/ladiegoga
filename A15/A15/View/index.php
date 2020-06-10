<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>A15</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../style.css">
    </head>
    <body class="bg-dark">
        <div class="rounded mt-5 container p-4 text-center bg-light">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="../View/index.php">Evidencija pređenog puta</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../View/predjeniput.php">Prikaz ukupno pređenog puta</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <form action="index.php" method="POST">
                <div class="container px-5 py-2">
                    <div class="form-row">
                        <div class="col-12">
                            <select id="auto" name="auto" class="form-control">
                                <option value="">Izaberite auto:</option>
                                <?php
                                require_once '../Controller/popuniselect.php';
                                ?>
                            </select>
                        </div>

                        <div class="py-2 col-3">
                            <label for="dat">Datum</label><br>
                            <input class="form-control" id="dat" type="date" name="dat" value="" />
                        </div>
                        <div class="py-2 col-3">
                            <label for="startp">Startna pozicija</label><br>
                            <input class="form-control" id="startp" type="text" name="startp" value="" />
                        </div>
                        <div class="py-2 col-3">
                            <label for="datr">Krajnja pozicija</label><br>
                            <input class="form-control" id="krajp" type="text" name="krajp" value="" />
                        </div>
                        <div class="py-2 col-3">
                            <label for="km">Pređeni kilometri</label><br>
                            <input class="form-control" id="km" type="number" min="0" name="km" value="" />
                        </div>
                        <div class="py-2 col-12">
                            <input type="submit" class="btn btn-outline-dark btn-block" value="Snimi" name="snimi" />
                        </div>
                    </div>
                    <?php
                    require_once '../Controller/kontroler.php';
                    ?>
                </div>
            </form>
        </div>
    </body>
</html>

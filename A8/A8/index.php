<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>A8</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">
    </head>
    <body class="bg-dark">
        <div class="rounded mt-5 container p-4 text-center bg-light">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Prodavnica</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Uputstvo.php">Uputstvo</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <form action="index.php" method="POST">
                <div class="row">
                    <div class="col">
                        <label for="iproizvodjac">Proizvodjac</label>
                        <select class="form-control" name="proizvodjac" id="iproizvodjac">
                            <option value=""></option>
                            <option value="Samsung">Samsung</option>
                            <option value="Xiaomi">Xiaomi</option>
                            <option value="Asus">Asus</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="iram">Ram</label>
                        <select class="form-control" name="ram" id="iram">
                            <option value=""></option>
                            <option value="12GB">12GB</option>
                            <option value="8GB">8GB</option>
                            <option value="6GB">6GB</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="icpu">Procesor</label>
                        <select class="form-control" name="cpu" id="icpu">
                            <option value=""></option>
                            <option value="Mongoose M5">Mongoose M5</option>
                            <option value="Kryo 465 Gold">Kryo 465 Gold</option>
                            <option value="Kryo 485">Kryo 485</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="ikamera">Kamera</label>
                        <select class="form-control" name="kamera" id="ikamera">
                            <option value=""></option>
                            <option value="108 MP">108 MP</option>
                            <option value="64 MP">64 MP</option>
                            <option value="48 MP">48 MP</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="iekran">Ekran</label>
                        <select class="form-control" name="ekran" id="iekran">
                            <option value=""></option>
                            <option value="6.9 in">6.9 in</option>
                            <option value="6.67 in">6.67 in</option>
                            <option value="6.4 in">6.4 in</option>
                        </select>
                    </div>
                    <div class="col-12 my-3">
                        <input type="submit" class="btn btn-block btn-info" value="Traži" name="trazi" />
                    </div>
                </div>
            </form>
            <table id="myTable" class="table table-light">
                <tr>
                    <th>Slika</th>
                    <th>Šifra</th>
                    <th>Model</th>
                    <th>Proizvođač</th>
                    <th>Ram</th>
                    <th>CPU</th>
                    <th>Kamera</th>
                    <th>Ekran</th>
                    <th>Cena</th>
                </tr>
                <?php
                require_once './pretrazi.php';
                ?>
            </table>

        </div>
    </body>
</html>

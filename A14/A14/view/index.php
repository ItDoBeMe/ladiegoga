<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>A14</title>
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
                            <a class="nav-link" href="index.php">Program</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="uputstvo.php">Uputstvo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="kontakt.php">Kontakt</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <form action="index.php" method="POST">
                <div class="form-row">
                    <div class="col-6">
                        <select id="datum" name="datum" class="form-control">
                            <option value="">Izaberite datum:</option>
                            <?php
                            require_once '../funkcionalnost/popunidatume.php';
                            ?>
                        </select>
                    </div>
                    <div class="col-6">
                        <select id="tip" name="tip" class="form-control">
                            <option value="">Izaberite tip emisije:</option>
                            <?php
                            require_once '../funkcionalnost/popunitipove.php';
                            ?>
                        </select>

                    </div>
                    <div class="py-2 col-12">
                        <input type="submit" class="btn btn-info btn-block" value="Traži" name="pretraga" />
                    </div>
                    <table id="myTable" class="table table-light">
                        <tr>
                            <th>Vreme</th>
                            <th>Emisija</th>
                            <th>Tip</th>
                        </tr>
                        <?php
                        require_once '../funkcionalnost/pretraga.php';
                        ?>
                    </table>
                </div>
            </form>
        </div>
    </body>
</html>

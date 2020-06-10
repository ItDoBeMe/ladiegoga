<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>A7</title>
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
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Red vožnje</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Uputstvo.php">Uputstvo</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="Kontakt.php">Kontakt</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="form-row">
                <div class="py-2 col-4">
                    <label for="ime">Ime</label><br>
                    <input class="form-control" id="ime" type="text" name="ime" value="" />
                </div>
                <div class="py-2 col-4">
                    <label for="email">Email</label><br>
                    <input class="form-control" id="email" type="email" name="email" value="" />
                </div>
                <div class="py-2 col-4">
                    <label for="np">Naslov poruke</label><br>
                    <input class="form-control" id="np" type="text" name="np" value="" />
                </div>
                <div class="py-2 col-12">
                    <label for="por">Tekst poruke</label><br>
                    <textarea class="form-control" id="por" name="por" value="" rows="3"></textarea>
                </div>
                <div class="py-2 col-12">
                    <input type="submit" class="btn btn-info btn-block" value="Pošalji poruku" name="posalji" />
                </div>
            </div>
        </div>
    </body>
</html>

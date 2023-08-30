<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href = "style.css">
    
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">

<link href="css/font-awesome.min.css" type="text/css" rel="stylesheet"> 


    <title>Kolekcija filmova</title>
    
</head>
<body>
    <div class = "container">
        <nav>
            <div class = "logo">
                <span>Kolekcija filmova</span>
            </div>
            <ul>
                <li><a href="index.php">Početna</a></li>
                <li><a href="film.php">Filmovi</a></li>
                <li><a href="glumac.php">Glumci</a></li>
                <li><a href="reziser.php">Režiseri</a></li>
                
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Opcije za dodavanje <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="dodajFilm.php">Dodaj film</a></li>
                        <li><a href="dodajGlumca.php">Dodaj glumca</a></li>
                        <li><a href="dodajRezisera.php">Dodaj režisera</a></li>
                    </ul>
                </li>
           
            </ul>
        </nav>

    </div>



</body>
</html>
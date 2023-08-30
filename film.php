<?php
include('layout.php');
include('model/filmKlasa.php');
include('model/glumacKlasa.php');
include('model/reziserKlasa.php');
include('dbBroker.php');


?>


<script type = "text/javascript" src="js/film.js"></script>
<body class="film">
    

            
           
<div class="container">
    

    <table id="film-table" class="table table-hover">
        <thead>
        <tr>
            <th>
                Id
            </th>
            <th>
                Naziv
            </th>
            <th>
                Datum premijere
            </th>
            <th>
                Žanr
            </th>
            <th>
                Režiser
            </th>
            <th>
               Glavni glumac
            </th>

           

       
        </tr>
        </thead>

        
        <tbody><?php
        $filmovi = Film::getAll();
        if(count($filmovi) == 0){
            echo "<h3>Ne postoje podaci o filmovima!</h3>";
        }
        else{
            foreach ($filmovi as $film){
                echo "<tr>
        <td>".$film->id."</td>
        <td>".$film->naziv."</td>
        <td>".$film->datum_premijere."</td>
        <td>".$film->zanr."</td>
        <td>".Reziser::getById($film->id_reziser)->ime." ".Reziser::getById($film->id_reziser)->prezime." </td>
        <td>".Glumac::getById($film->id_glavni_glumac)->ime." ".Glumac::getById($film->id_glavni_glumac)->prezime."</td>

        
        
        </tr>";
            }
        }
        ?>
        </tbody>
    </table>

      <div class="col-md-2" style = "font-family: cursive;">

        </div>
   <div id="film-edit">

</div>
</body>


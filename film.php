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
      <button id="btn-sortiraj" class="btn btn-normal" style="padding: 5px; background-color: white; border: 2px solid rgb(89, 157, 224); height:60px;font-size: 15px; border-radius: 15px;" onclick="sortTable()">Sortiraj tabelu</button>
        </div>
   <div id="film-edit">

</div>
</body>

<script>
         function sortTable() { 
            var table, rows, switching, i, x, y, shouldSwitch;
            table = document.getElementById("film-table");
            switching = true;

            while (switching) {
                switching = false;
                rows = table.rows;
                for (i = 1; i < (rows.length - 1); i++) {
                    shouldSwitch = false;
                    x = rows[i].getElementsByTagName("TD")[2];
                    y = rows[i + 1].getElementsByTagName("TD")[2];
                    if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                        shouldSwitch = true;
                        break;
                    }
                }
                if (shouldSwitch) {
                    rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                    switching = true;
                }
            }
          }

</script>

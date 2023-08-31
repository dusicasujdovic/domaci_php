function izmeniRezisera(id) {
    $.ajax({
        type: 'GET',
        url: 'izmeniRezisera.php',
        data: 'id=' + id,
        cache: false,
        success: function (response) {
            $('#container').hide();
            $('#reziser-edit').append(response);
        },
        error: function (error) {
            alert("Greska pri izmeni rezisera: " + error.status);
        }
    });
}

function obrisiRezisera(id) {
    $.ajax({
        type: 'GET',
        url: 'obrisiRezisera.php',
        data: 'id=' + id,
        dataType: 'json',   
        cache: false,
        success: function (response) {
            if (response.status == 1) {
                location.reload();
            }
            else {
                alert(response.message);
            }
        },
        error: function (error) {
            alert("Greska pri brisanja rezisera: " + error.status);
        }
    });
}
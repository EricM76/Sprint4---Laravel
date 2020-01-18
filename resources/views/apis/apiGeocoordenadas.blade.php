<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBk7DaloVrcQYh25UegCc460Fh46uniE24&callback=initMap" async defer></script>

<script>

    function initMap()
    {
        // Creamos el objeto geodecoder
        var geocoder = new google.maps.Geocoder();
        address = document.getElementById('direccion').value + ', ' + document.getElementById('localidad').value + ', ' + document.getElementById('provincia').value;

            // Llamamos a la función geodecode pasandole la dirección que hemos introducido en la caja de texto.
            geocoder.geocode({ 'address': address}, function(results, status)
            {
                if (status == 'OK')
                {
                    var lat = results[0].geometry.location.lat();
                    var lng = results[0].geometry.location.lng();
                    const options = {
                center:{
                    lat: lat,
                    lng: lng
                    },
                zoom:11,

                    }
        var map = document.getElementById('map');
        const mapa = new google.maps.Map(map,options)
        var marker = new google.maps.Marker({
        position:{
            lat: lat,
            lng: lng
        },
        map: mapa
        })
                }
            })


    };
</script>

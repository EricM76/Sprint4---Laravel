var state = document.getElementById('city');
var localidadInput = document.getElementById('localidad');
var localidadesSelect = document.getElementById('localidades');

fetch('https://apis.datos.gob.ar/georef/api/localidades?formato=json&max=5000') //la direccion donde está la api

.then(function(localidades) //recibe los datos que vienen de la pagina antes invocada
    {
        return localidades.json() // retorna los datos pasados a json
    })
.then(function(arrayLocalidades) //pasa el objeto a un array
    {
        var arrayCompleto = arrayLocalidades.localidades
        // console.log(todasLocalidades[0].provincia.nombre)
        var provincia = document.getElementById('provincia'); //atrapo el input
        var provincia = provincia.value; //atrapo el valor del input
        var ciudades = new Array(); //creo un nuevo array

        for (localidad of arrayCompleto) //recorro el array que viene de la api
        {
            if(localidad.provincia.nombre == provincia) //chequeo que la localidad corresponda con la provincia
            {
                ciudades.push(localidad.nombre) //voy agregando en el nuevo array las ciudades
            }
        }
        ciudades.sort(); //ordeno el array

        for (ciudad of ciudades) { //recorro el array para formar las opciones del select
            var optionLocalidad = document.createElement('option') //crea el elemento
            localidadesSelect.appendChild(optionLocalidad) //añade el option al select
            optionLocalidad.setAttribute('value',ciudad)
            var nombreLocalidad = document.createTextNode(ciudad)
            optionLocalidad.appendChild(nombreLocalidad)
        }

    })

city.onclick = function()
{
    if (localidadInput.style.display != 'none') {
        localidadInput.style.display = 'none';
        localidadesSelect.style.display = 'block';
    } else {
        localidadInput.style.display = 'block';
        localidadesSelect.style.display = 'none';
    }

}

localidad.onclick = function()
{
    localidadInput.style.display = 'none';
    localidadesSelect.style.display = 'block';
}

localidadesSelect.onchange = function()
{

    var optionLocalidad = localidadesSelect.options[localidadesSelect.selectedIndex].value;
    var localidadSel = optionLocalidad
    localidadInput.setAttribute('value', localidadSel)
    localidadInput.style.display = 'block';
    localidadesSelect.style.display = 'none';
}

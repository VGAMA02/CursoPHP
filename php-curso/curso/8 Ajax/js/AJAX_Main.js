var btn = document.getElementById('btn_cargar_usuarios'); //obtener objectos de html
var loader = document.getElementById('loader');

btn.addEventListener('click',function(){
    var peticion = new XMLHttpRequest(); //peticiones a XML
  // peticion.open('GET','http://www.json-generator.com/api/json/get/bVNSQArEMO?indent=2'); //crear la peticion
    peticion.open('GET', 'php/usuarios.php'); //crear la peticion
    
    loader.classList.add('active');

    peticion.onload = function(){
        //console.log(JSON.parse(peticion.responseText));
		var datos = JSON.parse(peticion.responseText);
        
        /*datos.forEach(persona => {
            var elemento = document.createElement("tr");
            elemento.innerHTML += ("<td>" + persona.id + "</td>");
            elemento.innerHTML += ("<td>" + persona.nombre + "</td>");
            elemento.innerHTML += ("<td>" + persona.edad + "</td>");
            elemento.innerHTML += ("<td>" + persona.pais + "</td>");
            elemento.innerHTML += ("<td>" + persona.correo + "</td>");
            document.getElementById("tabla").appendChild(elemento);
        });*/

        for(var i=0; i<datos.length; i++)
        {
            var elemento = document.createElement("tr");
            elemento.innerHTML += ("<td>" + datos[i].id + "</td>");
            elemento.innerHTML += ("<td>" + datos[i].nombre + "</td>");
            elemento.innerHTML += ("<td>" + datos[i].edad + "</td>");
            elemento.innerHTML += ("<td>" + datos[i].pais + "</td>");
            elemento.innerHTML += ("<td>" + datos[i].correo + "</td>");
            document.getElementById("tabla").appendChild(elemento);
        }
    }

    peticion.onreadystatechange = function(){
        if(peticion.readyState == 4 && peticion.status == 200)
        {
            //peticion.status devuelve un numero dependiendo el status 200 es ok, 404 es pagina no encontrada por ejemplo
            loader.classList.remove('active');
        }
    }

    peticion.send(); //enviar la peticion, esto tiene que hacerse 

});






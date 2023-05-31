//puede haber problemas con chrome usar otro navegador
var btn_cargar = document.getElementById('btn_cargar_usuarios'),
	error_box  = document.getElementById('error_box'),
	tabla 	   = document.getElementById('tabla'),
	loader	   = document.getElementById('loader');

var usuario_nombre, 
	usuario_edad,
	usuario_pais,
	usuario_correo; 
//cargar el usuario a la tabla
function cargarUsuarios()
{
	tabla.innerHTML = '<tr><th>ID</th><th>Nombre</th><th>Edad</th><th>Pais</th><th>Correo</th></tr>'; //cada que cargamos los usuarios todo este codigo se vuelve a ejecutar 

	//ajax
	var peticion = new XMLHttpRequest();  //abre archivos y pide o recibe datos de estos.
	peticion.open('GET','php/leer_datos.php');
	loader.classList.add('active'); //activar el spineer

	peticion.onload = function()
	{
		datos = JSON.parse(peticion.responseText);

		if(datos.error) //si existe el error
		{
			error_box.classList.add('active');
		}
		else
		{
			for(var i=0;i<datos.length;i++)
			{
				var elemento = document.createElement('tr'); //crear una fila
				elemento.innerHTML += ("<td>" + datos[i].id + "</td>"); //agregar partes a la fila
				elemento.innerHTML += ("<td>" + datos[i].nombre + "</td>");
				elemento.innerHTML += ("<td>" + datos[i].edad + "</td>");
				elemento.innerHTML += ("<td>" + datos[i].pais + "</td>");
				elemento.innerHTML += ("<td>" + datos[i].correo + "</td>");
				
				tabla.appendChild(elemento); //agregamos a la tabla toda la fila
			}

		}//else de comprobacion

	}

	peticion.onreadystatechange = function()
	{
		if(peticion.readyState == 4 && peticion.status == 200)
		{
			loader.classList.remove('active'); //desactivar el spineer
		}
	}
	
	peticion.send(); //importante mandar la peticion. 
}



function agregarUsuarios(e) //le pasamos el evento
{
	e.preventDefault(); //esta funcion evita que el formulario se envie aun y actualice la pagina.
	//queremos enviar los datos cuando hagamos el proceso no cuando el usuario pique el boton por eso usamos el prevent
	var peticion = new XMLHttpRequest();
	//llamamos al archivo insertar_usuario.php, que inserta a la base de datos y devuelve un json de error ya sea vacio o no.
	peticion.open('POST','php/insertar_usuario.php');
	//limpiar un poco las variables
	usuario_nombre = formulario.nombre.value.trim(); //borrar espacios antes y despues de la cadena.
	usuario_edad   = parseInt(formulario.edad.value.trim()); //borrar espacios antes y despues de la cadena / numero entero.
	usuario_pais  = formulario.pais.value.trim(); //borrar espacios antes y despues de la cadena.
	usuario_correo = formulario.correo.value.trim(); //borrar espacios antes y despues de la cadena.

	if(formulario_valido()) //si todos los datos estan bien
	{
		error_box.classList.remove('active');
		var parametros = 'nombre='+ usuario_nombre +'&edad='+ usuario_edad +'&pais='+ usuario_pais +'&correo='+ usuario_correo; //variable que vamos a estar llevando de javascprit a php
		peticion.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");  //como queremos enviar datos tenemos que cambiar el header 
		loader.classList.add('active'); //mostrar el loader.
		
		peticion.onload = function(){ //cuando le demos agregar
			cargarUsuarios(); //cargamos la tabla
			formulario.nombre.value = ""; //limpiamos los datos
			formulario.edad.value = "";
			formulario.correo.value = "";
			formulario.pais.value = "";	
		}
		
		peticion.onreadystatechange = function()
		{
			if(peticion.readyState == 4 && peticion.status == 200)
			{
				loader.classList.remove('active');
			}
		}

		peticion.send(parametros); //esto pasa datos de javascript a ph

	}
	else{
		error_box.classList.add('active');
		error_box.innerHTML = 'Por favor completa el formulario correctamente';
	}

}


btn_cargar.addEventListener('click',function(){
	cargarUsuarios();
});
//subir el usuario a base de datos
formulario.addEventListener('submit', function(e)
{
	agregarUsuarios(e); //es necesario pasar la e que es el evento del addEventListener
});

function formulario_valido()
{
	if(usuario_nombre == '')
	{
		return false;
	}else if(isNaN(usuario_edad)) //si usuario_edad no es un numero
	{
		return false;
	}else if(usuario_pais == '')
	{
		return false;
	}else if(usuario_correo == '')
	{
		return false;
	}

	return true;
}
//
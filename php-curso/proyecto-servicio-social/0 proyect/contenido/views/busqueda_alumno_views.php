<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
 
    <link rel="stylesheet" href="CSS/estilos.css"> 
    <title>Buscar Alumno</title>

</head>
<body>
    <div class="contenedor">
        <h1 class="titulo">Buscar Alumno<h1>
        <hr class="border">
        
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" class="formulario"name="login">
        
            <p>Inserte el codigo del alumno </p>
           
            
            <div class="form-group">
               <input type="number" min="1"  max="9999999999" name="codigo" class="usuario" placeholder="codigo">
            </div>

            <div class="form-group">
            <i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i> 
            </div>


            <?php if(!empty($errores)):   ?>
                <div class="error">
                    <ul>
                        <?php echo $errores?>
                    </ul>

                </div>

            <?php endif;?>
        </form>



    <!--if para que aparesca usuario>>>-->
    <?php if(isset($resultado)):   ?>
        <?php if($resultado != false): ?>
            <div class="formulario">
                    <p>Nombre:  <?php echo $resultado[0]?></p> 
                    <p>Codigo:  <?php echo $resultado[1]?></p> 
                    <p>Carrera: <?php echo $resultado[2]?></p> 
                    <p>Horas:   <?php echo $resultado[3]?></p> 

                    <div class="">
                         <input type="button" value="Iniciar a trabajar" id="botonT" class="botonT" onclick="tiempo()"> 
                    </div>
             
                    <?php if($tiempoT != 0): ?>
                        <p><?php echo date("d-m-Y (H:i:s)", $tiempoT)  ?></p>
                    <?php endif;?>
            </div>
        <?php endif;?>
    <?php endif;?>
    <!--<<<if para que aparesca usuario-->


    </div> <!--  container  -->

   
    
   
</body>
</html>


<script>
        var timI,timF,timT;
        var boton = document.getElementById("botonT"); //obtener una etiqueta por id
		//como acceder a los elementos 
		//el codigo script va hasta el final 
		//el document es la raiz del DOM
		//syntax del cammelo
        function tiempo()
        {
            
            
            var peticion = new XMLHttpRequest(); 
	        peticion.open('GET','tiempo.php');
            



            if(boton.value == "Iniciar a trabajar")
            {
               // echo $_SERVER['REQUEST_TIME']?
              
                //boton.value = tim;  
                 peticion.onload = function()
	             {
                 timI = JSON.parse(peticion.responseText);
                 console.log(timI);
                 //boton.value = tim[0].date;
                 }
                 peticion.send(); //importante mandar la peticion.  
                 boton.value ="trabajando...";   
            }
            else
            {
                peticion.onload = function()
	             {
                 timF = JSON.parse(peticion.responseText);
                 console.log(timF);
                 timT = timF[0].tiempo - timI[0].tiempo; 
                 console.log(timT);


                
                 //window.location.href = 'recibir_tiempo.php'+ "?timT=" + timT ;
                 window.open('recibir_tiempo.php'+ "?timI=" + timI[0].date + "&timF=" + timF[0].date , '_blank');
                 //boton.value = tim[0].date;
                 }
                 peticion.send(); //importante mandar la peticion.    
                boton.value ="Iniciar a trabajar";
                
               
            }
           
        }
	</script>

   
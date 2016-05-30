<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="utf-8" />
 <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
 <title>Recetas - DW31</title>
 <!-- Insertar aquí mas Metatags-->
</head>
<body>
 <div id="global">
 <header>
 <div id="logo">
    <img src="imagenes/logo.jpg" />
 </div>
 <div id="titulo">
 	<h1>Zubiri DW31 - Recetas</h1>
 </div>
 <div id="loggin">
     <form action="demo_form.asp" method="get"> 
     <fieldset>
            <legend>Entrar</legend>
            <br/>
     	    Usuario:<input id="user" type="text" size="12" />
     	    Contraseña:<input type="password" size="12"/><br/>
     	    <button>Aceptar</button>
         </fieldset>
     </form>
 </div>
 <div id="header">
            <nav> <!-- Aqui estamos iniciando la nueva etiqueta nav -->
                <ul class="nav">
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="">Servicios</a>
                        <ul>
                            <li><a href="">Registrate</a></li>
                            <li><a href="subir_receta.php">Sube tu Receta</a></li>
                            <li><a href="video.php">Videos de Recetas</a></li>
                            <li><a href="buscador.php">Buscador de Recetas</a>
                                <ul>
                                    <li><a href="">Entrantes</a></li>
                                    <li><a href="">1er Plato</a></li>
                                    <li><a href="">2º Plato</a></li>
                                    <li><a href="">Postres</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="">Acerca de</a>
                        <ul>
                            <li><a href="alimentacion.php">Alimentación</a></li>
                            <li><a href="dietas.php">Dietas</a></li>                            
                        </ul>
                    </li>
                    <li><a href="preguntas_recetas.php">Preguntas sobre Recetas</a></li>
                </ul>
            </nav><!-- Aqui estamos cerrando la nueva etiqueta nav -->
        </div>
 </header>
 <aside id="derecha">
 	<div id="menu">
 		<h4>Menú</h4>
 		<ul>
 			<li><a href="index.php">Inicio</a></li>
 			<li><a href="registro.html">Registrate</a></li>
 			<li><a href="subir_receta.php">Sube tu Receta</a></li>
 			<li><a href="video.php">Videos de Recetas</a></li>
 			<li><a href="buscador.php">Buscador de Recetas</a></li> 			
 		</ul>
 	</div>
 	<div id="boletin">
 		<h4>Suscribase a nuestro boletín</h4>
 		<br/>
 		<p>Introduzca su correo:</p>
 		<input type="text" value="xxxxx@yyyyy.zzz" />
        <br/>
 		<button>Aceptar</button>
 	</div>
 	<div id="destacados">
 		<h4>Busqueda rápida</h4>
 		<br/>
 		<input type="text" value="" />
 	</div>	
 </aside>
 <section>
   <h1>Buscador de Recetas:</h1>  
    <form id="buscador" name="buscador" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">  
        <input id="buscar" name="buscar" type="search" placeholder="Buscar aquí..." autofocus > 
        <input type="submit" name="buscador" class="boton peque aceptar" value="buscar">
        <br/>
        <br/>
    </form> 
    <?php   
    // Se muestran los resultados de la consulta, número de registros y contenido. 
    echo $registros; 
    echo $texto;  
    ?>
 </section>
 <aside id="izquierda">
 	<div id="ultReceta">
 		<h4>Ultimas Recetas</h4> 		
 	</div>
 	<div id="receta_sem">
 		<h4>Receta de la Semana</h4>
 		<a  href="receta_semana.html"><img src="imagenes/paella.jpg"/></a>
        <p>Paella de Marisco</p>
 	</div>
 </aside>
 <footer>
 <p>Recetas DW31 &copy; </p>
 </footer>
 </div>
</body>
</html>
<?php 
     // Primero definimos la conexión a la base de datos 
     define('HOST_DB', 'localhost'); //Nombre del host, nomalmente localhost 
     define('USER_DB', 'root'); //Usuario de la bbdd 
     define('PASS_DB', ''); //Contraseña de la bbdd 
     define('NAME_DB', 'c9'); //Nombre de la bbdd  
     // Definimos la conexión 
     function conectar(){ 
        global $conexion; //Definición global para poder utilizar en todo el contexto 
        $conexion = mysql_connect(HOST_DB, USER_DB, PASS_DB) 
        or die ('NO SE HA PODIDO CONECTAR AL MOTOR DE LA BASE DE DATOS'); 
        mysql_select_db(NAME_DB) 
        or die ('NO SE ENCUENTRA LA BASE DE DATOS ' . NAME_DB); 
    } 
    function desconectar(){ 
        global $conexion; 
        mysql_close($conexion); 
    }  
    //Variable que contendrá el resultado de la búsqueda 
    $texto = ''; 
    //Variable que contendrá el número de resgistros encontrados 
    $registros = '';  

    if($_POST){  
        $busqueda = trim($_POST['buscar']);  
        $entero = 0;  
        if (empty($busqueda)){ 
            $texto = 'Búsqueda sin resultados'; 
        }else{ 
        // Si hay información para buscar, abrimos la conexión 
            conectar(); 
            mysql_set_charset('utf8'); // para indicar a la bbdd que vamos a mostrar la info en utf  

            //Contulta para la base de datos, se utiliza un comparador LIKE para acceder a todo lo que contenga la cadena a buscar 
            $sql = "SELECT * FROM recetas WHERE nombre LIKE '%" .$busqueda. "%' ORDER BY fecha";  
            $resultado = mysql_query($sql); //Ejecución de la consulta 
            //Si hay resultados... 
            if (mysql_num_rows($resultado) > 0){  
            // Se recoge el número de resultados 
                $registros = '<p>HEMOS ENCONTRADO ' . mysql_num_rows($resultado) . ' registros </p>'; 
                // Se almacenan las cadenas de resultado 
                while($fila = mysql_fetch_assoc($resultado)){  $texto .= $fila['nombre'] . '<br />'; }  
            }else{ 
                $texto = "NO HAY RESULTADOS EN LA BBDD";    
            } 
            // Después de trabajar con la bbdd, cerramos la conexión (por seguridad, no hay que dejar conexiones abiertas) 
            mysql_close($conexion); 
        } 
    } 
    ?>  	 
    
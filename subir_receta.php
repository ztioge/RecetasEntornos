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
 	 <?php 
        if ($enviar) {
           // process form
           $link = mysql_connect("localhost", "root");
           mysql_select_db("c9",$db);
           $sql = "INSERT INTO recetas (nombre, tipo, ingredientes, preparacion) ".
             "VALUES ('$nombre', '$tipo', '$ingredientes', '$preparacion')";
           $result = mysql_query($sql);
           echo "¡Gracias! Hemos recibido sus datos.\n"; 
        }else{
        ?> 
  
           <form method="post" action="subir_receta.php">
           Nombre   :<input type="Text" name="nombre"><br>
           <br/>
           Tipo:<input type="Text" name="tipo"><br>
           <br/>
           Ingredientes :<input type="Text" name="ingredientes"><br>
           <br/>
           Preparación   :<input type="Text" name="preparacion"><br>
           <br/>
           <input type="Submit" name="enviar" value="Aceptar información">
           </form> 
  
        <?php 
        } //end if 
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
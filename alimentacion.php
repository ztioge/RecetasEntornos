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
   <h1>Consejos sobre la alimentacion.</h1>
   <br/>
    <h3>Comer alimentos variados.</h3>
        <p>Necesitamos más de 40 nutrientes diferentes y ningún alimento por sí solo puede proporcionarlos todos. El suministro de alimentos que existe hoy en día facilita tomar una amplia variedad de alimentos, tanto comprando alimentos frescos para cocinar como comprando comidas preparadas o comida para llevar. ¡Elija los alimentos siempre de manera equilibrada! Si toma un almuerzo rico en grasa, tome una cena con poca grasa. Y si un día toma carne en la cena, intente escoger pescado al día siguiente.</p>
    <br/>
    <h3>Tomar frutas y verduras.</h3>
        <p>La mayor parte de la gente no toma la suficiente cantidad de estos alimentos que proporcionan importantes nutrientes protectores. Intente comer al menos cinco raciones al día. Pruebe nuevas recetas o vea qué platos preparados están disponibles en el supermercado.</p>
    </br>        
    <h3>Todo es cuestion de equilibrio</h3>
        <p>No hay alimentos “buenos” o “malos”, sólo dietas buenas o malas. No se sienta culpable de los alimentos que le gustan, simplemente tómelos con moderación y escoja otros alimentos que le proporcionen el equilibrio y la variedad que necesita para conseguir una buena salud.</p>
    <br/> 
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
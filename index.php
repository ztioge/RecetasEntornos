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
     <form action="index.php" method="get"> 
     <fieldset>
            <legend>Entrar</legend>
            <br/>
     	    Usuario:<input id="user" name="usuario" type="text" size="12" />
     	    Contraseña:<input type="password" name="password" size="12"/><br/>
     	    <input type="submit" name="submit"/>
         </fieldset>
     </form>
<?php
if(isset($_POST["submit"])){
    function Login(){
        //si el usuario esta vacio
        if(empty($_POST['usuario']))
            {
                $this->HandleError("El usuario esta vacio!");
                echo "El usuario esta vacio";
                return false;
            }
        //Si la contraseña esta vacia    
        if(empty($_POST['password']))
            {
                $this->HandleError("La contraseña esta vacia!");
                return false;
            }
        //Guardamos en las variables username y password los datos introducidos
        $username = trim($_POST['usuario']);
        $password = trim($_POST['password']);
        
        if(!$this->CheckLoginInDB($username,$password))
            {
                return false;
            }
    }
}
    
    
    function CheckLoginInDB($username,$password)
    {   
        $username = $this->SanitizeForSQL($username);
        $pwdmd5 = md5($password);
        $qry = "Select name from $this->c9 ".
            " where usuario='$username' and password='$pwdmd5' ";
         
        $result = mysql_query($qry,$this->connection);
         
        if(!$result || mysql_num_rows($result) <= 0)
        {
            $this->HandleError("Error logueandose. ".
                "El usuario o la contraseña no coinciden.");
            return false;
        }
        return true;
    }
?>  
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
 	 <h1>Sobre nosotros</h1>
     <br/>     
     <br/>
     <p>Este es un proyecto realizado para la asignatura Entornos de Desarrollo, en el ciclo
        formativo Desarrollo de Aplicaciones Web en Zubiri-Manteo.</p>
 </section>
 <aside id="izquierda">
 	<div id="ultReceta">
 		<h4>Ultimas recetas</h4>
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
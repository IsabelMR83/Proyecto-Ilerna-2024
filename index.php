<!DOCTYPE html>
<html lang="es">
<head>
    <title>Cine Club Saura</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/styles.css" />
</head>
<body>
    <!--CONTENEDOR PRINCIPAL-->
    <div id="container">
        <!--CABECERA-->
        <header id="header">
            <div id="logo">
                <a href="#"><img src="assets/img/logo.png" alt="logotipo cine"/></a>
                <a href="#" class="titulo">CINE CLUB SAURA</a> <!--NOTA: apunta a index_maqueta.php-->
            </div>
        </header><!--Fin de cabecera-->
        <!--MENÚ-->
        <nav id="menu">
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Programación</a></li>
                <li><a href="#">Quienes somos</a></li>
                <li><a href="#">Saura en Cuenca</a></li>
            </ul>
        </nav><!--Fin de menú-->

        <div id="content">
            <!--BARRA LATERAL-->
            <aside id="lateral">
                <div id="login" class="block_aside">
                    <h3>Entrar a la web</h3>
                    <form action="#" method="post" class="form_container">
                        <label for="email">Email</label>
                        <input type="email" name="email"/>
                        <label for="password">Password</label>
                        <input type="password" name="password"/>
                        <input type="submit" value="Enviar" class="button"/>
                    </form>
                    <ul>
                        <li><a href="#">Mis reservas</a></li>
                        <li><a href="#">Gestionar reservas</a></li>
                        <li><a href="#">Gestionar categorías</a></li>
                    </ul>
                </div>
            </aside><!--Fin de barra lateral-->
        
            <!--CONTENIDO CENTRAL-->
            <div id="central">
                <h1>Bienvenidos al Cineclub Saura</h1> <!--Carrusel-->
                <div class="film">
                    <img src="assets/img/film.jpg"/>
                </div>
            </div><!--Fin de contenido central.-->
        </div> <!--Fin de contenedor content-->

        <!--PIE DE PÁGINA-->
        <footer id="footer"><p>Desarrollado por Isabel Martínez Rubio &copy; <?=date('Y')?></p></footer>
    </div><!--Fin de contenedor principal-->
</body>
</html>
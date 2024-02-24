<!DOCTYPE html> 
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title> SweetSapi</title>
        <link rel="icon" href="./imagenes/logo.jpeg">
        <link rel="stylesheet" href="user.css">        
    </head>

    <body>
        <!-- <header>
            <div class="container">
                <p class="logo"></p>
                <nav>
                    <a href="sweetsapi.php" id="inicio"></a>
                    <a href="#" id="lecciones"></a>
                    <a href="#" id="juegos" ></a>
                    <a href="#" id="logros" ></a>
                    <a href="#" id="Perfil"></a>
                    <a href="#" id="ajustes"></a>
                </nav>
            </div>
        </header> -->
        <section class="contenedor">
                <div class="foto">
                    <p class="logop"></p>
                </div>
                <div class="formulario">
                    <form class="textp" method="POST" action="">
                        <?php
                            include("Control_registrar.php");
                        ?>
                            <input type="text" placeholder="Tu nombre" name="nombre">
                            <input type="text" placeholder="Correo Electronico" name="correo">
                            <input type="text" placeholder="Usuario" name="user">
                            <!-- <input type="text" placeholder="Dia de nacimeinto" name="dia_nacimiento"> -->
                            <input type="text" placeholder="Celular" name="celular">
                            <input type="password" placeholder="Contraseña" name="pass">
                            <input type="password" placeholder="Confirmar contraseña" name="pass2">
                            <!-- <button value="Ingresar" name="btnregistrar">Registrate</button> -->
                            <br>
                            <input type="submit" value="Ingresar" name="btnregistrar" class="btn">
                    </form>
                </div>
        </section>
    </body>
</html>
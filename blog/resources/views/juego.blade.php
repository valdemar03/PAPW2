<!DOCTYPE html>
<html Lang="en">
    <head>
        <title>GT</title>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
    </head>
    <body>
        <header>
            <div class="divLogo">
                <img src="img/GT.png" alt="No hay Imagen"  width="80%">
            </div>
            <div class="divBuscar">
                <form class="frmBuscar" action="">
                    <input type="text" name="buscar" placeholder="Buscar" size="80">
                    <input type="submit" name="btnBuscar" value="Busacar">
                </form>
            </div>
            <div class="divLogin">
                <form class="frmLogin" action="">
                    <input type="text" name="nombre" placeholder="Nombre">
                    <input type="password" name="password" placeholder="Password">
                    <input type="submit" name="btnIngresar" value="Ingresar">
                </form>
            </div>
        </header>
        <div class="container">
            <div class="divFiltro">
                <a href="{{ route('inicio') }}"><input class="btn" type="submit" name="inicio" value="Inicio"></a><br><br><br><br>
                <a href="{{ route('registrarse') }}"><input class="btn" type="submit" name="Registrarse" value="Registrarse"></a><br><br><br><br>
                <a href="{{ route('inicio') }}"><input class="btn" type="submit" name="Trailers" value="Trailers"></a><br><br>
                <a href="{{ route('inicio') }}"><input class="btn" type="submit" name="Demos" value="Demos"></a><br><br>
                <a href="{{ route('inicio') }}"><input class="btn" type="submit" name="Juegos" value="juegos"></a><br><br><br>
                <a href="{{ route('chatprivado') }}"><input class="btn" type="submit" name="chatPrivado" value="Chat Privado"></a><br><br>
            </div>
            <div class="divTrailers">
                <div class="divPrincipal divP">
                    <img src="img/GT_P.png" alt="No hay Imagen" width="500">
                    <video width="320" height="240" controls>
                        <source src="video/Paraisos.mp4" type="video/mp4">
                    </video>
                    <input class="direcion" type="submit" name="izq" value="<">
                        <img src="img/GT_P.png" alt="No hay Imagen" width="100">
                        <img src="img/GT_P.png" alt="No hay Imagen" width="100">
                        <img src="img/GT_P.png" alt="No hay Imagen" width="100">
                    <input class="direcionD" type="submit" name="der" value=">">
                </div>
                <div class="divDatos">
                    <p>Datos</p><br>
                    <p>Fecha Inicio: --/--/--</p><br>
                    <p>Fecha Finalzado: --/--/--</p><br>
                    <p>Nombre</p><br>
                    <p>Clasificacion</p><br>
                    <p>Desarrollador</p><br><br>
                    <input type="submit" name="like" value="Me gusta">
                </div>
                <div class="divChat">
                    <input type="text" name="chat" placeholder="Chat"size="80%"><br><br>
                    <input type="text" name="chat" placeholder="Chat"size="100%"><br><br>
                    <input type="text" name="chat" placeholder="Chat"size="90%"><br><br>
                </div>
            </div>
        </div>
    </body>
</html>
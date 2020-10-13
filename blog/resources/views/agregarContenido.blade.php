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
                <a href="{{ route('agregarContenido') }}"><input class="btn" type="submit" name="agregarContenido" value="Agregar Contenido"></a><br><br>
            </div>
            <div class="divTrailers">
                <div class="dC">
                    <div class="dp">
                        <img src="img/GT_P.png" alt="No hay Imagen" width="500">
                        <img src="img/GT_P.png" alt="No hay Imagen" width="200">
                        <img src="img/GT_P.png" alt="No hay Imagen" width="200">
                        <form action="">
                            <input type="text" name="nombre" value="Nombre" size="50"><br><br>
                            <textarea name="" id="" cols="50" rows="10"></textarea><br><br>
                            <input type="file" name="Imagen" value="Imagen">
                        </form>
                    </div>
                </div>
                <div class="dD">
                    <input type="submit" class="idD" name="Agregar" value="Agregar"><br><br>
                    <input type="submit" class="idD" name="Editar" value="Editar"><br><br>
                    <input type="submit" class="idD" name="Eliminar" value="Eliminar"><br><br>
                </div>
            </div>
        </div>
    </body>
</html>
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
                <img class="contacto" src="img/usuario.png" alt="" width="10%">
                <img class="contacto" src="img/usuario.png" alt="" width="10%">
                <img class="contacto" src="img/usuario.png" alt="" width="10%">
                <img class="contacto" src="img/usuario.png" alt="" width="10%">
                <img class="contacto" src="img/usuario.png" alt="" width="10%">
                <img class="contacto" src="img/usuario.png" alt="" width="10%">
                <img class="contacto" src="img/usuario.png" alt="" width="10%">
                <img class="contacto" src="img/usuario.png" alt="" width="10%"><br>
                <div class="divChat">
                    <input type="text" name="chat" placeholder="Chat"size="80%"><br><br>
                    <input type="text" name="chat" placeholder="Chat"size="100%"><br><br>
                    <input type="text" name="chat" placeholder="Chat"size="90%"><br><br>
                    <input type="text" name="chat" placeholder="Chat"size="80%"><br><br>
                    <input type="text" name="chat" placeholder="Chat"size="100%"><br><br>
                    <input type="text" name="chat" placeholder="Chat"size="90%"><br><br>
                    <input type="text" name="chat" placeholder="Chat"size="80%"><br><br>
                    <input type="text" name="chat" placeholder="Chat"size="100%"><br><br>
                    <input type="text" name="chat" placeholder="Chat"size="90%"><br><br>
                    <input type="text" name="chat" placeholder="Chat"size="80%"><br><br>
                    <input type="text" name="chat" placeholder="Chat"size="100%"><br><br>
                    <input type="text" name="chat" placeholder="Chat"size="90%"><br><br>
                    <input type="text" name="chat" placeholder="Chat"size="80%"><br><br>
                    <input type="text" name="chat" placeholder="Chat"size="100%"><br><br>
                    <input type="text" name="chat" placeholder="Chat"size="90%"><br><br>
                </div>
            </div>
        </div>
    </body>
</html>
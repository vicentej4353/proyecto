<?php include ("conexion.php");
if (isset($_GET['id_categorias'])) {
    $id_categorias = $_GET['id_categorias'];
    $sql_articuloss = $conexion->query("SELECT * FROM articuloss WHERE id_categorias=$id_categorias");
} else {
    $sql_articuloss = $conexion->query("SELECT * FROM articuloss");
}
$sql = $conexion->query("SELECT * FROM categorias");
?>




<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Proyecto 1DAW - SOLVAM</title>

    <!-- CSS ================================================== -->
    <link rel="stylesheet" href="../css/blog.css">
   
    <!-- Favicons ================================================== -->
    <link rel="shortcut icon" href="../img/favicon.ico">

    <!-- JS ================================================== -->



</head>

<body>


    <div id="contenedor">
        <div id="encabezado">
            <div class="logo">
                <div class="container">
                    <div class="image-container">
                        <img src="img/22.jpg" width="55" height="55" alt="Descripción de la imagen">
                    </div>
                    <div class="text-container">
                        <p>Tu texto aquí.</p>
                    </div>
                </div>

            </div>
            <div class="menu">

                <ul class="menu">
                    <li><a href="#">Home</a>
                        <ul class="submenu">
                            <li><a href="#">Producto 1</a></li>
                            <li><a href="#">Producto 2</a></li>
                            <li><a href="#">Producto 3</a></li>
                    </li>
                </ul>
                <li><a href="#">Features</a></li>

                <li><a href="#">Pages</a>
                    <ul class="submenu">
                        <li><a href="#">Producto 1</a></li>
                        <li><a href="#">Producto 2</a></li>
                        <li><a href="#">Producto 3</a></li>
                </li>
                </ul>

                <li><a href="#">Gallery</a>
                    <ul class="submenu">
                        <li><a href="#">Producto 1</a></li>
                        <li><a href="#">Producto 2</a></li>
                        <li><a href="#">Producto 3</a></li>
                    </ul>
                </li>
                <li><a href="#">Blog</a>
                    <ul class="submenu">
                        <li><a href="#">Producto 1</a></li>
                        <li><a href="#">Producto 2</a></li>
                        <li><a href="#">Producto 3</a></li>
                    </ul>
                </li>
                <li><a href="#">Contacto</a></li>
                </ul>
            </div>
        </div>




        <div id="dos">

            <div id="cuadrado1">
                <div class="buscador">
                    <input type="text" placeholder="Buscar">
                    <a href="#"></a>

                </div>

            </div>

            <div id="cuadrado2">
            <?php while($fila=$sql_categorias->fetch_array()){
                    $id_categorias=$fila[0];
                    $titulo=$fila[1];
                    ?>
                <div class="categorias1">
                    <p>Categorias</p>

                 
                </div>

                <div class="cuadradodesign">
                    <a class="iconodesign" href="#"></a>
                    <a class="design" href="blog.php?id_categorias=<?php echo $id_categorias;?>"></a>
                </div>

                <div class="cuadradoillustration">
                    <a class="iconoillustration" href="#"></a>
                    <a class="illustration" href="blog.php?id_categorias=<?php echo $id_categorias;?>">ILLUSTRATION</a>
                </div>

                <div class="cuadradotutorials">
                    <a class="iconotutorials" href="#"></a>
                    <a class="tutorials" href="#">TUTORIALS</a>
                </div>

                <div class="cuadradonews">
                    <a class="icononews" href="#"></a>
                    <a class="news" href="#">NEWS</a>
                </div>
                
                <?php } ?>
            </div>
    
            <div id="cuadrado3">
                <div class="popularposts">
                    <p>POPULAR POSTS</p>
                </div>

                <div class="cuadradoimagen1">
                    <a href="#"></a>
                </div>

                <div class="cuadradoimagen2">
                    <a href="#"></a>
                </div>

                <div class="cuadradoimagen3">
                    <a href="#"></a>
                </div>
            </div>

            <div id="cuadrado4">
                <div class="moreinfo">
                    <p>MORE INFO</p>
                </div>

                <div class="cuadradocomments">
                    <a class="comments" href="#">Comments</a>

                </div>

                <div class="cuadradotweets">
                    <a class="tweets" href="#">Tweets</a>
                    <a class="tweets" href="#">About</a>
                </div>

                <div id="rectangulosadmins">
                    <div class="rectanguloadminon1">
                        <a class="iconocomments1" href="#"></a>
                        <p>admin on</p>
                    </div>

                    <div class="rectanguloadminon2">
                        <a class="iconocomments2" href="#"></a>
                        <p>admin on</p>
                    </div>

                    <div class="rectanguloadminon3">
                        <a class="iconocomments3" href="#"></a>
                        <p>admin on</p>
                    </div>

                    <div class="rectanguloadminon4">
                        <a class="iconocomments4" href="#"></a>
                        <p>admin on</p>
                    </div>

                    <div class="rectanguloadminon5">
                        <a class="iconocomments5" href="#"></a>
                        <p>admin on</p>
                    </div>
                </div>
            </div>

            <div id="cuadrado5">
                <div class="videowidget">
                    <p>VIDEO WIDGET</p>
                </div>

                <div class="video">
                    
                </div>

            </div>
        </div>





        <div id="apartado">
        <?php while($fila=$sql_articuloss->fetch_array()){
                $id_articulos=$fila[0];
                $titulo=$fila[1];
                $imagen	=$fila[2];
                $articulo=$fila[3];
                $fecha=$fila[4];
                $visitas=$fila[5];
                $comentarios=$fila[6];
                $autor=$fila[7];
                $id_categorias=$fila[8];
            ?>

            <div class="primero">
            
            <img width="200px" height="190px" src="../img/<?php echo $imagen; ?> " />
                <div id="letra">

                    <div class="rectangulo1">
                        <p>A SUBJECT THAT IS BEAUTIFUL IN IT SELF</p>
                    </div>
                    <div class="texto1">
                        <p>
                        <?php echo $articulo; ?>
                        </p>
                    </div>
                    <div id="boton1">
                        <a class="botonread1" href="#">Read More</a>
                    </div>


                    <div id="iconos">
                        <div class="tupu">
                            <a class="icono1" href="#"></a>
                            <p>
                            <?php echo $fecha; ?>
                            </p>
                        </div>

                        <div class="tupu1">
                            <a class="icono2" href="#"></a>
                            <p>Admin</p>
                        </div>

                        <div class="tupu2">
                            <a class="icono3" href="#"></a>
                            <p>Comments</p>
                        </div>

                        <div class="tupu3">
                            <a class="icono4" href="#"></a>
                            <p>Photoshop, tutorials</p>
                        </div>


                    </div>




                </div>

                <?php } ?>
            </div>
          
            


            
        </div>

        </div>



        <div id="pie">
            <div class="piee">

                <div class="pie1">
                    <div class="logopeque"></div>

                    <div class="redes">
                        <a class="f"></a>
                        <a class="p"></a>
                        <a class="g"></a>
                        <a class="w"></a>
                        <a class="s"></a>
                    </div>

                </div>

                <div class="pie2">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3079.707408371841!2d-0.4240525238928413!3d39.475938271606225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd604f855077e3a5%3A0xdc28e7d9de11ab65!2sC.%20Marqu%C3%A9s%20Villores%2C%2046920%20Mislata%2C%20Valencia!5e0!3m2!1ses!2ses!4v1684748860961!5m2!1ses!2ses"
                        width="240" height="220" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>

                <div class="pie3">

                </div>

                <div class="pie4">

                </div>
            </div>



            <div class="pie5">
                <div class="copy">

                </div>
                <div class="menu2">
                    <a class="ho" href="#">Home</a>
                    <a class="fe" href="#">Features</a>
                    <a class="ga" href="#">Gallery</a>
                    <a class="bl" href="#">Blog</a>
                    <a class="co" href="#">Contact</a>
                </div>
            </div>
            <div class="pie6">

                <a class="flecha" href="#"></a>
            </div>

        </div>
    </div>
    </div>






</body>

</html>
<?php include ("conexion.php");

$sql_detalles = $conexion -> query("SELECT * FROM detalles");

?>




<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Proyecto 1DAW - SOLVAM</title>

	<!-- CSS ================================================== -->
	<link rel="stylesheet" href="../css/reset.css">

	<!-- Favicons ================================================== -->
	<link rel="shortcut icon" href="img/favicon.ico">

	<!-- JS ================================================== -->



</head>

<body>

	<div id="contenedor">
		<div id="encabezado">
			<div class="logo">
				<div class="container">
					<div class="image-container">
						<img src="img/22.jpg" width="50" height="50" alt="Descripción de la imagen">
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
				<li><a href="http://naturalmountain.com.es:8080/naturalmountain/facturar/webapp/facturar.jsp">Acceso privado</a></li>
				</ul>
			</div>
		</div>

		<p class="limpiar"></p>
		<div id="galeria">
			<div class="animacion">
				<div>1</div>
				<div>2</div>
				<div>3</div>
				<div>4</div>
			</div>
			<div class="noticiadestacada">

			</div>
		</div>

		<div id="contenido">
            <?php while($fila=$sql_detalles->fetch_array()){
                $id=$fila[0];
                $imagen=$fila[3];
                $titulo=$fila[1];
                $descripcion=$fila[2];
            
            ?>

            <ul id="noticia">

            <a href="detalles.php?id_detalle=<?php echo $id;?>">
                <li id="n1">
                    <img src="../img/<?php echo $imagen;?>" alt="barcelona.jpg" width="270px" height="220px">
                    <a class="lupa"></a>
                    <a  href="detalles.php?id_detalle=<?php echo $id;?>" class="boton"></a>
                    <div class="descripcion">descripcion</div>
                </li>
            <?php } ?>
                
            </ul>
        </div>


			
		</div>
		<div id="pie">
			<div class="piee">

			<div class="pie1">
				<div class="textopie">
					<p>SOBRE NOSOTROS</p>
				</div>
				
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
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3079.707408371841!2d-0.4240525238928413!3d39.475938271606225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd604f855077e3a5%3A0xdc28e7d9de11ab65!2sC.%20Marqu%C3%A9s%20Villores%2C%2046920%20Mislata%2C%20Valencia!5e0!3m2!1ses!2ses!4v1684748860961!5m2!1ses!2ses" width="240" height="220" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					
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





</body>

</html>
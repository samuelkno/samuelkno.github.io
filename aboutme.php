<!DOCTYPE html>
<html>
<head>
	<title>My site</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/style.css">
</head>
<?php
        $nombre = "Samuel Alejandro Cano Quezada";
        $profesion = "Ingeniero en Sistemas y Redes Informaticas";
        $intereses = "Dios, Familia, Informatica, Seguridad Informatica, Viajes";
        $correo = "knozyzz93@gmail.com";
        $imagen = "profile.jpg";
       $descripcion = "Soy un Ingeniero en Sistemas y Redes Informáticas, mi perfil profesional se enfoca en el diseño, implementación y mantenimiento de sistemas y redes informáticas. Tengo un conocimiento profundo de los conceptos de redes, protocolos y tecnologías de comunicación. Además, cuento con habilidades técnicas en áreas como la configuración de servidores, la gestión de bases de datos, el desarrollo de software y la virtualización.

       Sin embargo, mi especialización en seguridad informática en mi perfil profesional. Como experto en esta área, estoy capacitado para identificar, analizar y mitigar los riesgos y amenazas de seguridad que pueden afectar a los sistemas y redes informáticas. Poseo conocimientos en temas como criptografía, autenticación, autorización, protección de datos y seguridad en la nube.";
?>
<body>
	<header>
		<h1>Alejandro K-no</h1>
	</header>
	<nav>
		<a href="/index.html">Proyectos</a>
		<a href="#about">Acerca de mi</a>
		<a href="#contact">Contacto</a>
        <a href="#contact">Columbox Security</a>
	</nav>
	<section id="aboutme">
      <div class="about-me">
        <h2 >Acerca de Mí</h2>
        <img width="200" height="200" src="<?php echo $imagen; ?>" alt="<?php echo $nombre; ?>">
        <p><?php echo $descripcion; ?></p>
       <ul>
       <li><strong>Nombre:</strong> <?php echo $nombre; ?></li>
       <li><strong>Profesión:</strong> <?php echo $profesion; ?></li>
       <li><strong>Intereses:</strong> <?php echo $intereses; ?></li>
       <li><strong>Correo Electrónico:</strong> <?php echo $correo; ?></li>
       </ul>
      </div>
      
</body>

        
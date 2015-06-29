<HTML>
<HEAD>
<TITLE>registrar.php</TITLE>
</HEAD>
<BODY>
<?php

// [$dbuser="root";
// $dbpass="TechKeyWorld2015";
// $dbname="bdprueba";
// $chandle = mysql_connect("localhost", $dbuser, $dbpass) 
// or die("Error conectando a la BBDD");
// echo "Conectado correctamente";

// //Conexion con la base
// // mysql_connect("localhost","root","TechKeyWorld2015"); 

// //selección de la base de datos con la que vamos a trabajar 
// mysql_select_db("BD_GUIA"); 

// //Ejecucion de la sentencia SQL
// mysql_query("insert into t_usuario 
// 	(id_usuario,alias_usuario,nombre_usuario,apellidos_usuario,email_usuario,
//   fecha_nacimiento_usuario,direccion_usuario,contraseña_usuario,avatar_usuario,
//   sexo_usuario) values ('12','ednos','edson','xipa tell','ednos@hotmail.com','2015-04-25',
// 'micasa','123456789','9947587','masculino')");]

 //Ejemplo curso PHP aprenderaprogramar.com
$link = mysql_connect("localhost","root","TechKeyWorld2015");
mysql_select_db($link,"BD_GUIA");
//$tildes = $link->query("SET NAMES 'utf8'"); //Para que se inserten las tildes correctamente
mysql_query($link,"INSERT INTO t_usuario 
	(id_usuario,alias_usuario,nombre_usuario,apellidos_usuario,email_usuario,
		fecha_nacimiento_usuario,direccion_usuario,contraseña_usuario,avatar_usuario,sexo_usuario)
	VALUES ('12','ednos','edson','xipa tell','ednos@hotmail.com',
		'2015-04-25','micasa','123456789','9947587','masculino')");

mysql_close($link); // Cerramos la conexion con la base de datos
echo 'Los datos han sido insertados en la base de datos';
?>

<h1><div align="center">Registro Insertado</div></h1>
<div align="center"><a href="lectura.php">Visualizar el contenido de la base values ('$nombre','$telefono')</a></div>
</BODY>
</HTML>
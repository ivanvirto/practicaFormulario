<?php
$destinatario= 'upem.israel.arias@gmail.com';
$nombre =$_POST['nombre'];
$apellido =$_POST['apellido'];
$direccion =$_POST['direccion'];
$email =$_POST['email'];
$edad =$_POST['edad'];
$comentario =$_POST['comentario'];

$header ="enviado por ivan virto";
$mensajeCompleto= "nombre: ".$nombre."\n apellido: ".$apellido."\n direccion: ".$direccion."\n email: ".$email."\n edad: ".$edad."\n comentario: ".$comentario;
mail($destinatario,$header,$mensajeCompleto);
echo "<script>alert('correo enviado')</script>";
echo "<script> setTimeout(\"location.href='index.html'\",100) </script>";
?>
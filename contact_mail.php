<?php
$coments = $yourservice; 
$toEmail = "jeanmarmentor@gmail.com";
$mensaje = "Gracias por tu mensaje. Pronto te contactaré.";
$ruta = "contacto.html";
$mailHeaders = "From: " . $_POST["name"]. "<". $_POST["phone"] . "<". $_POST["email"] .">\r\n";



if(mail($toEmail, $mailHeaders, $yourservice)) {
	echo "
	<script>
		alert('$mensaje');
		window.location='$ruta';
	</script>";
	exit;
} else {
	echo"<p class='Error'>Problema enviando el mensaje.</p>";
}







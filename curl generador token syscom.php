<?php
// abrimos la sesión cURL
$ch = curl_init();

// definimos la URL a la que hacemos la petición
curl_setopt($ch, CURLOPT_URL,"https://developers.syscom.mx/oauth/token");
// indicamos el tipo de petición: POST
curl_setopt($ch, CURLOPT_POST, TRUE);
// definimos cada uno de los parámetros
curl_setopt($ch, CURLOPT_POSTFIELDS, "client_id=puy1ire7sbSZyLVQbTcYweMipzPUY8EQ&client_secret=XYUwUY1Zg610Rtth2I43eaHEWf9GalkunAJb7bWn&grant_type=client_credentials");

curl_setopt($ch, CURLOPT_HEADER, "Content-Type: application/x-www-form-urlencoded");

// recibimos la respuesta y la guardamos en una variable
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$remote_server_output = curl_exec ($ch);

// cerramos la sesión cURL
curl_close ($ch);

// hacemos lo que queramos con los datos recibidos
// por ejemplo, los mostramos
print_r($remote_server_output);
?>
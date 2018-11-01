<?php
$urlform = $_POST["url"];
$descrform = $_POST["descr"];

$query = "INSERT INTO urltable(URL, description) VALUES ('".$urlform."','".$descrform."');";

if ( !( $database = mysqli_connect( "localhost", "root", "", "URLs" ) ) )
    die( "Could not connect to database </body></html>" );

$result = $database->query($query);

echo "URL guardada com sucesso!";echo("\n");
echo "<a href='exc3.html'>Clique aqui para realizar um novo cadastro</a><br>";

?>
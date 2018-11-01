<?php
define( "FIVE_DAYS", 60 * 60 * 24 * 5 ); // define constant
setcookie( "nome", $_POST["nome"], time() + FIVE_DAYS );
setcookie( "universidade", $_POST["universidade"], time() + FIVE_DAYS );
setcookie( "curso", $_POST["curso"], time() + FIVE_DAYS );
?>
<!-- end PHP script -->
<!DOCTYPE html>
<html>
<head>
<meta charset = "utf-8">
<title>Cookie Saved</title>
<style type = "text/css"> p { margin: 0px; } </style>
</head>
<body>
<p>O Cookie foi criado com os seguintes dados:</p>
<p>Nome: <?php print( $_POST["nome"] ) ?></p>
<p>Universidade: <?php print( $_POST["universidade"] ) ?></p>
<p>Curso: <?php print( $_POST["curso"] ) ?></p>
<p>Clique <a href = "readCookies.php">aqui</a> para ler o cookie.</p>
</body>
</html>

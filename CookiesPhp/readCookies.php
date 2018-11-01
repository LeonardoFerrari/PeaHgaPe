<!DOCTYPE html>
<!-- Displaying the cookie’s contents. -->
<html>
<head>
<meta charset = "utf-8">
<title>Read Cookies</title>

<style type = "text/css"> p { margin: 0px; } </style>
</head>
<body>
<p>Os seguintes dados foram savos no seu computador.</p>
<?php
// iterate through array $_COOKIE and print
foreach ($_COOKIE as $key => $value )
print( "<p>$key: $value</p>" );
?>
<?php
if(@$_COOKIE['acesso'] != '') {
$_COOKIE['acesso']++;
setcookie("acesso",$_COOKIE['acesso'], time()+3600); // cookie dura por 3600 segundos
} else {
setcookie("acesso", 1, time()+3600);; // cookie dura por 3600 segundos
$_COOKIE['acesso'] = 1;
}
?>
<!-- chamando o número de visitas //-->
você já visitou essa página <?php echo $_COOKIE['acesso']; ?> vez(es).
<!-- end PHP script -->
<br/>
<br/>
<div><label> Clique no botão para realizar outro cadastro</label></div>
<br/>
<form method = "post" action = "cookies.html">Clique aqui para refazer
<p><input type = "submit" value = "Escrever Cookie">
</form>

</body>
</html>
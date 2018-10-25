<?php
// verifica se o telefone é valido
// se não for emite mensagem
if (!preg_match( "/^\([0-9]{2}\) [0-9]{4}-[0-9]{4}$/", $_POST["telefoneFixo"]))
{
print( "<p class = 'error'>Numero de telefone invalido</p>
<p>Um telefone valido tem a forma
(55) 5555-5555</p><p>Clique em voltar no seu navegador,
e entre um telefone valido.</p>
<p>Obrigado .</p></body></html>" );
die(); // termina execução do script
}
?>

<p>Ola <?php print( $_POST["fname"] ); ?>. Obrigado por
completar a pesquisa. Voce foi adicionado a lista de email do
curso <?php print( $_POST[“class"] ); ?> .</p>
<p class = "head">Dados armazenados:</p>
<p>Nome: <?php print( $_POST["nome"] );
print( $_POST["nome"] ); ?></p>
<p>Email: <?php print( $_POST["email"] ); ?></p>
<p>Fone celular: <?php print( $_POST["telefonecel"] ); ?></p>
<p>Endereco: <?php print( $_POST["endereco"] ); ?></p>
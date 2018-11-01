<?php
$select = isset($_POST[" select" ]) ? $_POST[ "select" ] : " ";
// cria variavel $select e atribui o valor da seleção do usuário
$query = "SELECT " . $select . " FROM books"; // cria query de consulta
// Conecta ao MySQL
if ( !( $database = mysql_connect( "localhost", "leleohtp", "password" ) ) )
die( "Could not connect to database </body></html>" );
// abre a tabela Products
if ( !mysql_select_db( "URLs", $database ) )
die( "Could not open products database </body></html>" );
// realiza a consulta
if ( !( $result = mysql_query( $query, $database ) ) )
{
print( "<p>Could not execute query!</p>" );
die( mysql_error() . "</body></html>" );
} // end if
mysql_close( $database );
?><!-- end PHP script -->
<!-- -------------------------------------         -->

<table>
<caption>Results of "SELECT <?php print( "$select" ) ?> FROM books"</caption>
<?php
// acessa linha por linha dos resutlados
while ( $row = mysql_fetch_row( $result ) )
{
// cria tabela para mostrar resultados da consulta
print( "<tr>" );
foreach ( $row as $value )
print( "<td>$value</td>" );
print( "</tr>" );
} // end while
?><!-- end PHP script -->
</table>
<p>Your search yielded
<?php print( mysql_num_rows( $result ) ) ?> results.
</p>
<?php
try {


echo 'This text is placed through <b>PHP</b>!';
echo '<p>';
echo '</p>';

include("connexion.php");

if ($conn) {
 	echo 'Connexion OK';
 	$query = file_get_contents("appartements.sql");
	odbc_exec($conn, $query)or die(odbc_error());
}
else {
    echo 'TMLC';
}
//!\
odbc_close($conn);
//!\
}
catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : '.$e->getMessage());

}


?>
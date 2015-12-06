            <?php
try {


echo 'This text is placed through <b>PHP</b>!';
echo '<p>';
echo '</p>';

include("connexion.php");

if ($conn) {
 	echo 'Connexion OK';
 	$req="select NOMRUE from adresse ";
 	$result = odbc_exec($conn, $req);
 	while ($data[]=odbc_fetch_array($result));
 	print_r($data);
 	//$query = file_get_contents("appartements.sql");
	//odbc_exec($conn, $query)or die(odbc_error());
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
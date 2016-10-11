<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8"/>
        <meta name="keywords" content=""/>
        <meta name="author" lang="fr" content=""/>
        <meta name="generator" content="Sublime-text"/>
        <meta name="description" content=""/>
        <meta name="identifier-url" content=""/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Days of the week</title>
        <link rel="shortcut icon" href=""/>
    </head>

    <body>
        <div>
            <form name="go" method="get" action="index.php"><h1>Tell me what day you want to be explain ?</h1>
            <input type="text" name="champ" size="10"/>
            <input type="submit" name="valider" value="tell me all !"/></form>
        </div>


<?php
	//Boucle ForEach

$jds = array ('monday','tuesday','wednesday','thursday','friday','saturday','sunday');

foreach ($jds as $echo) :
	echo $echo."<br/>\n";
endforeach;

	// Boucle While

$i = 0;
$max = count($jds);

while($i<$max)
{
	echo$jds[$i]."<br/>";
	$i++;
}

	// Boucle For
for ($i=0; $i<$max ; $i++) 
{ 
	echo$jds[$i]."<br/>";
	
}
?>

<?php
// Creation de la fonction :)

Function Jourdelasemaine() {

	echo "<div><h2>";
// Permet de verifier qu'il n'y a pas d'élément autre que du texte et le convertie en minuscule

	$reel = strip_tags($_GET['champ']);
	$text = strtolower($reel);
// On balance nos conditionnelles

	switch ($text) {
		case 'monday':
			echo "Courage, le lundi c'est dur pour tout le monde !";
			break;
		
		case 'friday':
			echo "C'est bientôt le week-end!";
			break;

		case 'saturday':
			echo "C'est le week-end !!";
			break;

		case 'sunday':
			echo "C'est le week-end !!";
			break;

		default:
			echo "Courage c'est bientôt fini !";
			break;

			echo "</h2></div>";
	}

}
	// Si le bouton est validé et cliqué et si le champ n'est pas vide
if (isset($_GET['valider'])AND!empty($_GET['champ'])) {

	Jourdelasemaine();
}
?>


    </body>
</html>


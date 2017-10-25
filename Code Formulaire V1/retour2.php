<?PHP
if (isset($_POST['prenom'])) {
    $prenom = $_POST['prenom'];
    unset ($_POST['prenom']);
}
else {$prenom='';}
if (isset($_POST['nom'])) {
    $nom = $_POST['nom'];
    unset ($_POST['nom']);
}
else {$nom='';}
if (isset($_POST['psw'])) {
    $psw = $_POST['psw'];
    unset ($_POST['psw']);
}
else {$psw='';}
if (isset($_POST['nomfich'])) {
    $nomfich = $_POST['nomfich'];
    unset ($_POST['nomfich']);
}
else {$nomfich='';}
if (isset($_POST['sexe'])) {
    $sexe = $_POST['sexe'];
    unset ($_POST['sexe']);
}
else {$sexe='';}
if (isset($_POST['foot1'])) {
    $foot1 = $_POST['foot1'];
    unset ($_POST['foot1']);
}
else {$foot1='';}
if (isset($_POST['foot2'])) {
    $foot2 = $_POST['foot2'];
    unset ($_POST['foot2']);
}
else {$foot2='';}
if (isset($_POST['foot3'])) {
    $foot3 = $_POST['foot3'];
    unset ($_POST['foot3']);
}
else {$foot3='';}
if (isset($_POST['foot4'])) {
    $foot4 = $_POST['foot4'];
    unset ($_POST['foot4']);
}
else {$foot4='';}
if (isset($_POST['foot5'])) {
    $foot5 = $_POST['foot5'];
    unset ($_POST['foot5']);
}
else {$foot5='';}
if (isset($_POST['datenais'])) {
    $datenais = $_POST['datenais'];
    unset ($_POST['datenais']);
}
else {$datenais='';}
if (isset($_POST['bio'])) {
    $bio = $_POST['bio'];
    unset ($_POST['bio']);
}
else {$bio='';}
if (isset($_POST['Destinations'])) {
    $Destinations = $_POST['Destinations'];
    unset ($_POST['Destinations']);
}
else {$Destinations='';}
if (isset($_POST['couleur'])) {
    $couleur = $_POST['couleur'];
    unset ($_POST['couleur']);
}
else {$couleur='';}
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>RETOUR2</title>
		<meta charset="UTF-8">
			<style type="text/css">
			</style>
	</head>
		<body>
			<h3>Vous, vous appelez <?PHP echo $prenom.' '.$nom; ?></h3>
			<h3>Votre mot de passe est: <?PHP echo $psw; ?></h3>
			<h4>Fichier choisi : <?PHP echo $nomfich; ?></h4>
			<h4>Vous êtes un<?PHP if ($sexe=="F") {echo"e Femme";} else {echo" Homme";}?></h4>
			<h4>
			<?PHP
			$nbequipes=((strlen($foot1)>0)?1:0)+((strlen($foot2)>0)?1:0)+((strlen($foot3)>0)?1:0)+((strlen($foot4)>0)?1:0)+((strlen($foot5)>0)?1:0);
			if ($nbequipes==0) {echo "Vous avez aucune equipe favorite";}
			elseif ($nbequipes==1) {echo "Votre équipe favorite est : ";}
			else {echo "Vos $nbequipes équipe favorite sont : ";}
			echo $foot1.' '.$foot2.' '.$foot3.' '.$foot4.' '.$foot5;
			?>
			</h4>
			<h4>Né le : <?PHP echo $datenais; ?></h4>
			<h4>Biographie :  <br/> <?PHP echo $bio; ?> </h4>
			<!-- <h4>Vous avez choisis comme equipe : < ? PHP // echo $foot1.' '.$foot2.' '.$foot3.' '.$foot4.' '.$foot5; ?> </h4> -->
			<h4>Destinations : <br/> <?PHP echo $Destinations; ?> </h4>
			<h4 style="color:<?PHP echo $couleur;?>;">Voilà la couleur choisie : <?PHP echo $couleur;?> </h4>
		</body>
</html>

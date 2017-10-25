<?PHP
date_default_timezone_set('Europe/Paris');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<title>SAISIE2</title>
<meta charset="UTF-8">
<style type="text/css">
button (width:100px;heigt:20px;background:yellow;)
</style>
</head>
<body>
<form action="retour2.php" method="post">
    <table id="form1">
		<tr>
			<td style="width:250px;"><label for="prenom">Entrez votre prénom : </label></td>
			<td><input type="text" placeholder="Entrez le prénom" id="prenom" name="prenom"/></td>
		</tr><tr>
			<td><label for="nom">Entrez votre nom : </label></td>
			<td><input type="text" id="nom" name="nom"/></td>
		</tr><tr>
			<td><label for="psw">Entrez votre mot de passe : </label></td>
			<td><input type="password" id="psw" name="psw"/></td>
		</tr><tr>
			<td><label for="nomfich">Entrez le nom du ficher : </label></td>
			<td><input type="file" id="nomfich" name="nomfich"/></td>
		</tr><tr>
			<td>Sexe :</td>
			<td><input type="radio" id="Homme" name="sexe" value="H" 
				checked/>Homme &nbsp;&nbsp;&nbsp;
				<input type="radio" id="Femme" name="sexe" value="F"/>Femme</td>
		</tr><tr>
		<tr><td>Pour quel equipe de foot êtes vous :</td>
		<td><input type="checkbox" name="foot1" value="Chamois"/>Chamois<br/>
			<input type="checkbox" name="foot2" value="Tours"/>Tours<br/>
			<input type="checkbox" name="foot3" value="Angers"/>Angers<br/>
			<input type="checkbox" name="foot4" value="PSG"/>PSG<br/>
			<input type="checkbox" name="foot5" value="PSG"/>Marseille
		</td></tr>
		</tr><tr>
			<td><label for="datenais">Entrez votre date de naissance : </label></td>
			<td><input type="date" id="datenais" name="datenais"/></td>
		</tr><tr>
			<td><label for="bio">Entrez votre biographie : </label></td>
			<td><textarea id="bio" name="bio" rows="4" cols="30" spellcheck="false" ></textarea></td>
			<td>&nbsp;</td>
		</tr><tr>
			<td>&nbsp;</td>
			<td><button type="button" id="button" onclick="alert('bonjour');">Bonjour</button></td>
			<td><input type="hidden" id="date" name="date" value="<?PHP echo date ('j/m/Y'); ?>"/></td>
		</tr><tr>
			<td><label for "Destinations">Destinations</label>
			</td><td><select name="Destinations" size="8">
				<option selected label="Destinations :" value="none">Aucune</option>
					<optgroup label="France">
						<option label="Marseille" value="Marseille">Marseille</option>
						<option label="Limoges" value="Limoges">Limoges</option>
						<option label="Roubaix" value="Roubaix">Roubaix</option>
					</optgroup >
					<optgroup label="Portugal">
						<option label="Coimbra" value="Coimbra">Coimbra</option>
						<option label="Porto" value="Porto">Porto</option>
					</optgroup >
					<optgroup label="Italie">
						<option label="Florence" value="Florence">Florence</option>
						<option label="Gènes" value="Gènes">Gènes</option>
						<option label="Naples" value="Naples">Naples</option>
					</optgroup >
			</select>
		</td></tr>
		</tr><tr>
			<td><label for="couleur">Choisissez la couleur : </label></td>
			<td><input type="color" id="couleur" name="couleur"/></td>
		</tr><tr>
			<td><label for="temperature">Choisissez la temperature : </label></td>
			<td><input type="number" id="temperature" min="-273" max="1000" step="100" name="temperature"/></td>
		</tr><tr>
			<td><label for="note">Choisissez la note : </label></td>
			<td><input onblur="alert(document.getElementById('note').value);"
					   type="range" min="0" max="20" step="1" id="note" name="note"/> </td> <!-- vignet qui apparait quand on s'enleve du curseur, et qui nous indique la valeur -->
		</tr><tr>
			<td><input type="submit" value="Valider"></td>
			<td><input type="reset" value="Effacer"></td>
		</tr>
			<tr><td colspan="2"><input type="image" src="image/poisson.png" /></td></tr>
    </table>
</form>
</body>
</html>

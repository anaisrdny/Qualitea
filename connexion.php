<?php 
session_start();
if(isset($_POST['motdepasse']) and !empty($_POST['motdepasse']) and isset($_POST['identifiant']) and !empty($_POST['identifiant'])){
	$mdp=$_POST['motdepasse'];
	$idf=$_POST['identifiant'];
$Fichier = "connexion.txt";
if (is_file($Fichier)) {
	$verification=FALSE;
	$comp= $idf.';'.$mdp;
	if ($TabFich =file($Fichier)) {
		for($i = 0; $i <count($TabFich);$i++){ 
		if($comp==$TabFich[$i]){
			$verification=TRUE;
		}
		
		if($verification=TRUE){
		$_SESSION['identifiant']=$idf;
		$_SESSION['motdepasse']=$mdp;
		header ("location: ../index.php?id=".$_SESSION['identifiant']);
			}
			else{
				$msg="Mauvais identifiant ou mot de passe !";
				
				}
		
		
		
		}
			}
		else {
			 $msg="Le fichier ne peut être lu...<br>"; } }
			else {
			 $msg="Désolé le fichier n'est pas valide<br> "  ; }
				


}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QualiTea - Accueil</title>
    <link rel="stylesheet" href="../css/contact.css">
</head>



<?php include './header.php'; ?>
<?php include './side_menu.php'; ?>

<section id="milieu">
    <h1>Connexion</h1>
    <form id="form_contact"  method="post" action="">
        <table>
            <tr>
                <td> <label for="identifiant">Identifiant : </label> </td>
                <td> <input type="text" id="identifiant" name="identifiant" autocomplete="on" required> </td>
            </tr>
            <tr>
                <td><label for="motdepasse">Mot de passe : </label> </td>
                <td><input type="password" id="motdepasse" name="motdepasse" autocomplete="off" required></td>
            </tr>
            <tr><td><input type="submit" value="Se connecter" id="bouton_connexion"></td></tr>
    </table>
        
    </form>
    <?php
if(isset($msg)){
	echo '<h2 style="color:#ED2F2F">'.$msg.'</h2>'; 
} ?>
</section>

<?php include './footer.php'; ?>

</body>
</html>

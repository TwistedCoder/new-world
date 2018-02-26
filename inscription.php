<?php require_once 'header.php'?>
<?php require_once 'inc/manager-db.php'; ?>
<div class="ui container main">
    <h1></h1>
    

    <div class="ui one column grid">
        <div class="column">
            <form action='' method="POST">
                <table>
                
                    
                <tr>   <td> <input type='text' name='pseudo'></td></tr>
                <tr>    <td><input type ='text' name='email'></td></tr>
                <tr>    <td><input type= 'password' name='pass'></td> </tr>
                <tr>   <td> <input type='submit' name='confirm'></td> </tr>
                
                </table>
            </form>            

        </div>
        <?php 
// Vérification de la validité des informations

// Hachage du mot de passe
if(isset($_POST['confirm'])){
$pass_hache = md5($_POST['pass']);
$pseudo =$_POST['pseudo'];
$email = $_POST['email'];
echo $pass_hache;
// Préparation du mail contenant le lien d'activation
$destinataire = $email;
$sujet = "Activer votre compte" ;
$entete = "From: inscription@votresite.com" ;
 
// Le lien d'activation est composé du login(log) et de la clé(cle)
$message = 'Bienvenue sur VotreSite,
 
Pour activer votre compte, veuillez cliquer sur le lien ci dessous
ou copier/coller dans votre navigateur internet.
 

 
 
---------------
Ceci est un mail automatique, Merci de ne pas y répondre.';
 
 
mail($destinataire, $sujet, $message, $entete) ; // Envoi du mail)
echo ("mail envoyé");
// Insertion
$req = $pdo->prepare('INSERT INTO utilisateur(login, mdp, email) VALUES(:pseudo, :pass, :email)');
$req-> bindvalue(':pseudo', $pseudo, PDO::PARAM_STR);
$req->bindvalue(':pass', $pass_hache, PDO::PARAM_STR);
$req->bindvalue(':email', $email, PDO::PARAM_STR);
$req->execute();
}
    ?>
    </div>
</div>
<?php
require_once 'javascripts.php';
require_once 'footer.php';
?>
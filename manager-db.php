<?php
require_once 'connect-db.php';

/** Obtenir la liste de tous les pays référencés d'un continent donné
    @param $continent le nom d'un continent
    @return tableau d'objets (des pays)
*/

function getCountriesByContinent($continent) {
   // pour utiliser la variable globale dans la fonction
   global $pdo;
   $query = 'SELECT * FROM Country WHERE Continent = :continent;';
   $prep = $pdo->prepare($query);
   $prep->bindValue(':continent', $continent, PDO::PARAM_STR);
   $prep->execute();
   // var_dump($prep);
   // var_dump($continent);
   return $prep->fetchAll();
}

/** Obtenir la liste des pays
    @return liste d'objets
*/

function getAllCountries() {
   global $pdo;
   $query = 'SELECT * FROM Country;';
   return $pdo->query($query)->fetchAll();
}



function Inscription(){
    
    // Hachage du mot de passe
    $pass_hache = password_hash($_POST['pass'], PASSWORD_DEFAULT);

    // Insertion
    $req = $bdd->prepare('INSERT INTO membres(pseudo, pass, email, date_inscription) VALUES(:pseudo, :pass, :email, CURDATE())');
    $req->execute(array(
        'pseudo' => $pseudo,
        'pass' => $pass_hache,
        'email' => $email));
}
function Connexion(){
    global $pdo;
    
}

function SearchLangue() {
   global $pdo;
   $query = 'SELECT * FROM Language ORDER BY Name';
   return $pdo->query($query)->fetchAll();
}
function SearchCity() {
    global $pdo;
    $query = 'SELECT * FROM City ORDER BY Name';
    return $pdo->query($query)->fetchAll();
 }
 function SearchState() {
    global $pdo;
    $query = 'SELECT * FROM Country ORDER BY Name DESC';
    return $pdo->query($query)->fetchAll();
 }
 function SearchLeader() {
    global $pdo;
    $query ='SELECT * FROM country ORDER BY country.HeadOfState ASC';
    return $pdo->query($query)->fetchAll();
 }
 function SearchSystem() {
    global $pdo;
    $query = 'SELECT * FROM Country ORDER BY GovernmentForm';
    return $pdo->query($query)->fetchAll();
 }
 function FinalSearch($POST){
     global $pdo;
     $i=0;
     $query ='SELECT * FROM Country WHERE';
     foreach($POST as $value -> $truc)
     {
         $i++;
         $query .= $query.key($POST);
         echo key($POST);
         $query .= $truc;
         if ($i != count($POST)-1)
         {
             $query .= 'AND';
         }
         echo $query; 
     }
     
     return $pdo->query($query)->fetchAll();
}
function erreur($err='')
{
   $mess=($err!='')? $err:'Une erreur inconnue s\'est produite';
   exit('<p>'.$mess.'</p>
   <p>Cliquez <a href="./index.php">ici</a> pour revenir à la page d\'accueil</p></div></body></html>');
}
function Sendmail()
{
    // Récupération des variables nécessaires au mail de confirmation	
$email = $_POST['email'];
$login = $_POST['login'];
 
// Génération aléatoire d'une clé
$cle = md5(microtime(TRUE)*100000);
 
 
// Insertion de la clé dans la base de données (à adapter en INSERT si besoin)
$stmt = $dbh->prepare("UPDATE utilisateur SET cle=:cle WHERE login like :login");
$stmt->bindParam(':cle', $cle);
$stmt->bindParam(':login', $login);
$stmt->execute();
 
 
// Préparation du mail contenant le lien d'activation
$destinataire = $email;
$sujet = "Activer votre compte" ;
$entete = "From: inscription@votresite.com" ;
}
?>

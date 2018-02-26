

<?php require_once 'header.php'?>
<?php require_once 'inc/manager-db.php'?>
<?php require_once 'inc/connect-db.php'; ?>
<div class="ui container main">
    <div class="ui one column grid">
    <div class="column">
        <form action='' method='POST' >
            <table>
                <tr> <input type='text' name='login'></tr>
                <tr> <input type='password' name='pass'> </tr>
                <tr> <input type='submit'name='submit' > </tr>
            </table>
        </form><?php
        if(isset($_POST['submit']))
        {
            global $pdo;
            // Hachage du mot de passe
            $pass_hache = md5($_POST['pass']);

            // Vérification des identifiants
            $req = $pdo->prepare('SELECT id FROM utilisateur WHERE login = :pseudo AND Mdp = :pass');
            $req-> bindvalue(':pseudo', $_POST['login'], PDO::PARAM_STR);
            $req->bindvalue(':pass', $pass_hache, PDO::PARAM_STR);
            $req->execute();

            $resultat = $req->fetch();
            //echo $req;
            if (!$resultat)
            {
                echo 'Mauvais identifiant ou mot de passe !';
                echo $pass_hache;
                echo '</br>';
                echo $_POST['pass'];
            }
            else
            {
                session_start();
                $_SESSION['id'] = $resultat->id;
                $_SESSION['pseudo'] = $_POST['login'];
                echo 'Vous êtes connecté !';
            }
        }
        ?>
        </div>
    </div>
</div>
<?require_once 'footer.php'?>
<?require_once 'javascript.php'?>
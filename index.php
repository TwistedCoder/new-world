<?php require_once 'header.php'; ?>

<div class="ui container main">
    <h1></h1>
    

    <div class="ui one column grid">
        <div class="column">
            <div class="ui raised segment">
                <a class="ui red ribbon label">Tableau d'objets</a>
                <p>Le code ci-dessus représente une vue "debug" du premier élément d'un tableau. Ce tableau est
                    constitué d'objets PHP "standard" (stdClass).</p>
                <p>Pour accéder à l'<b>attribut</b> d'un <b>objet</b> on utilisera le symbole <b>-></b></p>
                <p>Ainsi, pour accéder au nom du premier pays de la liste
                <code>$pays</code> on fera <b><code>$pays[0]->Name</code></b>
                </p>
                <p>La variable <b><code>$pays</code></b> référence un tableau (<i>array</i>).
                    Ainsi, pour générer le code HTML (table), devriez vous coder une boucle,
                    par exemple de type <b><code>foreach</code></b> sur l'ensembles des objets de ce tableau. </p>
                <p>Référez-vous à la structure des tables pour connaître le nom des <b><code>attributs</code></b>.
                    En effet, les objets du tableau ont pour attributs (nom et valeur)
                    le nom des colonnes de la table interrogée par un requête SQL, via l'appel à la
                    fonction <b><code>getCountriesByContinent</code></b> (du script <b><code>manager-db.php</code></b>.</p>
                <p>Par exemple <b><code>Name</code></b> est une des colonnes de la relation (table) <b><code>Country</code></b>)</p>
            </div>
        
        <?php
              $truc = count($_POST);
              $tric = count($_POST);
              echo $tric;
              echo $truc;
              if( $tric == 0 && $truc == 0)
              {
        ?>
                <table>
                    <tr><td><a id="asie" href="?action=Asia">Asie</a></td></tr>
                                                <?php
                                        require_once 'inc/manager-db.php';
                                        if(isset($_GET['action']) && $_GET['action']=='Asia'){
                                        $continent = $_GET['action'];
                                        $pays = getCountriesByContinent($continent);
                                        //var_dump($pays[0]);
                                    
                                        foreach($pays as $value){
                                            $img=strtolower($value->Code2);
                                            ?><tr></td>
                                            <td><?php echo $value->Name;            ?></td>
                                            <td><?php echo $value->Region;          ?></td>
                                            <td><?php echo $value->Population;      ?></td>
                                            <td><?php echo $value->LifeExpectancy; ?></td>
                                            <td><?php echo $value->HeadOfState;     ?></td>
                                            
                                            <td><img  width = 100px src ='images/drapeau/<?php echo$img;?>.png'></td>
                                        </tr>
                                        <?php }
                                    ?>
                                        <script type="text/javascript">
                                        document.getElementById('asie').href='?action=';
                                        </script>
                                        <?php } ?>

                    <tr><td><a id="africa" href="?action=Africa">Afrique</td></tr>
                    <?php
                                        require_once 'inc/manager-db.php';
                                        if(isset($_GET['action']) && $_GET['action']=='Africa'){
                                        $continent = $_GET['action'];
                                        $pays = getCountriesByContinent($continent);
                                        //var_dump($pays[0]);
                                    
                                        foreach($pays as $value){
                                            $img=strtolower($value->Code2);
                                            ?><tr></td>
                                            <td><?php echo $value->Name;            ?></td>
                                            <td><?php echo $value->Region;          ?></td>
                                            <td><?php echo $value->Population;      ?></td>
                                            <td><?php echo $value->LifeExpectancy; ?></td>
                                            <td><?php echo $value->HeadOfState;     ?></td>
                                            
                                            <td><img  width = 100px src ='images/drapeau/<?php echo$img;?>.png'></td>
                                        </tr>
                                        <?php }
                                    ?>
                                        <script type="text/javascript">
                                        document.getElementById('africa').href='?action=';
                                        </script>
                                        <?php } ?>
                    <tr><td><a id = "europe"  href = "?action=Europe"> Europe </td></tr>
                    <?php
                                        require_once 'inc/manager-db.php';
                                        if(isset($_GET['action']) && $_GET['action']=='Europe'){
                                        $continent = $_GET['action'];
                                        $pays = getCountriesByContinent($continent);
                                        //var_dump($pays[0]);
                                    
                                        foreach($pays as $value){
                                            $img=strtolower($value->Code2);
                                        ?><tr></td>
                                                <td><?php echo $value->Name;            ?></td>
                                                <td><?php echo $value->Region;          ?></td>
                                                <td><?php echo $value->Population;      ?></td>
                                                <td><?php echo $value->LifeExpectancy; ?></td>
                                                <td><?php echo $value->HeadOfState;     ?></td>
                                                
                                                <td><img  width = 100px src ='images/drapeau/<?php echo$img;?>.png'></td>
                                            </tr>
                                            <?php }
                                        ?>
                                        <script type="text/javascript">
                                        document.getElementById('europe').href='?action=';
                                        </script>
                                        <?php } ?>
                    <tr><td><a id ="AMN"href="?action=North America">Amerique du Nord</td></tr>
                    <?php
                                        require_once 'inc/manager-db.php';
                                        if(isset($_GET['action']) && $_GET['action']=='North America'){
                                        $continent = $_GET['action'];
                                        $pays = getCountriesByContinent($continent);
                                        //var_dump($pays[0]);
                                    
                                        foreach($pays as $value){
                                            $img=strtolower($value->Code2);
                                            ?><tr></td>
                                            <td><?php echo $value->Name;            ?></td>
                                            <td><?php echo $value->Region;          ?></td>
                                            <td><?php echo $value->Population;      ?></td>
                                            <td><?php echo $value->LifeExpectancy; ?></td>
                                            <td><?php echo $value->HeadOfState;     ?></td>
                                            
                                            <td><img  width = 100px src ='images/drapeau/<?php echo$img;?>.png'></td>
                                        </tr>
                                        <?php }
                                    ?>
                                        <script type="text/javascript">
                                        document.getElementById('AMN').href='?action=';
                                        </script>
                                        <?php } ?>
                    <tr><td><a id="AMS" href="?action=South America">Amérique du Sud</td></tr>
                    <?php
                                        require_once 'inc/manager-db.php';
                                        if(isset($_GET['action']) && $_GET['action']=='South America'){
                                        $continent = $_GET['action'];
                                        $pays = getCountriesByContinent($continent);
                                        //var_dump($pays[0]);
                                    
                                        foreach($pays as $value){
                                            $img=strtolower($value->Code2);
                                            ?><tr></td>
                                            <td><?php echo $value->Name;            ?></td>
                                            <td><?php echo $value->Region;          ?></td>
                                            <td><?php echo $value->Population;      ?></td>
                                            <td><?php echo $value->LifeExpectancy; ?></td>
                                            <td><?php echo $value->HeadOfState;     ?></td>
                                            
                                            <td><img  width = 100px src ='images/drapeau/<?php echo$img;?>.png'></td>
                                        </tr>
                                        <?php }
                                    ?>
                                    <script type="text/javascript">
                                        document.getElementById('AMS').href='?action=';
                                        </script>
                                        <?php } ?>
                    <tr><td><a id="ocea" href="?action=Oceania">Oceanie</td></tr>
                    <?php
                                        require_once 'inc/manager-db.php';
                                        if(isset($_GET['action']) && $_GET['action']=='Oceania'){
                                        $continent = $_GET['action'];
                                        $pays = getCountriesByContinent($continent);
                                        //var_dump($pays[0]);
                                    
                                        foreach($pays as $value){
                                            $img=strtolower($value->Code2);
                                            ?><tr></td>
                                            <td><?php echo $value->Name;            ?></td>
                                            <td><?php echo $value->Region;          ?></td>
                                            <td><?php echo $value->Population;      ?></td>
                                            <td><?php echo $value->LifeExpectancy; ?></td>
                                            <td><?php echo $value->HeadOfState;     ?></td>
                                            
                                            <td><img  width = 100px src ='images/drapeau/<?php echo$img ;?>.png'></td>
                                        </tr>
                                        <?php }
                                    ?>
                                        <script type="text/javascript">
                                        document.getElementById('ocea').href='?action=';
                                        </script>
                                        <?php } ?>
                    <tr><td><a id="antart" href="?action=Antarctica">Antartique</td></tr>
                    <?php
                                        require_once 'inc/manager-db.php';
                                        if(isset($_GET['action']) && $_GET['action']=='Antarctica'){
                                        $continent = $_GET['action'];
                                        $pays = getCountriesByContinent($continent);
                                        //var_dump($pays[0]);
                                    
                                        foreach($pays as $value){
                                            $img=strtolower($value->Code2);
                                            ?><tr></td>
                                            <td><?php echo $value->Name;            ?></td>
                                            <td><?php echo $value->Region;          ?></td>
                                            <td><?php echo $value->Population;      ?></td>
                                            <td><?php echo $value->LifeExpectancy; ?></td>
                                            <td><?php echo $value->HeadOfState;     ?></td>
                                            
                                            <td><img  width = 100px src ='images/drapeau/<?php echo$img ;?>.png'></td>
                                        </tr>
                                        <?php }
                                    ?>
                                        <script type="text/javascript">
                                        document.getElementById('antart').href='?action=';
                                        </script>
                                        <?php } ?>
                </table>
            <?php
            
              }
              else{
                require_once 'finalSearch.php';
              }
              ?>
      
    
      
        
        
        
        
        
        
      <!--  <form  action="" method="POST">
            <table class="TabCont">
               
                <tr>
					<td> Continent: </td>
					<td><input type="text" name="Continent"></td>
				</tr>
                <input type ="submit" name="check" value ="chercher">
               
            </table>
            </form> -->
           
        </div>
    </div>
</div>

<?php
require_once 'javascripts.php';
require_once 'footer.php';
?>
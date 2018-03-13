<script>
var activite_detectee = false;
var intervalle =100;
var temps_inactivite = 0;
var inactivite_persistante = true;
function testerActivite(){
    if(activite_detectee){
        activite_detectee = false;
        temps_inactivite = 0;
        inactivite_persistante = false;
    }
    else {
        if(inactivite_persistante){
            temps_inactivite += intervalle;
            if(temps_inactivite >=10000){
                document.location.href="/projet/world-intro-ui/index.php";
                
            }
             else
                inactivite_persistante = true;   
            }
        }
    setTimeout('testerActivite();', intervalle);
}
// on lance le script au chargement de la page
setTimeout('testerActivite();', intervalle);
</script>
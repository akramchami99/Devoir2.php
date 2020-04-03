<?php 

    $jour = $_POST["jour"];
    $mois = $_POST["mois"];
    $annee = $_POST["annee"];   
    echo "<h1> Validation de la date </h1>";
    echo "La date saisie est : ".$jour."/".$mois."/".$annee."<br>";
    if(checkdate($mois,$jour,$annee) == false){
        echo "La date saisie est : <font color = 'green' >Date valide</font>";  
    }else{
        if($mois == 2 and $jour < 22){
            echo 'L année '.$annee.'  est non pas bisextile : <font color = "red" >Date Invalide</font>';
        }else{
            echo "La date saisie est : <font color = 'red' >Date Invalide</font>";
        }    
    } 

?>
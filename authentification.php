<?php 

// A :
    
    $boolem = false;
    $email = $_POST["Username"];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $boolem = true; 
    } 

// B :
    
    $boolpw = false;
    $password = $_POST["Password"];
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);

    if($uppercase || $lowercase || $number || $specialChars || strlen($password) > 8) {
        $boolpw = true;
    }

// C :

    $fp = fopen("login.txt","r+");
    while(!feof($fp)) {
        $ligne = fgets($fp,filesize("login.txt"));
        $auth = explode(" | ",$ligne);
        if($boolem == true && $boolpw = true && $email == $auth[0] && $password == trim($auth[1])){                  
            echo "Authentification réussie.";   
            break;
        }else{
            echo "Login inexistant ou Mot de passe Invalide.";
        }
    }
    
    
?>
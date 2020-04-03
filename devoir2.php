<?php
// =======================Exercice n1 :=================================
echo "<br>Exercice 1 : <br><br>";
function string_split ($string,$delimiter){
    $str_arr = explode ($delimiter, $string);  
    return $str_arr;
}
$splits = string_split("1|5|6","|");
print_r($splits); ;

//===================Exercice n2:=======================================
echo "<br><br> Exercice 2 : <br><br>";



$tableau = array(
    0 => array(
        "NumCom" => "201211009-000001",
        "NumCli" => "CLI1001" ,
        "DateCom" => "11-12-2019",
        "DésiArt" => "sucre morceaux" ,
        "Quant" => "3",
        "Pu" => "25" ,
        "DateLiv" => "01-01-2020" ,
        "AdrClient" => "3989  Smithfield Avenue" 
    ),
    1 => array(
        "NumCom" => "201211009-000001",
        "NumCli" => "CLI1001" ,
        "DateCom" => "11-12-2019",
        "DésiArt" => "farine" ,
        "Quant" => "3",
        "Pu" => "25" ,
        "DateLiv" => "01-01-2020" ,
        "AdrClient" => "3989  Smithfield Avenue" 
    ),
    2 => array(
        "NumCom" => "201211009-000002",
        "NumCli" => "CLI1004" ,
        "DateCom" => "11-12-2019",
        "DésiArt" => "huile" ,
        "Quant" => "3",
        "Pu" => "25" ,
        "DateLiv" => "01-01-2020" ,
        "AdrClient" => "3989  Smithfield Avenue" 
    ),
    3 => array(
        "NumCom" => "201211009-000002",
        "NumCli" => "CLI1004" ,
        "DateCom" => "11-12-2019",
        "DésiArt" => "café" ,
        "Quant" => "3",
        "Pu" => "25" ,
        "DateLiv" => "01-01-2020" ,
        "AdrClient" => "3989  Smithfield Avenue" 
    ),
    4 => array(
        "NumCom" => "201211009-000003",
        "NumCli" => "CLI1001" ,
        "DateCom" => "11-12-2019",
        "DésiArt" => "sel" ,
        "Quant" => "3",
        "Pu" => "25" ,
        "DateLiv" => "01-01-2020" ,
        "AdrClient" => "3989  Smithfield Avenue" 
    ),
    5 => array(
        "NumCom" => "201211009-000003",
        "NumCli" => "CLI1001" ,
        "DateCom" => "11-12-2019",
        "DésiArt" => "Cumène " ,
        "Quant" => "3",
        "Pu" => "25" ,
        "DateLiv" => "01-01-2020" ,
        "AdrClient" => "3989  Smithfield Avenue" 
    ),
    6 => array(
        "NumCom" => "201211009-000004",
        "NumCli" => "CLI1004" ,
        "DateCom" => "11-12-2019",
        "DésiArt" => "Coca cola" ,
        "Quant" => "3",
        "Pu" => "25" ,
        "DateLiv" => "01-01-2020" ,
        "AdrClient" => "3989  Smithfield Avenue" 
    ),
    7 => array(
        "NumCom" => "201211009-000004",
        "NumCli" => "CLI1004" ,
        "DateCom" => "11-12-2019",
        "DésiArt" => "pomes" ,
        "Quant" => "3",
        "Pu" => "25" ,
        "DateLiv" => "01-01-2020" ,
        "AdrClient" => "3989  Smithfield Avenue" 
    )

   
);

$fp = fopen('pscde01_CLI1001.txt', 'w');
$file = fopen('psccl01_CLI1004.txt', 'w');

foreach ( $tableau as $tab ) {

    $txt = implode(" || ", $tab);
    $txt .= "\n";

    $element=$tab["NumCli"];
  


    $str1 = strval ($element);
    $str2 = "CLI1001";
    $comparer=strcmp($str1, $str2); 
    if ($comparer == $str2) {
        fwrite($fp,$txt);
    } else {
        fwrite($file,$txt);
    }
    

   
}







fclose($fp);
fclose($file);



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>devoir</title>
</head>
<body>

<table style = "border-style: solid ;">
<thead style="background: grey; color : black;">
<tr>
<th>Numéro de commande</th>
<th>Numéro client</th>
<th>Date de commande </th>
<th>Désignation article</th>
<th>Quantité (PAL)</th>
<th>prix unitaire  (HT)</th>
<th>Date de livraison</th>
<th>Adresse client</th>
</tr>
</thead>

<tbody>

<?php
$arrayLength = count($tableau);
$i=0;

foreach ( $tableau as $var ) {

    echo '<tr>';
    echo  "<td>",$var['NumCom'],"</td>";
    echo  "<td>",$var['NumCli'],"</td>";
    echo  "<td>",$var['DateCom'],"</td>";
    echo  "<td>",$var['DésiArt'],"</td>";
    echo  "<td>",$var['Quant'],"</td>";
    echo  "<td>",$var['Pu'],"</td>";
    echo  "<td>",$var['DateLiv'],"</td>";
    echo  "<td>",$var['AdrClient'],"</td>";
    echo '</tr>';
    
}




/*
  'NumCom' => '201211009-000001',
        'NumCli' => 'CLI1001' ,
        'DateCom' => '11-12-2019',
        'DésiArt' => 'sucre morceaux' ,
        'Quant' => '3',
        'Pu' => '25' ,
        'DateLiv' => '01-01-2020' ,
        'AdrClient' => '3989  Smithfield Avenue' 


*/


?>

</tbody>

</table>

    
</body>
</html>
<?php
//====================Exercice n3:=======================================
echo "<br><br> Exercice 3 : <br>";

function day(){ $i = 0 ; $str ="" ; while($i < 31){$i++; $str = $str .'<option value="'.$i.'">'.$i.'</option> ' ;  } return $str; }
function month(){ $i = 0 ; $str ="" ; while($i < 12){$i++; $str = $str .'<option value="'.$i.'">'.$i.'</option> ' ;  } return $str; }
function year(){ $i = 1900 ; $str ="" ; while($i < 2020){$i++; $str = $str .'<option value="'.$i.'">'.$i.'</option> ' ;  } return $str; }

$html_text = '<h1>Choisir une Date</h1>
              <form action="/valideDate.php" method = "post">
                <p style = " word-spacing: 10px; " >Jour      Mois       Année</p>
                <select name="jour">
 				    '.day().'
                </select>
                <select name="mois">
 				    '.month().'
                </select>
                <select name="annee">
 				    '.year().'
                </select>
                <br><br> <input type="submit" value="Envoyer"> 
              </form>';
echo $html_text;           

//====================Exercice n4:=======================================
echo "<br><br> Exercice 4 : <br>";
$html_code = '
<h2>Login</h2>
<form action="/authentification.php" method ="post">
  <label for="fname">Username:</label><br>
  <input type="text" id="Username" name="Username" value=""><br>
  <label for="lname">Password:</label><br>
  <input type="password" id="Password" name="Password" value=""><br><br>
  <input type="submit" value="Login">
</form> ';

echo $html_code;

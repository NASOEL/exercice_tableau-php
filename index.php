<?php
// creation du premier tableau
$arr=array(
        "coucou72",
        "vie_oiseau",
        "test_value50",
        "bonjour",
        "arbitraire"
);
// creation du deuxieme tableau
$arr1 = [
    "coucou72" => 10,
    "vie_oiseau" => 15,
    "test_value50" => 25,
    "bonjour" => 20,
    "arbitraire" => 5,
];
// creation du troisieme tableau
$arr2 = [
    "coucou72" => 10,
    "vie_oiseau" => 15,
    "test_value50" => [
        "in_tab" => "in tab",
        "in_tab1" => "dans tableau 1",
    ],
    "bonjour" => 20,
    "arbitraire" => 5,
];
    $rtl = '<br>'; // ou “\n” pour l'exécution en ligne de commande
    echo '=> Exercice avec premier tableau $arr'.$rtl.$rtl;

    echo '-> Avec for '.$rtl;
    // parcours du tableau avec la boucle for
    for($i=0;$i<count($arr);$i++){
        echo "la valeur de $i est $arr[$i]".$rtl;
    }
    // parcours du tableau avec la boucle while
    
    echo '-> Avec while '.$rtl;
    $i=0;
    while($i<count($arr))
    {
        echo "la valeur de $i est $arr[$i]".$rtl;
        $i++;
    }
    // parcours du tableau avec la boucle foreach
    echo '-> Avec foreach '.$rtl;

    foreach($arr as $position => $valeur){
       echo "la valeur de $position est $valeur".$rtl;
    }


 // parcours du deuxième et troisième tableau avec foreach
 echo $rtl.'------------Exercice avec le deuxième et le troisème tableau '.$rtl.$rtl;

 // réponse ici
 echo '->-> Avec le tableau $arr1'.$rtl;
 foreach($arr1 as $position => $valeur){
    echo "la valeur de $position est $valeur".$rtl;
 }

 // réponse ici
 echo '->-> Avec le tableau $arr2'.$rtl;
 foreach($arr2 as $position => $valeur)
 {
 if($position != "test_value50")
 {
    echo "la valeur de $position est $valeur".$rtl;
 }else{
     foreach($valeur as $position_tab2 => $position_tab2)
    {
        echo "la valeur de $position_tab2 est $position_tab2".$rtl;
    }
 }
}
 
?>
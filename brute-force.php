<?php
$chars=["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z",0,1,2,3,4,5,6,7,8,9];
$mdp3="";
$mdp4="";
$mdp5="";

for ($i=0; $i< count($chars); $i++){
    for ($j=0; $j< count($chars); $j++){
        for ($k=0; $k< count($chars); $k++){
            $mdp3= $chars[$i].$chars[$j].$chars[$k];
            if ($mdp3 == "hb1"){
                echo "correct password";
            }
            for ($l=0; $l< count($chars); $l++){
                $mdp4= $chars[$i].$chars[$j].$chars[$k].$chars[$l];
                for ($m=0; $m< count($chars); $m++){
                    $mdp5= $chars[$i].$chars[$j].$chars[$k].$chars[$l].$chars[$m];
                }
            }
            
        }
    }

}

?>
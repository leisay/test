<?php
function Tower($x)
{
    if($x == 0){
        return 0;
    }
    elseif($x==1) {
        return 1 ;
    }
    elseif ($x ==2) {
        return 2;
    }
    else  {
        return Tower($x-1)+Tower($x-2);
    }

}

echo Tower(5)."</br>"; 

function F($x){
    $a = 0;
    $b = 1;
    $sum = 0;
for($i = 0 ; $i < $x ; $i++){
    echo $b."</br>";
    $sum = $a + $b ;
    $a = $b;
    $b = $sum;
    
}
    return $sum;
}

echo F(5)."</br>";

define("first", "one");
define("second", "two");
define("third", "three");
define("fourth", "four");

$num = array ("first","second","third","fourth");

for($i = 0 ; $i<4 ; $i++)
{
   echo $num[$i]."</br>";
}





function Zero($x , $y , $z){
    
    $sum = $x * $y *$z ;   
    return $sum; 
}
echo Zero(5,4,3)."</br>";

function Bque($a , $b , $c){
    $oneS = $b*$b -4*$a*$c ;
    $twos = (-$c)/$b;
    $thrs = ((-$b)/(2*$a));
    
    if($a==0){
        if($b==0){
            if($c==0)
                echo'X sloution';
            else
                echo 'no sloution';
        }else 
        echo $twos ;
    }else if($oneS>0){
        
        echo (-$b)+sqrt(($oneS)/2*$a);
        echo (-$b)-sqrt(($oneS)/2*$a);
    }else if($oneS == 0)
    echo $twos;
    else
        echo 'NO sloution';
    
}

    
    echo Bque(3,6,3);

?>

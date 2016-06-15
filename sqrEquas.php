<?php

function sqrEqv($a, $b, $c){
    $discr = $b*$b - 4*$a*$c;
    if($discr>0){
        $x1 = (-$b+sqrt($discr))/(2*$a);
        $x2 = (-$b-sqrt($discr))/(2*$a);
        return 'Equasion has two roots: x<sub>1</sub> = '.$x1.', x<sub>2</sub> = '.$x2.'.';
    }
    elseif ($discr==0) {
        $x = -$b/(2*$a);
        return 'Equasion has one root: x = '.$x.'.';
    }
    else{
        return 'Equasion has no rational roots!';
    }
}

$a = 2;
$b = -4;
$c = 0;

echo 'Solution for square equasion with arguments: a = '.$a.', b = '.$b.', c = '.$c.'. <br>'.sqrEqv($a, $b, $c);

?>

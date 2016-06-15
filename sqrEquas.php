<?php

function sqrEqv($a, $b, $c){
    $discr = $b*$b - 4*$a*$c;
    if($discr>0){
        $x1 = (-$b+sqrt($discr))/(2*$a);
        $x2 = (-$b-sqrt($discr))/(2*$a);
        return 'Equasion has two roots: x1 = '.$x1.' x2 = '.$x2;
    }
    elseif ($discr==0) {
        $x = -$b/(2*$a);
        return 'Equasion has one root: x = '.$x;
    }
    else{
        return 'Equasion has no rational roots';
    }
}

echo sqrEqv(3, 1, 4);

?>

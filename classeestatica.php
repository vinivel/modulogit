<?php
class areacirc {
    public static function area($r) {
        return pi()*$r**2;
    }
}

$pneu=new areacirc();


echo("A área do pneu é de ".round($pneu->area(30),2)."mm<sup>2</sup>.");
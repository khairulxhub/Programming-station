<?php
function hello(){
    static $a = 0;
    $a++;
    echo $a;
    
}

hello();
hello();
hello();
?>
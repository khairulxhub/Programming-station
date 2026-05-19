<?php
$name = "Raju-Vhai";
echo <<<HTML
   {$name} is a good boy.

   <p>A popular general-purpose scripting language that is especially suited to web development.
   Fast, flexible and pragmatic, PHP powers everything from your blog to the most popular websites in the world.</p>
   New line added.

HTML;
 echo "<br>";
echo <<<'NOWDOC'
   Raju is a good boy.
    <p>A popular general-purpose scripting language that is especially suited to web development.
    Fast, flexible and pragmatic, PHP powers everything from your blog to the most popular websites in the world.</p>
    New line added.

NOWDOC;


?>



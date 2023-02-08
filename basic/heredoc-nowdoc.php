<?php

$he = 'Bob';
$she = 'Alice';

$text = "$he said, \"PHP is awesome\"";

echo  $text. "<br>";


$str = <<<neel_heredoc
place a string here
it can s"pa'n multiple lines
and include single' quote ' and" double quotes "
neel_heredoc;

echo $str . "<br>";

$str = <<<'neel_nowdoc'
place a string here
it can s"pa'n multiple lines
and include single' quote ' and" double quotes "
neel_nowdoc;

echo $str;


?>
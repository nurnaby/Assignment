<?php
$text = "The quick brown fox jumps over the lazy dog.";

$lowecaseText = strtolower($text);
echo $lowecaseText;
echo PHP_EOL;


$replaceText = str_replace('brown','red',$text);
echo $replaceText;

?>
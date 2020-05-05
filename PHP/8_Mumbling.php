<?php
/*
This time no story, no theory.
The examples below show you how to write function accum:
Examples:
accum("abcd") -> "A-Bb-Ccc-Dddd"
accum("RqaEzty") -> "R-Qq-Aaa-Eeee-Zzzzz-Tttttt-Yyyyyyy"
accum("cwAt") -> "C-Ww-Aaa-Tttt
*/
$s = 'abcd';
function ad($s){
foreach(str_split($s) as $index => $letter){
	$accum[] = strtoupper($letter) . str_repeat(strtolower($letter), $index);
}
echo implode('-', $accum);
}


 ?>

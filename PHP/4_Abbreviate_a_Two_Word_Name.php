<?php
/*
Write a function to convert a name into initials.
This kata strictly takes two words with one space in between them.
The output should be two capital letters with a dot separating them.
It should look like this:
Sam Harris => S.H
*/


function abbrevName($name)
{
$strX = explode(" ",$name);
return strtoupper($strX[0][0]).'.'.strtoupper($strX[1][0]);
}


 ?>

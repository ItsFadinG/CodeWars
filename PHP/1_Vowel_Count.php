Return the number (count) of vowels in the given string.
We will consider a, e, i, o, and u as vowels for this Kata.
The input string will only consist of lower case letters and/or spaces.
//(substr_count, preg_match_all,     )
                 //.......My sloution.........//
<?php
$str = "adelasdasdasfvcxz";
function getCount($str){
  $vowelsCount = 0;

  // enter your magic here
$a = substr_count($str,"a");
$e = substr_count($str,"e");
$i = substr_count($str,"i");
$o = substr_count($str,"o");
$u = substr_count($str,"u");
  $vowelsCount = $a + $e + $i + $o + $u;
  return $vowelsCount;
}
?>
                    //........other...........//

function getCount($str) {;
  return preg_match_all('/[aeiou]/i',$str,$matches);
}
                    ......................
function getCount($str) {
  $vowelsCount = 0;
  $vowels = ['a', 'e', 'i', 'o', 'u'];
  // enter your magic here
  foreach($vowels as $vowel) {
    $vowelsCount += substr_count($str, $vowel);
  }
  

  return $vowelsCount;
}

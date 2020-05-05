<?php
/*
In DNA strings, symbols "A" and "T" are complements of each other, as "C" and "G".
You have function with one side of the DNA (string, except for Haskell); you need to get the other complementary side.
DNA strand is never empty or there is no DNA at all (again, except for Haskell).
More similar exercise are found here http://rosalind.info/problems/list-view/ (source)
DNA_strand("ATTGC") // returns "TAACG"
DNA_strand("GTAT") // returns "CATA"
//use switch
*/
function DNA_strand($dna) {
  $array = str_split($dna);
  $comp = "";

  foreach($array as $letters){
    switch ($letters) {
    case "A":
        $letter = "T";
        break;
    case "T":
         $letter = "A";
        break;
    case "C":
         $letter = "G";
        break;
    case "G":
         $letter = "C";
        break;
    }
    $comp = $comp."".$letter; // I don't understand this point
  }
  echo $comp;
}
 DNA_strand('AAA');

                      //.....AWESOME.....//

    function DNA_strand($dna) {
      return strtr($dna, 'ACGT', 'TGCA');
        }










/*
$dna = "ATCG";
function DNA_strand($dna) {
    str_split($dna);
  switch ($dna[0]) {
    case $dna[0] = "A":
        $dna[0] = "T";
        echo $dna[0];
        break;
    case $dna[0] = "T":
        $dna[0] = "A";
           echo $dna[0];
        break;
    case $dna[0] = "G":
        $dna[0] = "C";
           echo $dna[0];
        break;
    case $dna[0] = "C":
        $dna[0] = "G";
           echo $dna[0];
        break;
        }

    switch($dna[1]){
    case $dna[1] = "A":
        $dna[1] = "T";
        echo $dna[1];
        break;
    case $dna[1] = "T":
        $dna[1] = "A";
        echo $dna[1];
        break;
    case $dna[1] = "G":
        $dna[1] = "C";
        echo $dna[1];
        break;
    case $dna[1] = "C":
        $dna[1] = "G";
      	echo $dna[1];
        break;
      }

      switch($dna[2]){
    case $dna[2] = "A":
        $dna[2] = "T";
        echo $dna[2];
        break;
    case $dna[2] = "A":
        $dna[2] = "T";
        echo $dna[2];
        break;
    case $dna[2] = "T":
        $dna[2] = "A";
        echo $dna[2];
        break;
    case $dna[2] = "G":
        $dna[2] = "C";
        echo $dna[2];
        break;
    case $dna[2] = "C":
        $dna[2] = "G";
        echo $dna[2];
        break;
    }

    switch($dna[3]){
    case $dna[3] = "A":
        $dna[3] = "T";
        echo $dna[3];
        break;
    case $dna[3] = "T":
        $dna[3] = "A";
          echo $dna[3];
        break;
    case $dna[3] = "G":
        $dna[3] = "C";
         echo $dna[3];
        break;
    case $dna[3] = "C":
        $dna[3] = "G";
          echo $dna[3];
        break;
        }
}
*/

?>

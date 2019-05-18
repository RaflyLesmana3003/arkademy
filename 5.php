<?php 
$data = array("a","b","c","d") ;
 minmax($data); 
function minmax($n) 
{ 
    $stringParts = str_split(implode( $n ));
    sort($stringParts);
    $jumlah = count($n)-1;
    $minmax = array();
    

    if (array_search($stringParts[$jumlah],$n) < array_search($stringParts[0],$n)) {
        array_push($minmax,$n[array_search($stringParts[0],$n)]);
        array_push($minmax,$n[array_search($stringParts[$jumlah],$n)]);
    }else{
        array_push($minmax,$n[array_search($stringParts[0],$n)]);
        array_push($minmax,$n[array_search($stringParts[$jumlah],$n)]);
    }
    echo json_encode($minmax);
} 
  
   
  
?> 
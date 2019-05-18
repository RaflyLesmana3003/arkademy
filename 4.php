<?php 
 $n =7; 
 cetak_gambar($n); 
function cetak_gambar($n) 
{ 
   for ($i = 0; $i < $n; $i++) { 
   for ( $j = 0; $j < $n; $j++) { 
       if ($i == $j || $i == $n - 1 - $j)              
           echo"+ "   ;  
       else 
       echo"= "   ;  
         
   } 

   echo"<br> "   ;  
} 
} 
  
   
  
?> 
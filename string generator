<?php
function api($ss){
          $l=$ss;
          $api="";
          $r= "qwertyuioplkjhgfdsazxcvbnm1234567890";
            srand((double)microtime()*1000000);
            for($i=0; $i<$l; $i++) {
              $api.= $r[rand()%strlen($r)];
            }
            return $api;
      }
echo api($_GET['cmd']);  
#localhost/string_generator.php?cmd=3 = pJe 

?>

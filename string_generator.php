<?php
function api($need){
  $api="";
  $r1= "qwertyuioplkjhgfdsazxcvbnm";
  $r= "qwertyuioplkjhgfdsazxcvbnm1234567890._-";
  srand((double)microtime()*1000000);
  for($i=0; $i<$need; $i++) {
            #add more as u wish
    $api= $r1[rand()%strlen($r1)].$r[rand()%strlen($r)].$r[rand()%strlen($r)];
    echo "$api<br>";
  }
}
api($_GET['cmd'])

#localhost/string_generator.php?cmd=100 = pJe

?>

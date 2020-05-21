<?php
// METHOD 1
function ip1($need){
  for($x=1;$x<$need;$x++){
    $ip = "".mt_rand(0,255).".".mt_rand(0,255).".".mt_rand(0,255).".".mt_rand(0,255);
    echo "$ip<br>";
  }
}
ip1($_GET['cmd'])


/**
localhost/generator_ip_address.php?cmd=10
number 10 mean print 10 random ips: 
For Example : 
128.234.41.166
221.216.221.3
74.6.12.10
82.77.226.154
96.22.86.91
239.164.163.207
69.224.27.165
25.45.76.121
151.17.65.222
**/
?>

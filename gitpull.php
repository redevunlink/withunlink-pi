<?php

// Use in the “Post-Receive URLs” section of your GitHub repo.

if ( $_POST['payload'] ) {
shell_exec('cd /home/pi/withunlink-pi && sudo git reset –hard HEAD && sudo git pull');
}

?>
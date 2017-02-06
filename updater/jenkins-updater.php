<?php
$contents = file_get_contents('updater.sh');
echo shell_exec($contents);
?>
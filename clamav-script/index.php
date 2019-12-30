<?php
shell_exec('sh /home/testcom/run-clamav.sh /home/testcom/public_html/php-clamav-scan/test.php /home/testcom/public_html/logs/php_exec.log');
$log = file_get_contents('logs/php_exec.log');
echo '<pre>';
var_dump($log);
echo '<br>Run OK.';
die();
?>

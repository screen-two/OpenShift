<?php 
/**
* db_test.php
* Use this script to test your database installation 
* 
* Latest copy of this code: http://140dev.com/free-twitter-api-source-code-library/
* @author Adam Green <140dev@gmail.com>
* @license GNU Public License
* @version BETA 0.20
*/

ini_set('log_errors', 1);  
ini_set('error_log', dirname(__FILE__) . '/error_log.txt');  
error_reporting(E_ALL);


require_once('140dev_config.php');
require_once('db_lib.php');

print '<strong>Twitter Database Tables</strong><br />';
$oDB = new db();
$result = $oDB->select('SHOW TABLES');
while ($row = mysqli_fetch_row($result)) {
  print $row[0] . '<br />';
}

echo $OPENSHIFT_DATA_DIR;
?>
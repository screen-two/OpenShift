<?php
/**
* db_config.php
* MySQL connection parameters for 140dev Twitter database server
* Fill in these values for your database
* Latest copy of this code: http://140dev.com/free-twitter-api-source-code-library/
* @author Adam Green <140dev@gmail.com>
* @license GNU Public License
* @version BETA 0.20
*/

$db_host = $_ENV['OPENSHIFT_MYSQL_DB_HOST'];
$db_user = $_ENV['OPENSHIFT_MYSQL_DB_USERNAME'];
$db_password = $_ENV['OPENSHIFT_MYSQL_DB_PASSWORD'];
$db_name = $_ENV['OPENSHIFT_APP_NAME'];
$db_port = $_ENV['OPENSHIFT_MYSQL_DB_PORT'];

?> 

<!-- Found the above references at https://www.openshift.com/forums/openshift/error-connecting-to-mysql-through-php-53 -->
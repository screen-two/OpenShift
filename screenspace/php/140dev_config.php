<?php
/**
* 140dev_config.php
* Constants for the entire 140dev Twitter framework
* You MUST modify these to match your server setup when installing the framework
* 
* Latest copy of this code: http://140dev.com/free-twitter-api-source-code-library/
* @author Adam Green <140dev@gmail.com>
* @license GNU Public License
* @version BETA 0.20
*/

// Directory for db_config.php

define('DB_CONFIG_DIR', '/var/lib/openshift/528bcc1d5973ca080400047c/app-root/runtime/repo/php/');

// Server path for scripts within the framework to reference each other
define('CODE_DIR', '/var/lib/openshift/528bcc1d5973ca080400047c/app-root/runtime/repo/php/');

// External URL for Javascript code in browsers to call the framework with Ajax
define('AJAX_URL', 'http://screenspace-screenspace.rhcloud.com');

// OAuth settings for connecting to the Twitter streaming API
// Fill in the values for a valid Twitter app
define('TWITTER_CONSUMER_KEY','orPxnRuTilC0W9e8NPt4AA');
define('TWITTER_CONSUMER_SECRET','NCfX7K4JdMPJtQ5PypfAt281Fm3mboIYTtO1PQBVdI');
define('OAUTH_TOKEN','1615587769-OMh8nVTgIRDweHq7M2Cwkkm6Rik0yFmni9x0sSk');
define('OAUTH_SECRET','o8a26KW7kGTocJF71loU3UE4Hh5yegPaceN9X0ngtI');

// MySQL time zone setting to normalize dates
define('TIME_ZONE','Europe/Dublin');

// Settings for monitor_tweets.php
define('TWEET_ERROR_INTERVAL',10);
// Fill in the email address for error messages
define('TWEET_ERROR_ADDRESS','hello@mixedmedia.ie');
?>
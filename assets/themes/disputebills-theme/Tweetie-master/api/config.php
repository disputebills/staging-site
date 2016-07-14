<?php
    /**
     * Your Twitter App Info
     * https://apps.twitter.com/
     */
    
    // Consumer Key
    define('CONSUMER_KEY', 'DasWLGPmVjAFoVCZXFy7vVx7o');
    define('CONSUMER_SECRET', 'et84dF9T2MnuQLjFl6lsu32zJRE79Dl8at6wsOxhNmw7XLN2yS');

    // User Access Token
    define('ACCESS_TOKEN', '3248838772-gzLz7XiwENs7iy9bzRRH3DSFlucihgrkYn5pW1c');
    define('ACCESS_SECRET', '4X0kbuxsEa3Cutrm0Q1Cm0XxxM3pnXLrfrfByBcx300JY');
	
	// Cache Settings
	define('CACHE_ENABLED', true);
	define('CACHE_LIFETIME', 3600); // in seconds
	define('HASH_SALT', md5(dirname(__FILE__)));
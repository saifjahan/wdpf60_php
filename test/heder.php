<?php

//  if (! isset($_SERVER['PHP_AUTH_USER']) || ! isset($_SERVER['PHP_AUTH_PW'])) {
//  header('WWW-Authenticate: Basic Realm="Authentication"');
//  header("HTTP/1.1 401 Unauthorized");
 
// } else {
//     echo "Your supplied username: {$_SERVER['PHP_AUTH_USER']}<br />";
//     echo "Your password: {$_SERVER['PHP_AUTH_PW']}<br />";
//     }
?>
<?php
$secret = 'e5e9fa1ba31ecd1ae84f75caaa474f3a663f05f4';

$secret = sha1('abc');
if (($_SERVER['PHP_AUTH_USER'] != 'client') ||
 (hash('sha1', $_SERVER['PHP_AUTH_PW']) != $secret)) {
 header('WWW-Authenticate: Basic Realm="Secret Stash"');
 header('HTTP/1.0 401 Unauthorized');
 print('You must provide the proper credentials!');
 exit;
}




?>
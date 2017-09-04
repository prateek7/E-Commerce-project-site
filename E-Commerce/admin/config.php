<?php
// BACKEND CONFIG

// HTTP
define('HTTP_SERVER', 'http://www.sahrawa.myweb.cs.uwindsor.ca/admin/');
define('HTTP_CATALOG', 'http://www.sahrawa.myweb.cs.uwindsor.ca/');
define('HTTP_IMAGE', 'http://www.sahrawa.myweb.cs.uwindsor.ca/image/');
define('HTTP_ADMIN', 'http://www.sahrawa.myweb.cs.uwindsor.ca/admin/');

// HTTPS
define('HTTPS_SERVER', HTTP_SERVER);
define('HTTPS_CATALOG', HTTP_CATALOG);
define('HTTPS_IMAGE', HTTP_IMAGE);
define('HTTPS_ADMIN', HTTP_ADMIN);

// DIR
define('DIR_CATALOG', '/home/sahrawa/domains/sahrawa.myweb.cs.uwindsor.ca/public_html/catalog/');
define('DIR_APPLICATION', '/home/sahrawa/domains/sahrawa.myweb.cs.uwindsor.ca/public_html/admin/');
define('DIR_SYSTEM', '/home/sahrawa/domains/sahrawa.myweb.cs.uwindsor.ca/public_html/system/');
define('DIR_DATABASE', DIR_SYSTEM.'database/');
define('DIR_LANGUAGE', DIR_APPLICATION.'language/');
define('DIR_TEMPLATE', DIR_APPLICATION.'view/template/');
define('DIR_CONFIG', DIR_SYSTEM.'config/');
define('DIR_IMAGE', '/home/sahrawa/domains/sahrawa.myweb.cs.uwindsor.ca/public_html/image/');
define('DIR_CACHE', DIR_SYSTEM.'cache/');
define('DIR_DOWNLOAD', DIR_SYSTEM.'download/');
define('DIR_UPLOAD', DIR_SYSTEM.'upload/');
define('DIR_LOGS', DIR_SYSTEM.'logs/');
define('DIR_MODIFICATION', DIR_SYSTEM.'modification/');

// DB
define('DB_DRIVER', 'mysql');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'sahrawa_oc1');
define('DB_PASSWORD', 'N&q(1No4oc32*&0');
define('DB_DATABASE', 'sahrawa_oc1');
define('DB_PREFIX', 'oc_');
?>
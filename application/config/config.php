<?php

define('BASE_URL', 'http://192.168.1.24/raza_letters/');
define('PUBLIC_URL', BASE_URL . 'public/');
define('XML_SRC_URL', BASE_URL . 'md-src/xml/');
define('PHOTO_URL', PUBLIC_URL . 'Letters/');
define('DOWNLOAD_URL', PUBLIC_URL . 'Downloads/');
define('FLAT_URL', BASE_URL . 'application/views/flat/');
define('STOCK_IMAGE_URL', PUBLIC_URL . 'images/stock/');
define('RESOURCES_URL', PUBLIC_URL . 'Resources/');

// Physical location of resources
define('PHY_BASE_URL', '/var/www/raza_letters/');
define('PHY_PUBLIC_URL', PHY_BASE_URL . 'public/');
define('PHY_XML_SRC_URL', PHY_BASE_URL . 'md-src/xml/');
define('PHY_PHOTO_URL', PHY_PUBLIC_URL . 'Letters/');
define('PHY_TXT_URL', PHY_PUBLIC_URL . 'Text/');
define('PHY_DOWNLOAD_URL', PHY_PUBLIC_URL . 'Downloads/');
define('PHY_FLAT_URL', PHY_BASE_URL . 'application/views/flat/');
define('PHY_STOCK_IMAGE_URL', PHY_PUBLIC_URL . 'images/stock/');
define('PHY_RESOURCES_URL', PHY_PUBLIC_URL . 'Resources/');

define('DB_PREFIX', 'raza');
define('DB_HOST', 'localhost');

// photo will become iitmPHOTO inside
define('DB_NAME', 'letters');

define('razaLETTERS_USER', 'root');
define('razaLETTERS_PASSWORD', 'mysql');

?>

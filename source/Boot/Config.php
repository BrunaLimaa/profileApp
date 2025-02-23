<?php
// Definição de todas as constantes do sistema
// Esse script consta no composer.json para ser incluido automaticamente



define("CONF_DB_HOST", "localhost");
define("CONF_DB_USER", "root");
define("CONF_DB_PASS", "");
define("CONF_DB_NAME", "bd-profileApp"); 


define("CONF_SITE_NAME", "PROFILE APP");


define("CONF_URL_BASE", "http://www.localhost/profileApp"); 
define("CONF_URL_TEST", "http://www.localhost/profileApp"); 

// VIEW

define("CONF_VIEW_WEB", __DIR__ . "/../../themes/web");
define("CONF_VIEW_APP", __DIR__ . "/../../themes/app");
define("CONF_VIEW_ADMIN", __DIR__ . "/../../themes/adm");


define ("CONF_UPLOAD_DIR","storage");
define("CONF_UPLOAD_IMAGE_DIR","images");
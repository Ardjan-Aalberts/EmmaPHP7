<?php

/****************************************************
 *            Application Configuration             *
 ****************************************************/

// Set debug mode
define("DEBUG_MODE", true);

// Set the default controller
define("DEFAULT_CONTROLLER", "home");

// Debug mode
if (DEBUG_MODE)
    ini_set("display_errors", "on");
else
    ini_set("display_errors", "off");

/****************************************************
 *                    Database                      *
 ****************************************************/

// Database Switch
define("DB", true);

// Database Details
define("DB_HOST", "");
define("DB_NAME", "");
define("DB_USERNAME", "");
define("DB_PASSWORD", "");
// If you create tables with lowercase and underscores, set this to true.
define("DB_TABLES_LOWERCASE", true);

define("PRINT_INSERT_QUERY", false);
define("PRINT_SELECT_QUERY", false);
/****************************************************
 *                    Autoloader                    *
 ****************************************************/

AutoLoader::$autoloadModels = array();

/****************************************************
 *                    Constants                     *
 ****************************************************/

define("TITLE", "App title");
define("BASEPATH", "local domain");
define("APPPATH", BASEPATH . "application");

// If you want EmmaPHP to be in charge of authenticating a user.
// This will be used within middleware
define("AUTH", true);

//DEFINE ANY CONSTANTS BELOW


<?php

// Basic Settings
// -----------------------------------------------------------------------
define('PROJECT_TITLE', get($_SERVER, 'SERVER_NAME'));

/* Automagically assign content fields for each item in the smarty {list} block. */
$config['frontend']['loadcontent'] = true;

// default directory
defined('DEFAULT_SELECTED_DIR') or define('DEFAULT_SELECTED_DIR', 'pictures/content');

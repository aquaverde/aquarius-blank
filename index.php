<?php
// Dispatcher code when .htaccess is not used


$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$normalized_admin_path = preg_replace("%^/(aquarius/)?admin($|/)%", "/aquarius/core/backend/", $path);
if ($normalized_admin_path !== $path) {
	header("Location: ".$normalized_admin_path, true, 301);
	die();
}

if (strpos($path, "/min/") === 0) {
	require "/aquarius/core/frontend/min.php";
	die();
}

$normalized_slir_path = preg_replace("%^/aquarius/slir/%", "/aquarius/core/components/slir/", $path);
if ($normalized_slir_path !== $path) {
	// This is easier than the alternatives, but slow
	header("Location: ".$normalized_admin_path, true, 302);
	die();
}

require "aquarius/core/frontend/index.php";


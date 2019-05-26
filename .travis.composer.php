<?php

$version = getenv('TRACY');
if (!$version) {
	exit;
}

echo "Tracy version $version" . PHP_EOL;

$file = __DIR__ . '/composer.json';
$content = file_get_contents($file);
$composer  = json_decode($content, TRUE);
if (!isset($composer['require']['tracy/tracy'])) {
	exit(255);
}
$composer['require']['tracy/tracy'] = $version;
$content = json_encode($composer);
file_put_contents($file, $content);

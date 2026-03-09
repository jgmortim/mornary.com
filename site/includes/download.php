<?php

$file = basename($_GET['file'] ?? '');
$path = "../binaries/" . $file;

if (!file_exists($path)) {
    http_response_code(404);
    exit("File not found: " . $file);
}

$countFile = "../binaries/download-counts.json";

$counts = json_decode(file_get_contents($countFile), true);

if (!isset($counts[$file])) {
    $counts[$file] = 0;
}

$counts[$file]++;

file_put_contents($countFile, json_encode($counts, JSON_PRETTY_PRINT));

header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="' . $file . '"');
header('Content-Length: ' . filesize($path));

readfile($path);
exit;
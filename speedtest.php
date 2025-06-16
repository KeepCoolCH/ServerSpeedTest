<?php
// speedtest.php - sendet Dummy-Daten (z. B. 500 MB) zur Messung der Verbindungsgeschwindigkeit vom Server zum Client
$size = 500 * 1024 * 1024; // 500 MB
header('Content-Type: application/octet-stream');
header("Content-Length: $size");
header('Cache-Control: no-cache');

// Output-Buffer deaktivieren
@ob_end_clean();
ini_set('output_buffering', 'off');
ini_set('zlib.output_compression', 'Off');
set_time_limit(0);

$chunk = str_repeat('A', 1024 * 64); // 64 KB-Block
$sent = 0;
while ($sent < $size) {
    echo $chunk;
    $sent += strlen($chunk);
    flush();
}
exit;
?>

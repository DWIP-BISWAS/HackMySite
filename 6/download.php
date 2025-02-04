<?php
$file = 'hidden_data.zip';

if (file_exists($file)) {
    header('Content-Type: application/zip');
    header('Content-Disposition: attachment; filename="' . basename($file) . '"');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
} else {
    echo "File not found!";
}
?>
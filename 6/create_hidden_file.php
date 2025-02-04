<?php
$secret_message = "Level 6 Password: skibidi";

// Create a ZIP archive
$zip = new ZipArchive();
$filename = "hidden_data.zip";

if ($zip->open($filename, ZipArchive::CREATE) !== TRUE) {
    exit("Could not create ZIP file.");
}

// Add a normal text file
$zip->addFromString("note.txt", "This is a normal note. Nothing suspicious here...");

// Hide the secret message inside ZIP comments
$zip->setArchiveComment(base64_encode($secret_message));

$zip->close();
echo "Hidden file created!";
?>
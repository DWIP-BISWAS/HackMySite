<?php
$img = 'download.png'; // Image file
$secret_message = "Hidden password: My_Donkey's_Ass"; // Secret text

// Embed secret message in the image metadata
$exif_data = exif_read_data($img);
$exif_data['UserComment'] = base64_encode($secret_message);

// Save new image with metadata
$new_img = 'hidden_image.jpg';
copy($img, $new_img);
$cmd = "exiftool -UserComment='{$exif_data['UserComment']}' {$new_img}";
exec($cmd);

echo "Steganography Image Created!";
?>
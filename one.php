<?php
header('Content-Type: image/jpeg');

// Set the font path
$font = "LHANDW.ttf"; // Ensure this file exists

// Load the certificate image
$image = imagecreatefromjpeg("certificate-of-recognition-template.jpg");

// Define text color (RGB: 19, 21, 22)
$color = imagecolorallocate($image, 19, 21, 22);

// Name to be printed
$name = "Khushi Vijay";

// Add text to image
imagettftext($image, 80, 0, 1000, 910, $color, $font, $name);

// Output image to browser
imagejpeg($image);

// Free memory
//imagedestroy($image);
?>
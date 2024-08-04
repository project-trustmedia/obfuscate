<?php
// Base64 encoded obfuscated code
$encoded = 'PD9waHAgZWNobyAiSGVsbG8sIFdvcmxkISI7ID8+';

// Decode the Base64 string
$decoded = base64_decode($encoded);

// Unpack the binary string to a hexadecimal string
$unpackedCode = unpack('H*', $decoded);

// Convert the hexadecimal string back to the original PHP code
$originalCode = hex2bin($unpackedCode[1]);

// Create a temporary file and write the code to it
$tempFile = tempnam(sys_get_temp_dir(), 'obf_') . '.php';
file_put_contents($tempFile, $originalCode);

// Include the temporary file to execute the original PHP code
include($tempFile);

// Delete the temporary file
unlink($tempFile);
?>

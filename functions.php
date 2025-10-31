<?php
function directoryFromName($name) {
    // Remove non-letter characters and make it lowercase
    return preg_replace('/[^A-Za-z]/', '', $name);
}

function urlFromName($name) {
    // Remove non-letter characters, make it lowercase, and append '.html'
    $baseName = preg_replace('/[^A-Za-z]/', '', $name);
    return $baseName . '.html';
}

function pp($data) {
    if (is_array($data) || is_object($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    } else {
        echo $data . "\n";
    }
}
?>
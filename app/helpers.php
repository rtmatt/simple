<?php

function mix($asset)
{
    $directory = __DIR__ . '/../public';
    $manifest  = file_get_contents($directory . '/mix-manifest.json');
    $manifest  = json_decode($manifest, true);
    if (strpos($asset, '/') !== 0) {
        $asset = "/" . $asset;
    }
    if (array_key_exists($asset, $manifest)) {
        return $manifest[$asset];
    }
    throw new \Exception('Asset not in manifest');

}
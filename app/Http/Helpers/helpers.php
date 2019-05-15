<?php

function filetime($file): string
{
    $filename = public_path() . $file;
    if (file_exists($filename)) {
        return $file . '?time=' . filemtime($filename);
    }
    return 'Error! File not found: ' . $file;
}

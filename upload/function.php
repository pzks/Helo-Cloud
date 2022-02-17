<?php
function zhuanhuan($byte)
{
    $KB = 1024;
    $MB = 1024 * $KB;
    $GB = 1024 * $MB;
    $TB = 1024 * $GB;
    if ($byte < $KB) {
        return $byte . "B";
    } elseif ($byte < $MB) {
        return round($byte / $KB, 2) . "KB";
    } elseif ($byte < $GB) {
        return round($byte / $MB, 2) . "MB";
    } elseif ($byte < $TB) {
        return round($byte / $GB, 2) . "GB";
    } else {
        return round($byte / $TB, 2) . "TB";
    }
}
?>
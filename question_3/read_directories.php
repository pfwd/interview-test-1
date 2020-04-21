<?php
function readDirectories($dir)
{
    $result = array();
    $current = scandir($dir);
    foreach ($current as $key => $value) {
        if (!in_array($value, array('.', '..'))) {
            if (is_dir($dir.DIRECTORY_SEPARATOR.$value)) {
                $result[$value] = readDirectories($dir.DIRECTORY_SEPARATOR.$value);
            } else {
                $result[] = $value;
            }
        }
    }

    return $result;
}
print '<pre>';
print_r(readDirectories('../../'));
print '</pre>';
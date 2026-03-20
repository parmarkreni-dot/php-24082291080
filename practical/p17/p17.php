<?php
echo "<h2>PHP File Handling & File System Functions Demo</h2>";


$file = "example.txt";


echo "<h3>1. Writing to File</h3>";
$handle = fopen($file, "w");   
if ($handle) {
    fwrite($handle, "Hello, this is a PHP file handling example.\n");
    fwrite($handle, "Learning file operations in PHP.\n");
    fclose($handle);
    echo "File written successfully.<br>";
} else {
    echo "Error opening file.<br>";
}


echo "<h3>2. Reading File</h3>";
$handle = fopen($file, "r");
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        echo $line . "<br>";
    }
    fclose($handle);
} else {
    echo "Error reading file.<br>";
}


echo "<h3>3. Checking File</h3>";
if (file_exists($file)) {
    echo "File exists.<br>";
    echo "File Size: " . filesize($file) . " bytes<br>";
} else {
    echo "File does not exist.<br>";
}


$newFile = "renamed_example.txt";
echo "<h3>4. Renaming File</h3>";
if (rename($file, $newFile)) {
    echo "File renamed to $newFile<br>";
} else {
    echo "File rename failed.<br>";
}


$dir = "testDir";

echo "<h3>5. Directory Operations</h3>";


if (!is_dir($dir)) {
    mkdir($dir);
    echo "Directory created.<br>";
}


echo "Files in current directory:<br>";
$files = scandir(".");
foreach ($files as $f) {
    echo $f . "<br>";
}


if (rmdir($dir)) {
    echo "Directory removed.<br>";
} else {
    echo "Directory not removed (may not be empty).<br>";
}


echo "<h3>6. Deleting File</h3>";
if (file_exists($newFile)) {
    if (unlink($newFile)) {
        echo "File deleted successfully.<br>";
    } else {
        echo "File deletion failed.<br>";
    }
} else {
    echo "File not found for deletion.<br>";
}

?>
<?php

$path ='././';
$files =scandir($path);
$files=array_diff(scandir($path), array('.','..'));

echo"<h2> List of files and Folder : </h2> ";

echo "<hr/>";

foreach ($files as $file) {
    if(is_dir($file)){
        echo "<b><a  href = '$file'$file ></a></b>";
    } else {
        echo "<a href='$file'> $file </a>";
    }

    echo "<br/>";
}

?>
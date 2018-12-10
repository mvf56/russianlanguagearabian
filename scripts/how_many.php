<?php
$dir = opendir($_SERVER['DOCUMENT_ROOT']."/".$_GET['PATH']);
$count = 0;
while($file = readdir($dir)){
    if($file == '.' || $file == '..' || is_dir($_SERVER['DOCUMENT_ROOT']."/".$_GET['PATH']."/".$file)){
        continue;
    }
    $count++;
}
echo $count;
?>
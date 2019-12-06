<?php
$path = $_GET['path'] ?: __DIR__;

$iterator = new DirectoryIterator($path);

while ($iterator->valid()){
    if ($iterator->current() == '.'){
        $iterator->next();
        continue;
    }elseif ($iterator->current() == '..'){
        $fileList .= "<li class='folder'><a href='index.php?path={$iterator->getPathname()}' >НА УРОВЕНЬ НАЗАД</a></li>";
    }elseif($iterator->isDir()){
        $fileList .= "<li class='folder'><a href='index.php?path={$iterator->getPathname()}' >{$iterator->getfilename()}</a></li>";
    }else{
        $fileList .= "<li class='file'>{$iterator->getfilename()}</li>";
    }

    $iterator->next();

}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .folder{
            list-style: url("folder.png");
        }
        .file{
            list-style: url("file.png");
        }
    </style>
</head>
<body>
<?=$fileList?>
</body>
</html>

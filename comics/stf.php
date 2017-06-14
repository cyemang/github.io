<span style="color:#FF9900"><span style="font-size:12ex;">MANGA LISTS</span></span>
<br>
<?php
    $DIR = "./";                    //一覧表示するディレクトリ
    function printfile($dir) {
        $opendir = opendir($dir);
        while($file = readdir($opendir)) {
            if($file === "." or $file === "..") {
                continue;
            }
            $file = $dir . "/" . $file;
            if(is_dir($file)) {
                printfile($file);
                continue;
            }
            if(preg_match("/\.s?rar$/", $file) and filesize($file) > 100) {
                $filename = preg_replace("/^[\.\/]+/", "", $file);
                echo "<a href=\"../#?url=manga/comics$file&screen.viewMode=OnePage&screen.pageDirection=R2L\" target=\"_blank\"><img src= $filename.jpg width=\"300\"></a>&thinsp;";
            }
            if(preg_match("/\.s?zip$/", $file) and filesize($file) > 100) {
                $filename = preg_replace("/^[\.\/]+/", "", $file);
                echo "<a href=\"../#?url=manga/comics$file&screen.viewMode=OnePage&screen.pageDirection=R2L\" target=\"_blank\"><img src= $filename.jpg width=\"300\"></a>&thinsp;";
            }
        }
        closedir($opendir);
    }
?>

<html>
<head>
<title>漫画一覧</title>
</head>
<body>
<?php
    printfile($DIR);                    //ファイル一覧表示
?>

</body>
</html>
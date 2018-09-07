<?php 
    echo $_SERVER['DOCUMENT_ROOT']."/ZCOOL";
    exec("cd ".$_SERVER["DOCUMENT_ROOT"]."/ZCOOL");
    exec("git init");
    exec("git add .");
    shell_exec('git commit -m \"inital\"');
    exec("git remote add origin https://github.com/youyueqian/ZCOOL.git");
    exec("git push -u origin master");
?>
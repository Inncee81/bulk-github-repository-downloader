<?php 
// github.com/pajaar
// list must be contains https:// or http://

$list = "list.txt";
$lol = explode("\r\n",file_get_contents($list));

foreach($lol as $res){
$tot = parse_url($res,  PHP_URL_PATH);
$name = explode("/",$res);

// save file
$target = file_get_contents($res."/archive/master.zip");
file_put_contents($name[3]."-".$name[4].".zip", $target);
}
?>

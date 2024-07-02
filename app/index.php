<?php
$redis = new Redis();
$redis->connect(getenv('REDIS_HOST'), 6379);
$count = $redis->incr('hits');

$ora = "";
$endora = "オラァ！！！";

$muda = "";
$endmuda = "無駄ァ！！！";
for ($i = 1; $i < $count; $i++){
	$ora .=  "オラ";
	$muda .= "無駄";
}
echo $ora . $endora."<br/>".$muda . $endmuda;
?>


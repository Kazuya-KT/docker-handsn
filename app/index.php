<?php
$redis = new Redis();
$redis->connect(getenv('REDIS_HOST'), 6379);
$count = $redis->incr('hits');

echo "Hello from Docker! I have been seen $count times.";
?>


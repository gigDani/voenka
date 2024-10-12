<?php
$token = 'AQAAAAAmK1q7AAcSIduV6xA0lUOdoJbuTSZNBd4';
 
$params = array(
	'ids'     => '74740837', 
	'metrics' => 'ym:s:visits,ym:s:pageviews,ym:s:users,ym:s:bounceRate,ym:s:pageDepth,ym:s:avgVisitDurationSeconds',
	'date1'   => 'today', // 7daysAgo - неделя, 30daysAgo - месяц, 365daysAgo - год
	'date2'   => 'today',
);
 
$ch = curl_init('https://api-metrika.yandex.net/stat/v1/data/bytime?' . urldecode(http_build_query($params)));
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: OAuth ' . $token));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HEADER, false);
$res = curl_exec($ch);
curl_close($ch);
 
$res = json_decode($res, true);	
print_r($res);
 ?>
<!--Визиты	-->
<p>Визиты: <?php echo $res['totals'][0][0];  ?></p>

<!-- Просмотры	-->
<p>Просмотры: <?php echo $res['totals'][0][1];?></p>
 
<!--Посетители	-->
<p>Посетители: <?php echo $res['totals'][0][2];?>
 
<!-- Отказы, % -->
<p>Отказы,(%): <?php echo $res['totals'][0][3];?>
 
<!--Глубина просмотра -->	
<p>Глубина просмотра: <?php echo $res['totals'][0][4];?>
 
<!-- Время на сайте, сек. -->
<p>Время на сайте, (сек): <?php echo $res['totals'][0][5];?>
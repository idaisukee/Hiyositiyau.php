<?php
require 'vendor/autoload.php';

use Carbon\Carbon;
$n = Carbon::now();
// $n = Carbon::now(new DateTimeZone('Asia/Tokyo'));
// $n = Carbon::now(new DateTimeZone('Europe/Paris'));
print_r($n);
$n->tz = new DateTimeZone('Europe/Paris');
// print_r($n);
// $s = Carbon::create(1792, 9, 22, 0, 0, 0, 'Europe/Paris');
$s = Carbon::create(1792, 9, 22, 8, 0, 0, 'Asia/Tokyo');
print_r($s);
$d = $n->diffInSeconds($s);
$dm = $n->diffInMinutes($s);
$df = $n->diff($s);
// $dd = $dm / (60*24);
print_r($df);
$dd = $d / ( 60.0 * 60.0 * 24.0 );
// print_r($d);
print_r($dd);

	 